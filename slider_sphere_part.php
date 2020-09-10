<?php
session_start();

$result = mysqli_query($conn, "Select * from slider where page = 'sphere'");
?>

<section class="center slider">
    <?php
    while ($slider = mysqli_fetch_array($result)) {
        echo "<div>
                <img src='/dashboard/images/".$slider['img']."'>
             </div>";
    }
    ?>
    



</section>
<div class="clear"></div>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function () {


        $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            easing: 'linear',
        });

    });
</script>


