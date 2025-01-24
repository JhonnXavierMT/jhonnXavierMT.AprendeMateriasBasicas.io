<?php 
session_start();
function recetearContador(){
    unset($_SESSION['num_intentos']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> final del juego </title>
</head>
<body>
	<style>
		body {
			background-color: #1c1c1c;
			color: #fff;
			font-family: Arial, sans-serif;
		}

		header {
			padding: 20px;
			text-align: center;
			background-color: #232323;
		}

		h1 {
			margin: 0;
			font-size: 36px;
		}

		section {
			padding: 50px;
			text-align: center;
		}

		img {
			max-width: 100%;
			height: auto;
			margin-bottom: 20px;
		}

		h2 {
			margin: 0;
			font-size: 24px;
			margin-bottom: 20px;
		}

		p {
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 20px;
		}

		button {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 18px;
			cursor: pointer;
		}

		button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<header>
		<h1>¡Felicidades! Has completado el juego</h1>
	</header>
	<section>
		<img src="foto/gatos.jfif" alt="Imagen de juego completado">
		<h2>¡Enhorabuena!</h2>
		<p>Estas listo para dar el examen sin miedo al Éxito XD </p>
        <p>Costo nomas realizar esta wea ":v</p>
        <form action="menu_exam_de_cultura.php">
            <?php recetearContador()?>
        <button type="submit" >Volver a jugar</button>
        </form>
		
	</section>

</body>
</html>