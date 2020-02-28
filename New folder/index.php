<?php session_start();
//if ($_SESSION['user']==null) header("location: login.php");

?>
<?php 
    if($_GET['route']==""){
        include_once("home.php");
    }elseif($_GET['route']=="listing"){
        include_once("product.php");
    }
    elseif($_GET['route']=="login"){
        include_once("login.php");
    }
    elseif($_GET['route']=="register"){
        include_once("regiter.php");
    }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Trang Chủ</title>
</head>
<body>
    <header class="col-md-12" style="background-color:red">
        <div class="container">
                <div class="admin_account col-md-12 text-center">
                    <h2>Xin Chào: <?php echo $_SESSION['user']['user_name'];?></h1>
                </div>
            </div>
    </header>
</body>
</html> -->
