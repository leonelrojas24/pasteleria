
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<style>
img.zoom {

    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
}
 
.transition {
    -webkit-transform: scale(0.9); 
    -moz-transform: scale(0.9));
    -o-transform: scale(0.9));
    transform: scale(0.9));
}


.botones{
 float: right;
margin-top: 10px;
margin-bottom: 10px;
margin-bottom: 10px;
padding-left: 10px;
color: red;
font-size: relative;

}

.titulo{
color: red;
 font-family: Helvetica, Sans-serif;
  color:red;
  font-size: 48px;
  font-weight: bold; 
  font-style: italic;
}

p { 
color: black;
 font-family: Helvetica;

}

#footer {
    width: 100%;
    height: 81px;
    position: absolute;
margin-bottom: -20px;
padding-left: 10px;
    bottom: 0;
    left: 0;
    color: black;
}

</style>
<body background="img/violeta.png">
<br>
<br>
<br>
<br>

<div class="titulo">
<center><img src ="img/chef.png" class="zoom" width="84"><h1 class="zoom" >Convertidor de unidades</center>
   <center  class="zoom"> <h3>Resposteria</h3></center>
</div>
<br>
<br>

<div class ="botones">
<div class ="row">
<div class="col-sm-4">
<img src ="img/aceite.png"  class ="zoom" width="150"><a href ="javascript:popUp ('aceite.php')"><p>Aceite</a>
</img></p></div>	
<div class="col-sm-4">
<img src ="img/azucar.png" width="150" class ="zoom" ><a href ="javascript:popUp ('azucar.php')"><p>Azucar</a>
</img></p></div>
<div class="col-sm-4">	
<img src ="img/mantequilla.png" width="150" class ="zoom" ><a href ="javascript:popUp ('mantequilla.php')"><p>Mantequilla</a>
</img></p></div>


<div class ="botones">
<div class ="row">
<div class="col-md-4">
<img src ="img/harina.png" width="150" class ="zoom"><a href ="javascript:popUp ('harina.php')"><p>Harina</a>
</img></p></div>	
<div class="col-md-4">
<img src ="img/leche.png" width="150" class ="zoom"><a href ="javascript:popUp ('leche.php')"><p>Leche entera</a>
</img></p></div>
<div class="col-md-4">
<img src ="img/chocolate.png" width="150" class ="zoom"><a href ="javascript:popUp ('cacao.php')"><p>Chocolate en polvo</a>
</img></p></div>
<br>
<br>

<div>

</div>
</div>
</div>
<br>
<br>

 <div id="footer"><center><h5>Zebra Solutions 2021</h5></center></div>
</body>

</html>

 <script type="text/javascript">
    function popUp(URL) {
        window.open(URL, 'Nombre de la ventana', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=400,height=600,left = 390,top = 50');
    }
    </script>

<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>