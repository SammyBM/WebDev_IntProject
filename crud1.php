<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <label>Producto</label>
        <input type="text" name="nombre" id="nombre" class="form-control input-sm required" required>
        <label>Tipo</label>
        <select id="tipo" name="tipo" class="form-control input-sm required" required>
            <option value="Mobiliario">Mobiliario</option>
            <option value="Accesorios">Accesorios</option>
            <option value="Adornos">Adornos</option>
            <option value="Cortinas">Cortinas</option>
        </select>
        <label>Precio</label>
        <input type="number" name="precio" id="precio" min="1" class="form-control input-sm required" placeholder="$0.00" required>
        <label>Existencia</label>
        <input type="number" name="precio" id="existencia" min="0" max="100" class="form-control input-sm required" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="guardarNuevo" onclick="agregar();">Guardar</button>
      </div>
    </form>
    </div>
        <span id="res">
            Resultados: <?php if (isset($_GET['r'])) echo $_GET['r'];?>
        </span>
        <script type="text/javascript">
            function agregar()
            {
                document.getElementById("FrmAdd").method="post";
                document.getElementById("FrmAdd").action="funciones/create.php";
                document.getElementById("FrmAdd").submit();
            }
        </script>
  </div>
</div>

<!--JavaScript-->
<html>
<head>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
</body>
</html>