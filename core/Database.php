<?php
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

$host = $_ENV['DB_HOST'];
 $dbname= $_ENV['DB_NAME'];
 $user= $_ENV['DB_USER'];
 $pass= $_ENV['DB_PASSWORD'];
 try{
     $db=new PDO("mysql:host=$host;dbname=$dbname;port=3306",$user,$pass);
     $db->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     session_start();

 }
 catch(PDOException $e){
     echo $e->getMessage();
  }

   

?>