<?
session_start();

try {
    $db = new PDO("mysql:host=localhost;dbname=rksi", "root", "");
} catch (PDOExeption $e) {
    print $e->getMessage();
    die();
}

?>