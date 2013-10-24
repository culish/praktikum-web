<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
        <title>Halaman Administrator</title>
        <style type="text/css">
        body{
        background-color:#99FF00;
        color:#CC3300;
        }
        a{
        color:#CC3330;
        }
        .inner{
        margin: 200px auto;
        padding: 20px;
        width: 240px;
        border:7px dotted #000000;
        }
        </style>
</head>
<body bgcolor="33FF33">

<p>
<?php

ini_set('display_errors', 1);
define('_VALID', 1);

require_once('./oten.php');
init_login();
validate();
?>

</p>
        <marquee behavior="alternate" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">
    	<span class="style8">● Selamat datang di Portal Informasi Akademik UM ●
        </span>
        </marquee>	
        <h1 style="font-size:18px" style="font-style:inherit" style="border-color:#990099" style="font-stretch:ultra-condensed">
           
		<ul>
			<li>Home</li>
            <li>Produk</li>
			<li>Perusahaan</li>
			<li>Lowongan Kerja</li>
		</ul>
        <p align="center"><a href="?m=logout"><h3>Logout</h3></a></p>
</body>
 
</html>