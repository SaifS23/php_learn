<?php
namespace Act\controllers;

use PDO;
use PDOException;

class controller
{
    private $dbhost = 'localhost';
    private $dbname = 'crud';
    private $dbusername = 'root';
    private $dbpassword ='';
    private $conn;


    public function __construct()
    {
        try{
            $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",$this->dbusername,$this->dbpassword);
            echo "Connected successfully";
        }catch(PDOException $e)
        {
            echo $e->getLine();
        }
    }
    public function index(){
        echo 'data from db';
    }
}


?>