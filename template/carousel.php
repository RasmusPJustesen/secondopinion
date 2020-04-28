<div class="carousel carousel-slider center">
    <div class="carousel-item red white-text" href="#one!">
        <img src="assets/images/blackwidow.jpg" alt="">
    </div>
    <div class="carousel-item amber white-text" href="#two!">
        <img src="assets/images/quiteplace2.jpg" alt="">
    </div>
    <div class="carousel-item green white-text" href="#three!">
        <img src="assets/images/tigerking.jpg" alt="">
    </div>
    <div class="carousel-arrow-left">
        <div class="carousel-arrow-left-item"></div>
    </div>
    <div class="carousel-arrow-right">
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