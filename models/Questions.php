<?php

/**
 * Questions
 */
class Questions
{

  private $pdo;
  private $ID;
  private $title;
  private $content;
  private $status;
  private $userID;
  private $categoryID;
  private $offset;
  private $order;
  private $orderBy;
  private $perPage;

  public function __construct($pdo, $perPage)
  {
    $this->pdo = $pdo;
    $this->perPage = $perPage;
  }

  /**
   * getQuestions()
   * @param string status
   * @param boolean hasAnswer 
   * @param int categoryID 
   * @param int offset 
   * @param string order 
   * @param string orderBy 
   * @param boolean full 
   * @return object
   * @access public
   */
  public function getQuestions($status, $hasAnswer, $categoryID, $offset, $order, $orderBy, $full = null)
  {
    $commonBefore = "
      SELECT
      questions.id,
      questions.title,
      questions.content,
      questions.date,
      questions.status,
      questions.has_answer,
      categories.id as category_id,
      categories.name as category_name,
      users.name as user_name
      FROM questions
      LEFT JOIN answers ON answers.question_id = questions.id
      LEFT JOIN categories ON categories.id = questions.category_id
      LEFT JOIN users ON users.id = questions.user_id";
    $commonAfter = "
      ORDER BY $orderBy $order
      LIMIT $this->perPage OFFSET $offset";

    if (isset($full)) {
      if (isset($status)) {
        $sql = $this->pdo->prepare("
          $commonBefore
          WHERE questions.status = :status
          $commonAfter
        ");
        $sql->bindValue(':status', $status, PDO::PARAM_STR);
      } else if (isset($categoryID)) {
        $sql = $this->pdo->prepare("
          $commonBefore
          WHERE categories.id = :categoryID
          $commonAfter
        ");
        $sql->bindValue(':categoryID', $categoryID, PDO::PARAM_INT);
      } else if (isset($hasAnswer)) {
        $sql = $this->pdo->prepare("
          $commonBefore
          WHERE questions.has_answer = :hasAnswer
          $commonAfter
        ");
        $sql->bindValue(':hasAnswer', $hasAnswer, PDO::PARAM_INT);
      } else {
        $sql = $this->pdo->prepare("
          $commonBefore
          $commonAfter
        ");
      }
    } else {
      if (isset($categoryID)) {
        $sql = $this->pdo->prepare("
          $commonBefore
          WHERE categories.id = :categoryID
          AND questions.status = :status
          AND questions.has_answer = :hasAnswer
          $commonAfter
          ");

        $sql->bindValue(':categoryID', $categoryID, PDO::PARAM_INT);
        $sql->bindValue(':status', $status, PDO::PARAM_STR);
        $sql->bindValue(':hasAnswer', $hasAnswer, PDO::PARAM_INT);
      } else {
        $sql = $this->pdo->prepare("
          $commonBefore
          WHERE questions.status = :status
          AND questions.has_answer = :hasAnswer
          $commonAfter
          ");
        $sql->bindValue(':status', $status, PDO::PARAM_STR);
        $sql->bindValue(':hasAnswer', $hasAnswer, PDO::PARAM_INT);
      }
    }

    $sql->execute();

    return $sql->fetchAll();
  }

  /**
   * getQuestion()
   * @param int ID 
   * @return object
   * @access public
   */
  public function getQuestion($ID)
  {
    $sql = $this->pdo->prepare("
      SELECT
      questions.id,
      questions.title,
      questions.content,
      questions.date,
      questions.status,
      questions.has_answer,
      categories.id as category_id,
      categories.name as category_name,
      users.name as user_name,
      users.email as user_email
      FROM questions
      JOIN categories ON categories.id = questions.category_id
      JOIN users ON users.id = questions.user_id
      WHERE questions.id = :ID
      ");

    $sql->bindValue(':ID', $ID, PDO::PARAM_INT);

    $sql->execute();

    return $sql->fetchAll();
  }

  /**
   * getQuestionsCount()
   * @param int categoryID
   * @return object
   * @access public
   */
  public function getQuestionsCount($categoryID)
  {
    $common = "
      SELECT
      COUNT(questions.id) AS qFull,
      COUNT(CASE WHEN questions.status = 'pending' THEN 1 END) AS qPending,
      COUNT(CASE WHEN questions.status = 'published' THEN 1 END) AS qPublic,
      COUNT(CASE WHEN questions.status = 'hidden' THEN 1 END) AS qHidden,
      COUNT(CASE WHEN questions.has_answer = 1 THEN 1 END) AS qHasAnswer,
      COUNT(CASE WHEN questions.has_answer = 0 THEN 1 END) AS qNoAnswer
      FROM questions
    ";
    if (isset($categoryID)) {
      $sql = $this->pdo->prepare("
        $common
        WHERE questions.category_id = :categoryID
        ");
      $sql->bindValue(':categoryID', $categoryID, PDO::PARAM_INT);
    } else {
      $sql = $this->pdo->prepare("$common");
    }

    $sql->execute();

    return $sql->fetchAll();
  }

  /**
   * addQuestion()
   * @param string title
   * @param string content
   * @param int userID
   * @param int categoryID
   * @return void
   * @access public
   */
  public function addQuestion($title, $content, $userID, $categoryID)
  {
    if (is_null($userID)) {
      $sql = $this->pdo->prepare("
        INSERT INTO questions (title, content, date, category_id, user_id)
        VALUES (:title, :content, NOW(), :categoryID, LAST_INSERT_ID())
        ");
    } else {
      $sql = $this->pdo->prepare("
        INSERT INTO questions (title, content, date, category_id, user_id)
        VALUES (:title, :content, NOW(), :categoryID, :userID)
        ");

      $sql->bindValue(':userID', $userID, PDO::PARAM_INT);
    }

    $sql->bindValue(':title', $title, PDO::PARAM_STR);
    $sql->bindValue(':content', $content, PDO::PARAM_STR);
    $sql->bindValue(':categoryID', $categoryID, PDO::PARAM_INT);

    return $sql->execute();
  }

  /**
   * updQuestion()
   * @param int ID 
   * @param string title 
   * @param string content 
   * @param string status 
   * @param boolean hasAnswer
   * @param string categoryID 
   * @return void
   * @access public
   */
  public function updQuestion($ID, $title, $content, $status, $hasAnswer, $categoryID)
  {
    $sql = $this->pdo->prepare("
      UPDATE questions SET
      title = :title,
      content = :content,
      status = :status,
      has_answer = :hasAnswer,
      category_id = :categoryID
      WHERE id = :ID
      ");

    $sql->bindValue(':ID', $ID, PDO::PARAM_INT);
    $sql->bindValue(':title', $title, PDO::PARAM_STR);
    $sql->bindValue(':content', $content, PDO::PARAM_STR);
    $sql->bindValue(':status', $status, PDO::PARAM_STR);
    $sql->bindValue(':hasAnswer', $hasAnswer, PDO::PARAM_INT);
    $sql->bindValue(':categoryID', $categoryID, PDO::PARAM_INT);

    return $sql->execute();
  }

  public function rmQuestion($ID)
  {
    $sql = $this->pdo->prepare("
      SET FOREIGN_KEY_CHECKS=0;
      DELETE FROM users WHERE id = (SELECT questions.user_id FROM questions WHERE questions.id = :ID);
      DELETE FROM questions WHERE id = :ID;
      DELETE FROM answers WHERE question_id = :ID AND role != 'admin';
      SET FOREIGN_KEY_CHECKS=1
     ");

    $sql->bindValue(':ID', $ID, PDO::PARAM_INT);

    return $sql->execute();
  }

}