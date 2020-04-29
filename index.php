<?php
    session_start();
    $_SESSION['path'] = 'home';
?>
<?php include "template/header.php"?>

    <section class="slideshow container">
        <?php include "template/carousel.php" ?>
    </section>

    <section class="best-reviews container">
        <h3>Best Reviews</h3>
        <!-- TODO: Replace these items with the items from the database with highest reviews -->
        <div class="best-reviews-container row">
            <div class="best-review-item col l4">
                <img src="assets/images/goodwill.jpg" alt="">
                <div class="best-review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5>Shutter Island</h5>
                <button>Explore</button>
            </div>
            <div class="best-review-item col l4">
                <img src="assets/images/goodwill.jpg" alt="">
                <div class="best-review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5>Good Will Hunting</h5>
                <button>Explore</button>
            </div>
            <div class="best-review-item col l4">
                <img src="assets/images/goodwill.jpg" alt="">
                <div class="best-review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5>White Chicks</h5>
                <button>Explore</button>
            </div>
        </div>
    </section>
    <section class="genres container">
        <h3>Choose genre</h3>
        <?php include "template/genres.php" ?>
    </section>

<?php include "template/footer.php" ?>
