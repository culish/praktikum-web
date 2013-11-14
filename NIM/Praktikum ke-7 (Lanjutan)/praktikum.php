<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
require_once('/config.php');
$sql = "SELECT * FROM mahasiswa ORDER by nim";
$sql = "SELECT * FROM mahasiswa ORDER by nama";
$sql = "SELECT * FROM mahasiswa ORDER by alamat";
$res = mysql_query($sql); 
?>

<table border=1 cellspacing=1 cellpadding=5> 
      <tr> 
        <th width=100><a href="<?php $_SERVER['PHP_SELF']?> ?by=nim">NIM</a></th>
        <th width=150><a href="<?php $_SERVER['PHP_SELF']?> ?by=nama">Nama</a></th> 
        <th width=150><a href="<?php $_SERVER['PHP_SELF']?> ?by=alamat">Alamat</a></th> 
      </tr> 

<?
// jika yang diklik kolom NIM
        if ($_GET['by'] == "nim") $orderBy = "nim";
// jika yang diklik kolom NAMA MHS
        else if ($_GET['by'] == "nama") $orderBy = "nama";
// jika yang diklik kolom ALAMAT
        else if ($_GET['by'] == "alamat") $orderBy = "alamat";
// jika tidak ada yang diklik (default)
        else $orderBy = "nim";

// query untuk menampilkan data berdasarkan field yang terurut sesuai pilihan di atas
$query = "SELECT * FROM mahasiswa ORDER BY ".$orderBy;
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
// tampilkan data
echo "<tr><td>".$data['nim']."</td><td>".$data['nama']."</td><td>".$data['alamat']."</td></tr>";
}
?>
</table>