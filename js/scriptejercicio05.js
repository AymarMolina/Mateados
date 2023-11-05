document.addEventListener("DOMContentLoaded", function () {
    const numberButtons = document.querySelectorAll(".number");
    const resultElement = document.getElementById("result");
    const targetResultElement = document.getElementById("target-result");
    const messageElement = document.getElementById("message");
    const progressElement = document.getElementById("progress");
    const backButton = document.getElementById("back-button");
    const continueButton = document.getElementById("continue-button");

    let currentResult = 0;
    let correctAnswers = 0;
    let gameEnded = false;
    let floatingMessage = document.createElement("div");

    function updateProgress() {
        progressElement.textContent = `${correctAnswers}/5`;
    }

    function resetGame() {
        currentResult = 0;
        targetResult = Math.floor(Math.random() * 20) + 1;
        targetResultElement.textContent = targetResult;
        resultElement.textContent = currentResult;
        shuffleButtons();
        updateProgress();
        if (correctAnswers === 5) {
            gameEnded = true;
            messageElement.textContent = "Felicidades, puedes pasar a la última parte del tema 3.";
            continueButton.style.display = "block"; // Mostrar el botón "Continuar con el Tema 3"
        } else {
            messageElement.textContent = "";
            continueButton.style.display = "none"; // Ocultar el botón "Continuar con el Tema 3" si no se han completado las 5 respuestas correctas
        }
    }

    function showFloatingMessage(text) {
        floatingMessage.textContent = text;
        document.body.appendChild(floatingMessage);
        setTimeout(() => {
            floatingMessage.style.display = "none";
        }, 2000);
    }

    backButton.addEventListener("click", goBack);
    continueButton.addEventListener("click", continueToTopic3);

    resetGame();

    numberButtons.forEach((button) => {
        button.addEventListener("click", () => {
            if (!gameEnded) {
                const value = parseInt(button.getAttribute("data-value"));
                currentResult += value;
                resultElement.textContent = currentResult;

                if (currentResult === targetResult) {
                    correctAnswers++;
                    resetGame();
                } else if (currentResult > targetResult) {
                    resetGame();
                }
            }
        });
    });

    function shuffleButtons() {
        const buttonValues = Array.from({ length: numberButtons.length }, (_, i) =>
            parseInt(numberButtons[i].getAttribute("data-value"))
        );

        for (let i = buttonValues.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [buttonValues[i], buttonValues[j]] = [buttonValues[j], buttonValues[i]];
        }

        numberButtons.forEach((button, index) => {
            button.setAttribute("data-value", buttonValues[index]);
            button.textContent = buttonValues[index];
        });
    }

    function goBack() {
        window.history.back();
    }

    function continueToTopic3() {
        // Aquí puedes agregar el código para redirigir al usuario al Tema 3 o realizar cualquier otra acción necesaria
    }
});
