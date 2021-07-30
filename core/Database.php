<?php
 $host="localhost";
 $dbname="hardware";
 $user="root";
 $pass="";
 try{
     $db=new PDO("mysql:host=$host;dbname=$dbname;port=3306",$user,$pass);
     $db->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     session_start();

 }
 catch(PDOException $e){
     echo $e->getMessage();
  }

   

?>