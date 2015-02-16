<?php

  mysql_connect("localhost","root", "PASSWORD");
  mysql_select_db( "fmlibrary" );
  $result_set = mysql_query( "SELECT * FROM library order by ID desc;" );
  $num_messages = mysql_num_rows( $result_set );

?>

<html>
<body>

<h1>FM Library Database </h1>

<i>There are a total of <?php echo $num_messages ?> entries in the FM Library database.</i>
<br>

<?php

echo "<table border='1'>
<tr>
<th>ID <br />(DB admin use only)</th>
<th>Genre</th>
<th>Format</th>
<th>Multidisc?</th>
<th>Catalog Number</th>
<th>Track Number</th>
<th>Track Name</th>
<th>Track Length</th>
<th>Artist/Performer</th>
<th>Composer</th>
<th>Tags / Keywords</th>
</tr>";

// Loop over all the posts and print them out.

  while( $row = mysql_fetch_assoc( $result_set ) ) {
  $field01 = 'ID';
$field02 = 'genre';
$field03 = 'format';
$field04 = 'multidisk';
$field05 = 'catalognum';
$field06 = 'tracknum';
$field07 = 'trackname';
$field08 = 'tracklength';
$field09 = 'artist';
$field10 = 'composer';
$field11 = 'tags';
  echo "<tr>";
  echo "<td>" . $row[$field01] . "</td>";
  echo "<td>" . $row[$field02] . "</td>";
 echo "<td>" . $row[$field03] . "</td>";
echo "<td>" . $row[$field04] . "</td>";
echo "<td>" . $row[$field05] . "</td>";
echo "<td>" . $row[$field06] . "</td>";
echo "<td>" . $row[$field07] . "</td>";
echo "<td>" . $row[$field08] . "</td>";
echo "<td>" . $row[$field09] . "</td>";
echo "<td>" . $row[$field10] . "</td>";
echo "<td>" . $row[$field11] . "</td>";
echo "</tr>";
  }
  
echo "</table>";

?>

