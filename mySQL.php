<?php

function login($user, $password) {
    include("mySQLcon.php");

    $query = "SELECT * FROM User WHERE Login= '". $user."' AND Password='"$Password."'";
    echo $query

    $rows = mysqli_query($cnx, $query);
    if (!$rows){
        echo "Error en la query.<br />";
        echo $query;
        exit();
    }
    $num = mysqli_num_rows($rows);
    if($num == 0){
        return false;
    } else {
        return true;
    }

    mysqul_close();

    session_start();
    foreach ($rows as $row){
        $user_id = $row['Id'];
        $user_name  = $row['Name'];
    }
    $_SESSION['id'] = $user_id;
    $_SESSION['name'] = $user_name;
}