<!DOCTYPE html>
<html>
<head>
	<title>Buscador de Palíndromos</title>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
	<link rel="stylesheet" href="css/sweetalert2.css">
</head>
<body>
	<h1 style="color: white; background-color: black; text-align: center;">Validar Palíndromos</h1>
	<form id="form" >
		<label for="frases">Ingrese de 1 hasta 5 frases:</label><br>
		<input type="text" name="frase1" id="frase1"><br><br>
		<input type="text" name="frase2" id="frase2"><br><br>
		<input type="text" name="frase3" id="frase3"><br><br>
		<input type="text" name="frase4" id="frase4"><br><br>
		<input type="text" name="frase5" id="frase5"><br><br>
	</form>
	<button id="procesar">Procesar</button>

	<script src="js/jquery-3.7.0.js"></script>
	<script src="js/sweetalert2.js"></script>
	<script src="js/validar.js"></script>
</body>
</html>
