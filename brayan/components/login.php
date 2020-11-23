
<!DOCTYPE html>
<html>

<head>
    <title>GreenGuide | Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stylelogin2.css">
</head>
<body>
<?php

if (isset($_GET)){
  if($_GET['a'] == "1"){
    echo'
    <div class="alert alert-success" role="alert">
		Usuario reguistrado con éxito
    </div>';
  }
  else if($_GET['a'] == "2"){
    echo'
    <div class="alert alert-danger" role="alert">
		Datos erroneos
    </div>';
  }
}
if (isset($_SESSION["user_id"])):

	header("Location: http://localhost/Green-Guide/brayan/views/home?a=1");

else:
?>

	<div class="container-fluid h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
						<img src="../..\images\logoround.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form id="form" method="post" action="../models/session.php">
                        <label for="">Correo Electrónico</label>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
							<input type="email" name="email" id="email" class="form-control input_user" value="" placeholder="user@example.com" required>
                        </div>
                        <label for="">Contraseña</label>
						<div class="input-group mb-2">
                            
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            
							<input type="password" name="password" id="password" class="form-control input_pass" value="" placeholder="contraseña">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	            <button type="submit" name="button" class="btn login_btn">Login</button>
				            </div>
					</form>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						¿Aún no tiene una cuenta? <a href="../components/register.php" class="ml-2">Reguistrate</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
endif;
?>