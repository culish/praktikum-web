<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seleksi dengan Preselecting</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Pendidikan Tertinggi:
	<select name="pend">
		<option value="Sarjana" />Sarjana
		<option value="Diploma" />Diploma
		<option value="SMA/SMK" selected="yes" />SMA/SMK
	</select>
	<br />
<input type="submit" value="OK" />
</form>

<?php
	if (isset($_POST['pend'])){
		echo $_POST['pend'];
	}
?>
</body>
</html>