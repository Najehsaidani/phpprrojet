<?php
// Include the database connection from cible.php
require_once 'cible.php';

// Initialize an array to store status messages
$statusMessages = [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and fetch input data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';
    $img = '';  // Default empty image path

    // Handle the uploaded image
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/uploads/'; // Absolute path to the 'uploads' directory
       

        $imageName = uniqid() . '-' . basename($_FILES['profile_image']['name']);
        $targetPath = $uploadDir . $imageName;

        // Move the uploaded file to the 'uploads' directory
        if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $targetPath)) {
            $img = 'uploads/' . $imageName; // Save relative path for database
        } 
    }

    // Validate required fields
    if (empty($name) || empty($email) || empty($password) || empty($role)) {
        echo "All fields are required.";
    } else {
        // Hash the password
       

        // Insert data into the database using the connection from cible.php
        $sql = "INSERT INTO users (name, email, password, profile_image, role) VALUES (?, ?, ?, ?, ?)";
        $query = $pdo->prepare($sql);

        try {
            $query->execute([$name, $email, $password, $img, $role]);
            // Redirect to the same page after successful submission to avoid re-submission on page refresh
            header('Location: members.php'); 
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

// Fetch Members
try {
    // Always fetch the updated list of members
    $stmt = $pdo->query("SELECT id, name, email, profile_image FROM users");
    $members = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $statusMessages[] = "Error fetching members: " . $e->getMessage();
}

// Define page variables
$title = "Members - Library Management";
$style = "styles/style2.css";
$page = "members.phtml";
include 'layout.phtml';
?>
