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
            session_start();
            $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",$this->dbusername,$this->dbpassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        }catch(PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }
    public function index(){
        //echo "data take from db";
         $query = "SELECT * FROM `products`";
        //  $stmt = $this->conn->prepare($query);
        //  $stmt->execute();
        //  return $stmt->fetchAll();

         $stmt = $this->conn->query($query);
         return $stmt->fetchAll();
    }

    public function store(array $data)
    {
        try{
            echo '<pre>';
            print_r($_FILES);
            
            die();
            $query = "INSERT INTO products(title) VALUES(:value1)";

        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':value1'=>$data['title'], 
        ]);
        //header('location: ./../../index.php');
        $_SESSION['massage'] = 'Value added';
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function show(int $id){
        //echo "$id has to show";
        $query="SELECT * FROM `products` WHERE id=$id";
        $stmt=$this->conn->query($query);
        //$stmt->execute($query);
        return $stmt->fetch();
    }

    public function update( array $data)
    {
        try{
            $query = "UPDATE products SET title=:v1 where id=:v2";

        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':v1'=>$data['title'],
            ':v2'=>$data['id'], 
        ]);
        //header('location: ./../../index.php');
        $_SESSION['massage'] = 'Updated';
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function delet(int $id){
        try{
            $query = "DELETE FROM `products` WHERE id=$id";

        $stmt = $this->conn->query($query);
        $stmt->execute();
        
        $_SESSION['massage'] = 'Data Erased';
        //header('location: ./../../index.php');
        }

        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>