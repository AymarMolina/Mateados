const container = document.getElementById("container");
const checkButton = document.getElementById("checkButton");
const nextButton = document.getElementById("nextButton");
const result = document.getElementById("result");
const numberToSelectSpan = document.getElementById("numberToSelect");
const scoreSpan = document.getElementById("score");
const nextTopicButton = document.getElementById("nextTopicButton");
const advanceToNextTopicButton = document.getElementById("advanceToNextTopic");

let correctNumber = 0;
let answerChecked = false; // Variable para rastrear si se ha comprobado la respuesta
let score = 0;

function generateExercise() {
    const randomNum = getRandomNumber(1, 10);
    correctNumber = randomNum;
    numberToSelectSpan.textContent = correctNumber; // Establecemos el valor estático

    container.innerHTML = ""; // Limpiamos el contenedor

    for (let i = 1; i <= randomNum; i++) {
        const ball = document.createElement("div");
        ball.classList.add("ball");
        ball.textContent = i;
        container.appendChild(ball);

        ball.addEventListener("click", () => {
            if (!answerChecked) {
                ball.classList.toggle("selected");
            }
        });
    }
    result.textContent = "";
    answerChecked = false; // Reiniciamos la variable de respuesta comprobada

    // Ocultamos el botón "Continuar con el siguiente ejercicio" al generar un nuevo ejercicio
    nextButton.style.display = "none";
}

generateExercise(); // Generar el primer ejercicio automáticamente
checkButton.addEventListener("click", () => {
    if (!answerChecked) {
        const selectedBalls = document.querySelectorAll(".ball.selected");
        if (selectedBalls.length === correctNumber) {
            result.textContent = "¡Respuesta correcta!";
            result.style.color = "green";
            answerChecked = true;

            score += 25;
            scoreSpan.textContent = score;

            if (score === 100) {
                result.textContent = "Puntaje maximo alcanzado (100 puntos).";
                nextButton.style.display = "none";
                continueToTopic2Button.style.display = "block"; // Mostrar el botón "Continuar con el siguiente tema N°2"
                continueToTopic2Button.style.backgroundColor = "#000"; // Color de fondo
                continueToTopic2Button.style.color = "#fff"; // Color de letra
                continueToTopic2Button.style.border = "none"; // Sin borde
                continueToTopic2Button.style.borderRadius = "10px"; // Radio de borde
                goBackButton.disabled = true;
                checkButton.disabled = true;
                nextButton.disabled = true;
                continueToTopic2Button.disabled = false; // Habilitar el botón "Continuar con el siguiente tema N°2"
                location.href='ejercicio05primergrado.php';
            } else if (score > 100) {
                result.textContent = "Puntaje superior a 100 puntos.";
                nextButton.style.display = "none";
                continueToTopic2Button.style.display = "none"; // Ocultar el botón "Continuar con el siguiente tema N°2"
            } else {
                result.textContent = "";
                nextButton.style.display = "block";
                continueToTopic2Button.style.display = "none"; // Ocultar el botón "Continuar con el siguiente tema N°2"
            }
        } else {
            result.textContent = "!Respuesta incorrecta! Intenta de nuevo.";
            result.style.color = "red";
        }
    }
});

nextButton.addEventListener("click", () => {
    if (answerChecked) {
        generateExercise(); // Generar el siguiente ejercicio automáticamente
        nextButton.style.display = "none"; // Ocultar el botón "Continuar" hasta la próxima respuesta
        checkButton.style.display = "block"; // Mostrar el botón de "Comprobar Respuesta"
    }
    
});


function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
