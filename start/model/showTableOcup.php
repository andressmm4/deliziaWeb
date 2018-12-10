<?php
require_once 'connection.php';

$_SELECT_SQL = "SELECT reservations.id_rev, reservations.name, reservations.num_person, reservations.consumo_asigned, reservations.table_asigned, reservations.fact,
consumo.id_cons, consumo.total_cost,
tables.id_table, tables.available
FROM reservations, tables, consumo
WHERE reservations.id_rev = consumo.id_cons AND reservations.fact = '0'
AND reservations.table_asigned = tables.id_table AND tables.available = '1' ORDER BY tables.id_table ASC";

$result = mysqli_query($con, $_SELECT_SQL);

while ($consult = mysqli_fetch_array($result)) {
  ?>
  <div class="col-xl-2 col-md-3 col-sm-6 hidden">
    <div class="card card-stats">
      <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
          <h2><?php print $consult['id_table']; ?></h2>
        </div>
        <p class="card-category">Mesa cupada por:</p>
        <h3 class="card-title"><?php print $consult['num_person']; ?></h3>
      </div>
      <div class="card-footer">
        <div class="">
          <a href="#" class="btn btn-success">Asignar</a>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>