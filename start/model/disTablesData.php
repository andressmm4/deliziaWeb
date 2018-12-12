<?php
require 'connection.php';
  
  try {
    $_COUNT_SQL = "SELECT count(*) AS totalTables FROM tables WHERE tables.available = '0'";
    $resultCount = mysqli_query($con, $_COUNT_SQL);

    while ($consult = mysqli_fetch_array($resultCount)) {
      $totalTables = $consult['totalTables'];
      ?>
        <span><?php print $totalTables; ?> /20</span>
      <?php
    }
  } catch (\Exception $e) {}

  ?>