<?php

require_once('dbconfig.php');

class USER
{

	private $conn;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}


	public function doLogin($uname,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT id_user,email,mp,grade FROM user WHERE email=:uname and mp=:upass");
			$stmt->execute(array(':uname'=>$uname,':upass'=>$upass));
		    $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

			if($stmt->rowCount() == 1)
			{
			 $_SESSION['user_session'] = $userRow['id_user'];
			 $_SESSION['grade'] = $userRow['grade'];
			 return true;
			}

		}
		catch(PDOException $e)
		{
			return false;
		}
	}



	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>
