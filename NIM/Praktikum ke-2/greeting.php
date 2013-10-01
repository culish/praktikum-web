<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lovely Greeting</title>
</head>
<body>

<center>
<h1>
<?php
function greeting()
{
	$date = date ("G : i A");
	if ($date>=1 and $date<12) {
		echo "Selamat Pagi";
	} else if ($date>=12 and $date<17) {
		echo "Selamat Siang";
	} else if ($date>=17 and $date<24) {
		echo "Selamat Malam";
	}else echo "Error Time";
	}
?>
<?php greeting(); ?><br>

</h1>

<h3> Sekarang adalah

<?php
//Array Hari
$array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
$hari = $array_hari[date("N")];
//Format Tanggal
$tanggal = date ("j");
//Array Bulan
$array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
$bulan = $array_bulan[date("n")];
//Format Tahun
$tahun = date("Y");
//Menampilkan hari dan tanggal
echo "hari $hari, tanggal $tanggal $bulan $tahun";
?>
<br>

Waktu menunjukkan pukul
<?php
//penulisan waktu
$date = date ("G : i A");
echo "$date WIB";
?>

<h2> @Culish </h2>
</h3>
</body>

</html>
