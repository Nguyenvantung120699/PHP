<?php
session_start();
//bắt dữ liệu gửi từ form sang
$username = $_POST["username"];
$password = $_POST["password"];

var_dump($username);
var_dump($password);

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

$sql = "SELECT * FROM user WHERE email LIKE'".$username."'AND password LIKE'".$password."'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo"login success";
    $user = null;
    while($row = $result->fetch_assoc()){
        $user = $row;
    }
    var_dump($user);
    $_SESSION["user"] = $user;
    header("Location: index.php");
}else{
    $_SESSION['login_err']= "Username or password is wrong";
    header("Location: login.php");
}