<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fisica_fasil</title>
    <style>
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;margin-top: 10px;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        section {
            background-image: linear-gradient(135deg, #7aa9f0 0%, #9faec6 100%);
            margin: 20px 0;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        h2 {
            color: #8f8e8e;
        }
        .borde_lista {
            list-style-type: none;
            padding: 0;
        }
        .lista {
            overflow-x: auto; /* Permite el desplazamiento horizontal */
            white-space: nowrap; /* Evita que el contenido se divida en varias líneas */
            border-radius: 5px;
            padding: 10px;
            background: #ffffff;
            margin-bottom: 10px;
            border-left: 5px solid #333;
        }
        
    </style>
    <link rel="stylesheet" href="Estilos/stilePara_estudiar.css">
    <link rel="stylesheet" href="Juego de preguntas/package/dist/sweetalert2.min.css">
    <script src="MathJax-4.0.0-alpha.1/es5/tex-mml-chtml.js"></script>
    <script src="Juego de preguntas/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>

     <?php include_once("template/header.php") ?>


    <header>
        <h1>Álgebra Analítica</h1>
    </header>

    <div class="container">
        <section>
            <h2>La Recta</h2>
            <ul class="borde_lista">
                <li class="lista">Ecuación general: \( Ax + By + C = 0 \)</li>
                <li class="lista">Ecuación pendiente-intersección: \( y = mx + b \)</li>
                <li class="lista">Pendiente de una recta: \( m = \frac{y_2 - y_1}{x_2 - x_1} \)</li>
                <li class="lista">Distancia entre dos puntos: \( d = \sqrt{(x_2 - x_1)^2 + (y_2 - y_1)^2} \)</li>
            </ul>
        </section>
    
        <section>
            <h2>La Circunferencia</h2>
            <ul class="borde_lista">
                <li class="lista">Ecuación general: \( x^2 + y^2 + Dx + Ey + F = 0 \)</li>
                <li class="lista">Ecuación estándar: \( (x - h)^2 + (y - k)^2 = r^2 \)</li>
                <li class="lista">Centro: \( (h, k) \), Radio: \( r \)</li>
            </ul>
        </section>
    
        <section>
            <h2>La Parábola</h2>
            <ul class="borde_lista">
                <li class="lista">Ecuación estándar (horizontal): \( (y - k)^2 = 4p(x - h) \)</li>
                <li class="lista">Ecuación estándar (vertical): \( (x - h)^2 = 4p(y - k) \)</li>
                <li class="lista">Foco: \( (h, k + p) \) o \( (h + p, k) \)</li>
                <li class="lista">Directriz: \( y = k - p \) o \( x = h - p \)</li>
            </ul>
        </section>
    
        <section>
            <h2>La Elipse</h2>
            <ul class="borde_lista">
                <li class="lista">Ecuación estándar (horizontal): \( \frac{(x - h)^2}{a^2} + \frac{(y - k)^2}{b^2} = 1 \)</li>
                <li class="lista">Ecuación estándar (vertical): \( \frac{(x - h)^2}{b^2} + \frac{(y - k)^2}{a^2} = 1 \)</li>
                <li class="lista">Focos: \( (h \pm c, k) \) o \( (h, k \pm c) \), donde \( c = \sqrt{a^2 - b^2} \)</li>
            </ul>
        </section>
    
        <section>
            <h2>La Hipérbola</h2>
            <ul class="borde_lista">
                <li class="lista">Ecuación estándar (horizontal): \( \frac{(x - h)^2}{a^2} - \frac{(y - k)^2}{b^2} = 1 \)</li>
                <li class="lista">Ecuación estándar (vertical): \( \frac{(y - k)^2}{a^2} - \frac{(x - h)^2}{b^2} = 1 \)</li>
                <li class="lista">Asíntotas: \( y = k \pm \frac{b}{a}(x - h) \)</li>
            </ul>
        </section>
    
        <section>
            <h2>Números Imaginarios</h2>
            <ul class="borde_lista">
                <li class="lista">Unidad imaginaria: \( i = \sqrt{-1} \)</li>
                <li class="lista">Forma binómica: \( z = a + bi \)</li>
                <li class="lista">Módulo: \( |z| = \sqrt{a^2 + b^2} \)</li>
                <li class="lista">Conjugado: \( \overline{z} = a - bi \)</li>
            </ul>
        </section>
    
        <section>
            <h2>Método de Newton-Raphson</h2>
            <ul class="borde_lista">
                <li class="lista">Fórmula iterativa: \( x_{n+1} = x_n - \frac{f(x_n)}{f'(x_n)} \)</li>
            </ul>
        </section>
    
        <section>
            <h2>Sistemas de Ecuaciones NxN</h2>
            <ul class="borde_lista">
                <li class="lista">Método de eliminación de Gauss</li>
                <li class="lista">Método de Gauss-Jordan</li>
                <li class="lista">Regla de Cramer: \( x_i = \frac{\text{det}(A_i)}{\text{det}(A)} \)</li>
            </ul>
        </section>
    
        <section>
            <h2>Matrices</h2>
            <ul class="borde_lista">
                <li class="lista">Determinante de una matriz 2x2: \( \text{det}(A) = ad - bc \)</li>
                <li class="lista">Inversa de una matriz 2x2: \( A^{-1} = \frac{1}{\text{det}(A)} \begin{bmatrix} d & -b \\ -c & a \end{bmatrix} \)</li>
                <li class="lista">Producto de matrices: \( C = AB \), donde \( C_{ij} = \sum_k A_{ik}B_{kj} \)</li>
            </ul>
        </section>
    </div>
     <header>
        <div class="container">
            <h1>Formulas de Cálculo I</h1>
        </div>
    </header>

    <div class="container">
        <section>
            <h2>Límites y Continuidad</h2>
            <ul class="borde_lista">
                <li class="lista">Límite de una función: \( \lim_{x \to a} f(x) = L \)</li>
                <li class="lista">Continuidad en un punto: \( f(x) \) es continua en \( x = a \) si \( \lim_{x \to a}
                    f(x) = f(a) \)</li>
            </ul>
        </section>

        <section>
            <h2>Derivadas</h2>
            <ul class="borde_lista">
                <li class="lista">Derivada de una función: \( f'(x) = \lim_{h \to 0} \frac{f(x+h) - f(x)}{h} \)</li>
                <li class="lista">Regla de la cadena: \( \frac{dy}{dx} = \frac{dy}{du} \cdot \frac{du}{dx} \)</li>
                <li class="lista">Derivada implícita: \( \frac{dy}{dx} = -\frac{F_x(x,y)}{F_y(x,y)} \)</li>
            </ul>
        </section>

        <section>
            <h2>Tabla de Derivadas Comunes</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Función</th>
                            <th>Derivada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>\( f(x) = x^n \)</td>
                            <td>\( f'(x) = n \cdot x^{n-1} \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = e^x \)</td>
                            <td>\( f'(x) = e^x \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \sin(x) \)</td>
                            <td>\( f'(x) = \cos(x) \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \cos(x) \)</td>
                            <td>\( f'(x) = -\sin(x) \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \ln(x) \)</td>
                            <td>\( f'(x) = \frac{1}{x} \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \tan(x) \)</td>
                            <td>\( f'(x) = \sec^2(x) \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \arcsin(x) \)</td>
                            <td>\( f'(x) = \frac{1}{\sqrt{1-x^2}} \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \arccos(x) \)</td>
                            <td>\( f'(x) = -\frac{1}{\sqrt{1-x^2}} \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \arctan(x) \)</td>
                            <td>\( f'(x) = \frac{1}{1+x^2} \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \sinh(x) \)</td>
                            <td>\( f'(x) = \cosh(x) \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \cosh(x) \)</td>
                            <td>\( f'(x) = \sinh(x) \)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <h2>Aplicaciones de las Derivadas</h2>
            <ul class="borde_lista">
                <li class="lista">Máximos y mínimos: \( f'(x) = 0 \) y \( f''(x) \) para determinar concavidad</li>
                <li class="lista">Optimización: Uso de derivadas para maximizar o minimizar funciones</li>
                <li class="lista">Velocidad y aceleración: \( v(t) = s'(t) \) y \( a(t) = v'(t) \)</li>
            </ul>
        </section>

        <section>
            <h2>Integrales</h2>
            <ul class="borde_lista">
                <li class="lista">Integral indefinida: \( \int f(x) \, dx = F(x) + C \)</li>
                <li class="lista">Integral definida: \( \int_{a}^{b} f(x) \, dx = F(b) - F(a) \)</li>
                <li class="lista">Teorema Fundamental del Cálculo: \( \frac{d}{dx} \int_{a}^{x} f(t) \, dt = f(x) \)
                </li>
            </ul>
        </section>

        <section>
            <h2>Tabla de Integrales Comunes</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Función</th>
                            <th>Integral</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>\( f(x) = x^n \)</td>
                            <td>\( \int f(x) \, dx = \frac{x^{n+1}}{n+1} + C \) (para \( n \neq -1 \))</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = e^x \)</td>
                            <td>\( \int f(x) \, dx = e^x + C \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \sin(x) \)</td>
                            <td>\( \int f(x) \, dx = -\cos(x) + C \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \cos(x) \)</td>
                            <td>\( \int f(x) \, dx = \sin(x) + C \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \frac{1}{x} \)</td>
                            <td>\( \int f(x) \, dx = \ln|x| + C \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \tan(x) \)</td>
                            <td>\( \int f(x) \, dx = -\ln|\cos(x)| + C \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \sec^2(x) \)</td>
                            <td>\( \int f(x) \, dx = \tan(x) + C \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \frac{1}{1+x^2} \)</td>
                            <td>\( \int f(x) \, dx = \arctan(x) + C \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \sinh(x) \)</td>
                            <td>\( \int f(x) \, dx = \cosh(x) + C \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = \cosh(x) \)</td>
                            <td>\( \int f(x) \, dx = \sinh(x) + C \)</td>
                        </tr>
                        <tr>
                            <td>\( f(x) = a^x \)</td>
                            <td>\( \int f(x) \, dx = \frac{a^x}{\ln(a)} + C \)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <h2>Aplicaciones de las Integrales</h2>
            <ul class="borde_lista">
                <li class="lista">Área bajo la curva: \( \int_{a}^{b} f(x) \, dx \)</li>
                <li class="lista">Volumen de sólidos de revolución: \( V = \pi \int_{a}^{b} [f(x)]^2 \, dx \)</li>
                <li class="lista">Trabajo realizado por una fuerza variable: \( W = \int_{a}^{b} F(x) \, dx \)</li>
            </ul>
        </section>

        <section>
            <h2>Series y Sucesiones</h2>
            <ul class="borde_lista">
                <li class="lista">Convergencia de una serie: Uso de criterios como el de comparación y el de la razón
                </li>
                <li class="lista">Series geométricas: \( \sum_{n=0}^{\infty} ar^n = \frac{a}{1-r} \) para \( |r| < 1
                        \)</li>
                <li class="lista">Series de potencias: Expansión de funciones en series de potencias</li>
            </ul>
        </section>
    </div>
    <header>
        <div class="container">
            <h1>Formulas de Física</h1>
        </div>
    </header>

    <div class="container">
        <section>
            <h2>Movimiento Rectilíneo Uniforme (MRU)</h2>
            <ul class="borde_lista">
                <li class="lista">Velocidad constante: \( v = \frac{d}{t} \)</li>
            </ul>
        </section>

        <section>
            <h2>Movimiento Rectilíneo Uniformemente Variado (MRUV)</h2>
            <ul class="borde_lista">
                <li class="lista">Velocidad: \( v = v_0 + a \times t \)</li>
                <li class="lista">Posición: \( x = x_0 + v_0 \times t + \frac{1}{2} a \times t^2 \)</li>
                <li class="lista">Velocidad Cuadrática: \( v^2 = v_0^2 + 2a \times (x - x_0) \)</li>
            </ul>
        </section>

        <section>
            <h2>Caída Libre</h2>
            <ul class="borde_lista">
                <li class="lista">Velocidad: \( v = g \times t \)</li>
                <li class="lista">Altura: \( h = \frac{1}{2} g \times t^2 \)</li>
                <li class="lista">Velocidad Cuadrática: \( v^2 = 2g \times h \)</li>
            </ul>
        </section>

        <section>
            <h2>Movimiento Parabólico</h2>
            <ul class="borde_lista">
                <li class="lista">Altura máxima: \( h_{\text{max}} = \frac{v_0^2 \times \sin^2\theta}{2g} \)</li>
                <li class="lista">Alcance horizontal: \( R = \frac{v_0^2 \times \sin 2\theta}{g} \)</li>
                <li class="lista">Tiempo de vuelo: \( t = \frac{2v_0 \times \sin\theta}{g} \)</li>
            </ul>
        </section>

        <section>
            <h2>Movimiento Circular Uniforme (MCU)</h2>
            <ul class="borde_lista">
                <li class="lista">Velocidad angular: \( \omega = \frac{2\pi}{T} \)</li>
                <li class="lista">Velocidad tangencial: \( v = r \times \omega \)</li>
                <li class="lista">Aceleración centrípeta: \( a_c = \frac{v^2}{r} = r \times \omega^2 \)</li>
            </ul>
        </section>

        <section>
            <h2>Movimiento Circular Uniformemente Variado (MCUV)</h2>
            <ul class="borde_lista">
                <li class="lista">Aceleración angular: \( \alpha = \frac{\Delta \omega}{\Delta t} \)</li>
                <li class="lista">Velocidad angular: \( \omega = \omega_0 + \alpha \times t \)</li>
                <li class="lista">Ángulo: \( \theta = \theta_0 + \omega_0 \times t + \frac{1}{2} \alpha \times t^2 \)
                </li>
            </ul>
        </section>

        <section>
            <h2>Dinámica Lineal</h2>
            <ul class="borde_lista">
                <li class="lista">Segunda Ley de Newton: \( F = m \times a \)</li>
                <li class="lista">Fuerza de Fricción: \( f_r = \mu \times N \)</li>
                <li class="lista">Impulso: \( I = F \times \Delta t \)</li>
            </ul>
        </section>

        <section>
            <h2>Dinámica Circular</h2>
            <ul class="borde_lista">
                <li class="lista">Fuerza centrípeta: \( F_c = m \times \frac{v^2}{r} = m \times r \times \omega^2 \)
                </li>
                <li class="lista">Momento de inercia: \( I = \sum m_i \times r_i^2 \)</li>
                <li class="lista">Torque: \( \tau = r \times F \times \sin \theta \)</li>
            </ul>
        </section>

        <section>
            <h2>Estática</h2>
            <ul class="borde_lista">
                <li class="lista">Condición de equilibrio: \( \sum F = 0 \) y \( \sum \tau = 0 \)</li>
                <li class="lista">Momento de fuerza: \( \tau = r \times F \)</li>
                <li class="lista">Centro de masa: \( \vec{R} = \frac{1}{M} \sum m_i \times \vec{r}_i \)</li>
            </ul>
        </section>

        <section>
            <h2>Trabajo, Energía y Potencia</h2>
            <ul class="borde_lista">
                <li class="lista">Trabajo: \( W = F \times d \times \cos \theta \)</li>
                <li class="lista">Energía cinética: \( K = \frac{1}{2} m \times v^2 \)</li>
                <li class="lista">Energía potencial: \( U = m \times g \times h \)</li>
                <li class="lista">Potencia: \( P = \frac{W}{t} \)</li>
            </ul>
        </section>

        <section>
            <h2>Vectores</h2>
            <ul class="borde_lista">
                <li class="lista">Magnitud de un vector: \( |\vec{A}| = \sqrt{A_x^2 + A_y^2 + A_z^2} \)</li>
                <li class="lista">Suma de vectores: \( \vec{C} = \vec{A} + \vec{B} \)</li>
                <li class="lista">Producto punto: \( \vec{A} \cdot \vec{B} = A_xB_x + A_yB_y + A_zB_z \)</li>
                <li class="lista">Producto cruz: \( \vec{A} \times \vec{B} = (A_yB_z - A_zB_y)\hat{i} + (A_zB_x -
                    A_xB_z)\hat{j} + (A_xB_y - A_yB_x)\hat{k} \)</li>
            </ul>
        </section>
    </div>
    

     <?php include_once("template/footer.php") ?>

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
   

