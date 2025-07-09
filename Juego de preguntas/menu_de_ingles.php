<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU DE INGLES</title>
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
            background-image: url(foto/INGLES_2.jpg);
            background-size: cover;
            height: 200px;
            width: 200px;
            color: aliceblue;
            border-radius: 10%;
            margin: 20px;
            padding: 20px;
        }

        button {
            border: #4CAF50;
        }

        .ani:hover {
            font-size: 20px;
            height: 190px;
            width: 190px;
        }

        .titulo {
            height: 60px;
            width: 100%;
            text-align: end;
        }

        .salir {
            text-align: center;
            background-color: rgb(255, 129, 11);
            width: 40px;
            height: 40px;
            padding-right: 35px;
            margin-right: 20px;
        }

        .salir:hover {
            background-color: rgb(186, 95, 10);
        }
    </style>
    <div class="titulo">
        <form action="menu_exam_de_cultura.php">
            <button type="submit" class="salir">X</button>
        </form>
    </div>
    <h1> INICIAR JUEGO :) </h1>
    <section class=" botones_niveles">
        <div>
            <h1 class=" p-4 pb-0">UMSA FASIL | APRENDE A TU RITMO INGLES
            </h1>
            <div class="boton_clase">

                <form action="preguntas_ingles_tools.php">
                    <button type="submit" class="but_img ani"> INGLES BASIC TOOLS</button>
                </form>
                <form action="preguntas_ingles_tools_two.php">
                    <button type="submit" class="but_img ani"> INGLES TOOLS TWO</button>
                </form>
                <form action="preguntas_ingles_verbs_simple_present.php">
                    <button type="submit" class="but_img ani"> INGLES VERBS SIMPLE PRESENT</button>
                </form>
                <form action="preguntas_Ingles_Adjetives.php">
                    <button type="submit" class="but_img ani"> INGLES ADJETIVES </button>
                </form>
                <form action="preguntas_Ingles_Adjetives_two.php">
                    <button type="submit" class="but_img ani"> INGLES ADJETIVES TWO</button>
                </form>
                <form action="preguntas_Ingles_Adjetives_three.php">
                    <button type="submit" class="but_img ani"> INGLES ADJETIVES THREE</button>
                </form>
                <form action="preguntas_Ingles_numbers1_20.php">
                    <button type="submit" class="but_img ani"> NUMBERS 1-20</button>
                </form>
                <form action="preguntas_Ingles_numbers10_100.php">
                    <button type="submit" class="but_img ani"> NUMBERS 10-100</button>
                </form>

                <form action="preguntas_ingles_pronunciation_rules.php">
                    <button type="submit" class="but_img ani"> INGLES PRONUNCIATION RULES</button>
                </form>
                <form action="preguntas_ingles_gramatica_rules.php">
                    <button type="submit" class="but_img ani"> INGLES GRAMATICA</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>