<?php
define('BD_host','localhost');
define('BD_name','bibliotheque');
define('BD_charset','utf8');
define('BD_login','root');
define('BD_pass','');
try{
    $bdd = new PDO('mysql:host='.BD_host.';dbname='.BD_name,BD_login,BD_pass);
$bdd-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$bdd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(Exception $e ){
    echo "errue in base de donnes".$e->getMessage();
    die();
}


// Fetch all clients from the database
$response = $bdd->query('SELECT * FROM clients');
$data = $response->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and fetch input data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $tel = $_POST['phone'] ?? '';
    $pwd = $_POST['pass'] ?? '';
    $role = $_POST['role'] ?? '';
    $img = '';

    // Handle the uploaded image
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/uploads/'; // Absolute path to the 'uploads' directory
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Create the 'uploads' folder if it doesn't exist
        }

        $imageName = basename($_FILES['image']['name']);
        $targetPath = $uploadDir . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            $img = 'uploads/' . $imageName; // Save relative path for database
        } else {
            echo "Failed to upload image.";
            exit;
        }
    }

    // Validate required fields
    if (empty($name) || empty($email) || empty($tel) || empty($pwd) || empty($role)) {
        echo "All fields are required.";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO clients (name, email, number, image, password, role) VALUES (?, ?, ?, ?, ?, ?)";
        $query = $bdd->prepare($sql);

        try {
            $query->execute([$name, $email, $tel, $img, $pwd, $role]);
            header('Location: members.php'); // Redirect to the same page after successful submission
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

// Define page variables
$title = "Members - Library Management";
$style = "styles/style2.css";
$page = "members copy.phtml";
include 'layout.phtml';
?>
