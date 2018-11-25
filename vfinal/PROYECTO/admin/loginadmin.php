<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SkySound</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed');
		* {
			margin: 0;
			padding: 0;
			font-family: 'IBM Plex Sans Condensed', sans-serif;
		}

		body {
            background-image: url(../background.jpg);
        }

		.title{
			text-align: center;
			color: #fff;
		}

		.formOuter {
			margin: 25px 0 25px 0;
		}

		.formInner {
			border: 2px solid;
			border-top-color: #FF8022;
			border-right-color: #EE161F;
			border-bottom-color: #1CB34B;
			border-left-color: #3D46CD; 
			padding: 20px;
		}

		form {
			margin-top: 25px;
		}

		label {
			font-weight: bold;
			color: #fff;
		}

		.form-group {
			position: relative;
		}

		.form-group .customInput {
			padding-left: 45px;
		}

		.form-group i {
			position: absolute;
			left: 0;
			top: 33px;
			padding: 9px 12px;
			color: #aaa;
		}

		.warning-text {
			margin: 20px 0 20px 0;
			color: #B42424;
		}

		.iniciar{
			position: relative;
			text-align: center;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<header>
<?php
if (isset($_GET["exito"])):
    echo "<h3 style=\"color: green\">El registro se ha realizado correctamente</h3>" ;
   endif ;


   
?>
</header>
<body>
	<div class="formOuter">
		<div class="container">
			

			<div class="col-md-6 offset-md-3">
				<div class="formInner">
					<h1 class="title">Login Admin</h1>
					<form  method="POST" action="validaradmin.php">
						<div class="form-group">
							<label for="name">UsuarioAdmin:</label>
							<input type="text" name="nom" class="form-control customInput">
							<i class="fa fa-fw fa-lg fa-envelope" aria-hidden="true"></i>
							<p class="warning-text"></p>
						</div>
						<div class="form-group">
							<label for="password">ContraseñaAdmin:</label>
							<input type="password" name="pwd" class="form-control customInput">
							<i class="fa fa-fw fa-lg fa-unlock" aria-hidden="true"></i>
							<p class="warning-text"></p>
						</div>
						<input type="submit" name="submit" value="Iniciar sesión"  class="btn btn-lg btn-success">
						
					</form>
				</div>
				
			</div>
		</div>
	</div>
	


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>