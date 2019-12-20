<?php
	/**
	 * 
	 */
	class connection
	{
		private $server;
		private $user;
		private $pass;
		private $db;
		function __construct($server,$user,$pass,$db)
		{
			$this->server=$server;
			$this->user=$user;
			$this->pass=$pass;
			$this->db=$db;

			$this->connectDB();

		}
		public function connectDB()
		{
			try 
			{
			    $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->user, $this->pass);
			    // set the PDO error mode to exception
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			    return $conn;
		    }
			catch(PDOException $e)
		    {
		    	echo $e->getMessage();
		    }
		}
	}