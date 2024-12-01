<?php
include 'cible.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $summary = $_POST['summary'];
    $total_copies = $_POST['total_copies'];
    $available_copies = $_POST['available_copies'];
    
    // Get the current cover image to keep if no new image is uploaded
    $sql = "SELECT cover_image FROM books WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    $book = $stmt->fetch();
    $current_cover_image = $book['cover_image'];

    // Handle image upload
    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['cover_image']['name']);
        
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['cover_image']['tmp_name'], $uploadFile)) {
            // If a new image was uploaded, set the new image path
            $cover_image = $uploadFile;
        } else {
            die("Error uploading the image");
        }
    } else {
        // If no new image is uploaded, use the current cover image
        $cover_image = $current_cover_image;
    }

    try {
        // Update the book details in the database
        $sql = "UPDATE books 
                SET title = :title, 
                    author = :author, 
                    genre = :genre, 
                    summary = :summary, 
                    cover_image = :cover_image, 
                    total_copies = :total_copies, 
                    available_copies = :available_copies 
                WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':title' => $title,
            ':author' => $author,
            ':genre' => $genre,
            ':summary' => $summary,
            ':cover_image' => $cover_image,
            ':total_copies' => $total_copies,
            ':available_copies' => $available_copies,
            ':id' => $id
        ]);

        // Redirect back to the books page
        header("Location: Books.php");
        exit;
    } catch (PDOException $e) {
        die("Error updating the book: " . $e->getMessage());
    }
} else {
    die("Invalid request.");
}
?>
