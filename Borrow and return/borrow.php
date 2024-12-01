<?php
// Inclusion du fichier de connexion à la base de données
include 'dbconnect.php';

// Initialisation des variables
$rows = []; // Tableau pour les livres empruntés
$error_message = ''; // Message d'erreur
$success_message = ''; // Message de succès

// Vérification si le formulaire a été soumis (méthode POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'borrow') {
        // Logic for borrowing a book
        $member_id = $_POST['member_id'] ;
        $book_id = $_POST['book_id'] ;
        $borrow_date = $_POST['borrow_date'] ;
        $return_date = $_POST['return_date'] ;

        if (!empty($member_id) && !empty($book_id) && !empty($borrow_date) && !empty($return_date)) {
            // Vérification si le membre existe
            $query = $pdo->prepare("SELECT name FROM users WHERE id = ? AND role = 'member'");
            $query->execute([$member_id]);
            $member = $query->fetch();

            // Vérification si le livre existe et est disponible
            $query = $pdo->prepare("SELECT title, available_copies FROM books WHERE id = ?");
            $query->execute([$book_id]);
            $book = $query->fetch();

            if ($member && $book) {
                if ($book['available_copies'] > 0) {
                    // Ajouter un emprunt dans borrow_records
                    $insert_query = $pdo->prepare("INSERT INTO borrow_records (user_id, book_id, borrow_date, return_date, status) 
                                                   VALUES (?, ?, ?, ?, 'borrowed')");
                    $insert_query->execute([$member_id, $book_id, $borrow_date, $return_date]);

                    // Mise à jour de la disponibilité du livre
                    $update_query = $pdo->prepare("UPDATE books SET available_copies = available_copies - 1 WHERE id = ?");
                    $update_query->execute([$book_id]);

                    
                    header("Location: borrow.php");
                    exit(); // Important pour arrêter l'exécution du code après la redirection

                } else {
                    echo $error_message = "Error: The book is currently not available.";
                }
            } 
        } 
    } elseif (isset($_POST['action']) && $_POST['action'] === 'return') {
        // Logic for returning a book
        $member_id = $_POST['member_id'] ;
        $book_id = $_POST['book_id'] ;

        if (!empty($member_id) && !empty($book_id)) {
            // Vérification si l'enregistrement existe dans borrow_records
            $query = $pdo->prepare("SELECT * FROM borrow_records WHERE user_id = ? AND book_id = ? AND status = 'borrowed'");
            $query->execute([$member_id, $book_id]);
            $borrow_record = $query->fetch();

            if ($borrow_record) {
                // Supprimer l'enregistrement ou marquer comme retourné
                $delete_query = $pdo->prepare("DELETE FROM borrow_records WHERE user_id = ? AND book_id = ?");
                $delete_query->execute([$member_id, $book_id]);

                // Incrémenter la disponibilité du livre
                $update_query = $pdo->prepare("UPDATE books SET available_copies = available_copies + 1 WHERE id = ?");
                $update_query->execute([$book_id]);

                
                header("Location: borrow.php");
                exit(); // Important pour arrêter l'exécution du code après la redirection

            } else {
                echo $error_message = "Error: No matching record found for return.";
            }
        } 
    }
}

// Récupérer les emprunts de livres en faisant la jointure avec les tables users et books
$query = $pdo->prepare("SELECT br.book_id, br.borrow_date, br.return_date, u.name AS member_name, b.title AS book_title
                       FROM borrow_records br
                       JOIN users u ON br.user_id = u.id
                       JOIN books b ON br.book_id = b.id
                       ORDER BY br.borrow_date DESC");
$query->execute();
$rows = $query->fetchAll();

// Inclure la vue avec les données préparées
$page = "borrow";
include './layout.phtml';
?>
