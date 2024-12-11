<?php

require("config.php");
$cnx=mysqli_conect($_SERVER, $user, $pass, $db);

if (!$cnx ){
    die('Could not correct: ' . mysqli_conect_error());
    exit();
}
?>