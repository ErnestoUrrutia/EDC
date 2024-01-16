<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDC (Java)</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;1,100;1,200&family=Titillium+Web:ital,wght@0,200;0,300;0,400;1,200&display=swap');

        body {

            margin: 0;
            padding: 0;
            font-family: 'Titillium Web', sans-serif;
            width: 100vw;

            height: 100vh;
            background-color: #000000;
        }

        header {

            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            background-color: #242424;
        }

        header span {
            margin: 0;
            margin-left: 20px;
            font-size: 30px;
            color: rgb(255, 255, 255);

            text-shadow: 0px 0px 10px rgb(0, 0, 0);
        }

        main {
            position: relative;
            margin: 0;
            padding: 0;
            border: none;
            margin: 0;
            width: 100%;
            height: calc(100vh - 50px);

            overflow: hidden;
        }

        main img {


            overflow: auto;
            width: 100%;
            height: 100%;
        }

        .flecha {
            cursor: pointer;
            width: 40px;
            height: 100px;
            background-color: #181818;
            opacity: 0.2;
            position: absolute;
            user-select: none;
            color: white;
            font-size: 40px;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease-in-out;
        }

        .flecha:hover {
            opacity: 1;
            width: 80px;
        }

        #flecha_izq {
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            border-bottom-right-radius: 20px;
            border-top-right-radius: 20px;

        }

        #flecha_der {
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            border-bottom-left-radius: 20px;
            border-top-left-radius: 20px;
        }

        footer {

            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: transparent;
            transition: all 0.3s ease-in-out;
        }

        footer section {
            display: flex;
            align-items: center;
            position: absolute;
            overflow-x: auto;
            bottom: -100px;
            transition: all 0.3s ease-in-out;
            max-width: 100%;
        }

        footer section::-webkit-scrollbar {
            height: 10px;
        }

        footer section::-webkit-scrollbar-thumb {
            background-color: #494949;
            border-radius: 50px;
        }

        footer section::-webkit-scrollbar-track {
            background-color: #ffffff;
        }

        footer section::-webkit-scrollbar-thumb:hover {
            background-color: #000000;
        }

        footer:hover section {
            bottom: 0;
        }

        footer:hover {
            background-color: #0000007c;
        }



        footer section span {
            flex-shrink: 0;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bold;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #181818;
            transition: all 0.3s ease-in-out;
            font-size: 14px;
            margin-left: 5px;
        }

        footer section span:hover {
            background-color: aliceblue;
            color: black;
        }

        header nav {
            position: absolute;
            right: 10px;
        }

        header nav a {
            font-size: 18px;
            text-decoration: none;
            color: white;
            margin-right: 5px;

            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        header nav a i {
            margin-right: 5px;
        }



        #icono_recursos.mostrar {
            background-color: #23b830;
        }

        #icono_recursos.mostrar:hover {
            color: white;
        }

        header nav a:hover {
            background-color: #ffffff;
            color: black;
        }



        aside {
            width: 500px;
            height: calc(100vh - 50px);
            /* background-color: #24242475; */
            position: absolute;
            right: -200%;
            top: 0px;
            transition: all 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: scroll;
            
        }

        aside.mostrar {
            right: 0;
        }

        .codigos {

            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
            height: 200px;
            background-color: #202020;
            margin-top: 20px;
            border-radius: 4px;
            box-shadow: 0px 0px 5px 1px black;
            flex-shrink: 0;

        }
        .codigos:last-child {
            margin-bottom: 80px;
        }
        .codigos span {
            color: white;
            text-align: center;
            font-weight: bold;
        }

        .codigos textarea {
            resize: none;
            width: 95%;
            height: 80%;
            border: none;
            letter-spacing: 2px;
            border-radius: 5px;
            background-color: #494949;
            color: #ffffff;
            overflow-x: auto; 
          
        }

        #icono_barras {
            display: none;
            position: absolute;
            right: 10px;
            font-size: 25px;
            text-decoration: none;
            color: white;
            margin-right: 5px;

            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
        }


        @media (max-width:700px) {

            #icono_barras {
                display: block;

            }

            body {
                overflow: auto;
                width: 100vw;
                height: 100vh;


            }

            nav i {
                padding: 5px 10px;
                margin: 0;
            }

            nav {
                display: flex;
                flex-direction: column;

                position: fixed;
                right: -50px;
                backdrop-filter: blur(10px);
                top: 55px;
                z-index: 1;
                width: 150px;
                box-shadow: 0px 0px 10px 1px black;
                border-radius: 5px;
                height: 0;
                overflow: hidden;
            }

            #icono_barras:hover+nav {
                height: auto;
            }

            nav:hover {
                height: auto;
            }

            aside {
                width: 100%;

            }
        }
    </style>
</head>

<body>
    <header>
        <span>
            Escuela del Código
        </span>
        <i id="icono_barras" class="fa-solid fa-bars"></i>
        <nav>
            <a href="index.html"><i class="fa-solid fa-house"></i>Inicio</a>
            <a href="http://187.217.4.141/~edc/moodle/" target="_blank"><i class="fa-solid fa-pencil"></i>Moodle</a>
            <a href="cod_r.html" target="_blank"><i class="fa-solid fa-keyboard"></i>Código</a>
            <a href="#" id="icono_recursos"><i class="fa-solid fa-code"></i>Recursos</a>
        </nav>


    </header>

    <main>
        <div class="flecha" id="flecha_izq" onclick="cambiarDiapositiva(-1)">&lt;</div>
        <img id="img_diapositiva" src="Diapositiva1.JPG" alt="">
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
    var TotalDiapositivas = 81, posicionDiapositiva = 1;
    var imagen = document.getElementById("img_diapositiva");
    function cambiarDiapositiva(direccion) {

        posicionDiapositiva = posicionDiapositiva + direccion;
        if (posicionDiapositiva > TotalDiapositivas) {
            posicionDiapositiva = 1;
        }
        if (posicionDiapositiva < 1) {
            posicionDiapositiva = TotalDiapositivas;
        }
        imagen.src = "Diapositiva" + (posicionDiapositiva) + ".JPG";


    }
    document.addEventListener("keydown", function (event) {
        if (event.key == "ArrowLeft") {
            cambiarDiapositiva(-1);
        }
        if (event.key == "ArrowRight") {
            cambiarDiapositiva(1);
        }
    });

    var contenedor = document.getElementById("indice_diapositivas");

    for (var i = 1; i <= TotalDiapositivas; i++) {
        var nuevoSpan = document.createElement("span");
        nuevoSpan.textContent = i;
        nuevoSpan.id = "span" + i;
        nuevoSpan.setAttribute("onClick", "seleccionarDiapositiva(" + i + ")")
        contenedor.appendChild(nuevoSpan);
    }
    function seleccionarDiapositiva(numDiapositiva) {
        imagen.src = "Diapositiva" + (numDiapositiva) + ".JPG";
        posicionDiapositiva = numDiapositiva;
    }
    $('#icono_recursos').on("click", function () {

        $('#lateral_recursos').toggleClass("mostrar");
        $('#icono_recursos').toggleClass("mostrar");
    });

</script>
<script src="https://kit.fontawesome.com/c982b33cb5.js" crossorigin="anonymous"></script>

</html>