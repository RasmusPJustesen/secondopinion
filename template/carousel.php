<?php
    include "config/db_connect.php";

    $sqlCaro = "SELECT rating, movie_id FROM ratings";

    $resultCaro = mysqli_query($conn, $sqlCaro);

    $bestRating = mysqli_fetch_all($resultCaro, MYSQLI_ASSOC);

    mysqli_free_result($resultCaro);

    $topThree = array();
    $allMovies = array();
    $allSeries = array();

    $topThreeMovies = array();
    $topThreeSeries = array();

    foreach ($bestRating as $rating) {
        if ((int)$rating['rating'] == 5) {
            array_push($topThree, $rating['movie_id']);
        }
    }

    foreach ($items as $key => $item) {
        if ($item['movietype'] == 'Movie') {
            array_push($allMovies, $item['Id']);
        }
        if ($item['movietype'] == 'Series') {
            array_push($allSeries, $item['Id']);
        }
    }

    foreach ($topThree as $top) {
        foreach ($allMovies as $movie) {
            if ($top == $movie) {
                foreach ($items as $key => $item) {
                    if ($top == $item['Id']) {
                        array_push($topThreeMovies, $item['Image']);
                    }
                }
            }
        }

        foreach ($allSeries as $series) {
            if ($top == $series) {
                foreach ($items as $key => $item) {
                    if ($top == $item['Id']) {
                        array_push($topThreeSeries, $item['Image']);
                    }
                }
            }
        }
    }

    $slide1 = "";
    $slide2 = "";
    $slide3 = "";

    if(isset($_SESSION['path'])) {
        if ($_SESSION['path'] == 'home') {
            $slide1 = "<img src='" . $topThreeMovies[0] . "' alt=''>";
            $slide2 = "<img src='" . $topThreeMovies[1] . "' alt=''>";
            $slide3 = "<img src='" . $topThreeMovies[2] . "' alt=''>";
        } elseif ($_SESSION['path'] == 'explore' && $_GET['content'] == 'movies') {
            $slide1 = "<img src='" . $topThreeMovies[0] . "' alt=''>";
            $slide2 = "<img src='" . $topThreeMovies[1] . "' alt=''>";
            $slide3 = "<img src='" . $topThreeMovies[2] . "' alt=''>";
        } elseif ($_SESSION['path'] == 'explore' && $_GET['content'] == 'series') {
            $slide1 = "<img src='" . $topThreeSeries[0] . "' alt=''>";
            $slide2 = "<img src='" . $topThreeSeries[1] . "' alt=''>";
            $slide3 = "<img src='" . $topThreeSeries[2] . "' alt=''>";
        } else {
            $slide1 = "<h1>Something went wrong!</h1>";
            $slide2 = "<h1>Something went wrong!</h1>";
            $slide3 = "<h1>Something went wrong!</h1>";
        }
    }
?>
<div class="carousel carousel-slider center">
    <div class="carousel-item white-text" href="#one!">
        <?php echo $slide1 ?>
    </div>
    <div class="carousel-item white-text" href="#two!">
        <?php echo $slide2 ?>
    </div>
    <div class="carousel-item white-text" href="#three!">
        <?php echo $slide3 ?>
    </div>
    <div class="carousel-arrow-left hide-on-med-and-down">
        <div class="carousel-arrow-left-item"></div>
    </div>
    <div class="carousel-arrow-right hide-on-med-and-down">
        <div class="carousel-arrow-right-item"></div>
    </div>
</div>
<script>
    let interval = setInterval(function(){
        $('.carousel').carousel('next');
    }, 3000);

    $(document).ready(function(){
        $('.carousel').carousel({
            fullWidth: true,
            indicators: true
        });

        interval;
    });

    $('.carousel-arrow-right-item').click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $('.carousel').carousel('next');
        clearInterval(interval);
    });

    $('.carousel-arrow-left-item').click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $('.carousel').carousel('prev');
        clearInterval(interval);
    });
</script>