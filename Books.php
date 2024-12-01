<?php
// Define page-specific variables
$title = "Books - Library Management";
$style = "styles/stylesbook.css";
$page = "Books.phtml";

// Include the database connection
include 'cible.php';

try {
    // Query the database to fetch all books
    $sql = "SELECT * FROM books";
    $stmt = $pdo->query($sql);
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Handle any database errors gracefully
    die("Erreur lors de la récupération des livres : " . $e->getMessage());
}

// Include the main layout
include 'layout.phtml';
?>
