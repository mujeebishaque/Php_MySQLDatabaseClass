<?php


	class MySQLDatabase  {

		private $connection;
		private $db_name;
		private $host;
		private $username;
		private $password;

		public function __construct ( $host="", $user="", $pass="", $db="" )  {
			$this->db_name = $db;
			$this->username = $user;
			$this->password = $pass;
			$this->db_name = $db;
			$this->open_connection();
		}
  		public function open_connection ()  {
  			$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
  			if ( mysqli_connect_errno() )  {
  				die("ERROR: Database connection failed." . mysqli_connect_error());
  			}
  		}
  		public function perform_query ( $sql )  {
  			$query = mysqli_real_escape_string ($this->connection, $sql );
        		$result = mysqli_query($this->connection, $query);
  			if ( ! $result )  {
  				die("ERROR: Database Query Failed !");
  			}	
  		}
  		public function close_connection ()  {
  			if ( isset($this->connection)  )  {
  				mysqli_close($this->connection);
  				unset($this->connection);
  			}
  		}
	}

  $mysql = new MySQLDatabase("localhost", "root", "", "fast");
  $mysql->perform_query("INSERT INTO user_detail(username, password) VALUES ('Abraham', 875)");
  $mysql->close_connection();

