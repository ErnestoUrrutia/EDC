<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDC (Pensamiento Comp.)</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/index.css">

</head>

<body>
    <header>
        <span>
            Escuela del Código
        </span>
        <i id="icono_barras" class="fa-solid fa-bars"></i>
        <nav>
            <a href="../"><i class="fa-solid fa-house"></i>Inicio</a>
            <a href="http://187.217.4.141/~edc/moodle/" target="_blank"><i class="fa-solid fa-pencil"></i>Moodle</a>
            <a href="cod_r.html" target="_blank"><i class="fa-solid fa-keyboard"></i>Código</a>
            <a href="#" id="icono_recursos"><i class="fa-solid fa-code"></i>Recursos</a>
        </nav>


    </header>

    <main>
        <div class="flecha" id="flecha_izq" onclick="cambiarDiapositiva(-1)">&lt;</div>
        <img id="img_diapositiva" src="presentaciones/Diapositiva1.JPG" alt="">
        <div class="flecha" id="flecha_der" onclick="cambiarDiapositiva(1)">&gt;</div>
        <aside id="lateral_recursos">
            <?php
            $rutaCarpeta = 'code';
            $archivos = scandir($rutaCarpeta);
            foreach ($archivos as $archivo) {
                $rutaArchivo = $rutaCarpeta . '/' . $archivo;

                // Verificar si es un archivo y si tiene la extensión .txt
                if (is_file($rutaArchivo) && pathinfo($rutaArchivo, PATHINFO_EXTENSION) == 'txt') {
                    $contenido = file_get_contents($rutaArchivo);
                    echo '<div class="codigos">';
                    echo '<span>' . $archivo . '</span>';
                    echo '<textarea spellcheck="false" readonly>' . htmlspecialchars($contenido) . ' </textarea>';
                    echo ' </div>';
                }
            }
            ?>

        </aside>
    </main>



    <footer>
        <section id="indice_diapositivas">
        </section>
    </footer>
</body>
<script>
    var TotalDiapositivas = 46;
</script>
<script src="../js/index.js"></script>
<script src="https://kit.fontawesome.com/c982b33cb5.js" crossorigin="anonymous"></script>

</html>