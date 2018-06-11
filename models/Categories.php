<?php

/**
 * Categories
 */
class Categories
{

  private $pdo;
  private $categoryID;
  private $questionID;
  private $name;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  /**
   * getCategories()
   * @param boolean full 
   * @return object
   * @access public
   */
  public function getCategories()
  {
    $sql = $this->pdo->prepare("
      SELECT
      categories.name,
      categories.id,
      count(questions.id) AS qFull,
      count(case when questions.status = 'published' then 1 end) AS qCount
      FROM categories
      LEFT JOIN questions ON questions.category_id = categories.id
      GROUP BY categories.name
      ORDER BY id ASC
    ");

    $sql->execute();

    return $sql->fetchAll();
  }

  /**
   * getCategory()
   * @param int ID 
   * @return object
   * @access public
   */
  public function getCategory($ID)
  {
    $sql = $this->pdo->prepare("
      SELECT
      categories.name,
      categories.id
      FROM categories
      WHERE categories.id = :ID
    ");

    $sql->bindValue(':ID', $ID, PDO::PARAM_INT);
    $sql->execute();

    return $sql->fetchAll();
  }

  public function addCategory($name)
  {
    $sql = $this->pdo->prepare("
      INSERT INTO categories
      (name) VALUES (:name)
      ");

    $sql->bindValue(':name', $name, PDO::PARAM_STR);
    
    return $sql->execute();
  }

  public function updCategory($ID,  $name)
  {
    $sql = $this->pdo->prepare("
      UPDATE categories SET name = :name WHERE id = :ID
      ");

    $sql->bindValue(':name', $name, PDO::PARAM_STR);
    $sql->bindValue(':ID', $ID, PDO::PARAM_STR);

    return $sql->execute();
  }

  public function rmCategory($ID)
  {
    $sql = $this->pdo->prepare("
      SET FOREIGN_KEY_CHECKS=0;
      DELETE FROM users WHERE id IN(SELECT questions.user_id FROM questions WHERE questions.category_id = :ID);
      DELETE FROM answers WHERE question_id IN(SELECT questions.id FROM questions WHERE questions.category_id = :ID);
      DELETE FROM categories WHERE id = :ID;
      DELETE FROM questions WHERE category_id = :ID;
      SET FOREIGN_KEY_CHECKS=1
      ");

    $sql->bindValue(':ID', $ID, PDO::PARAM_STR);

    return $sql->execute();
  }

}
