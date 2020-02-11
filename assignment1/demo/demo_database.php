<?php
    // kết nối database
    //sever info 
    $servername = "localhost";
    $serverUser="root";
    $severPassword="";
    //connect database
    $conn = new mysqli($serverName,$serverUser,$severPassword);
    //check connection
    if($conn->connect_error) {
        //dừng luồng
        die("connection failed");
    }
    echo "Connect successfully";
    