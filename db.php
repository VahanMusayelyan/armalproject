<?php
$conn = mysqli_connect('localhost', 'armalamn', 'Armal2020', 'armalamn_arm');
mysqli_set_charset( $conn, 'utf8' );

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>


