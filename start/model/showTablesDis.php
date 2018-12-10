<?php
require 'connection.php';

$_SELECT_SQL = "SELECT * FROM tables WHERE tables.available = '0'";
$result = mysqli_query($con, $_SELECT_SQL);

while ($consult = mysqli_fetch_array($result)) {
  ?>
  <!-- FIXME: Card de las masas disponibles -->
  <div class="col-xl-2 col-md-3 col-sm-6 hidden">
    <div class="card card-stats">
      <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
          <h2><?php print $consult['id_table']; ?></h2>
        </div>
        <p class="card-category">Mesa para:</p>
        <h3 class="card-title"><?php print $consult['capacity']; ?></h3>
      </div>
      <div class="card-footer">
        <div class="">
          <input hidden type="text" name="tablesSelect" value="<?php print $consult['id_table']; ?>">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php print $consult['id_table']; ?>">
            Asignar
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- FIXME: modal de la mesa, para realizar reservación -->
  <div class="modal fade" id="<?php print $consult['id_table']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">
            <?php print $consult['id_table']; ?>
            
          </h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <br>
          <form action="">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">face</i>
                </span>
              </div>
              <input style="color: black;"  type="text" class="form-control" name="name" placeholder="Nombre">
            </div>
            <br>
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="material-icons">people</i>
                </span>
              </div>
              <input style="color: black;" type="number" class="form-control" name="numP" placeholder="Num Perosnas">
            </div>
            <input hidden type="text" name="tablesSelect" value="<?php print $consult['id_table']; ?>">
            <input type="submit" class="btn btn-primary" id="asigned" name="asigned" value="Guardar"> 
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <?php
}
?>