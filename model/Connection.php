<?php 

class Connection
{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $database="briefmvc";
	private $conn;

	public function __construct()
	{

		try {
			  $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
		
			} catch(PDOException $e) 
			{
			  echo "Connection failed: " . $e->getMessage();
			}
	}


	public function insert($table,$tableCln,$tableVal)
	{
		$names="";
		$values="";
		$vrls="";
		for ($i=0; $i <count($tableCln) ; $i++) 
		{ 
			if ($i>0) 
			{
				$vrls=",";
			}
			$names.=$vrls."`".$tableCln[$i]."`";
			$values.=$vrls."'".$tableVal[$i]."'";
		}
		$str="INSERT INTO `$table`(".$names.") VALUES (".$values.")";
		$query=$this->conn->prepare($str);
		$query->execute();
	}


	public function selectAll($table)
	{
		$query=$this->conn->prepare("SELECT * FROM `$table`");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC); 
	}


	public function selectOne($table,$id)
	{
		$query=$this->conn->prepare("SELECT * FROM `$table` where id=$id");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC)[0];
	}

	public function selectUser($table,$email)
	{
		$query=$this->conn->prepare("SELECT * FROM `$table` where email=$email");
		$query->execute();
		if($query->rowCount()>0)
		{
			return true;
		}
		else{
			return false;
		}
	}


	public function update($table,$tableCln,$tableVal,$id)
	{
		$names="";
		$vrls="";
		for ($i=0; $i <count($tableCln) ; $i++) 
		{ 
			if ($i>0) 
			{
				$vrls=",";
			}
			$names.=$vrls."`".$tableCln[$i]."`='".$tableVal[$i]."'";
		}
		$str="UPDATE $table SET $names WHERE id=$id";
		$query=$this->conn->prepare($str);
		$query->execute();
	}


	public function delete($table,$id)
	{
		$query=$this->conn->prepare("DELETE FROM `$table` WHERE id=$id");
		$query->execute();
	}



	// 
	// 
	// 

	// Prepare statement with query
	public function query($sql){
		$this->stmt = $this->dbh->prepare($sql);
	}

	// Bind values
	public function bind($param, $value, $type = null){

		if(is_null($type)){
			switch(true){
				case is_int($value):
				$type = PDO::PARAM_INT;
				break;
				case is_bool($value):
				$type = PDO::PARAM_BOOL;
				break;
				case is_null($value):
				$type = PDO::PARAM_NULL;
				break;
				default:
				$type = PDO::PARAM_STR;    
			}
		}

		$this->stmt->bindValue($param, $value, $type);
	}

	// Execute the prepared statement
	public function execute(){
		return $this->stmt->execute();
	}

	// Get result set as array
	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC); 
	}

	// Get single record
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	// Get row count
	public function rowCount(){
		return $this->stmt->rowCount();
	}

}