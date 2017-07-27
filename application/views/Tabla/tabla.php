<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Inicio Login</title>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">

</head>
<body>
    <div class="container">

      <div class="row">
          <table id="employee-grid"  class="table table-striped table-bordered"  cellspacing="0"  width="100%">
            <thead>
              <tr>
                <th>id_usuario</th>
                <th>nombre</th>
                <th>apellidos</th>
                <th>email</th>
              </tr>
            </thead>
        </table>

      </div>
      
        
    </div>


<script src="//code.jquery.com/jquery-1.12.4.js" ></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js" ></script>
<script src="<?php echo base_url(); ?>public/js/tabla.js"></script> 

</body>
</html>