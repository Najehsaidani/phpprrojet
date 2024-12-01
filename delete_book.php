<?php
include 'db.php'; // Inclut la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // Récupère l'ID de l'utilisateur à supprimer

    // Requête pour supprimer l'utilisateur
    $sql = "DELETE FROM books WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([':id' => $id]);
        header('Location: Books.php'); // Redirige vers la page principale après suppression
        exit();
    } catch (PDOException $e) {
        die("Erreur lors de la suppression : " . $e->getMessage());
    }
}
?>
