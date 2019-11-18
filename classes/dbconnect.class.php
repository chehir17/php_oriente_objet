<?php

class BasesDonnees{
	private $servername = "localhost";
    private $username = "root";
    private $password = "";
	public $conn = null;

	public function connect(){
		try {   
            $this->conn = new PDO("mysql:host=$this->servername;dbname=dsi21_g1_2019",$this->username, $this->password);
			//$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		}catch(Exception $e) { 
		echo $e->getMessage();   
		}
		return $this->conn;
	}

}

?>