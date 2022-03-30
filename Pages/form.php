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
		<link href = "../CSS/style.php" rel = "stylesheet" type = "text/css">

		<style>
		
			input {
				border:  none;
				color:  white;
				padding:  16px 32px;
				text-align:  center;
				text-decoration: none;
				display:  block;
				margin: 4px 2px;
				transition-duration:  0.4s;
				cursor:  pointer;
			}

			input {
				background-color: white;
				width: 400px;
				border-radius: 25px;
				margin-left: 3px;
				color:  black;
				border-color:  gray;
			}

			input:hover {
				background-color:  #bf0000;
				color: white;
			}


		</style>

	</head>

	<body>
		<main>

			<div class = "div-container">

				<div class = "div-child two">

					<form action = "#">

						<h2>LOADOUT</h2>
						<label for = "muzzle">Muzzle: </label>
						<select name = "muzzle" id = "muzzle">
							<option value = "muzzle0"></option>

						</select>

						<br><br>

						<label for = "barrel">Barrel: </label>
						<select name = "barrel" id = "barrel">
							<option value = "barrel0"></option>

						</select>

						<br><br>

						<label for = "optic">Optic: </label>
						<select name = "optic" id = "optic">
							<option value = "optic0"></option>

						</select>

						<br><br>

						<label for = "stock">Stock: </label>
						<select name = "stock" id = "stock">
							<option value = "stock0"></option>

						</select>

						<br><br>

						<label for = "perk">Perk: </label>
						<select name = "perk" id = "perk">
							<option value = "perk0"></option>

						</select>

						<br><br>

						<label for = "reargrip">Rear Grip: </label>
						<select name = "reargrip" id = "reargrip">
							<option value = "reargrip0"></option>

						</select>

						<br><br>

						<label for = "ammo">Ammunition: </label>
						<select name = "ammo" id = "ammo">
							<option value = "ammo0"></option>

						</select>

						<br><br>

						<label for = "underbrrel">Under Barrel: </label>
						<select name = "underbarrel" id = "underbarrel">
							<option value = "underbarrel0"></option>

						</select>

						<br><br>

						<label for = "laser">Laser: </label>
						<select name = "laser" id = "laser">
							<option value = "laser"></option>

						</select>

						<br><br><br>

						<input type = "submit" value = "Publish">

					</form>

				</div>

			</div>

		</main>

		
	</body>

</html>
