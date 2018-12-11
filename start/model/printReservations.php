<?php
require 'connection.php';


  $_SELECTreservations_SQL = "SELECT reservations.id_rev, reservations.name, reservations.num_person, reservations.consumo_asigned, reservations.table_asigned, reservations.fact, consumo.total_cost
  FROM reservations, consumo WHERE reservations.consumo_asigned = consumo.id_cons AND reservations.fact = '0'
  ORDER BY reservations.id_rev ASC";

  $consultShow = mysqli_query($con, $_SELECTreservations_SQL);
  

  while ($resultRev = mysqli_fetch_array($consultShow)) {
  ?>
    <tr>
      <td>
        <?php print $resultRev['id_rev'];?>
      </td>
      <td>
        <?php print $resultRev['name']; ?>
      </td>
      <td>
        <?php print $resultRev['table_asigned'] ?>
      </td>
      <td>
        <?php print $resultRev['num_person'] ?>        
      </td>
      <td class="text-primary">
        Q.<?php print $resultRev['total_cost'] ?>        
      </td>
    </tr>
  <?php
  }
  ?>