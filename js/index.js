    
    var posicionDiapositiva = 1;
    var imagen = document.getElementById("img_diapositiva");
    function cambiarDiapositiva(direccion) {

        posicionDiapositiva = posicionDiapositiva + direccion;
        if (posicionDiapositiva > TotalDiapositivas) {
            posicionDiapositiva = 1;
        }
        if (posicionDiapositiva < 1) {
            posicionDiapositiva = TotalDiapositivas;
        }
        imagen.src = "presentaciones/Diapositiva" + (posicionDiapositiva) + ".JPG";


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
        imagen.src = "presentaciones/Diapositiva" + (numDiapositiva) + ".JPG";
        posicionDiapositiva = numDiapositiva;
    }
    $('#icono_recursos').on("click", function () {

        $('#lateral_recursos').toggleClass("mostrar");
        $('#icono_recursos').toggleClass("mostrar");
    });

