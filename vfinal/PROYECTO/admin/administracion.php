<?php

//Iniciamos la sesion
$sesion = session_start();

//Conectamos con la bbdd
require_once "../libs/Database.php";

$db = Database::getInstancia();

$sql = "Select * from usuario";
$sql=$db->prepare($sql);
$sql->execute();
$usuarios=$sql->fetchAll(PDO::FETCH_ASSOC);


?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
  <div class="row">


    <div class="col-md-12">
      <div class="table-responsive">


        <table id="mytable" class="table table-bordred table-striped">

          <thead>

            <th></th>
            <th>Usuario</th>
            <th>Apellido</th>
            <th>Email</th>

          </thead>
          <tbody>
            <?php 
            foreach($usuarios as $key) {
            ?>
            <tr>
              <td></td>
              <td>
              <?php echo($key['nombreusuario']);?>
              </td>
              <td>
              <?php echo($key['apellidousuario']);?>            
              </td>
              <td>
              <?php echo($key['correo']);?>
              </td>  
              <td>
              <a class="btn btn-danger"  style="color:white;" href="deleteadmin.php?del=<?php echo $key['idusuario']; ?>">Delete</a>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>

        </table>


        <form role="form" method="POST" action="logoutadmin.php">
        <button type="buton" href="logoutadmin.php" class="btn btn-default">Cerrar Sesión</button>
        </form>

    </div>
  </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"
            aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">

          <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
          <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


        </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"
            aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
      <div class="modal-body">

        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to
          delete this Record?</div>

      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>