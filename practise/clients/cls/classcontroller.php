<?php
namespace Tri;

use PDO;
use PDOException;

class classcontroller{
  
        private $dbhost = 'localhost';
        private $dbname = 'client_data';
        private $user = 'root';
        private $password = '';
        private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->user, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
    public function index(){
        $query = "SELECT * FROM `client`";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll();
    }
}


?>