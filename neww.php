<?php
// Database connection
$dsn = "mysql:host=localhost;dbname=library_management;charset=utf8mb4";
$username = "root"; // Replace with your database username
$password = "";     // Replace with your database password

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch genres and their book counts
    $genresQuery = "SELECT genre, COUNT(*) as book_count FROM books GROUP BY genre";
    $genresStmt = $pdo->query($genresQuery);
    $genres = $genresStmt->fetchAll(PDO::FETCH_ASSOC);

    // Fetch books grouped by genre
    $booksQuery = "SELECT * FROM books WHERE genre = :genre";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>

<section class="product_tab_showcase_area sec_padding" id="product_tab_showcase_id">
    <div class="container">
        <div class="section_title wow fadeInUp">
            <h2 class="title title_two">Browse By Genres</h2>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-lg-4">
                <ul class="nav nav-pills tab_slider_thumb" id="pills-tab-one" role="tablist">
                    <?php foreach ($genres as $index => $genre): ?>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link <?= $index === 0 ? 'active' : '' ?>" 
                               id="pills-<?= strtolower($genre['genre']) ?>-tab" 
                               data-bs-toggle="pill" 
                               data-bs-target="#pills-<?= strtolower($genre['genre']) ?>" 
                               role="tab" 
                               aria-controls="pills-<?= strtolower($genre['genre']) ?>" 
                               aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                                <strong><?= htmlspecialchars($genre['genre']) ?></strong>
                                <span>(<?= $genre['book_count'] ?> Books)</span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="pills-tabContent-two">
                    <?php foreach ($genres as $index => $genre): ?>
                        <div class="tab-pane fade <?= $index === 0 ? 'show active' : '' ?>" 
                             id="pills-<?= strtolower($genre['genre']) ?>" 
                             role="tabpanel" 
                             aria-labelledby="pills-<?= strtolower($genre['genre']) ?>-tab">
                            <div class="tab_slider_content slick_slider_tab">
                                <?php
                                // Fetch books for the current genre
                                $stmt = $pdo->prepare($booksQuery);
                                $stmt->execute(['genre' => $genre['genre']]);
                                $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($books as $book): ?>
                                    <div class="item">
                                        <div class="bj_new_pr_item">
                                            <a href="product-single.php?id=<?= $book['id'] ?>" class="img">
                                                <img src="<?= htmlspecialchars($book['cover_image']) ?>" alt="<?= htmlspecialchars($book['title']) ?>">
                                            </a>
                                            <div class="bj_new_pr_content_two">
                                                <div class="d-flex justify-content-between">
                                                    <a href="product-single.php?id=<?= $book['id'] ?>">
                                                        <h5><?= htmlspecialchars($book['title']) ?></h5>
                                                    </a>
                                                </div>
                                                <div class="writer_name">
                                                    <i class="icon-user"></i>
                                                    <a href="author-single.php?author=<?= urlencode($book['author']) ?>">
                                                        <?= htmlspecialchars($book['author']) ?>
                                                    </a>
                                                </div>
                                                <a href="checkout.php?id=<?= $book['id'] ?>" class="bj_theme_btn">Borrow</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
