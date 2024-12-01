<?php
include 'cible.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $title = $_POST['title'];
    $author = $_POST['author'];
    $summary = $_POST['samuray']; // Correspond au champ "summary"
    $available_copies = $_POST['availble_copies'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    // Handle image upload
    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['cover_image']['name']);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['cover_image']['tmp_name'], $uploadFile)) {
            $cover_image_path = $uploadFile;
        } else {
            die("Error uploading the image");
        }
    } else {
        $cover_image_path = null;  // No image uploaded
    }

    // SQL Insert query
    $sql = "INSERT INTO books (title, author, summary, cover_image, available_copies, category, status) 
            VALUES (:title, :author, :summary, :cover_image, :available_copies, :category, :status)";
    $stmt = $pdo->prepare($sql);

    try {
        // Execute the SQL statement with the form data
        $stmt->execute([
            ':title' => $title,
            ':author' => $author,
            ':summary' => $summary,
            ':cover_image' => $cover_image_path,
            ':available_copies' => $available_copies,
            ':category' => $category,
            ':status' => $status,
        ]);
        // Redirect after successful insertion
        header('Location: Books.php');
        exit();
    } catch (PDOException $e) {
        // Error handling
        die("Error during insertion: " . $e->getMessage());
    }
}
?>
