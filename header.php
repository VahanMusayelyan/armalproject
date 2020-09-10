<?php
session_start();
include('db.php');

if (isset($_POST['lang'])) {
    $lang = $_POST['language'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'ru';
}

$info = mysqli_query($conn, "SELECT * from contact");
$information = mysqli_fetch_array($info);

$result = mysqli_query($conn, "SELECT $lang from `menu`");
$subresult = mysqli_query($conn, "SELECT $lang from `submenu`");

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="/css/slick/slick-theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mobile.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/js.js"></script>
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
        <title>ARMAL</title>

    </head>
    <body>
        <div class="se-pre-con"><img class="logo" src="images/logo1.png"></div>

        <div class="nav_menu nav_menu_header">
            <div class="body-wrap">
                <nav class="navbar navbar-inverse header-nav" role="navigation">


                    <div class="scroll_div">
                         <a href="/"><img class="main-logo" src="images/main-logo.png"></a>

                        <ul class="nav navbar-nav navbar-right">

                            <?php
                            foreach ($result as $key => $value) {

                                switch ($key) {
                                    case 0:
                                        echo '<li class="dropdown">
                                        <a href="/" class="dropdown-toggle">' . $value[$lang] . '</a>
                                    </li>';
                                        break;
                                    case 1:
                                        echo '<li class="dropdown">
                                        <a href="#" class="dropdown-toggle">' . $value[$lang] . '<b class="caret"></b></a>
                                            <ul class="dropdown-menu">';
                                        $k = 1;
                                        while ($sub = mysqli_fetch_array($subresult)) {
                                            echo '<li><a href="prod' . $k . '.php">' . $sub[$lang] . '</a></li>';
                                            $k++;
                                        }
                                        echo '</ul> </li>';
                                        break;
                                        
                                    case 2:
                                         echo '<li class="dropdown">
                                        <a href="/partner.php"  class="dropdown-toggle">' . $value[$lang] . '</a>
                                    </li>';
                                        break;
                                    case 3:
                                       echo '<li class="dropdown">
                                        <a href="/contact.php" class="dropdown-toggle">' . $value[$lang] . '</a>
                                    </li>';
                                        break;
                                    case 4:
                                        echo '<li class="dropdown">
                                        <a href="/catalog.pdf" download="catalog" class="dropdown-toggle"><i class="fa fa-download"></i>' . $value[$lang] . '</a>
                                    </li>';
                                        break;
                             
                                    default:
                                        echo '<li class="dropdown language-selector">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true" > ' . $value[$lang];

                                        if ($lang == 'ru') {
                                            echo ' <img class="lang ru" src="images/ru.svg" />';
                                        } else if ($lang == 'arm') {
                                            echo ' <img class="lang ru" src="images/am.svg" />';
                                        } else {
                                            echo ' <img class="lang ru" src="images/gb.svg" />';
                                        }

                                        echo '<b class="caret"></b></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <form action="" method="POST">
                                                            <button class="lang_but" type="submit" name="lang">
                                                                <img class="lang am" src="images/am.svg" />
                                                                <input name="language" hidden="hidden" value="arm">Հայ
                                                            </button>

                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="" method="POST">
                                                            <button class="lang_but" type="submit" name="lang">
                                                                <img class="lang eng" src="images/gb.svg" />
                                                                <input name="language" hidden="hidden" value="eng">Eng
                                                            </button>

                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="" method="POST">
                                                            <button class="lang_but" type="submit" name="lang">
                                                                <img class="lang ru" src="images/ru.svg" />
                                                                <input name="language" hidden="hidden" value="ru">Рус
                                                            </button>

                                                        </form>
                                                    </li>

                                                </ul>
                                            </li>';
                                }
                            }
                            ?>


                        </ul>
                    </div>

                </nav>

            </div>
        </div>
       

