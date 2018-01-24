
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="bg-info">
    <div class="container">
      <div class="row rowHeight d-flex justify-content-center align-items-center">
        <div class="col-4 pt-5">
          <h1 class="h1 text-light pb-2">Signup Here</h1>

          <form class="" action="includes/signup.inc.php" method="post">
            <!-- <label for="" class="text-white">Username</label> -->
            <input type="text" name="uname" value="" class="form-control" placeholder="Enter Username" autofocus> <br>
            <input type="text" name="email" value="" class="form-control" placeholder="Enter Email" autofocus>
            <!-- <label for="" class="text-white">Password</label> --> <br>
            <input type="password" name="pwd" value="" class="form-control" placeholder="Enter Password">
            <input type="submit" name="submit" value="Create Account" class="btn btn-dark btn-block mt-4">
            <a href="login.php" class="btn btn-outline-light btn-block mt-4">Login Here</a>

          </form>
          </div>
        </div>
      </div>

    </div>

  </body>
</html>
