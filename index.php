<?php include "template/header.php"?>
<?php

include "config/db_connect.php";

$sqlRandomReview = "SELECT rating, movie_id FROM ratings";

$resultRandomReview = mysqli_query($conn, $sqlRandomReview);

$randomReview = mysqli_fetch_all($resultRandomReview, MYSQLI_ASSOC);

mysqli_free_result($resultRandomReview);

$randomReviewArray = array();

for ($i = 1; $i <= 3; $i++) {
    $r = rand(1, 60);
    array_push($randomReviewArray, $randomReview[$r]['movie_id']);
}

$_SESSION['path'] = 'home';
?>
    <section class="slideshow container">
        <?php include "template/carousel.php" ?>
    </section>

    <section class="best-reviews container">
        <h3>Reviews</h3>
        <div class="best-reviews-container row">
            <?php foreach ($items as $item): ?>
                <?php if ($item['Id'] == $randomReviewArray[0]): ?>
                    <div class="col s12 m4">
                        <img src="<?php echo $item['Image'] ?>" alt="">
                        <div class="best-review-stars">
                            <?php
                            $itemID = $item['Id'];
                            $sqlLookFor = "SELECT rating FROM ratings WHERE movie_id = " . $itemID;
                            $resultLookFor = mysqli_query($conn, $sqlLookFor);
                            $LookFor = mysqli_fetch_all($resultLookFor, MYSQLI_ASSOC);
                            mysqli_free_result($resultLookFor);
                            $yellow = $LookFor[0]['rating'];
                            for ($i = 0; $i < $yellow; $i++): ?>
                                <i class="fas fa-star star-yellow"></i>
                            <?php endfor; ?>
                            <?php
                            $grey = 5 - $yellow;
                            for ($i = 0; $i < $grey; $i++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <h5><?php echo $item['Moviename'] ?></h5>
                        <a href="product.php?id=<?php echo $item['Id'] ?>">
                            <button>Explore</button>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($item['Id'] == $randomReviewArray[1]): ?>
                    <div class="col s12 m4">
                        <img src="<?php echo $item['Image'] ?>" alt="">
                        <div class="best-review-stars">
                            <?php
                            $itemID = $item['Id'];
                            $sqlLookFor = "SELECT rating FROM ratings WHERE movie_id = " . $itemID;
                            $resultLookFor = mysqli_query($conn, $sqlLookFor);
                            $LookFor = mysqli_fetch_all($resultLookFor, MYSQLI_ASSOC);
                            mysqli_free_result($resultLookFor);
                            $yellow = $LookFor[0]['rating'];
                            for ($i = 0; $i < $yellow; $i++): ?>
                                <i class="fas fa-star star-yellow"></i>
                            <?php endfor; ?>
                            <?php
                            $grey = 5 - $yellow;
                            for ($i = 0; $i < $grey; $i++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <h5><?php echo $item['Moviename'] ?></h5>
                        <a href="product.php?id=<?php echo $item['Id'] ?>">
                            <button>Explore</button>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($item['Id'] == $randomReviewArray[2]): ?>
                    <div class="col s12 m4">
                        <img src="<?php echo $item['Image'] ?>" alt="">
                        <div class="best-review-stars">
                            <?php
                            $itemID = $item['Id'];
                            $sqlLookFor = "SELECT rating FROM ratings WHERE movie_id = " . $itemID;
                            $resultLookFor = mysqli_query($conn, $sqlLookFor);
                            $LookFor = mysqli_fetch_all($resultLookFor, MYSQLI_ASSOC);
                            mysqli_free_result($resultLookFor);
                            $yellow = $LookFor[0]['rating'];
                            for ($i = 0; $i < $yellow; $i++): ?>
                                <i class="fas fa-star star-yellow"></i>
                            <?php endfor; ?>
                            <?php
                            $grey = 5 - $yellow;
                            for ($i = 0; $i < $grey; $i++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <h5><?php echo $item['Moviename'] ?></h5>
                        <a href="product.php?id=<?php echo $item['Id'] ?>">
                            <button>Explore</button>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="genres container">
        <h3>Choose genre</h3>
        <?php include "template/genres.php" ?>
    </section>

<?php include "template/footer.php" ?>
