<?php
    $servername = "localhost"; //my pc 
    $username = "root";      //idk                                                                  
    $password = ""; //she typed "root" but i kept getting an annoying error so i left it empty im guesing it  has something to do with phpmyadmin
    $db_name = "database1"; //the name of the database on phpmyadmin
    $conn = new mysqli($servername, $username, $password, $db_name); //idk 
    if($conn->connect_error){     //if something breaks 
        die("Connection failed".$conn->connect_error);
    }
    echo ""; //its empty so that when the page starts it doesnt put any ugly text anywhere
    ?>