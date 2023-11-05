let correctAnswers = 0;
let isGameActive = true;
let isSecretCounting = false;

function getRandomCount() {
  return Math.floor(Math.random() * 4) + 1; // Número aleatorio entre 1 y 4
}

function updateScore() {
document.getElementById("score").textContent = `${correctAnswers}/5`;
}

function generateBalls() {
    if (isGameActive && correctAnswers < 5) {
    const redCount = getRandomCount();
    const greenCount = getRandomCount();

    const ballsContainer = document.getElementById("ballsContainer");
    ballsContainer.innerHTML = "";

    for (let i = 0; i < redCount; i++) {
        const redBall = document.createElement("div");
        redBall.className = "ball red";
        ballsContainer.appendChild(redBall);
    }

    for (let i = 0; i < greenCount; i++) {
            const greenBall = document.createElement("div");
        greenBall.className = "ball green";
            ballsContainer.appendChild(greenBall);
    }
    } else if (correctAnswers === 5) {
    isGameActive = false;
    document.getElementById("redCount").disabled = true;
    alert("¡Juego terminado! Has alcanzado 5 respuestas correctas.");
    }
}

function startSecretCounting() {
    setTimeout(function () {
    if (correctAnswers < 5) {
        correctAnswers++;
        updateScore();
    startSecretCounting();
    }
}, 1000);
}

function checkCount() {
if (!isGameActive) {
    alert("El juego ha terminado. Refresca la página para jugar de nuevo.");
    return;
}

const redCountInput = document.getElementById("redCount");
const enteredCount = parseInt(redCountInput.value, 10);

const redBalls = document.querySelectorAll(".red");

if (redBalls.length === enteredCount) {
    correctAnswers++;
    alert("¡Correcto! La cantidad de bolitas rojas es igual a la ingresada. Respuestas correctas: " + correctAnswers);
    updateScore();
} else {
    alert("Incorrecto. Por favor, intenta de nuevo.");
}

if (correctAnswers < 5) {
    generateBalls(); // Generar nuevas bolitas después de comprobar.
    redCountInput.value = ""; // Limpiar el campo de entrada.
}
if (correctAnswers === 5) {
    isGameActive = false;
    document.getElementById("redCount").disabled = true;
    alert("¡Juego terminado! Has alcanzado 5 respuestas correctas.");
}
}

// Generar bolitas y actualizar el puntaje al cargar la página
generateBalls();
