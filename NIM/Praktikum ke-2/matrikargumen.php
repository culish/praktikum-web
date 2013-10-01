<!DOCTYPE html>
<html lang="en">

<head>
<title>Generate Table</title>
</head>

<body bgcolor="blue">

<center>
<h1>GENERATE TABLE</h1>
<h3>Matrik 2 x 3</h3>
<hr />
<br>
<br>

<?php
function Create_table($baris, $kolom)
{

echo("<table border=\"1\">\n");

for($b = 0; $b < $baris; $b++) {
echo("<tr height=\"30px\">\n");

for($k = 0; $k < $kolom; $k++) {
echo("<td width=\"100px\"></td>\n");
}

echo("</tr>\n");
}
echo("</table>\n");

echo("<h3>Tabel : $baris baris dan $kolom kolom</h3>");
}
Create_table(2,3);
?>

<h6>
Input nilai matrik di berikan pada script PHP</br>
yang berupa argument
</h6>
<h2> @Culish </h2>
</center>
</body>
</html>
