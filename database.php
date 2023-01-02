<?php
class Database {
    public $db;
    public function getConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "mydb";

        $this->db = null;
        try{
            $this->db = new mysqli('localhost','root','','mydb');
            // $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "success";
        }catch(Exception $e){
            echo "Database could not be connected: " . $e->getMessage();
        }
        return $this->db;
    }
}
?>