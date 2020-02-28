<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <div class="form-panel-login border col-md-12" style="margin-top:100px ; border-radius:20px">
        <div class="col-md-6 text-center" style="margin-left:20%">
            <h1>LOGIN</h1>
                <form method="post" action="postlogin.php">
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="name"/>
                    </div> 
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="password"/>
                    </div>
                    <!-- nếu đăng nhập fail báo lỗi đỏ -->
                    <?php if(isset($_SESSION['login_err'])):?>
                        <p style="color: red"><?php echo $_SESSION['login_err']?></p>
                        <?php $_SESSION['login_err']=null; endif;?>
                    <div class="form-group">
                        <button class="btn btn-danger" type="submit" >login</button>
                    </div>
                </form>
            </div>
       </div>
    </div>
</body>
</html>