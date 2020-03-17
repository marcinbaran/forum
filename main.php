<?php

class Main{
	private $db;

    public function __construct(){
        try{
            require_once('config.php');
            $this->db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=UTF8", $db_user, $db_pass);
        }catch(PDOException $e){
            echo 'DATABASE ERROR ';
            exit();
        }
    }
}

?>