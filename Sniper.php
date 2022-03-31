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
    <title>Sniper</title>
    <style>
        .navbar-brand{color: black;}
        body{background-image: url('Assets/bg.png');}
        .cg{border: none; color: black; padding: 16px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 20px; margin: 4px 2px; transition-duration: 0.4s; cursor: pointer;
            background-color: black; color: white; border: 5px solid white; margin-left: 35%;}
        .cg:hover {background-color: green; color: black; border: 5px solid black;}
        .logo{width: 4%; height: 4%; margin-left: 37%;}
        h1{color: white; text-align: center; font-size: 450%;}
        .middle {transition: .5s ease; opacity: 0; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); text-align: center;}
        .container:hover .middle {opacity: 1;}
        .txt{background-color: #c9cc12; color: black; font-size: 16px; padding: 16px 32px;}
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
        <h1><b>Sniper</b></h1>
        <div class="row">
          <div class="col-md-6">
            <div class="thumbnail">
              <a href="/w3images/lights.jpg">
                <img src="Assets/xpr50.jpg" alt="Lights" style="width:100%">
                   <div class="middle">
                     <div class="txt">XPR-50</div>
                   </div>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumbnail">
              <a href="/w3images/nature.jpg">
                <img src="Assets/dl-q33.jpg" alt="Nature" style="width:100%">
                   <div class="middle">
                    <div class="txt">DL Q33</div>
                   </div>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="thumbnail">
              <a href="/w3images/fjords.jpg">
                <img src="Assets/locus.jpg" alt="Fjords" style="width:100%">                
                   <div class="middle">
                    <div class="txt">LOCUS</div>
                   </div>
              </a>
            </div>
          </div>
        </div>
      </div>
</body>
</html>