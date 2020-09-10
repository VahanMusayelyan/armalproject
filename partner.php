<?php
session_start();
include('header.php');
include('slider_partner.php');

$result = mysqli_query($conn, "SELECT $lang from partner");
$about = mysqli_fetch_array($result);


?>

<br>
<br>
<div class="container">
    
    <h4>
        <?=$about[$lang]?>
    </h4>


</div>


<?php
include('footer.php');
?>