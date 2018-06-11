<?php


/**
 * UserPart
 */
class UserPart
{
  private $pdo;
  private $twig;
  private $twigData;
  private $questions;
  private $categories;
  private $users;
  private $perPage;

  /**
   * __counstruct()
   * @param object pdo
   * @param object twig
   * @return void
   * @access public
   */
  public function __construct($pdo, $twig, $perPage)
  {
    $this->pdo = $pdo;
    $this->twig = $twig;
    $this->perPage = $perPage;
    $this->questions = new Questions($this->pdo, $this->perPage);
    $this->answers = new Answers($this->pdo);
    $this->users = new Users($this->pdo);
    $this->categories = new Categories($this->pdo);
  }

  /**
   * theQuestions
   * @param array $uri
   * @return array
   * @access public
   */
  public function theQuestions($uri)
  {

    /**
     * $uri[1] - domain.com/category/ - главная/категорипя (не работает без id)
     * $uri[2] - domain.com/category/n/ - главная/категория/id категории
     * $uri[3] - domain.com/category/n/n/ - главная/категория/id категории/страница пагинатора
     * $uri[1] - domain.com/n/ - страница пагинатора (для главной)
     */

    // Сортировка по умолчанию
    $status = 'published'; # pending/hidden/published
    $hasAnswer = 1; # 0/1
    $categoryID = null;
    $offset = 0;
    $order = 'DESC'; # ASC/DESC
    $orderBy = 'date'; # date/status

    if (isset($uri[1])) {
      // Если выбран category
      if ($uri[1] === 'category') {
        $categoryID = isset($uri[2]) ? $uri[2] : null;

        // Получаем категорию раздела
        $this->twigData['categoryMain'] = isset($this->categories->getCategory($categoryID)[0]) ? $this->categories->getCategory($categoryID)[0] : null;

        // Формируем offet для рубрик
        if (isset($uri[3])) {
          if (is_numeric($uri[3])) {
            $offset = (int)$uri[3] * $this->perPage - $this->perPage;
          }
        }
      } else {
        // Формируем offet для главной страницы
        if (isset($uri[1])) {
          if (is_numeric($uri[1])) {
            $offset = (int)$uri[1] * $this->perPage - $this->perPage;
          }
        }
      }
    }

    // Формируем пагинацию
    $this->twigData['pagination'] = $this->thePaginate($uri);

    // Получаем список вопросов
    $this->twigData['questions'] = $this->questions->getQuestions($status, $hasAnswer, $categoryID, $offset, $order, $orderBy);

    // Получаем список категорий для правой колонки
    $this->theCategories();

    // Генерация шаблона
    $this->twigData['stats'] = $this->questions->getQuestionsCount(null)[0];
    $template = $this->twig->loadTemplate('user/archive.twig');
    return $template->display($this->twigData);
  }

  /**
   * theQuestion
   * @param array uri
   * @return array
   * @access public
   */
  public function theQuestion($uri)
  {
    $questionID = $uri[2];

    // Получаем вопрос с ответом по ID вопроса
    $this->twigData['question'] = isset($this->questions->getQuestion($questionID)[0]) ? $this->questions->getQuestion($questionID)[0] : null;
    $this->twigData['answer'] = isset($this->answers->getAnswer($questionID)[0]) ? $this->answers->getAnswer($questionID)[0] : null;

    // Получаем список категорий для правой колонки
    $this->theCategories();

    // Генерация шаблона
    $this->twigData['stats'] = $this->questions->getQuestionsCount(null)[0];
    $template = $this->twig->loadTemplate('user/single.twig');
    return $template->display($this->twigData);
  }

  /**
   * theFAQForm()
   * @param array get
   * @param array post
   * @return array
   * @access public
   */
  public function theFAQForm()
  {
    $get = $_GET;
    $post = $_POST;

    $fillController = [];
    $fieldData = [];
    $category = null;
    $email = null;

    foreach ($post as $fieldName => $fieldValue) {
      // Запоминаем пустые поля для вывода в ошибку
      if (empty(trim(strip_tags($fieldValue)))) {
        $fillController[] = $fieldName;
      }
      // Запоминаем все поля для вывода значений
      $fieldData[$fieldName] = htmlspecialchars(trim(strip_tags($fieldValue)));
    }

    // Перевод значений на русский
    $data = ['name', 'email', 'title', 'text'];
    $dataRU = ['Имя','Email', 'Заголовок', 'Текст вопроса'];

    // Выводим поля с ошибкой
    $this->twigData['errorFields'] = str_replace($data, $dataRU, $fillController);

    // Выводим значения полей
    $this->twigData['fieldData'] = $fieldData;

    // Если поле Email существует и в него что-то введено
    if (isset($fieldData['email'])) {
      $email = filter_var($fieldData['email'], FILTER_VALIDATE_EMAIL);

      // Если валидация Email не прошла - выводим ошибку
      if (empty($email)) {
        $this->twigData['errorEmail'] = true;
      }
    }

    // Получаем список категорий для правой колонки
    $this->theCategories();

    // Если category = default
    if (isset($fieldData['category'])) {
      if ($fieldData['category'] === 'default') {
        $this->twigData['errorCategory'] = true;
      } else {
        $category = true;
      }
    }

    // Если ошибок 0, валидация Email прошла успешно, категория устновлена - отправляем данные в базу
    if (empty(count($fillController)) && !empty($email) && isset($category)) {
      // Фильтруем пробелы и теги
      $filter = function($post)
      {
        return trim(strip_tags($post));
      };
      $mapData = array_map($filter, $post);

      // Создаем гостя
      $this->users->addUser(mb_substr($mapData['name'], 0, 25, 'UTF-8'), null, $mapData['email'], null);

      // Создаем вопрос
      $this->questions->addQuestion(mb_substr($mapData['title'], 0, 255, 'UTF-8'), mb_substr($mapData['text'], 0, 500, 'UTF-8'), null, $mapData['category']);

      header('Location: ?action=success');
    }

    // Выводим сообщение об успешной отправке
    $get = filter_input(INPUT_GET, 'action');
    if ($get === 'success') {
      $this->twigData['succes'] = true;
    }

    // Генерация шаблона
    $this->twigData['stats'] = $this->questions->getQuestionsCount(null)[0];
    $template = $this->twig->loadTemplate('user/faqForm.twig');
    return $template->display($this->twigData);
  }

  /**
   * theCategories()
   * @return array
   * @access public
   */
  public function theCategories()
  {
    $this->twigData['categories'] = $this->categories->getCategories();
  }

  /**
   * thePaginate()
   * @param array uri
   * @return array
   * @access public
   */
  public function thePaginate($uri)
  {
    if (isset($uri[1])) {
      $pathGet = null;

      // Если uri является строкой category - показываем кол-во записей в категории
      if ($uri[1] === 'category') {
        $qCount = $this->questions->getQuestionsCount($uri[2])[0]['qPublic'];

        // Формируем path где $uri[1] = category а $uri[2] = id категории
        $path = '/' . (string)$uri[1] . '/' . (int)$uri[2] . '/';

        // Передаем активную страницу в пагинатор
        $activePage = isset($uri[3]) ? (int)$uri[3] : null;
      } else if ($uri[1] === 'admin') {
        // Для админки
        if (isset($uri[2])) {
          if ($uri[2] === 'questions') {
            $path = '/' . (string)$uri[1] . '/' . (string)$uri[2] . '/';
            $activePage = isset($uri[3]) ? (int)$uri[3] : null;
          }
        }
        // Пагинация для сортировок
        if(isset($_GET['orderBy'])) {
          $sep = explode('-', $_GET['orderBy']);
          if (isset($sep[0])) {
            if ($sep[0] === 'category') {
              $categoryID = $sep[1];
              $qCount = $this->questions->getQuestionsCount($categoryID)[0]['qFull'];
            } else if ($sep[0] === 'date') {
              $qCount = $this->questions->getQuestionsCount(null)[0]['qFull'];
            } else if ($sep[0] === 'has_answer1') {
              $qCount = $this->questions->getQuestionsCount(null)[0]['qHasAnswer'];
            } else if ($sep[0] === 'has_answer0') {
              $qCount = $this->questions->getQuestionsCount(null)[0]['qNoAnswer'];
            } else if ($sep[0] === 'pending') {
              $qCount = $this->questions->getQuestionsCount(null)[0]['qPending'];
            } else if ($sep[0] === 'published') {
              $qCount = $this->questions->getQuestionsCount(null)[0]['qPublic'];
            } else if ($sep[0] === 'hidden') {
              $qCount = $this->questions->getQuestionsCount(null)[0]['qHidden'];
            }
            // Сохраняем GET запрос за номерами страниц
            if(is_numeric($uri[3])) {
              $pathGet = $uri[4];
            } else {
              $pathGet = $uri[3];
            }
          }
        } else {
          $qCount = $this->questions->getQuestionsCount(null)[0]['qFull'];
        }
      } else {
      // Иначе показываем кол-во всех записей
        $qCount = $this->questions->getQuestionsCount(null)[0]['qPublic'];
        
        // Передаем активную страницу в пагинатор
        $activePage = (int)$uri[1];

        $path = '/';
      }
    }

    // Делим кол-во всех записей на кол-во записей на страницу
    $page = null;
    $page = ceil($qCount / $this->perPage);    

    // Для навигации по страницам влево/вправо активная страница не может быть нулем
    if (empty($activePage)) {
      $pageNumber = 1;
    } else {
      $pageNumber = $activePage;
    }

    ob_start();

    // Если активная страница не равна нулю, но ее номер при этом = 1 перемотку влево показывать не нужно
    if (!empty($activePage) && $pageNumber !== 1) {
      echo '<li><a aria-label="Предыдущая" href="' . $path . ($pageNumber - 1) . '/' . $pathGet . '"><span aria-hidden="true">&laquo;</span></a><li>';
    }

    for($i = 1; $i <= $page; $i++) {
      // Если активная страница найдена в цикле - удаляем ссылку на нее
      // Если активная страница не задана, а счетчик цикла равен 1 - на 1ю страницу ссылаться не нужно
      if ($activePage === $i || empty($activePage) && $i === 1) {
        echo '<li class="disabled"><a href="#">' . $i . '</a></li>';
      } else {
        echo '<li><a href="' . $path . $i . '/' . $pathGet . '">' . $i . '</a><li>';
      }
    }

    // Если номер страницы больше количества страницы, перемотку вправо показывать не нужно
    if ($pageNumber < ($i -1)) {
      echo '<li><a aria-label="Следующая" href="' . $path . ($pageNumber + 1) . '/' . $pathGet . '"><span aria-hidden="true">&raquo;</span></a><li>';
    }

    return ob_get_clean();
  }

}
