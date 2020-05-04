<?php
    if (isset($_GET['id'])) {

    } else {
        echo 'Some went wrong!';
    }
?>
<?php include "template/header.php"?>

    <div class="row container">
        <div class="col s12 m6 product-banner img">
            <img src="assets/images/goodwill.jpg" alt="">
        </div>
        <div class="col s12 m6 product-banner info">
            <h1>Film name</h1>
            <div class="best-review-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <br>
            <p>Released: </p>
            <p>Genre: </p>
            <p>Cast: </p>
            <p>Director: </p>
        </div>
    </div>
    <div class="product summary container">
        <h3>Summary</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus ad aliquam aliquid aperiam dolores eius error, et facilis fugiat id, iste laudantium natus praesentium repellat sit veniam! Aliquid, repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur deserunt dicta dolor dolore doloremque esse fuga id illo libero nostrum obcaecati perferendis porro quidem quisquam quo reprehenderit, tempore unde vero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores assumenda consequatur deserunt excepturi expedita iste laboriosam maiores minus molestiae nam, nesciunt optio pariatur quaerat quasi quo quod sed voluptas voluptate!</p>
    </div>
    <div class="product reviews container">
        <h3>Reviews</h3>
        <div class="product-reviews-container">
            <span>16. April | By: Username</span>
            <h5>Heading</h5>
            <div class="best-review-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti error nihil quibusdam. Accusantium aperiam beatae distinctio dolorum eos error esse et harum natus non nostrum odit, pariatur quas ratione sint?</p>
        </div>
    </div>
    <div class="product comments container">
        <h3>Leave a comment</h3>
        <form action="" class="product-comments-container">
            <input type="text" placeholder="Heading ...">
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
            <textarea placeholder="Type Comment ..."></textarea>
            <input type="button" value="Publish">
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
            let max = 5;
            console.log(rating);
            for (let i = 0; i <= rating; i++) {
                $('.st' + i).addClass('star-yellow');
                $('.st' + (i + 1)).removeClass('star-yellow');
                $('.st' + (i + 2)).removeClass('star-yellow');
                $('.st' + (i + 3)).removeClass('star-yellow');
                $('.st' + (i + 4)).removeClass('star-yellow');
            }
        }
    </script>

<?php include "template/footer.php" ?>