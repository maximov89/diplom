<?php

/**
 * Answers
 */
class Answers
{
  private $pdo;
  private $ID;
  private $content;
  private $userID;
  private $questionID;

  /**
   * __construct
   * @param object pdo 
   * @return void
   * @access public
   */
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  /**
   * getAnswer()
   * @param int ID 
   * @return object
   * @access public
   */
  public function getAnswer($ID)
  {
    $sql = $this->pdo->prepare("
      SELECT
      answers.id,
      answers.content,
      answers.date,
      users.name
      FROM answers
      JOIN users ON users.id = answers.user_id
      JOIN questions ON questions.id = answers.question_id
      WHERE questions.id = :ID
      ");

  $sql->bindValue(':ID', $ID, PDO::PARAM_INT);
  $sql->execute();

  return $sql->fetchAll();
}

  /**
   * addAnswer()
   * @param int questionID 
   * @param string content 
   * @param int userID
   * @return void
   * @access public
   */
  public function addAnswer($questionID, $content, $userID)
  {
    $sql = $this->pdo->prepare("
      INSERT INTO answers (content, date, question_id, user_id)
      VALUES (:content, NOW(), :questionID, :userID)
      ");

    $sql->bindValue(':questionID', $questionID, PDO::PARAM_INT);
    $sql->bindValue(':userID', $userID, PDO::PARAM_INT);
    $sql->bindValue(':content', $content, PDO::PARAM_STR);

    return $sql->execute();
  }

  /**
   * updAnswer()
   * @param int questionID 
   * @param string content 
   * @param int UserID
   * @return void
   * @access public
   */
  public function updAnswer($questionID, $content, $userID)
  {
    $sql = $this->pdo->prepare("
      UPDATE answers
      SET content = :content, user_id = :userID
      WHERE question_id = :questionID
      ");

    $sql->bindValue(':questionID', $questionID, PDO::PARAM_INT);
    $sql->bindValue(':userID', $userID, PDO::PARAM_INT);
    $sql->bindValue(':content', $content, PDO::PARAM_STR);

    return $sql->execute();
  }

  /**
   * rmAnswer()
   * @param int questionID 
   * @return void
   * @access public
   */
  public function rmAnswer($questionID)
  {
    $sql = $this->pdo->prepare("
        DELETE FROM answers WHERE question_id = :questionID
      ");

    $sql->bindValue(':questionID', $questionID, PDO::PARAM_INT);

    return $sql->execute();
  }

}
