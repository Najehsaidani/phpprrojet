
<?php
// Include the database connection
require_once 'cible.php';
// Fetch all necessary data
$totalBooks = $pdo->query("SELECT COUNT(*) AS total FROM books")->fetch()['total'];
$totalMembers = $pdo->query("SELECT COUNT(*) AS total FROM users")->fetch()['total'];
$borrowedBooks = $pdo->query("SELECT COUNT(*) AS total FROM borrow_records WHERE status = 'borrowed'")->fetch()['total'];

// Recent members
$newMembers = $pdo->query("SELECT name, profile_image, created_at FROM users ORDER BY created_at DESC LIMIT 4")->fetchAll();

// Recent transactions
$recentTransactions = $pdo->query("
    SELECT b.title AS book_title, u.name AS member_name, br.borrow_date, br.return_date, br.status
    FROM borrow_records br
    JOIN books b ON br.book_id = b.id
    JOIN users u ON br.user_id = u.id
    ORDER BY br.borrow_date DESC LIMIT 5
")->fetchAll();

// Overdue books
$overdueBooks = $pdo->query("
    SELECT b.title AS book_title, u.name AS member_name, br.return_date
    FROM borrow_records br
    JOIN books b ON br.book_id = b.id
    JOIN users u ON br.user_id = u.id
    WHERE br.return_date < NOW() AND br.status = 'borrowed'
")->fetchAll();

// Upcoming returns (next 3 days)
$upcomingBooks = $pdo->query("
    SELECT b.title AS book_title, u.name AS member_name, br.return_date
    FROM borrow_records br
    JOIN books b ON br.book_id = b.id
    JOIN users u ON br.user_id = u.id
    WHERE br.return_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 3 DAY)
    AND br.status = 'borrowed'
")->fetchAll();

// Notifications count
$notificationCount = count($overdueBooks) + count($upcomingBooks);

$title = "Dashboard - Library Management";
$style = "styles/styledash.css";
$page = "dashbord.phtml";
include 'layout.phtml';
?>
