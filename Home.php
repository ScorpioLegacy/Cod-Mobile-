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
    <title>Home</title>
    <style>
        .navbar-brand{color: black; font-size: 180%;}
        body{background-image: url('Assets/bg.png');}
        .cg{border: none; color: black; padding: 16px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 20px; margin: 4px 2px; transition-duration: 0.4s; cursor: pointer;
            background-color: black; color: white; border: 5px solid white; margin-left: 40%;}
        .cg:hover {background-color: green; color: black; border: 5px solid black;}
        .logo{width: 5%; height: 5%; margin-left: 33%;}
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
      <div class="item active">
        <img src="Assets/1.png" style="width:100%;">
      </div>

      <div class="item">
        <img src="Assets/2.png" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="Assets/3.png" style="width:100%;">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

    <br>
<button class="cg" type="submit">CREATE GUIDE</button>
  </div>
</div>
</body>
</html>