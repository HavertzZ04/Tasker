<?php

    session_start();

    $conn = mysqli_connect( //This function helps us to contect the info with phpMyAdmin
        'localhost', //web
        'johan', //user on the computer
        'campus2023', //phpMyAdmin's password
        'crudProject' //Name of the phpMyadmin's project
    );

    /*if(isset($conn)){
        echo "DB is working!";
    }; To check if the connection is working*/
?>