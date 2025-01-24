<?php
session_start();
$diccionario = [
    "Es la magnitud necesaria para empujar las cargas"   => "VOLTAJE",
    "Es todo aquello que ocupa un lugar en el espacio"   => "MATERIA",
    "Espacio donde interactúan los polos"                => "CAMPO MAGNETICO",
    "Espacio donde interactúan las cargas"               => "CAMPO ELECTRICO",
    "Es la propiedad de los materiales de oponerse al paso de corriente eléctrica" => "RESISTORES",
    "Capacidad de realizar el trabajo de la materia"     => "ENERGIA",
    "Es el trabajo o energía para movilizar cargas"      => "TENSION",
    "Nombre de los materiales que tienen más de 4 electrones"     => "AISLANTES",
    "Nombre de los materiales que tienen igual a 4 electrones"    => "SEMICONDUCTORES",
    "Nombre de los materiales que tienen menos de 4 electrones"   => "CONDUCTORES",
    "¿Cómo se denomina a la velocidad de transferencia de cargas?"   => "INTENSIDAD",
    "¿Cómo se denomina a la manipulación de la materia a una escala atómica?"  => "NANOTECNOLOGIA",
    "Es una trayectoria cerrada"    => "CIRCUITO",
    "Es un conjunto de elementos eléctricos interconectados por el que circula una intensidad"  => "CIRCUITO ELECTRICO",
    "Mencione los elementos de un circuito eléctrico que son implícitos (póngalos separados por una ',')" => "FUENTE,CARGA,CONDUCTORES",
    "Mencione los elementos de un circuito eléctrico que son explícitos (póngalos separados por una ',')" => "ELEMENTOS DE MANIOBRA,ELEMENTOS DE PROTECCION",
    "¿Qué clase de circuito comparte una sola de sus terminales?"         => "CIRCUITO EN SERIE",
    "¿Qué clase de circuito comparte ambas de sus terminales?"            => "CIRCUITO EN PARALELO",
    "Es aquel elemento activo que tiene la capacidad de entregar energía eléctrica"     => "FUENTE",
    "Es aquel elemento pasivo que precisa de energía eléctrica para su funcionamiento"  => "CARGA",
    "Son aquellos materiales de baja resistividad que se utilizan para interconectar los demás elementos eléctricos"   => "CONDUCTOR",
    "Son aquellos elementos que habilitan o inhabilitan el paso de intensidad de corriente"   => "ELEMENTOS DE MANIOBRA",
    "Son aquellos elementos que protegen a los demás elementos del circuito"      => "ELEMENTOS DE PROTECCION",
    "¿Cuántos tipos de fuentes existen aparte de las fuentes independientes?"   => "FUENTES DEPENDIENTES",
    "Dentro de la Fuente Independiente: Mencione las dos fuentes de tensión mediante sus siglas (póngalas separadas por una ',')" => "DC,AC",
    "Dentro de la Fuente Independiente: Mencione las dos fuentes de corriente mediante sus siglas (póngalas separadas por una ',')" => "DC,AC",
    "Dentro de la Fuente Dependiente: Mencione las cuatro fuentes mediante sus siglas (póngalas separadas por una ',')" => "FTCT,FTCC,FCCT,FCCC",
    "La fuente de tensión tiene dos ________" => "SIGNOS",
    "La fuente de corriente no tiene polaridad, tiene ________" => "DIRECCION",
    "Es aquella fuente que entre sus bornes proporciona una diferencia de potencial (tensión) independiente de la intensidad" => "FUENTE DE TENSION",
    "Es aquella fuente que entre sus terminales proporciona una intensidad independiente de la tensión" => "FUENTE DE CORRIENTE",
    "Escriba la primera ley de Ohm que contiene la variable (Resistencia)" => "V=IR",
    "Escriba la segunda ley de Ohm que contiene la variable (Potencia)" => "P=IV",
    "Escriba la fórmula de la resistencia que contiene la variable (P:la resistividad de un material)" => "R=(PL)/S",
    "Escriba la fórmula del período" => "T=1/F",
    "Es aquella señal que varía en amplitud y sentido en función del tiempo" => "CORRIENTE ALTERNA",
    "Es aquella señal que circula en un solo sentido" => "CORRIENTE DIRECTA",
];
$_SESSION['contadoralert'] = 0;
// Inicializa el contador si no existe
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}
if (!isset($_SESSION['contadorAleatorio'])) {
    $_SESSION['contadorAleatorio'] = 0;
}
if (!isset($_SESSION['ayuda'])) {
    $_SESSION['ayuda'] = "Suerte";
}
function reinicio()
{
    $_SESSION['ayuda'] = "Suerte";
    $_SESSION['contadorAleatorio'] = 0;
    $_SESSION['contador'] = 0;
    $_SESSION['contadoralert'] = 0;
    header("Location: menu_exam_de_cultura.php");
    exit();
}
// acceso a las claves del diccionario
$claves = array_keys($diccionario);
function obtenerPalabraAleatoria()
{
    // Array con cuatro palabras
    $palabras = ["CORRECTO :)", "SIUUUU", "BIEN AHI PAPU", "TRANKILO CORCHO XD"];

    // Obtener un índice aleatorio del array
    $indiceAleatorio = array_rand($palabras);

    // Devolver la palabra correspondiente al índice aleatorio
    return $palabras[$indiceAleatorio];
}
function verificar_respuesta($valor, $diccionario)
{

    $claves = array_keys($diccionario);

    if (rtrim(strtoupper($valor)) == strtoupper($diccionario[$claves[$_SESSION['contadorAleatorio']]])) {

        $_SESSION['contador']++;
        $_SESSION['contadoralert'] = 1;

        return obtenerPalabraAleatoria();
    } else {
        $_SESSION['ayuda'] = $diccionario[$claves[$_SESSION['contadorAleatorio']]];
        $_SESSION['contador'] = 0;
        $_SESSION['contadoralert'] = -1;
    }
}
// Verifica si se ha hecho clic en el botón para incrementar el contador
$resultado = '';
if (isset($_POST['btn_enviar'])) {
    $valorIngresado = $_POST['respuesta_usuario'];
    // Llama a la función para verificar si el valor coincide
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
    <title>PREGUNTAS DE ELECTRONICA</title>
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
                    // Contar el número de elementos en el diccionario
                    $max = count($diccionario);
                    // Si la lista de números aleatorios no está inicializada, la creamos
                    if (!isset($_SESSION['numeros_aleatorios'])) {
                        // Crear un array con todos los números en el rango
                        $_SESSION['numeros_aleatorios'] = range(0, $max - 1);

                        // Mezclar el array aleatoriamente
                        shuffle($_SESSION['numeros_aleatorios']);
                    }

                    // Obtener el siguiente número aleatorio
                    $numeroAleatorio = array_pop($_SESSION['numeros_aleatorios']);
                    $_SESSION['contadorAleatorio'] = $numeroAleatorio;
                    // Acceder a la primera clave
                    echo ($claves[$_SESSION['contadorAleatorio']]);

                    // Si ya se han mostrado todos los números, reiniciar la lista
                    if (empty($_SESSION['numeros_aleatorios'])) {
                        unset($_SESSION['numeros_aleatorios']);
                    }
                    ?>
                </h2>
            </div>
            <form method="post" class="hola">
                <label for="respuesta">ingrese su respuesta </label>
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
                    // Mostrar el resultado si se envió el formulario
                    if ($resultado != '') {
                        echo ("CONTADOR : " . $_SESSION['contador']);
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
        if ($_SESSION['contadoralert'] == 0) {
        } else {
            if ($_SESSION['contadoralert'] > 0) { ?>
                <script>
                    Swal.fire({
                        title: 'CORRECTO SIGUIENTE PREGUNTA',
                        text: '<?php echo (strtoupper($resultado)); ?>',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1000
                    });
                </script>
            <?php } else { ?>
                <script>
                    Swal.fire({
                        title: 'LA RESPUESTA ERA <?php echo (strtoupper($_SESSION['ayuda'])); ?>',
                        text: 'VUELVES AL INICIO :/',
                        icon: 'error',
                        confirmButtonText: 'Aceptar',
                        confirmButtonColor: '#3085d6',
                    });
                </script>
        <?php }
        } ?>
    </div>
</body>
</html>