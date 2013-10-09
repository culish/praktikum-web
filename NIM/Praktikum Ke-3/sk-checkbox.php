<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Check Box dengan Preselecting</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Pendidikan Tertinggi: <br />
	<input type="checkbox" name="pend[]" value="Magister" checked="yes" />Magister <br />
	<input type="checkbox" name="pend[]" value="Sarjana" />Sarjana <br />
	<input type="checkbox" name="pend[]" value="Diploma" />Diploma <br />
	<input type="checkbox" name="pend[]" value="SMA/SMK" />SMA/SMK <br />
	<input type="checkbox" name="pend[]" value="Motorola" />Motorola <br />
	
<input type="submit" value="OK" />
</form>

<?php
	if (isset($_POST['pend'])){
		foreach($_POST['pend'] as $key => $val){
		echo $key . ' -> ' . $val . '<br />';
		}
	}
?>
</body>
</html>