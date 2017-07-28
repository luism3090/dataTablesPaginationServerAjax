<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Inicio Login</title>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.2/css/select.dataTables.min.css">

</head>
<body>
<br>
    <div class="container">
    <div class="table-responsive">
     <br>
    <div class="row">
          <div class="col-xm-12 text-center">
            <button type="button" class="btn btn-success btnRegistrarEnc"> <span class="glyphicon glyphicon-plus"></span> Registrar</button>
             <button type="button" class="btn btn-primary btnModificarEnc"> <span class="glyphicon glyphicon-pencil"></span> Modificar</button>
              <button type="button" class="btn btn-danger btnEliminarEnc"> <span class="glyphicon glyphicon-circle-arrow-down"></span> Eliminar</button>
          </div>
    </div>
    <br>
      <div class="row">
          <div class="col-xs-12 col-md-12">
                <table id="employee-grid"  class="table table-striped table-bordered"  cellspacing="0"  width="100%" style="text-align: center;">
                    <thead>
                      <tr>
                        <th>id_usuario</th>
                        <th>nombre</th>
                        <th>apellidos</th>
                        <th>email</th>
                        <th>fecha registro</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                </table>
          </div>
      </div>
      
        
    </div>
</div>
 <br><br> <br><br>

<script src="//code.jquery.com/jquery-1.12.4.js" ></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js" ></script>
<script src="https://cdn.datatables.net/select/1.2.2/js/dataTables.select.min.js" ></script>
<script src="<?php echo base_url(); ?>public/js/tabla.js"></script> 

</body>
</html>