<?php 
session_start();
include('header.php');
 include('slider.php');
 
$result = mysqli_query($conn, "SELECT $lang from about");
$about = mysqli_fetch_array($result);;
?>
<div class="clear"></div>
<div class="container main_container">


<div class="container-fluid">
    
    <h4>
        <?=$about[$lang]?>
    </h4>

  
</div>

</div>

<?php 

include('footer.php');

?>