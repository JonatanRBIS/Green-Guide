<?php
include_once('../components/footer.php');
?>
<!doctype html>

<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <script src="js/bootstrap-datetimepicker.min.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6" style="  display: flex;
          justify-content: center;
          align-items: center;">
        <div class="container" style=" text-align:center">
          <h1 style="font-size: 8vw; ">Green Guide</h1>
        </div>
      </div>
      <div class="col-md-6">
        <div class="jumbotron" style="text-align: center; margin:10%; display: flex;
            justify-content: center;
            align-items: center;">
          <div class="container">
            <h1 class="display-3" style="font-size: 3vw;">Reguistrarse</h1>
            <hr class="my-2" style="margin-top:20%">
            <form action="reguister_user.php" method="post" style="margin-top:20%" id="form">
              <div class="form-group">
                <label for="">Nombre de usuario</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="">Correo electronico</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="">
              </div>
              <div class="form-group">
                <label for="">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="">Confirmar contraseña</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="" required>
              </div>
              <div class="form-group">
                <input type="date" id="date" name="trip-start" value="" min="1950-01-01" max="2010-10-31">
              </div>
              <button type="submit" class="btn btn-primary">Reguistrarse</button>
              <p class="warnings" id="warnings"></p>
            </form>
            <script src="../js/validate_data.js"></script>
          </div>
        </div>
      </div>
    </div>
    <?php
    footer();
    ?>
  </div>
  <!-- Minified Bootstrap CSS -->
  <!-- Minified Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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