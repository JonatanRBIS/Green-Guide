<!DOCTYPE html>
<html>

<head>
    <title>GreenGuide | Registro </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styleregister.css">
</head>

<body>
    <div class="container-fluid h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="..\images\logoround.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form>
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
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <div class="form-group">
                                <label for="">Fecha de Nacimiento</label><br>
                                <input type="date" id="date" name="trip-start" value="" min="1950-01-01" max="2010-10-31">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                        <p class="warnings" id="warnings"></p>
                    </form>
                    <script src="../js/validate_data.js"></script>
                </div>
            </div>
        </div>
</body>

</html>