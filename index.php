<!DOCTYPE html>
<html>
<head>
	<title>Conversor de monedas</title>
	<meta charset="utf-8">
		<link rel="icon" type="text/css" href="https://banner2.kisspng.com/20180802/hpp/kisspng-computer-icons-clip-art-whiskers-pok%C3%A9mon-share-ic-5b62ba5cc5d049.9962914015331968928103.jpg"> <!--Icono de la pàgina-->
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
</head>
<body>
  <!--Variables------------------------------------------------------->
    <nav id="Nav">
    	<h1>Binevenido a mi conversor de monedas</h1>
    	<br>
    	<form action="" method="post">
      <u>  <p>El dolar vale: 23.67 peso mexicano </u>
          <br>
      <br>
    		<p>Cantidad de pesos:
    			<input type="text" name="pesos" value="" size="10"></p>
    		<p>Cambio de dolares:
    			<input type="text" name="dolares" value="" size="10"></p>
    			<br>
    		<p><input type="submit" value="Enviar" name="enviar"></p>
  <!--Codigo php-->
  <?php
  if(isset($_POST['enviar']))
  {
  	$pesos = $_POST['pesos'];
  	$dolares = $_POST['dolares'];

  	$conver = ($pesos) / ($dolares);
  	echo "<br> Total = $conver dolares";
}
?>
</body>
</body>
</html>