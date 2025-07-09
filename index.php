<?php declare(strict_types=1);//<-- tipado estricto
require_once("functions.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umsa-Fasil</title>
    <link rel="stylesheet" href="Juego de preguntas/package/dist/sweetalert2.min.css">
    <script src="Juego de preguntas/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="Estilos/stylie_index.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>
     <?php templates("header") ?>

    <section class="portada">
        <div class="fondo_img">
            <div class="fondo_letras">
                <div class=" tituloc">
                    <h1 class="fw-light p-4 pb-2 titulo ">
                        Electronica y Telecomunicaciones para todos
                    </h1>
                </div>
                <div class=" subtitulo">
                    <h5 class="fw-light p-4 pb-0 pr-8 ">Contenidos, ejercicios, retos y herramientas de inteligencia
                        artificial para ayudarte a descifrar y explicar el funcionamiento de nuestro mundo y nuestra
                        tecnología. Con simulaciones, animaciones e ilustraciones explicativas integradas. </h5>
                    <br>
                    <h5 class="fw-light p-4 pt-0 ">
                        Contenidos, ejercicios, retos y herramientas de inteligencia artificial para ayudarte a
                        descifrar y
                        explicar el funcionamiento de nuestro mundo y nuestra tecnología. Con simulaciones, animaciones
                        e
                        ilustraciones explicativas integradas.
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class=" botones_niveles">
        <div>
            <h1 class=" p-4 pb-0">ELECTROLAB | Aprende a tu ritmo
            </h1>
            <h4 class="fw-light p-4 pt-2">
                Los contenidos de ELECTROLAB se encuentran estructurados por niveles, lo que te permitirá encontrar el
                tema
                que buscas, adaptado al nivel que necesitas. Animaciones interactivas, inteligencia artificial,
                ejemplos,
                ejercicios resueltos, contenidos teóricos y mucho más. ¿Por qué nivel quieres empezar?
            </h4>
            <div class="boton_clase">
                <button class="but_img  ani miBoton">INICIAL</button>
                <button class="but_img2 ani miBoton">INTERMEDIO</button>
                <button class="but_img3 ani miBoton">AVANZADO</button>
                <button class="but_img4 ani miBoton">EXPERTO</button>
            </div>
        </div>
    </section>

    <section class="informaciones">
        <h2 class="p-2">Nuestros recursos. Justo lo que necesitas.</h2>
        <div class="piso">
            <div class="item_uno">

                <div class="d-flex flex-row m-2 ">
                    <img src="Estilos/imagenes/libro_bluu.png" alt="" width="50px" height="50px" class="m-2">
                    <div>
                        <h5 class="p-2 pb-0">Contenidos teóricos</h5>
                        <p class="fw-light">Adaptados a distintos niveles y relacionados por temática</p>
                    </div>
                </div>
                <div class="d-flex flex-row m-2 ">
                    <img src="Estilos/imagenes/pesasdos.png" alt="" width="50px" height="50px" class="m-2">
                    <div>
                        <h5 class="p-2 pb-0">Ejercicios y retos</h5>
                        <p class="fw-light">Practica los contenidos de cada tema gracias a una completa lista de
                            problemas resueltos, y participa en retos semanales con toda la comunidad</p>
                    </div>
                </div>
                <div class="d-flex flex-row m-2 ">
                    <img src="Estilos/imagenes/limpio.png" alt="" width="50px" height="50px" class="m-2">
                    <div>
                        <h5 class="p-2 pb-0">Diseño adaptativo</h5>
                        <p class="fw-light">Usa ELECTROLAB a modo de libro de texto portátil gracias a su diseño
                            compatible con tablets y smartphones</p>
                    </div>
                </div>

            </div>
            <div class="item_dos">
                <div class="d-flex flex-row m-2 ">
                    <img src="Estilos/imagenes/formularios.png" alt="" width="50px" height="50px" class="m-2">
                    <div>
                        <h5 class="p-2 pb-0">Formularios</h5>
                        <p class="fw-light">Utiliza nuestras completas listas de fórmulas para repasar antes de tu
                            examen o para ahorrar tiempo cuando elabores tus apuntes</p>
                    </div>
                </div>
                <div class="d-flex flex-row m-2 ">
                    <img src="Estilos/imagenes/fotos.png" alt="" width="50px" height="50px" class="m-2">
                    <div>
                        <h5 class="p-2 pb-0">Ilustraciones de calidad</h5>
                        <p class="fw-light">A veces, una imagen vale más que mil palabras</p>
                    </div>
                </div>
                <div class="d-flex flex-row m-2 ">
                    <img src="Estilos/imagenes/diccionari.png" alt="" width="50px" height="50px" class="m-2">
                    <div>
                        <h5 class="p-2 pb-0">Diccionario</h5>
                        <p class="fw-light">Índice de términos de Física asociados a los temas en los que aparecen</p>
                    </div>
                </div>
            </div>
            <div class="item_tres ps-2">
                <img src="Estilos/imagenes/modelodos.png" alt="" width="98%" height="auto">
            </div>
        </div>
    </section>

     <?php templates("footer") ?>
     
    <!-- jQuery y Popper.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>


    <script>
        // Espera a que el documento esté completamente cargado
        document.addEventListener("DOMContentLoaded", function () {
            // Selecciona todos los botones con la clase "miBoton"
            var botones = document.querySelectorAll(".miBoton");

            // Añade un listener para el evento de clic a cada botón
            botones.forEach(function (boton) {
                boton.addEventListener("click", function () {
                    // Muestra el mensaje de información usando SweetAlert2
                    Swal.fire({
                        title: 'Información',
                        text: 'Estara listo para la proxima versión.',
                        icon: 'info',
                        confirmButtonText: 'Aceptar'
                    });
                });
            });
        });
    </script>
</body>

</html>