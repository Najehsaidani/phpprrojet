<div class="container">
    <aside>
        <div class="logo">
            <img src="images/logo.png">
            <h2>Library<span class="danger">Manager</span></h2>
        </div>
        <div class="sidebar">
            <a href="dashbord.php"><span class="material-icons-sharp">dashboard</span><h3>Dashboard</h3></a>
            <a href="Books.php"><span class="material-icons-sharp">book</span><h3>Books</h3></a>
            <a href="members.php" class="active"><span class="material-icons-sharp">person_outline</span><h3>Members</h3></a>
            <a href="Borrow.php"><span class="material-icons-sharp">sync_alt</span><h3>Borrow/Return</h3></a>
            <a href="logout.php"><span class="material-icons-sharp">logout</span><h3>Logout</h3></a>
        </div>
    </aside>

    <main>
        <div class="form-container">
            <h2><?= isset($editingMember) ? 'Edit Member' : 'Add Member' ?></h2>
            <form action="members.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $editingMember['id'] ?? '' ?>">
                
                <div class="image-input">
                    <img src="<?= $editingMember['image'] ?? 'https://via.placeholder.com/120' ?>" alt="Profile Image" id="profilePreview">
                    <label for="profileImage"><i class='bx bx-image-add'></i></label>
                    <input type="file" id="profileImage" name="image" accept="image/*" onchange="previewImage(event)">
                </div>
                
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?= $editingMember['name'] ?? '' ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?= $editingMember['email'] ?? '' ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="pass" value="<?= $editingMember['password'] ?? '' ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" value="<?= $editingMember['number'] ?? '' ?>" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="member" <?= (isset($editingMember['role']) && $editingMember['role'] === 'member') ? 'selected' : '' ?>>Member</option>
                        <option value="admin" <?= (isset($editingMember['role']) && $editingMember['role'] === 'admin') ? 'selected' : '' ?>>Admin</option>
                        <option value="staff" <?= (isset($editingMember['role']) && $editingMember['role'] === 'staff') ? 'selected' : '' ?>>Staff</option>
                    </select>
                </div>
                <button type="submit"><?= isset($editingMember) ? 'Update Member' : 'Add Member' ?></button>
            </form>
        </div>

        <div class="member-list">
            <h2>Current Members</h2>
            <div class="member-cards">
                <?php foreach ($data as $member): ?>
                    <div class="member-card">
                        <img src="<?= $member['image'] ?>" alt="Member Photo">
                        <h3><?= $member['name'] ?></h3>
                        <p>Email: <?= $member['email'] ?></p>
                        <p>Phone: <?= $member['number'] ?></p>
                        <div class="actions">
                            <a href="?action=edit&id=<?= $member['id'] ?>" class="edit-btn">Edit</a>
                            <a href="?action=delete&id=<?= $member['id'] ?>" class="delete-btn">Delete</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</div>

<script>
function previewImage(event) {
    const preview = document.getElementById('profilePreview');
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = e => preview.src = e.target.result;
        reader.readAsDataURL(file);
    }
}
</script>

<?php
include 'cible.php';

// Handle "Edit" action
$editingMember = null;
if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $bdd->prepare("SELECT * FROM clients WHERE id = ?");
    $stmt->execute([$id]);
    $editingMember = $stmt->fetch();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $image = $editingMember['image'] ?? null;

    // Handle file upload
    if (!empty($_FILES['image']['name'])) {
        $uploadDir = 'uploads/';
        $image = $uploadDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    if ($id) {
        // Update
        $stmt = $bdd->prepare("UPDATE clients SET name = ?, email = ?, password = ?, number = ?, role = ?, image = ? WHERE id = ?");
        $stmt->execute([$name, $email, $password, $phone, $role, $image, $id]);
    } else {
        // Insert
        $stmt = $bdd->prepare("INSERT INTO clients (name, email, password, number, role, image) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $password, $phone, $role, $image]);
    }
    header("Location: members.php");
    exit;
}

// Handle delete
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $bdd->prepare("DELETE FROM clients WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: members.php");
    exit;
}

// Fetch members
$stmt = $bdd->query("SELECT * FROM clients");
$data = $stmt->fetchAll();
$title = "Members - Library Management";
$style = "styles/style2.css";
$page = "members.phtml";
include 'layout.phtml';
?>
