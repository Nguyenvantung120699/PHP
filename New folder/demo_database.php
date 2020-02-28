<?php
    // kết nối database
    //sever info 
    $servername = "localhost";
    $serverUser="root";
    $severPassword="";
    $database = "php_tung";
    //connect database
    $conn = new mysqli($servername,$serverUser,$severPassword,$database);
    //check connection
    if($conn->connect_error) {
        //dừng luồng
        die("connection failed");
    }
    //echo "Connect successfully";
    //truy van sql
    $sql ="SELECT * FROM user";
    $result = $conn->query($sql);
    //var_dump($result);
    //die("stop");
    $user = [];
    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            //echo $row["id"].$row['user_name'].$row["email"];
            $user [] = $row;
        }
    }else{
        echo"No result";
    }
    ?>
    <?php foreach($user as $u):?>
    <p><?php echo $u["id"]."-".$u["user_name"]."-".$u['email'];?></p>
    <?php endforeach;?>