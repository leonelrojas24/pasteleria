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
<form action ="mantequilla.php" method="POST">
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
		<option value ="1">Cdas</option>
		<option value ="2">Cdtas</option>
		<option value ="3">Tazas</option>
		<option value ="4">Gramos</option>
</select>
</td>	
</tr>
</table>
<input type ="submit" value="Convertir">
</form>

</body>

<?php
if ($_POST){
	$can =$_POST['can'];
    $uni =$_POST['uni'];

if($uni==1){
$cdtas = $can*3;
$tazas = $can*0.065;
$gramos =$can*14.05;

echo"<h2>Cdas:".round($cdtas,2)."</h2>";
echo"<h2>Tazas:".round($tazas,2)."</h2>";
echo"<h2>Gramos:".round($gramos,2)."</h2>";
}




if($uni==2){
$cdas = $can*0.33;
$tazas = $can*0.02;
$gramos =$can*4.69;

echo"<center><h2>Cdas:".round($cdas,2)."</h2></center>";
echo"<center><h2>Tazas:".round($tazas,2)."</h2></center>";
echo"<center><h2>Gramos:".round($gramos,2)."</h2></center>";
}


if($uni==3){
$cdas= $can*16;
$cdtas = $can*48;
$gramos =$can*225;

echo"<center><h2>Cdas:".round($cdas,2)."</h2></center>";
echo"<center><h2>Cdtas:".round($cdtas,2)."</h2></center>";
echo"<center><h2>Gramos:".round($gramos,2)."</h2></center>";
}


if($uni==4){
$cdas= $can*0.07;
$cdtas = $can*0.21;
$tazas =$can*0.0044;

echo"<center><h2>Cdas:".round($cdas,2)."</h2></center>";
echo"<center><h2>Cdtas:".round($cdtas,2)."</h2></center>";
echo"<center><h2>Tazas:".round($tazas,2)."</h2></center>";
}



}


?>

</html>
