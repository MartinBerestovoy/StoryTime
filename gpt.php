<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <h2 class="mt-3" style="color: black">Chat IA 📌(GPT-3 Model)</h2>
            <div style="display: flex; justify-content: center; align-items: center">
                <span style="display: none" id="barra">
                    <img style="width: 286px" src="./imagen/barra.gif" alt="Procesando..." />
                </span>
            </div>
            <div class="container">
                <div id="chat-container" class="textarea">
                    <!-- Aquí se mostrarán las preguntas y respuestas -->
                </div>
                <div class="input-group">
                    <input id="input-question" class="form-control" type="text" placeholder="Realiza una pregunta">
                    <button id="submit-button" class="submit-button">
                        <img src="./imagen/arrow-button.png" height="40">
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>