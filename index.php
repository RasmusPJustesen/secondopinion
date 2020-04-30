<?php

    include "config/db_connect.php";

    session_start();
    $_SESSION['path'] = 'home';
?>
<?php include "template/header.php"?>

    <section class="slideshow container">
        <?php include "template/carousel.php" ?>
    </section>

    <section class="best-reviews container">
        <h3>Best Reviews</h3>
        <div class="best-reviews-container row">
            <?php foreach ($items as $item): ?>
            <div class="col s12 m4">
                <img src="<?php echo $item['image'] ?>" alt="">
                <div class="best-review-stars">
                    <?php
                        $yellow = $item['rating'];
                        for ($i = 0;$i < $yellow; $i++ ):
                    ?>
                    <i class="fas fa-star star-yellow"></i>
                    <?php endfor; ?>
                    <?php
                        $grey = 5 - $item['rating'];
                        for ($i = 0; $i < $grey; $i++):
                    ?>
                    <i class="fas fa-star"></i>
                    <?php endfor; ?>
                </div>
                <h5><?php echo $item['title'] ?></h5>
                <button>Explore</button>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="genres container">
        <h3>Choose genre</h3>
        <?php include "template/genres.php" ?>
    </section>

<?php include "template/footer.php" ?>
