<!doctype html>

<html lang="en">

<head>
    <title>GreenGuide | Registro </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleregister.css">
</head>

<body>
<?php
if (isset($_GET)){
  if($_GET['a'] == "1"){
    echo'
    <div class="alert alert-danger" role="alert">
      Error al registrar usuario
    </div>';
  }
}

?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6" style="  display: flex;
          justify-content: center;
          align-items: center;">
        <div class="container" style=" text-align:center">
          <h1 style="font-size: 8em; ">Green Guide</h1>
        </div>
      </div>
      <div class="col-md-6">
        <div class="d-flex justify-content-center h-100" style="margin-top:10%">
          <div class="user_card">
            <div class="d-flex justify-content-center">
              <div class="brand_logo_container">
                <img src="../../images/logoround.png" class="brand_logo" alt="Logo">
              </div>
            </div>
            <div class="d-flex justify-content-center form_container">
              <form id="form" method="post" action="../models/register_user.php">
                <div class="form-group mb-3">
                  <label for="">Nombre de usuario</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="">Correo electronico</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="">Dirección</label>
                  <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="">Confirmar contraseña</label>
                  <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="" required>
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                <div class="form-group">
                  <input type="date" id="date" name="date"
                    value=""
                    min="1950-01-01" max="2010-10-31">
                </div>
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                  <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
                <p class="warnings" id="warnings"></p>
              </form>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
  <!-- Minified Bootstrap CSS -->
  <!-- Minified Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../js/validate_data.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $('#datepicker').datepicker({
      uiLibrary: 'bootstrap4',
      locale: 'es-es',
    });
  </script>
</body>

</html>