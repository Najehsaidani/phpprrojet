<?php
// Include database connection file (cible.php)
include 'cible.php';

// Initialize error messages
$errors = [];

// Handle form submission for registration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
    $confirm_password = $_POST['confirm_password'] ;
    $role = 'user'; // Default role
    $img = '';

    // Validate input fields
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required.";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($errors)) {
        // Handle file upload for profile image
        if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = __DIR__ . '/uploads/'; // Ensure 'uploads/' exists
            $imageName = uniqid() . '-' . basename($_FILES['profile_image']['name']);
            $targetPath = $uploadDir . $imageName;

            if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $targetPath)) {
                $img = 'uploads/' . $imageName; // Save relative path
            } else {
                $errors[] = 'Error uploading image.';
            }
        }

        // Hash the password before saving
        

        if (empty($errors)) {
            // Prepare SQL query to insert new user into the database
            $stmt = $pdo->prepare("INSERT INTO users (name, email, password, profile_image, role) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$name, $email, $password, $img, $role]);
            echo "<script>
            alert('Registration successful! Redirecting to login page.');
            window.location.href = 'registre.php';
            </script>";
            // Redirect to the login page after successful registration
            header('Location: login.php');
            exit();
        }
    }
}

$page = "registre.phtml";
$title = "Register";
$style = "styles/styleregistre.css";
include 'layout2.phtml'; // Include the layout for the registration page
?>
