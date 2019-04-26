        <!-- Formulario -->
        <form method="POST">
          <div class="form-group">
            <label for="proyectoNombre"><b>Nombre del proyecto:</b></label>
            <input type="text" class="form-control" id= "proyectoNombre" name="proyectoNombre" placeholder="Proyecto">
          </div>

          <div class="form-group">
            <label for="año"><b>Año del proyecto:</b></label>
            <input type="text" class="form-control" id= "año" name="año" placeholder="Año">
          </div>

          <label for="curso"><b>Curso:</b></label>
          <select class="form-control" id="curso" name="curso">
            <option>ASIR</option>
            <option>DAW</option>
          </select>
          <br>
          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Buscar" onKeyUp="buscar();">
          </div>
        </form>