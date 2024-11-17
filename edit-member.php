<?php
include 'cible.php'; // Database connection file

// Fetch the member's data based on the ID

    $id = $_GET['id'];

    // Fetch current member data
    $bd = $pdo->prepare('SELECT * FROM users WHERE id = ?');
    $bd->execute([$id]);
    $a = $bd->fetch();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect POST data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $role = $_POST['role'];
    $img = $a['profile_image']; // Default to the current image if not updated

    // Validate required fields
    if (empty($name) || empty($email)  || empty($pwd) || empty($role)) {
        echo "All fields are required.";
    } else {
        // Handle the uploaded image
        if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
            // Define the upload directory
            $uploadDir = __DIR__ . '/uploads/';
           

            $imageName = basename($_FILES['profile_image']['name']);
            $targetPath = $uploadDir . $imageName;

            if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $targetPath)) {
                $img = 'uploads/' . $imageName; // Save relative path for the database
            } 
        }

        // Update the member details in the database
        $query = $pdo->prepare('UPDATE users SET name = ?, email = ?, password = ?, profile_image = ?, role = ? WHERE id = ?');
        $success = $query->execute([$name, $email, $pwd, $img, $role, $id]);

        if ($success) {
            header('Location: members.php'); // Redirect to members page after successful submission
            exit();
        }
    }
}

$page = "edit-member.phtml";
$title = "Edit Member";
$style = "styles/style21.css";
include 'layout.phtml';
?>
