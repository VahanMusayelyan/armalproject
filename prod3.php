<?php
session_start();
include('header.php');
include('slider_protective.php');

$result = mysqli_query($conn, "SELECT $lang from prod_names where page = 3");

?>

<br>
<br>

<div class="container">

   
    <ul class="list-group list-group-flush">
        <?php
            while($prod = mysqli_fetch_array($result)){
                echo '<li class="list-group-item"><img class="list_icon" src="images/list.png">'.$prod[$lang].'</li>';
            }
        ?>
       
       
    </ul>




</div>


<?php
include('footer.php');
?>