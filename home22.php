<?php
include 'cible.php';
 // Fetch genres and their book counts
 $genresQuery = "SELECT genre, COUNT(*) as book_count FROM books GROUP BY genre";
 $genresStmt = $pdo->query($genresQuery);
 $genres = $genresStmt->fetchAll(PDO::FETCH_ASSOC);
 

 // Fetch books grouped by genre
 $booksQuery = "SELECT * FROM books WHERE genre = :genre";
 $communityQuery = "SELECT profile_image FROM users LIMIT 4";
 $countQuery = "SELECT COUNT(*) as reader_count FROM users";

 $avatarsStmt = $pdo->query($communityQuery);
 $avatars = $avatarsStmt->fetchAll(PDO::FETCH_ASSOC);

 $countStmt = $pdo->query($countQuery);
 $readerCount = $countStmt->fetch(PDO::FETCH_ASSOC)['reader_count'];

 

 $bookQuery = "SELECT 
 title, 
 author, 
 genre, 
 cover_image, 
 created_at 
FROM books
ORDER BY created_at DESC
LIMIT 6";
$stmt = $pdo->query($bookQuery);
$books1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($books1);


$title="ISET-Bizerte Library";
$style_1="css/style_1.css";
$style_2="styles/style_2.css";
$page="home.phtml";
include 'layouthome.phtml';

?>