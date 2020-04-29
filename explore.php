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
        <!-- TODO: all of this will be rewritten using a php foreach loop -->
        <?php if(isset($_GET['content']) && $_GET['content'] == 'movies'): ?>
            <h1>Movies!</h1>
        <?php endif; ?>
        <?php if(isset($_GET['content']) && $_GET['content'] == 'series'): ?>
            <h1>Series!</h1>
        <?php endif; ?>
        <!--<div class="row">
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
        </div>
        <div class="row">
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
        </div>
        <div class="row">
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
        </div>
        <div class="row">
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
        </div>
        <div class="row">
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
            <div class="col col s12 m4 l2"><img src="assets/images/goodwill.jpg" alt="">
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button>Explore</button>
            </div>
        </div>-->
    </section>

<?php include "template/footer.php" ?>