<?php
$user = 'u47476';
$pass = '3289244';
$db = new PDO('mysql:host=localhost;dbname=u47476', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

if(!isset($_SESSION)){
    session_start();
}
?>