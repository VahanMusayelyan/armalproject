<?php
session_start();
include('header.php');


if($lang == 'ru'){
    $info = 'О нас';
    $work = '<b>Рабочие дни</b>: Пнд-Пят';
    $time = '<b>Рабочие часы: </b> 09:00 - 18:00';
    $email = '<b>Е-маил: </b>'.$information['email'];
    $tel = '<b>Телефон: </b>'.$information['phone'];
    $director = '<b>Директор:</b> Джон Смит';
    $text = 'Рабочие Рабочие Рабочие Рабочие Рабочие Рабочие Рабочие Рабочие Рабочие Рабочие Рабочие Рабочие Рабочие Рабочие Рабочие ';
    
}elseif($lang == 'arm'){
     $info = 'Մեր մասին';
    $work = '<b>Աշխատանքային օրեր: </b> Երկ - Ուրբ';
    $time = '<b>Աշխատանքային ժամեր: </b> 09:00 - 18:00';
    $email = '<b>Էլ. հասցե: </b> '.$information['email'];
    $phone = '<b>Հեռախոս: </b>'.$information['phone'];
    $director = '<b>Տնօրեն: </b> Ջոն Սմիթ';
    $text = 'Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս Հեռախոս ';
    
}else{
    $info = 'About us';
    $work = '<b>Working Days: </b> Monday - Friday';
    $time = '<b>Working Time: </b> 09:00 - 18:00';
    $email = '<b>Email: </b>'.$information['email'];
    $phone = '<b>Phone: </b>'.$information['phone'];
    $director = '<b>Director: </b> Jon Smith';
    $text ='phone phone phone phone phone phone phone phone phone phone phone phone phone phone phone phone phone phone phone phone phone ';
    
    
}

?>


<div class="background_contact">
<!--    <img src="images/partnership.jpg">-->
</div>
<div class="cont_background_cont">
</div>
<div class="contact_container">


    <div class="contact_info">
        <h2 style="font-family: Impact, Charcoal, sans-serif"><?=$info?></h2>
        <br>
        <p><?=$work?></p>
        <p><?=$time?></p>
        <p><?=$email?></p>
        <p><?=$phone?></p>
        <p><?=$director?></p>
        <p><?=$text?></p>
       
       
    </div>
    <div class="mapouter map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="598" height="600" id="gmap_canvas" src="https://www.google.com/maps/embed/v1/place?q=17+Garegin+Nzhdeh+St&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
                
            </div>
        </div>
    </div>

</div>


<?php
include('footer.php');
?>