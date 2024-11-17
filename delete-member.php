<?php  
include "cible.php";
$query= $pdo->prepare("DELETE FROM users where id=?");
    $query-> execute ([$_GET['id']]);
    header('location:members.php');
    exit(); ?>