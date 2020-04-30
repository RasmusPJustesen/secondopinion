<?php

    $slide1 = "";
    $slide2 = "";
    $slide3 = "";

    if(isset($_SESSION['path'])) {
        if ($_SESSION['path'] == 'home') {
            $slide1 = "<img src='assets/images/banners/blackwidow.jpg' alt=''>";
            $slide2 = "<img src='assets/images/banners/quiteplace2.jpg' alt=''>";
            $slide3 = "<img src='assets/images/banners/darkwaters.jpg' alt=''>";
        } elseif ($_SESSION['path'] == 'explore' && $_GET['content'] == 'movies') {
            $slide1 = "<img src='assets/images/banners/blackwidow.jpg' alt=''>";
            $slide2 = "<img src='assets/images/banners/quiteplace2.jpg' alt=''>";
            $slide3 = "<img src='assets/images/banners/darkwaters.jpg' alt=''>";
        } elseif ($_SESSION['path'] == 'explore' && $_GET['content'] == 'series') {
            $slide1 = "<img src='assets/images/banners/tigerking.jpg' alt=''>";
            $slide2 = "<img src='assets/images/banners/manifest.jpg' alt=''>";
            $slide3 = "<img src='assets/images/banners/witcher.jpg' alt=''>";
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