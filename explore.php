<?php

    include "config/db_connect.php";

    session_start();
    $_SESSION['path'] = 'explore';
?>
<?php include "template/header.php"?>

    <section class="slideshow container">
        <?php include "template/carousel.php" ?>
    </section>

    <section class="explore-title container">
        <h1>Movies</h1>
    </section>

    <section class="genres container">
        <?php include "template/genres.php" ?>
    </section>


    <section class="explore container">
        <?php if(isset($_GET['content']) && $_GET['content'] == 'movies'): ?>
            <div class="row">
                <?php foreach ($items as $item): ?>
                    <div class="col s12 m4 l2">
                        <img src="<?php echo $item['image'] ?>" alt="">
                        <div class="best-review-stars">
                            <?php
                            $yellow = $item['rating'];
                            for ($i = 0;$i < $yellow; $i++ ): ?>
                                <i class="fas fa-star star-yellow"></i>
                            <?php endfor; ?>
                            <?php
                            $grey = 5 - $item['rating'];
                            for ($i = 0; $i < $grey; $i++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <button>Explore</button>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php elseif(isset($_GET['content']) && $_GET['content'] == 'series'): ?>
            <h1>Series!</h1>
        <?php else: ?>
            <h1>No items pulled from database.</h1>
        <?php endif; ?>
    </section>

<?php include "template/footer.php" ?>