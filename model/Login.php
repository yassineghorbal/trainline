<?php 

require_once "Connection.php";


class Login
{
	private $table="users";

	private $email;
    private $password;
	function __construct($email,$password)
	{
		
		$this->email=$email;
		$this->password=$password;
	}


	public function save()
	{
		$ctn=new Connection();
		$ctn->insert($this->table,["email","password"],[$this->email,$this->password]);
	}

	public static function select()
	{
		$ctn=new Connection();
		return $ctn->selectAll("users");
	}

	public function login(){
		$msg = ""; 
	if(isset($_POST['login'])) {
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	if($email != "" && $password != "") {
    try {
	$ctn = new Connection();
      $query = "select * from `user_login` where `username`=:username and `password`=:password";
      $stmt = $ctn->prepare($query);
      $stmt->bindParam('username', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['sess_user_id']   = $row['uid'];
        $_SESSION['sess_user_name'] = $row['username'];
        $_SESSION['sess_name'] = $row['name'];
       
      } else {
        $msg = "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
  }
}

	}

    
	// public static function delete($id)
	// {
	// 	$ctn=new Connection();
	// 	return $ctn->delete("users",$id);
	// }


	// public static function edit($id)
	// {
	// 	$ctn=new Connection();
	// 	return $ctn->selectOne("users",$id);
	// }

	// public function update($id)
	// {
	// 	$ctn=new Connection();
	// 	$ctn->update($this->table,["nom","prenom","telephone","email","password"],[$this->nom,$this->prenom,$this->telephone,$this->email,$this->password],$id);
	// }

}