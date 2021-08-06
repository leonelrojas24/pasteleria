<!DOCTYPE html>
<html>
<head>
	<title>Conversor </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>





<body background="img/violeta.png">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

	<center><h1>Conversor de unidades </h1></center>
<form action ="aceite.php" method="POST">
<center><table class="edicion"></center>
	<tr><h3>Cantidad</h3></tr>
<br>

	
</tr>
<br>
<br>
<td>Medida</td>
<td><input type ="number" name ="can"></td>
<td>
	<select name ="uni">
		<option value ="1">Gramos</option>
		<option value ="2">Mililitros</option>
		<option value ="3">Litros</option>
</select>
</td>	
</tr>
</table>
<input type ="submit" value="Convertir">

</center>
</form>

</body>

<?php
if ($_POST){
	$can =$_POST['can'];
    $uni =$_POST['uni'];

if($uni==1){
$ml = $can*1.10;
$l =$can*1.10/1000;

echo"<center><h2>Militros:".round($ml,2)."</h2></center>";
echo"<center><h2>Litros:".round($l,2)."</h2></center>";

}


if($uni==2){
$gr = $can*0.91;
$l =$can/1000;

echo"<center><h2>Gramos:".round($gr,2)."</h2></center>";
echo"<center><h2>Litros:".round($l,2)."</h2></center>";

}





if($uni==3){
$gr = $can*1.10*1000;
$ml =$can*1000;

echo"<center><h2>Gramos".round($gr,2)."</h2></center>";
echo"<center><h2>Militros".round($ml,2)."</h2></center>";

}



}

?>

</html>
