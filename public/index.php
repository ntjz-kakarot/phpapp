<?php

$dbconn = pg_connect("host=cblpostgres124142357.postgres.database.azure.com port=5432 dbname=phpapp user=nadmin password=pass#word1123 sslmode=require");
$result = pg_query($dbconn, "SELECT migration, migrated_at FROM schema_migrations");
$data = pg_fetch_all($result);
?>

<style>
.table-container {
  margin: 20px;
}
table {
  width: 100%;
}
table tr th {
  text-align: left;
  background-color: #D9E2EC;
}

</style>

<div class="table-container">
  <table>
    <tr>
      <th>migration_suthula</th>
      <th>migrated_at</th>
    </tr>
    <?php foreach ($data as $row) {?>
      <tr>
        <td><?php echo $row["migration"] ?></td>
        <td><?php echo $row["migrated_at"] ?></td>
      </tr>
    <?php } ?>
  </table>
</div>
