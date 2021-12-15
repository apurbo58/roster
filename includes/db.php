<?php
    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE_NAME","roster");

    $db_connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
    // echo $db_connect;
?>