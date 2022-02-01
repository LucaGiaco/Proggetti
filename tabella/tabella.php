<!DOCTYPE html>
<html>
    <head>
        <title>SOFTWARE LIBERO</title>
        <link rel="stylesheet" href="tabella.css">
    </head>
<body>
<table>
<?php
for ($r = 0; $r < 1; $r++) {
echo "<tr>";
for ($c = 0; $c < 4; $c++) {
  echo "<th> riga$r colonna$c </th>";
}
echo "</tr>";
}

for ($r; $r < 4; $r++) {
echo "<tr>";
for ($c = 0; $c < 4; $c++) {
  echo "<td>  riga$r colonna$c</td>";
}
echo "</tr>";
}

?>
</table>
</body>
</html>
