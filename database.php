<?php
class database{
public function dbconnect(){
$dbhost = 'localhost';
$dbname = 'db_oop_nazar';
$dbuser = 'root';
$dbpass = '';


try {
    $dbconnection =new pdo("mysql:host=$dbhost;
    dbname=$dbname", $dbuser, $dbpass);
    $dbconnection->exec("set names utf8");
    $dbconnection->setAttribute(pdo::ATTR_ERRMODE,
    pdo::ERRMODE_EXCEPTION);
    return $dbconnection;

 }

catch (PDOException $e){
    return 'connection failed: ' . $e->getMessage();

    }
  }
}
?>