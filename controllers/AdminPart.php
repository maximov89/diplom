<?php


/**
 * AdminPart
 */
class AdminPart
{
  private $pdo;
  private $twig;
  private $twigData;
  private $questions;
  private $answers;
  private $categories;
  private $users;
  private $perPage;
  private $userPart;

  /**
   * __construct
   * @param object pdo
   * @param object twig
   * @param int perPage
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
    $this->userPart = new UserPart($this->pdo, $this->twig, $this->perPage);
  }

  /**
   * theAuthForm()
   * @param array post
   * @return array
   * @access public
   */
  public function theAuthForm()
  {
    $post = $_POST;

    if (isset($post['auth'])) {

      $filter = function($post)
      {
        return trim(strip_tags($post));
      };
      $mapData = array_map($filter, $post);

      $userData = isset($this->users->getUser(null, $mapData['name'])[0]) ? $this->users->getUser(null, $mapData['name'])[0] : null;
      
      if (!empty($mapData['name']) && !empty($mapData['password'])) {
        if ($userData['name'] === $mapData['name'] && $userData['password'] === md5($mapData['password'])) {
          $_SESSION['auth'] = $userData['id'];
          header('Location: /admin/');
        } else {
          $this->twigData['error'] = 'Имя пользователя или пароль не найдены.';
        }
      } else {
        $this->twigData['error'] = 'Имя пользователя или пароль не могут быть пустыми.';
      }
      $this->twigData['name'] = $mapData['name'];
    }


    return $this->twig->loadTemplate('admin/authForm.twig');
  }

  /**
   * logoutForm()
   * @param array get
   * @return void
   * @access public
   */
  public function logoutForm()
  {
    $get = $_GET;

    if (isset($get['action'])) {
      if ($get['action'] === 'logout') {
        unset($_SESSION['auth']);
        header('Location: /admin/');
      }
    }
  }

  /**
   * getDashboard()
   * @param array post
   * @param array uri
   * @return array
   * @access public
   */
  public function getDashboard($uri)
  {
    $post = $_POST;

    // Быстрое удаление вопроса
    if (isset($post['remove'])) {
      $this->questions->rmQuestion($post['remove']);
    }

    /**
     * $uri[1] - domain.com/admin/ - главная страница
     * $uri[2] - domain.com/admin/word/ - главная страница/раздел админки
     * $uri[3] - domain.com/admin/word/n/ - главная страница/раздел админки/страница пагинатора
     * $uri[4] - domain.com/admin/word/word/n/ - главная страница/раздел админки/редактирование вопроса/id вопроса
     */

    // Сортировка по умолчанию
    $status = 'pending'; # pending/hidden/published
    $hasAnswer = 0; # 0/1
    $categoryID = null;
    $offset = 0;
    $order = 'DESC'; # ASC/DESC
    $orderBy = 'date'; # date/status

    $this->twigData['questions'] = $this->questions->getQuestions($status, $hasAnswer, $categoryID, $offset, $order, $orderBy);

    $this->twigData['stats'] = $this->questions->getQuestionsCount(null)[0];

    // Формируем акттивный пункт админки
    $this->twigData['nav'] = isset($uri[1]) ? $uri[1] : null;

    // Если существует сессия
    if(isset($_SESSION['auth'])) {
      $this->twigData['userName'] = $this->users->getUser($_SESSION['auth'], null)[0]['name'];
      // Генерация шаблона
      // Выводим 5 последних вопросов на которых нет ответа
      $template = $this->twig->loadTemplate('admin/dashboard.twig');
      $this->logoutForm();
    } else {
      $template = $this->theAuthForm();
    }

    return $template->display($this->twigData);
  }

  /**
   * editQuestions()
   * @param array post
   * @param array get
   * @param array uri
   * @return array
   * @access public
   */
  public function editQuestions($uri)
  {
    $get = $_GET;
    $post = $_POST;

    // Быстрое удаление вопроса
    if (isset($post['remove'])) {
      $this->questions->rmQuestion($post['remove']);
    }

    /**
     * $uri[1] - domain.com/admin/ - главная страница
     * $uri[2] - domain.com/admin/word/ - главная страница/раздел админки
     * $uri[3] - domain.com/admin/word/n/ - главная страница/раздел админки/страница пагинатора
     * $uri[4] - domain.com/admin/word/word/n/ - главная страница/раздел админки/редактирование вопроса/id вопроса
     */

    // Сортировка по умолчанию
    $status = null; # pending/hidden/published
    $hasAnswer = null; # 0/1
    $categoryID = null;
    $offset = 0;
    $order = 'DESC'; # ASC/DESC
    $orderBy = 'date'; # date/status
    $full = true; # если включено, тогда или статус, или наличие ответа, или категория

    // Пользовательская сортировка
    if (isset($get['orderBy'])) {

      // По категориям
      $categorySep = explode('-', $get['orderBy']);
      if (isset($categorySep[0])) {
        if ($categorySep[0] === 'category') {
          $categoryID = $categorySep[1];
        }
      }

      // Нет ответа/есть ответ
      if ($get['orderBy'] === 'has_answer0') {
        $hasAnswer = 0;
      } else if ($get['orderBy'] === 'has_answer1') {
        $hasAnswer = 1;
      }

      // Статус
      if ($get['orderBy'] === 'pending') {
        $status = 'pending';
      } else if ($get['orderBy'] === 'published') {
        $status = 'published';
      } else if ($get['orderBy'] === 'hidden') {
        $status = 'hidden';
      }
    }

    // Сортировка по ASC или DESC
    if(isset($get['order'])) {
      if ($get['order'] === 'DESC') {
        $order = 'DESC';
        $this->twigData['order'] = 'ASC';
      } else {
        $order = 'ASC';
        $this->twigData['order'] = 'DESC';
      }
    } else {
      $this->twigData['order'] = 'ASC';
    }

    // Настройка оффсета
    if(isset($uri[3])) {
      if(is_numeric($uri[3])) {
        $offset = (int)$uri[3] * $this->perPage - $this->perPage;
      }
    }

    // Номер страницы для фильтра
    $this->twigData['page'] = (int)$uri[3];

    // Активные пункты сортировки
    $this->twigData['activeStatus'] = $status;
    $this->twigData['activeHasAnswer'] = $hasAnswer;
    $this->twigData['activeCategory'] = $categoryID;

    $this->twigData['questions'] = $this->questions->getQuestions($status, $hasAnswer, $categoryID, $offset, $order, $orderBy, $full);
    $this->twigData['categories'] = $this->categories->getCategories();

    // Формируем акттивный пункт админки
    $this->twigData['nav'] = isset($uri[2]) ? $uri[2] : null;

    // Пагинация
    $this->twigData['pagination'] = $this->userPart->thePaginate($uri);

    // Если существует сессия
    if(isset($_SESSION['auth'])) {
      $this->twigData['userName'] = $this->users->getUser($_SESSION['auth'], null)[0]['name'];
      // Генерация шаблона
      $template = $this->twig->loadTemplate('admin/questions.twig');
      $this->logoutForm();
    } else {
      $template = $this->theAuthForm();
    }

    return $template->display($this->twigData);
  }

  /**
   * editQuestion()
   * @param array post 
   * @param array uri 
   * @return array
   * @access public
   */
  public function editQuestion($uri)
  {
    $post = $_POST;

    // Удаление вопроса
    if (isset($post['remove'])) {
      $this->questions->rmQuestion($uri[4]);
      header('Location: /admin/questions/');
    }

    // Если в post отправлен save, чистим от тегов и пробелов, отправляем
    // Если в post отправлен remove-save - удаляем ответ, но сохраняем все остальные изменения
    if (isset($post['save']) || isset($post['remove-save'])) {
      $filter = function($post)
      {
        return trim(strip_tags($post));
      };
      $mapData = array_map($filter, $post);

      $hasAnswer = 0; # Всегда равен нулю

      // Если нажата кнопка удаления вопроса
      if (isset($post['remove-save'])) {
        $this->answers->rmAnswer($uri[4]);
      } else {
        // Если существует ответ
        if(!empty($mapData['answer-content'])) {
          $hasAnswer = 1; # Равен единице, если в поле ответа что-то есть
          // Если получен id ответа, тогда обновляем
          if(isset($this->answers->getAnswer($uri[4])[0])) {
            $this->answers->updAnswer($uri[4], $mapData['answer-content'], $_SESSION['auth']);
          } else {
          // Если нет, добавляем
            $this->answers->addAnswer($uri[4], $mapData['answer-content'], $_SESSION['auth']);
          }
        } else {
          // Удаляем вопрос, если отправлено чистое поле ответа
          $this->answers->rmAnswer($uri[4]);
        }
      }

      // Обновление информации о пользователе
      $this->users->updUser(null, $uri[4], $mapData['name'], null, $mapData['email'], null);

      $this->questions->updQuestion($uri[4], $mapData['title'], $mapData['question-content'], $mapData['status'], $hasAnswer, $mapData['category']);
    }

    $this->twigData['question'] = isset($this->questions->getQuestion($uri[4])[0]) ? $this->questions->getQuestion($uri[4])[0] : null;
    $this->twigData['categories'] = $this->categories->getCategories();
    $this->twigData['answer'] = isset($this->answers->getAnswer($uri[4])[0]) ? $this->answers->getAnswer($uri[4])[0] : null;

    // Формируем акттивный пункт админки
    $this->twigData['nav'] = isset($uri[2]) ? $uri[2] : null;


    // Если существует сессия
    if(isset($_SESSION['auth'])) {
      $this->twigData['userName'] = $this->users->getUser($_SESSION['auth'], null)[0]['name'];
      // Генерация шаблона
      $template = $this->twig->loadTemplate('admin/question.twig');
      $this->logoutForm();
    } else {
      $template = $this->theAuthForm();
    }

    return $template->display($this->twigData);
  }

  /**
   * editCategories
   * @param array post
   * @param array uri
   * @return array
   * @access public
   */
  public function editCategories($uri)
  {
    $post = $_POST;

    // Удаление категорий
    if (isset($post['remove'])) {
      $this->categories->rmCategory($post['remove']);
    }

    // Очистка от возможных пробелов и лишних символов
    $filter = function($post)
    {
      return trim(strip_tags($post));
    };
    $mapData = array_map($filter, $post);

    // Добавление категории
    if (isset($post['add'])) {
      $this->categories->addCategory($mapData['name']);
    }

    // Обновление категории
    if (isset($post['save'])) {
      if (!empty($mapData['name'])) {
        $this->categories->updCategory($post['save'], $mapData['name']);
      }
    }

    // Получаем категории
    $this->twigData['categories'] = $this->categories->getCategories();

    // Формируем акттивный пункт админки
    $this->twigData['nav'] = isset($uri[2]) ? $uri[2] : null;

    // Если существует сессия
    if(isset($_SESSION['auth'])) {
      $this->twigData['userName'] = $this->users->getUser($_SESSION['auth'], null)[0]['name'];
      // Генерация шаблона
      $template = $this->twig->loadTemplate('admin/categories.twig');
      $this->logoutForm();
    } else {
      $template = $this->theAuthForm();
    }

    return $template->display($this->twigData);
  }

  /**
   * editUsers ()
   * @param array post 
   * @param array uri
   * @return array
   * @access public
   */
  public function editUsers($uri)
  {
    $post = $_POST;

    // Удаление пользователей
    if (isset($post['remove'])) {
      $this->users->rmUser($post['remove']);
    }

    // Очистка от возможных пробелов и лишних символов
    $filter = function($post)
    {
      return trim(strip_tags($post));
    };
    $mapData = array_map($filter, $post);

    // Добавление пользователя
    if (isset($post['add'])) {
      if (!empty($mapData['name'] && $mapData['password'] && $mapData['email'])) {
        $this->users->addUser($mapData['name'], md5($mapData['password']), $mapData['email'], 'admin');
      }
    }

    // Обновление пользователя
    if (isset($post['save'])) {
      if (!empty($mapData['name'] && $mapData['password'] && $mapData['email'])) {
        $pass = null;
        $getPass = null;

        // Чтобы избежать двойного хеша проверим, был ли изменен пароль
        $getPass = $this->users->getUser($post['save'], null)[0]['password'];

        // Если полученный пароль изменен - хешируем
        if($getPass !== $mapData['password']) {
          $pass = md5($mapData['password']);
        } else {
          // В противном случае нет
          $pass = $mapData['password'];
        }

        $this->users->updUser($post['save'], null, $mapData['name'], $pass, $mapData['email'], null);
      }
    }

    // Получаем пользователей
    $this->twigData['users'] = $this->users->getUsers();

    // Формируем акттивный пункт админки
    $this->twigData['nav'] = isset($uri[2]) ? $uri[2] : null;

    // Если существует сессия
    if(isset($_SESSION['auth'])) {
      $this->twigData['userName'] = $this->users->getUser($_SESSION['auth'], null)[0]['name'];
      // Генерация шаблона
      $template = $template = $this->twig->loadTemplate('admin/users.twig');
      $this->logoutForm();
    } else {
      $template = $this->theAuthForm();
    }

    return $template->display($this->twigData);
  }
}
