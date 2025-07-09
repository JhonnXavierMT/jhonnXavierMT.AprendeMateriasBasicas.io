<?php
session_start();

$diccionario = [
    //SECCION HERRAMIENTAS
    "ABIERTO"=> "OPEN",
    "CERRADO"=> "CLOSED",
    "HORRIBLE-FEO"=> "UGLY",
    "HERMOSA"=> "BEAUTIFUL",
    "LIVIANO"=> "LIGHT",
    "PESADO"=> "HEAVY",
    "PROFUNDO"=> "DEEP",
    "POCO PROFUNDO"=> "SHALLOW",
    "ALTO (PERSONA)"=> "TALL",
    "BAJO (PERSONA)"=> "SHORT",
    "OSCURO"=> "DARK",
    "CLARO"=> "LIGHT",
    "PEQUEÑO"=> "SMALL",
    "GRANDE"=> "BIG",
    "MOJADO"=> "WET",
    "SECO"=> "DRY",
    "RUIDOSO"=> "NOISY",
    "SILENCIOSO"=> "QUITE",
    "TRISTE"=> "SAD",
    "FELIZ"=> "HAPPY",
];

$_SESSION['contadoralert'] = 0;
$claves = array_keys($diccionario);
// Inicializa los contadores y variables de sesión si no existen
if (!isset($_SESSION['contador'])) $_SESSION['contador'] = 0;
if (!isset($_SESSION['contadorAleatorio'])) $_SESSION['contadorAleatorio'] = 0;
if (!isset($_SESSION['ayuda'])) $_SESSION['ayuda'] = "Suerte";

function reinicio()
{
    $_SESSION['ayuda'] = "Suerte";
    $_SESSION['contadorAleatorio'] = 0;
    $_SESSION['contador'] = 0;
    $_SESSION['contadoralert'] = 0;
    header("Location: menu_de_ingles.php");
    exit();
}

function obtenerPalabraAleatoria()
{
    $palabras = ["CORRECTO :)", "SIUUUU", "BIEN AHI PAPU", "TRANQUILO CORCHO XD"];
    return $palabras[array_rand($palabras)];
}

function verificar_respuesta($valor, $diccionario)
{
    $claves = array_keys($diccionario);
    $respuestaCorrecta = strtoupper($diccionario[$claves[$_SESSION['contador']]]);

    if ( rtrim(strtoupper($valor)) === $respuestaCorrecta) {
        $_SESSION['contador']++;
        $_SESSION['contadoralert'] = 1;
        return obtenerPalabraAleatoria();
    } else {
        $_SESSION['ayuda'] = $respuestaCorrecta;
        $_SESSION['contador'] = 0;
        $_SESSION['contadoralert'] = -1;
        return '';
    }
}

// Verifica si se ha hecho clic en el botón para incrementar el contador
$resultado = '';
if (isset($_POST['btn_enviar'])) {
    $valorIngresado = $_POST['respuesta_usuario'];
    $resultado = verificar_respuesta($valorIngresado, $diccionario);
}

if (isset($_POST['btn_reinicio'])) {
    reinicio();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pronunciasion de Ingles</title>
    <link rel="stylesheet" href="nuevo_estilo.css">
    <link rel="stylesheet" href="package/dist/sweetalert2.min.css">
    <script src="package/dist/sweetalert2.min.js"></script>
</head>

<body>
    <div class="titulo">
        <form method="post">
            <button type="submit" name="btn_reinicio" class="salir">X</button>
        </form>
    </div>
    <div class="formulario">
        <div class="contenedor">
            <div class="pregunta">
                <h2>
                    <?php
                    echo ($claves[$_SESSION['contador']]);
                    ?>
                </h2>
            </div>
            <form method="post" class="hola">
                <label for="respuesta">Ingrese su respuesta:</label>
                <br><br>
                <input type="text" name="respuesta_usuario" autocomplete="off" class="ingreso">
                <br><br>
                <button type="submit" name="btn_enviar">VERIFICAR</button>
                <br><br>
                <button type="reset">LIMPIAR</button>
            </form>
            <div>
                <h4>
                    <?php
                    if ($resultado) {
                        echo "CONTADOR: " . $_SESSION['contador'];
                    }
                    if ($_SESSION['contador'] == count($diccionario)) {
                        $_SESSION['contador'] = 0;
                        $_SESSION['contadoralert'] = 0;
                        echo '<script type="text/javascript">window.location.href = "final_del_juego.php";</script>';
                        exit();
                    }                    
                    ?>
                </h4>
            </div>
        </div>
        <?php
        if ($_SESSION['contadoralert'] != 0) {
            $alertOptions = [
                'success' => [
                    'title' => 'CORRECTO SIGUIENTE PREGUNTA',
                    'text' => strtoupper($resultado),
                    'icon' => 'success',
                    'timer' => 1000,
                ],
                'error' => [
                    'title' => 'LA RESPUESTA ERA ' . strtoupper($_SESSION['ayuda']),
                    'text' => 'VUELVES AL INICIO :/',
                    'icon' => 'error',
                    'confirmButtonText' => 'Aceptar',
                    'confirmButtonColor' => '#3085d6',
                ],
            ];

            $alertType = $_SESSION['contadoralert'] > 0 ? 'success' : 'error';
        ?>
            <?php
            $alertTitle = $alertOptions[$alertType]['title'];
            $alertText = $alertOptions[$alertType]['text'];
            $alertIcon = $alertOptions[$alertType]['icon'];
            $showConfirmButton = $alertType == 'success' ? 'false' : 'true';
            $timer = $alertType == 'success' ? $alertOptions[$alertType]['timer'] : 'null';
            $confirmButtonText = $alertType == 'error' ? $alertOptions[$alertType]['confirmButtonText'] : '';
            $confirmButtonColor = $alertType == 'error' ? $alertOptions[$alertType]['confirmButtonColor'] : '';
            ?>

            <script>
                Swal.fire({
                    title: '<?= $alertTitle; ?>',
                    text: '<?= $alertText; ?>',
                    icon: '<?= $alertIcon; ?>',
                    <?php if ($alertType == 'success') { ?>
                        showConfirmButton: <?php echo $showConfirmButton; ?>,
                        timer: <?php echo $timer; ?>
                    <?php } else { ?>
                        confirmButtonText: '<?php echo $confirmButtonText; ?>',
                        confirmButtonColor: '<?php echo $confirmButtonColor; ?>'
                    <?php } ?>});
            </script>

        <?php
        }
        ?>
    </div>
</body>

</html>