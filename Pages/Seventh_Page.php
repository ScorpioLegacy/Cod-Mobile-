<!DOCTYPE html>

<?php
	$gunname;
?>

<html>

	<head>
		<meta charset = "utf-8">
    	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    	<title>COD Gun Guide</title>
    	<meta name = "description" content = "The main page of the COD Gun Guide website">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "../CSS/style.php" rel = "stylesheet" type = "text/css">

		<style>

			img {
				display: block;
				margin-left:  auto;
				margin-right: auto;
				width: 75px;
				height: 75px;
			}

		</style>

	</head>

	<body>

		<nav class = "navbar">

			<div class = "navbar-child one">
				<img src = "../Images/COD_Mobile_Logo.png" alt = "COD Mobile Logo">
			</div>

			<div class = "navbar-child two">
				<button class = "nav-button btn1">HOME</button>
				<button class = "nav-button btn2">GUNS</button>

			</div>

			<div class = "navbar-child three">
				<ul class = "navbar-nav">

					<li class = "navbar-item">
						<a href = "#" class = "navbar-link"></a>
					</li>
					<br>
					<li class = "navbar-item">
						<a href = "#" class = "navbar-link">SIGN OUT</a>
					</li>

				</ul>
			</div>

			
		</nav>

		<main>

			<div class = "div-container">

				<div class = "div-child one">

					<h1>
						
						<?php
							echo $gunname = "M4 - LMG";
						?>

					</h1>

				</div>

				<div class = "div-child two">

						<?php
							include 'form.php';
						?>

				</div>

			</div>

		</main>

		<footer class = "foot">

			<?php
				include 'footer.php';
			?>

		</footer>

		
	</body>

</html>