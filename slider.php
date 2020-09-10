<?php
session_start();

$result = mysqli_query($conn, "Select * from slider where page = 'main'");
$slider = mysqli_fetch_array($result);
?>

<section class="center slider">
    <?php
    while ($slider = mysqli_fetch_array($result)) {
        echo "<div>
                <img src='/dashboard/images/" . $slider['img'] . "'>
             </div>";
    }
    ?>




</section>




