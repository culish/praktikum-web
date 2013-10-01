<em><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Table Generator</title>
<style type="text/css">
<!--
#apDiv1 {
    width:178px;
    height:24px;
    z-index:1;
    left: 284px;
    top: 189px;
}
    color: #00ff00;
.style1 {
    font-weight: bold;
}
-->
</style>
</head>
<body background="yellow">
<script language="JavaScript" type="text/javascript">
function getmax() {
    var R = parseInt(document.getElementById('JumlahRow').value);
    var C = parseInt(document.getElementById('JumlahColum').value);
    var X = parseInt(document.getElementById('JumlahCell').value);
    var cellmax = document.getElementById('maxcells');
    var total = 'N/A';
    total = R * C;   
    cellmax.value = new String(total);
    if (X > total)
    {
        alert('Cell Total Yang Anda Masukkan Terlalu Besar, Nilai Maksimum Cells = ' + total);
        document.getElementById('CellsTotal').value = new String();
    }
}

</script>
<form method="post" action="TableArgument.php">
  <h3 class="style1">Generate Tabel</h3>
  <div>
    <table width="300" border="0" bgcolor="#ffffff">
      <tr bgcolor="#ffffff">
        <td width="120" style="text-align:center">Rows</td>
              <td width="189"><strong>=  </strong>
        <input name="JumlahRow" type="text" id="JumlahRow" onKeyUp="getmax();" onfocus="this.select();"/></td>
            </tr>
      <tr bgcolor="#ffffff">
        <td style="text-align:center"><label>Columns</label></td>
        <td><strong>=  </strong>
        <input name="JumlahColum" type="text" id="JumlahColum" onKeyUp="getmax();" onfocus="this.select();"/></td>
      </tr>
      <tr bgcolor="#ffffff">
        <td style="text-align:center">Cell Total </td>
        <td><strong>=  </strong>
        <input name="JumlahCell" type="text" id="JumlahCell" onKeyUp="getmax();" onFocus="this.select();"/></td>
      </tr>
      <tr bgcolor="#ffffff">
        <td style="text-align:center">Max Cells </td>
        <td><strong>=  </strong>
        <input name="maxcells" type="text" id="maxcells" readonly="readonly" style="text-align:center"/></td>
      </tr>
    </table>
  </div>
  <div id="apDiv1">
  <input type="submit" name="Generate" value="Generate"/><input type="reset" name="Reset" value="Reset"/>
  </div>
</form>
<h2> @Culish </h2>
</body>
</html></em>
