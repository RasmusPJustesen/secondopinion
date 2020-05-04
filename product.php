<?php
    if (isset($_GET['id'])) {
        include "config/db_connect.php";

        $id = $_GET['id'];

        $sqlRating = 'SELECT * FROM ratings WHERE movie_id = ' . $id;
        $sqlComment = 'SELECT comments.fk_user, comments.heading, comments.comment_user, comments.movie_id, users.username FROM comments INNER JOIN users ON comments.fk_user=users.user_id WHERE movie_id = ' . $id;

        $resultRating = mysqli_query($conn, $sqlRating);
        $resultComments = mysqli_query($conn, $sqlComment);

        $ratings = mysqli_fetch_all($resultRating, MYSQLI_ASSOC);
        $comments = mysqli_fetch_all($resultComments, MYSQLI_ASSOC);

        mysqli_free_result($resultRating);
        mysqli_free_result($resultComments);

        $title = '';
        $image = '';
        $year = '';
        $genre = '';
        $actors = '';
        $director = '';
        $summary = '';


        foreach ($items as $key => $item) {
            if($item['Id'] == $id) {
                $title = $item['Moviename'];
                $image = $item['Image'];
                $year = $item['Year'];
                $genre = $item['genre'];
                $director = $item['Director'];
                $summary = $item['Summary'];
                foreach($item['Cast'] as $foo => $cast) {
                    $actors .= $cast['Name'] . ", ";
                }
            }
        }

        $rating = '';
        $totalRating = 0;
        foreach ($ratings as $rating) {
            $totalRating += (int)$rating['rating'];
        }
        $ar = $totalRating / count($ratings);
        echo "<script>console.log($ar)</script>";
        $averageRating = round($ar);

        if (isset($_POST['submit'])) {
            $sqlUserCheck = "SELECT fk_user, movie_id FROM ratings";
            $resultUserCheck = mysqli_query($conn, $sqlUserCheck);
            $existingUser = mysqli_fetch_all($resultUserCheck, MYSQLI_ASSOC);
            mysqli_free_result($resultUserCheck);
            $commentUser = $_POST['userid'];

            foreach ($existingUser as $user) {
                if ($user['fk_user'] == $commentUser && $user['movie_id'] == $_GET['id']) {
                    $sameUser = true;
                    break;
                }
            }

            if ($sameUser == true) {
                echo "<script>alert('You have already comment and rated this this movie')</script>";
            } else {
                $heading = $_POST['heading'];
                $comment = $_POST['comment'];
                $commentRating = $_POST['rating'];

                $sqlSubmit = "INSERT INTO comments(fk_user, heading, comment_user, movie_id) VALUES ('$commentUser', '$heading', '$comment', '$id')";
                $sqlSubmitRating = "INSERT INTO ratings(fk_user, rating, movie_id) VALUES ('$commentUser', '$commentRating', '$id')";

                if(mysqli_query($conn, $sqlSubmit) && mysqli_query($conn, $sqlSubmitRating)) {
                    header('Location: index.php');
                } else {
                    echo 'query error: ' . mysqli_error($conn);
                }
            }
        }

    } else {
        echo 'Some went wrong!';
    }
?>
<?php include "template/header.php"?>

    <div class="row container">
        <div class="col s12 m6 product-banner img">
            <img src="<?php echo $image ?>" alt="">
        </div>
        <div class="col s12 m6 product-banner info">
            <h1><?php echo $title ?></h1>
            <div class="best-review-stars">
                <?php
                $yellow = $averageRating;
                for ($i = 0;$i < $yellow; $i++ ): ?>
                    <i class="fas fa-star star-yellow"></i>
                <?php endfor; ?>
                <?php
                $grey = 5 - $averageRating;
                for ($i = 0; $i < $grey; $i++): ?>
                    <i class="fas fa-star"></i>
                <?php endfor; ?>
            </div>
            <hr>
            <p>Released: <?php echo $year ?></p>
            <p>Genre: <?php echo $genre ?></p>
            <p>Cast: <?php echo $actors ?></p>
            <p>Director: <?php echo $director ?></p>
        </div>
    </div>
    <div class="product summary container">
        <h3>Summary</h3>
        <p><?php echo $summary ?></p>
    </div>
    <div class="product reviews container">
        <h3>Reviews</h3>
        <?php foreach ($comments as $comment): ?>
        <div class="product-reviews-container">
            <span>By: <?php echo $comment['username'] ?></span>
            <h5><?php echo $comment['heading'] ?></h5>
            <div class="best-review-stars">
                <?php
                $user = $comment['fk_user'];
                $yellow = '';
                foreach ($ratings as $key => $rating) {
                    if($rating['fk_user'] == $comment['fk_user']) {
                        $yellow = $rating['rating'];
                    }
                }
                for ($i = 0;$i < $yellow; $i++ ): ?>
                    <i class="fas fa-star star-yellow"></i>
                <?php endfor; ?>
                <?php
                $grey = 5 - $yellow;
                for ($i = 0; $i < $grey; $i++): ?>
                    <i class="fas fa-star"></i>
                <?php endfor; ?>
            </div>
            <p><?php echo $comment['comment_user'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="product comments container">
        <h3>Leave a comment</h3>
        <form action="product.php?id=<?php echo $_GET['id'] ?>" method="POST" class="product-comments-container">
            <input type="text" name="heading" placeholder="Heading ...">
            <div class="product-comments-rating">
                <p>Rate Movie: </p>
                <div class="best-review-stars">
                    <i class="fas fa-star st1" onclick="addStar(1)"></i>
                    <i class="fas fa-star st2" onclick="addStar(2)"></i>
                    <i class="fas fa-star st3" onclick="addStar(3)"></i>
                    <i class="fas fa-star st4" onclick="addStar(4)"></i>
                    <i class="fas fa-star st5" onclick="addStar(5)"></i>
                </div>
            </div>
            <input type="hidden" name="rating" id="iptRating" value="0">
            <input type="hidden" name="userid" value="<?php echo 1 ?>">
            <textarea name="comment" placeholder="Type Comment ..."></textarea>
            <input type="submit" name="submit" value="Publish">
        </form>
    </div>
    <script>
        const star1 = $('.st1');
        const star2 = $('.st2');
        const star3 = $('.st3');
        const star4 = $('.st4');
        const star5 = $('.st5');

        let rating = 0;

        function addStar(n) {
            rating = n;
            console.log(rating);
            for (let i = 0; i <= rating; i++) {
                $('.st' + i).addClass('star-yellow');
                $('.st' + (i + 1)).removeClass('star-yellow');
                $('.st' + (i + 2)).removeClass('star-yellow');
                $('.st' + (i + 3)).removeClass('star-yellow');
                $('.st' + (i + 4)).removeClass('star-yellow');
            }
            $('#iptRating').val(rating);
        }
    </script>

<?php include "template/footer.php" ?>