<!-- Formulario -->
<section class="form-simple">

  <!-- Estilo del formulario -->
    <div class="card form-index">

        <!-- Cabecera -->
        <div class="header pt-2">

            <div class="row justify-content-center d-flex" >
                <h3 class="mt-3 mx-2">Inicia sesión:</h3>
            </div>
            
        </div>

      <!-- Cuerpo del formulario para que quede centrado -->
      <div class="card-body mx-4 mt-4" style="padding-top: 1px;">

        <!-- Formulario -->
        <form action="registro.php" method="POST">
          <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id= "correo" name="correo" placeholder="Insertar correo">
          </div>

          <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input type="password" class="form-control" id= "contraseña" name="contraseña" placeholder="Insertar contraseña">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Entrar">
          </div>
        </form>

      </div>

    </div>

<section/>