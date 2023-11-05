var numeroAleatorio = Math.floor(Math.random() * 10) + 1;

var numerosAPalabras = {
    1: "uno",
    2: "dos",
    3: "tres",
    4: "cuatro",
    5: "cinco",
    6: "seis",
    7: "siete",
    8: "ocho",
    9: "nueve",
    10: "diez"
};

var numeroAleatorioDiv = document.getElementById("numeroAleatorio");
var palabraUsuarioInput = document.getElementById("palabraUsuario");
var comprobarBtn = document.getElementById("comprobarBtn");
var mensaje = document.getElementById("mensaje");

numeroAleatorioDiv.textContent = numeroAleatorio;

comprobarBtn.addEventListener("click", comprobarPalabra);

var respuestasCorrectas = 0;
var maxRespuestas = 5; // Límite de respuestas correctas

function comprobarPalabra() {
    var palabraUsuario = palabraUsuarioInput.value.toLowerCase();
    var palabraCorrecta = numerosAPalabras[numeroAleatorio];

    if (palabraUsuario === palabraCorrecta) {
        mensaje.textContent = "¡Felicidades!";
        respuestasCorrectas++;

        if (respuestasCorrectas >= maxRespuestas) {
            // Deshabilitar el juego al alcanzar 5 respuestas correctas
            comprobarBtn.disabled = true;
            palabraUsuarioInput.disabled = true;
            siguienteBtn.disabled = true; // Deshabilitar el botón "Continuar al siguiente ejercicio"
            generarNotificacionBtn.style.display = "block"; // Mostrar el botón "Generar Notificación al Correo"
        }
    } else {
        mensaje.textContent = "Incorrecto. Inténtalo de nuevo.";
    }
}

var siguienteBtn = document.getElementById("siguienteBtn");

siguienteBtn.addEventListener("click", siguienteEjercicio);

function siguienteEjercicio() {
    if (respuestasCorrectas >= maxRespuestas) {
        // Habilitar el juego nuevamente al iniciar un nuevo ejercicio
        comprobarBtn.disabled = false;
        palabraUsuarioInput.disabled = false;
        siguienteBtn.disabled = false; // Habilitar el botón "Continuar al siguiente ejercicio"
        generarNotificacionBtn.style.display = "none"; // Ocultar el botón "Generar Notificación al Correo"
        respuestasCorrectas = 0; // Restablecer el contador
    }
    
    // Generar un nuevo número aleatorio
    numeroAleatorio = Math.floor(Math.random() * 10) + 1;
    // Limpiar la entrada de usuario y el mensaje
    palabraUsuarioInput.value = "";
    mensaje.textContent = "";
    // Mostrar el nuevo número aleatorio
    numeroAleatorioDiv.textContent = numeroAleatorio;
}

var generarNotificacionBtn = document.createElement("button");
generarNotificacionBtn.innerHTML = "Generar Notificación al Correo";
generarNotificacionBtn.id = "generarNotificacionBtn";
generarNotificacionBtn.style.display = "none"; // Inicialmente ocultar el botón

generarNotificacionBtn.addEventListener("click", generarNotificacion);
// Centrar el botón verticalmente
generarNotificacionBtn.style.position = "absolute";
generarNotificacionBtn.style.borderRadius="10px";
generarNotificacionBtn.style.backgroundColor="black";
generarNotificacionBtn.style.padding="10px 20px";
generarNotificacionBtn.style.cursor="pointer"
generarNotificacionBtn.style.left = "50%";
generarNotificacionBtn.style.top = "90%";
generarNotificacionBtn.style.transform = "translate(-50%, -50%)";
generarNotificacionBtn.formAction="enviar_correo.php";

// Agregar el botón al DOM
document.getElementById("container").appendChild(generarNotificacionBtn);
function generarNotificacion() {
    // Aquí puedes agregar la lógica para generar y enviar una notificación al correo
    alert("Notificación generada y enviada al correo.");
    window.location.href = "../html/correo.html"; // me dirige ala pagina final
}

// Agregar el botón "Generar Notificación al Correo" al DOM
document.getElementById("container").appendChild(generarNotificacionBtn);
