<?php 

	class userController{
		protected $conn;

		public function __construct(){
			$this->conn = mysqli_connect('localhost','root','','sispakestetika'); //(host,username,password,database)
		}
		//pemangilan database
			
	/*** login proses ***/
	public function check_login($username, $password){
		$query = "SELECT * FROM user WHERE username='$username' and password='$password'";

		  //checking if the username is available in the table
		$result = mysqli_query($this->conn,$query);
		$user_data = mysqli_fetch_array($result);
		$count_row = $result->num_rows;

		if ($count_row == 1) {
			   // this login var will use for the session thing
			$_SESSION['login'] = true;
			return true;
		}
		else{
			return false;

		}

	}
	
	/*** starting the session ***/
	public function get_session(){
	    return $_SESSION['login'];
		}

	
	public function user_logout() {
	    $_SESSION['login'] = FALSE;
	    session_destroy();
	    }
		function __destruct(){
		}
	}
?>