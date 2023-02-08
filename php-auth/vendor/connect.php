<?php

    //mysqli_connect
    $connect = mysqli_connect('localhost', 'root', 'root', 'php-auth_areaweb');
    if(!$connect){
        die('Error connect to DataBase');
    }
