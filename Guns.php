<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Assets/icon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Guns</title>
    <style>
        .navbar-brand{color: black;}
        body{background-image: url('Assets/bg.png');}
        .cg{border: none; color: black; padding: 16px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 20px; margin: 4px 2px; transition-duration: 0.4s; cursor: pointer;
            background-color: black; color: white; border: 5px solid white; margin-left: 35%;}
        .cg:hover {background-color: green; color: black; border: 5px solid black;}
        .logo{width: 4%; height: 4%; margin-left: 37%;}
        h1{color: white; text-align: center;}
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark" style="background-color: gray;">
        <div class="container">
            <a class="navbar-brand" href="Home.php">Home</a>
            <a class="navbar-brand" href="Guns.php">Guns</a>
            <img class="logo" src="Assets/codlogo.png">
            <a class="navbar-brand" style="float: right; font-size:100%;" href="#">Log Out</a>
            <a class="navbar-brand" style="float: right;">Welcome Username</a>
        </div>
    </nav> 
    <div class="container">
        <h1><b>Choose a Gun</b></h1>
        <div class="row">
          <div class="col-md-6">
            <div class="thumbnail">
              <a href="Sniper.php">
                <img src="Assets/2.png" alt="Lights" style="width:100%">
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumbnail">
              <a href="Assualt.php">
                <img src="Assets/3.png" alt="Nature" style="width:100%">
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="thumbnail">
              <a href="LMG.php">
                <img src="Assets/1.png" alt="Fjords" style="width:100%">    
              </a>
            </div>
          </div>
        </div>
      </div>
</body>
</html>