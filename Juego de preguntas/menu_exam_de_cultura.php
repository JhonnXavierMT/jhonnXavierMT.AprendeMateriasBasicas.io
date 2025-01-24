<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU DEL JUEGO</title>
</head>

<body>
    <style>
        body {
            background: rgb(29, 150, 151);
            background: linear-gradient(0deg, rgba(29, 150, 151, 1) 16%, rgba(14, 85, 158, 1) 86%);
            color: #fff;
            font-family: Arial, sans-serif;
            width: 100%;
            height: auto;
            margin: 0px;
            padding: 0px;
            border: 0px;
            text-align: center;
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
        .boton_clase {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            height: auto;
        }

        .but_img {
            background-image: url(foto/fisica3.jpg);
            background-size: cover;
            height: 200px;
            width: 200px;
            color: aliceblue;
            border-radius: 10%;
            margin: 20px;
            padding: 20px;
        }

        .but_img2 {
            background-image: url(foto/incialfisica.jpg);
            background-size: cover;
            height: 200px;
            width: 200px;
            color: aliceblue;
            border-radius: 10%;
            margin: 20px;
            padding: 20px;
        }

        .but_img3 {
            background-image: url(foto/fisica4.jpg);
            background-size: cover;
            height: 200px;
            width: 200px;
            color: aliceblue;
            border-radius: 10%;
            margin: 20px;
            padding: 20px;
        }

        .but_img4 {
            background-image: url(foto/medio.jpg);
            background-size: cover;
            height: 200px;
            width: 200px;
            color: aliceblue;
            border-radius: 10%;
            margin: 20px;
            padding: 20px;
        }
        button{
            border: #4CAF50;
        }
        .ani:hover {
            font-size: 20px;
            height: 190px;
            width: 190px;
        }
        
    </style>
    
    <h1> INICIAR JUEGO :) </h1>
    <section class=" botones_niveles">
        <div>
            <h1 class=" p-4 pb-0">UMSA FASIL | APRENDE A TU RITMO
            </h1>
            <div class="boton_clase">
                <form action="preguntas_electronica.php" >
                    <button type="submit" class="but_img ani"> ELECTRICIDAD</button>
                </form>
                <form action="menu_de_ingles.php" >
                    <button type="submit" class="but_img3 ani"> INGLES</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>