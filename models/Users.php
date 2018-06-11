<?php

/**
 * Users
 */
class Users
{

  private $pdo;
  private $ID;
  private $name;
  private $pass;
  private $email;
  private $role;
  private $questionID;
  private $answerID;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  /**
   * getUsers
   * @return object
   * @access public
   */
  public function getUsers()
  {
  	$sql = $this->pdo->prepare("
	  	SELECT
	  	users.id, users.name, users.email, users.password
	  	FROM users
	  	WHERE role = 'admin'
	  	");

  	$sql->execute();

  	return $sql->fetchAll();
  }

   /**
   * getUser
   * @param int $ID 
   * @param string $name 
   * @return object
   * @access public
   */
  public function getUser($ID, $name)
  {
  	if (isset($name)) {
  		$sql = $this->pdo->prepare("
	  		SELECT
	  		users.id, users.name, users.email, users.password
	  		FROM users
	  		WHERE role = 'admin' AND name = :name
	  		");
	  	
	  	$sql->bindValue(':name', $name, PDO::PARAM_STR);
  	} else {
	  	$sql = $this->pdo->prepare("
	  		SELECT
	  		users.id, users.name, users.email, users.password
	  		FROM users
	  		WHERE role = 'admin' AND id = :ID
	  		");
	  	
	  	$sql->bindValue(':ID', $ID, PDO::PARAM_INT);
  	}

  	$sql->execute();

  	return $sql->fetchAll();
  }

  /**
   * addUser()
   * @param string name
   * @param string pass
   * @param string email
   * @param string role
   * @return void
   * @access public
   */
  public function addUser($name, $pass, $email, $role)
  {
    if(is_null($pass) && is_null($role)) {
      $sql = $this->pdo->prepare("
	      INSERT INTO users (name, email)
	      VALUES (:name, :email)
	      ");

    } else {
    	$sql = $this->pdo->prepare("
	      INSERT INTO users (name, password, email, role)
	      VALUES (:name, :pass, :email, :role)
	      ");

    	$sql->bindValue(':pass', $pass, PDO::PARAM_STR);
    	$sql->bindValue(':role', $role, PDO::PARAM_STR);
    }

    $sql->bindValue(':name', $name, PDO::PARAM_STR);
    $sql->bindValue(':email', $email, PDO::PARAM_STR);

    return $sql->execute();
  }

  /**
   * updUser()
   * @param int ID
   * @param int questionID
   * @param string name
   * @param string pass
   * @param string email
   * @param string role
   * @return void
   * @access public
   */
  public function updUser($ID, $questionID, $name, $pass, $email, $role)
  {
  	if(is_null($ID) && is_null($pass) && is_null($role)) {
  		$sql = $this->pdo->prepare("
				SET @user_id = (SELECT questions.user_id FROM questions WHERE questions.id = :questionID);
				UPDATE users
				SET name = :name, email = :email
				WHERE users.id = @user_id
	      ");
    	$sql->bindValue(':questionID', $questionID, PDO::PARAM_INT);
  	} else {
			$sql = $this->pdo->prepare("
				UPDATE users
				SET name = :name, email = :email, password = :password
				WHERE id = :ID 
				");

  		$sql->bindValue(':ID', $ID, PDO::PARAM_INT);
    	$sql->bindValue(':password', $pass, PDO::PARAM_STR);
  	}

    $sql->bindValue(':name', $name, PDO::PARAM_STR);
    $sql->bindValue(':email', $email, PDO::PARAM_STR);

  	return $sql->execute();
  }

  public function rmUser($ID)
  {
  	$sql = $this->pdo->prepare("
  		DELETE FROM users WHERE id = :ID
  		");

  	$sql->bindValue(':ID', $ID, PDO::PARAM_INT);
  	return $sql->execute();
  }

}
