let contador = 0;

function allowDrop(event) {
    event.preventDefault();
    document.getElementById("area").classList.add("hover");
}

function drag(event) {
    event.dataTransfer.setData("text", event.target.id);
    event.target.classList.add("dragging");
}

function drop(event) {
    event.preventDefault();
    document.getElementById("area").classList.remove("hover");

    var data = event.dataTransfer.getData("text");
    var draggedElement = document.getElementById(data);
    draggedElement.classList.remove("dragging");

    // Crear una nueva imagen duplicada
    var nuevaImagen = document.createElement("img");
    nuevaImagen.src = draggedElement.src;
    nuevaImagen.classList.add("draggable");
    nuevaImagen.draggable = true;

    // Agregar la nueva imagen al área de destino
    document.getElementById("area").appendChild(nuevaImagen);

    // Verificar si la imagen es la correcta
    if (data === "imagen") {
        contador++;
        if (contador === 5) {
            document.getElementById("mensaje").textContent = "¡Correcto! Has arrastrado la imagen 5 veces.";
            setTimeout(function() {
                alert("¡Bien hecho! Has completado el ejercicio.");
                document.getElementById("continuarBtn").disabled = false;
            }, 500);
        } else {
            document.getElementById("mensaje").textContent = "Correcto. Sigue arrastrando.";
        }
    } else {
        document.getElementById("mensaje").textContent = "Incorrecto. Intenta nuevamente.";
    }

    event.dataTransfer.clearData(); // Limpiamos los datos después del drop
}
