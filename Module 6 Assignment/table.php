<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Profile Picture</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $file = fopen("users.csv", "r");
      while (($row = fgetcsv($file)) !== false) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td><img src='uploads/" . $row[2] . "' width='100' height='100'></td>";
        echo "</tr>";
      }
      fclose($file);
    ?>
  </tbody>
</table>