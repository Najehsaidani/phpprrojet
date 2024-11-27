<?php
include 'cible.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get login form data
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {
        // Fetch user data
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? and password = ?");
        $stmt->execute([$email, $password]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch as associative array

        if ($user) {
            // Check user role and redirect
            if ($user['role'] === 'admin') {
                echo "<script>
                        alert('Welcome, Admin!');
                        window.location.href = 'dashbord.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Welcome, User!');
                        window.location.href = 'home.php';
                      </script>";
            }
            exit(); // Stop further execution
        } else {
            // Invalid credentials
            echo "<script>alert('Invalid email or password.');</script>";
        }
    } else {
        // Fields are empty
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}

$title="ISET-Bizerte Library";
$style_1="css/stylelog_1.css";
$style_2="css/stylelog.css";
$page="loginuser.phtml";
include 'layouthomelog.phtml';
?>