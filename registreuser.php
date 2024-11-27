<?php

include 'cible.php';
$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = 'user'; 
    $img='';

  
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required.";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($errors)) {

        // Prepare SQL query to insert new user into the database
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, profile_image, role) VALUES (?, ?, ?, ?, ?)");
        if ($stmt->execute([$name, $email, $password,$img, $role])) {
            echo "<script>
                alert('Registration successful! Redirecting to login page.');
                window.location.href = 'loginuser.php';
            </script>";
            exit();
        } else {
            $errors[] = 'Database error. Please try again.';
        }
    }
}
$title="ISET-Bizerte Library";
$style_1="css/stylelog_1.css";
$style_2="css/stylelog.css";
$page="registreuser.phtml";
include 'layouthomelog.phtml';
?>