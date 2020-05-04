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
        <?php if(isset($_GET['content']) && $_GET['content'] == 'movies'): ?>
            <h1>Movies</h1>
        <?php elseif(isset($_GET['content']) && $_GET['content'] == 'series'): ?>
            <h1>Series</h1>
        <?php endif; ?>
    </section>

    <section class="genres container">
        <?php include "template/genres.php" ?>
    </section>

    <section class="explore container">
        <?php if(isset($_GET['content']) && $_GET['content'] == 'movies'): ?>
            <div class="row">
                <?php foreach ($items as $item): ?>
                    <?php if ($item['movietype'] == 'Movie'): ?>
                        <div class="col s12 m4 l2">
                            <img src="<?php echo $item['Image'] ?>" alt="">
                            <h5><?php echo $item['Moviename'] ?></h5>
                            <a href="product.php?id=<?php echo $item['Id'] ?>"><button>Explore</button></a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php elseif(isset($_GET['content']) && $_GET['content'] == 'series'): ?>
            <div class="row">
                <?php foreach ($items as $item): ?>
                    <?php if ($item['movietype'] == 'Series'): ?>
                        <div class="col s12 m4 l2">
                            <img src="<?php echo $item['Image'] ?>" alt="">
                            <h5><?php echo $item['Moviename'] ?></h5>
                            <a href="product.php?id=<?php echo $item['Id'] ?>"><button>Explore</button></a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <h1>No items pulled from database.</h1>
        <?php endif; ?>
    </section>

<?php include "template/footer.php" ?>