<?php
// Database connection using PDO
$dsn = "mysql:host=localhost;dbname=library_management;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Initialize variables
$error = "";
$success = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $author = $_POST['author'] ?? '';
    $genre = $_POST['genre'] ?? '';
    $summary = $_POST['summary'] ?? '';
    $total_copies = $_POST['total_copies'] ?? 0;
    $available_copies = $_POST['available_copies'] ?? 0;
    $cover_image = null;

    // Validate and upload cover image if provided
    if (!empty($_FILES['cover_image']['name'])) {
        $upload_dir = 'uploads/';
        $upload_file = $upload_dir . basename($_FILES['cover_image']['name']);
        $image_file_type = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));

        // Check if file is an image
        $check = getimagesize($_FILES['cover_image']['tmp_name']);
        if ($check === false) {
            $error = "File is not an image.";
        }

        // Check file size (limit: 2MB)
        if ($_FILES['cover_image']['size'] > 2 * 1024 * 1024) {
            $error = "File size should not exceed 2MB.";
        }

        // Allow certain file formats
        if (!in_array($image_file_type, ['jpg', 'png', 'jpeg', 'gif'])) {
            $error = "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }

        // Upload file if no errors
        if (empty($error) && move_uploaded_file($_FILES['cover_image']['tmp_name'], $upload_file)) {
            $cover_image = $upload_file;
        } else {
            $error = "Failed to upload image.";
        }
    }

    // Insert data into database
    if (empty($error)) {
        $sql = "INSERT INTO books (title, author, genre, summary, cover_image, total_copies, available_copies)
                VALUES (:title, :author, :genre, :summary, :cover_image, :total_copies, :available_copies)";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([
                ':title' => $title,
                ':author' => $author,
                ':genre' => $genre,
                ':summary' => $summary,
                ':cover_image' => $cover_image,
                ':total_copies' => $total_copies,
                ':available_copies' => $available_copies,
            ]);
            $success = "Book added successfully!";
        } catch (PDOException $e) {
            $error = "Failed to insert data: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form div {
            margin-bottom: 10px;
        }
        form div label {
            display: block;
            margin-bottom: 5px;
        }
        form div input, form div textarea, form div select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        form div button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        form div button:hover {
            background-color: #0056b3;
        }
        .message {
            text-align: center;
            margin-bottom: 15px;
        }
        .message.error {
            color: red;
        }
        .message.success {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Add a New Book</h1>
    <div class="message <?= !empty($error) ? 'error' : (!empty($success) ? 'success' : '') ?>">
        <?= !empty($error) ? $error : $success ?>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <div>
            <label for="title">Book Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" required>
        </div>
        <div>
            <label for="genre">Genre:</label>
            <input type="text" name="genre" id="genre" required>
        </div>
        <div>
            <label for="summary">Summary:</label>
            <textarea name="summary" id="summary" rows="4"></textarea>
        </div>
        <div>
            <label for="cover_image">Cover Image:</label>
            <input type="file" name="cover_image" id="cover_image">
        </div>
        <div>
            <label for="total_copies">Total Copies:</label>
            <input type="number" name="total_copies" id="total_copies" required>
        </div>
        <div>
            <label for="available_copies">Available Copies:</label>
            <input type="number" name="available_copies" id="available_copies" required>
        </div>
        <div>
            <button type="submit">Add Book</button>
        </div>
    </form>
</body>
</html>
