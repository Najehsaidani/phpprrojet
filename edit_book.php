<?php
include 'cible.php';

if (!isset($_GET['id'])) {
    die("Book ID is missing.");
}

$id = $_GET['id'];

// Fetch book details
$sql = "SELECT * FROM books WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);
$book = $stmt->fetch();

if (!$book) {
    die("Book not found.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="styles/style21.css"> <!-- Include the same style as in edit-member -->
</head>
<body>
    <div class="container1">
        <div class="form-container">
            <h2>Edit Book</h2>
            <form action="update_user.php" method="post" enctype="multipart/form-data">
                <!-- Hidden input for the book ID -->
                <input type="hidden" name="id" value="<?= htmlspecialchars($book['id']) ?>">

                <div class="form-group">
                    <label for="title">Book Title</label>
                    <input type="text" id="title" name="title" value="<?= htmlspecialchars($book['title']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" value="<?= htmlspecialchars($book['author']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" id="genre" name="genre" value="<?= htmlspecialchars($book['genre']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="summary">Summary</label>
                    <textarea id="summary" name="summary" required><?= htmlspecialchars($book['summary']) ?></textarea>
                </div>

                <div class="image-input">
                    <label for="cover_image"><i class="bx bx-image-add ct"></i> Change Cover Image</label>
                    <input type="file" id="cover_image" name="cover_image" accept="image/*" onchange="previewImage(event)">
                    <img src="<?= $book['cover_image'] ? $book['cover_image'] : 'uploads/default.png' ?>" alt="Cover Image" id="coverPreview">
                </div>

                <div class="form-group">
                    <label for="total_copies">Total Copies</label>
                    <input type="number" id="total_copies" name="total_copies" value="<?= htmlspecialchars($book['total_copies']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="available_copies">Available Copies</label>
                    <input type="number" id="available_copies" name="available_copies" value="<?= htmlspecialchars($book['available_copies']) ?>" required>
                </div>

                <button type="submit">Update Book</button>
            </form>
            <a href="Books.php">Back to Book List</a>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('coverPreview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>
