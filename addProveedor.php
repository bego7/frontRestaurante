<?php 
  if($_SESSION['usuario']['rol']!=1){
          
          header("location:home.php");
  }
	if ( !empty($_POST)) {
		
		// keep track post values		
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$direccion   = $_POST['direccion'];
		
			$sql = "INSERT INTO proveedores ( nombre, correo, telefono, direccion) values(?, ?, ?,?)";			
			$stmt = $pdo->prepare($sql);
            $stmt->execute([$nombre, $correo, $telefono, $direccion]);	
            
            echo '<script type="text/javascript">'; 
            echo 'setTimeout(function () { swal("¡ÉXITO!","Se ha agregado un nuevo proveedor","success");'; 
            echo '}, 500);</script>'; 
		
	}
?>


<div class="modal fade" id="modalAddProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Agregar proveedor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">

       <form action="proveedores.php" method="post">

       <div class="md-form mb-5">
          <input type="text" id="defaultForm-email" class="form-control validate" name="nombre" >
          <label data-error="wrong" data-success="right" for="defaultForm-email">Nombre</label>
        </div>

        <div class="md-form mb-5">
          <input type="email" id="defaultForm-email" class="form-control validate" name="correo" >
          <label data-error="wrong" data-success="right" for="defaultForm-email">Correo</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="defaultForm-email" class="form-control validate" name="telefono" >
          <label data-error="wrong" data-success="right" for="defaultForm-email">Teléfono</label>
        </div>


        <div class="md-form mb-5">
          <input type="text" id="defaultForm-email" class="form-control validate" name="direccion" >
          <label data-error="wrong" data-success="right" for="defaultForm-email">Dirección</label>
        </div>
       
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit"  class="btn btn-default">Agregar</button>
      </div>

      </form>
    </div>
  </div>
</div>