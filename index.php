<?php
  session_start();

    if (!isset($_SESSION['u_id'])) {

        header("Location: login.php");
        exit();
    }


 ?>
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
  <body class="bg-light">

    <div class="container-fluid">
      <div class="jumbotron text-center">

        <h1>Welcome !<span class="text-success" style="text-transform: capitalize;"> <?php echo $_SESSION['u_name']; ?> </span></h1>

        <br><br>
        <form class="form" action="./includes/logout.inc.php" method="POST">
          <input class="btn btn-danger" type="submit" name="submit" value="Logout">
        </form>
      </div>
    </div>
  </body>
</html>
