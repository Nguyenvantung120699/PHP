<?php
// lấy dữ liệu từ form
$username = $_POST["username"];
$age      = $_POST["age"];
$address = $_POST["address"];
$telephone = $_POST["telephone"];
$email = $_POST["email"];
$password = $_POST["password"];
//kết nối database
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
var_dump($_POST);
$sql = "INSERT INTO user (user_name, age, address,telephone, email, password)
        VALUES ('$username', $age, '$address', '$telephone', '$email','$password');
";
$result = $conn->query($sql);
//var_dump($sql."register compelete");
if($result){
    header("Location: index.php");
}