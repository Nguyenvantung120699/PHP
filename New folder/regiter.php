<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register</title>
</head>
<body>
<div class="container">
      <div class="pannel-register col-md-12 border" style="margin-top:100px ; border-radius:20px">
         <div class="col-md-6 text-center" style="margin-left:20%">
         <h1>REGISTER</h1>
               <form method="post" action="postregister.php">
                  <div class="form-group">
                     <input class="form-control" type="text" name="username" placeholder="name" repuired/>
                  </div>
                  <div class="form-group">
                     <input class="form-control" type="number" name="age" placeholder="age" repuired/>
                  </div>
                  <div class="form-group">
                     <input class="form-control" type="text" name="address" placeholder="address" repuired/>
                  </div>
                  <div class="form-group">
                     <input class="form-control" type="text" name="telephone" placeholder="telephone" repuired/>
                  </div>
                  <div class="form-group">
                     <input class="form-control" type="email" name="email" placeholder="email" repuired/>
                  </div>
                  <div class="form-group">
                     <input class="form-control" type="password" name="password" placeholder="password" repuired/>
                  </div>
                  <div class="form-group">
                     <button class="btn btn-danger" type="submit" >Regiter</button>
                  </div>
               </form>
         </div>
      </div>
    </div>
</body>
</html>