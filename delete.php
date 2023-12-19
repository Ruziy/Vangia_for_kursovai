<?php


require_once 'connect.php';


$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM `Product` WHERE `Product`.`id` = '$id'");


header('Location: /');
echo readfile('index.php');