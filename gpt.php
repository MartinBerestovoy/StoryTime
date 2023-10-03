// HABLEN CON TINCHO ANTES DE TOCAR ESTO
// HABLEN CON TINCHO ANTES DE TOCAR ESTO
// HABLEN CON TINCHO ANTES DE TOCAR ESTO


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoryTime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <h2 class="mt-3" style="color: black">StoryTime</h2>
            <div style="display: flex; justify-content: center; align-items: center">
                <span style="display: none" id="barra">
                    Procesando...
                </span>
            </div>
            <div class="container">
                <div id="chat-container" class="textarea">
                    <!-- Aquí se mostrarán las preguntas y respuestas -->
                </div>
                <div class="input-group">
                    <input id="input-question" class="form-control" type="text" placeholder="Realiza una pregunta">
                    <button id="submit-button" class="submit-button"> Enviar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handler para enviar la pregunta al hacer Enter en el input
            $('#input-question').keypress(function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    var pregunta = $(this).val();
                    if (validarCampos(pregunta)) {
                        realizarPregunta(pregunta);
                    }
                }
            });

            // Handler para enviar la pregunta al hacer clic en el botón
            $('#submit-button').click(function() {
                var pregunta = $('#input-question').val();
                if (validarCampos(pregunta)) {
                    realizarPregunta(pregunta);
                }
            });
        });

        function validarCampos(pregunta) {
            if (pregunta === '') {
                alert('Ingresa una pregunta antes de enviarla.');
                return false;
            }
            return true;
        }

        function realizarPregunta(pregunta) {
            $("#barra").show();
            // Realizar la solicitud al servidor PHP
            $.ajax({
                type: "POST",
                url: "textApi.php",
                data: {
                    mensaje: pregunta
                },
                success: function(respuesta) {
                    $("#barra").hide();
                    // Agregar la pregunta y respuesta al contenedor de chat
                    var preguntaHtml = `<strong>User:</strong> ` + pregunta;
                    var respuestaHtml = '<strong>StoryTeller:</strong> ' + respuesta;
                    // Obtén una referencia al elemento del div
                    var chatContainer = $('#chat-container');
                    chatContainer.append('<p>' + preguntaHtml + '</p>');
                    chatContainer.append('<p>' + respuestaHtml + '</p>');

                    // Limpiar el input y desplazarse al final del contenedor de chat
                    $('#input-question').val('');
                    chatContainer.scrollTop(chatContainer[0].scrollHeight);
                }
                
            });
            pedido_de_titulo = "Haceme un titulo para este cuento:" + respuesta

            $.ajax({
                type: "POST",
                url: "textApi.php",
                data: {
                    mensaje: pedido_de_titulo
                },
                success: function(titulo) {
                    $("#barra").hide();
                    alert("titulo:" + titulo);
                }
                
            });
        }
    </script>
</body>
</html>