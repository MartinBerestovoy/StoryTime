// HABLEN CON TINCHO ANTES DE TOCAR ESTO
// HABLEN CON TINCHO ANTES DE TOCAR ESTO
// HABLEN CON TINCHO ANTES DE TOCAR ESTO

<?php
include "credentials.php";

$role = "¡Hola! Soy StoryBot, tu amigable contador de cuentos. ¿Estás listo para embarcarte en una aventura emocionante? Siéntate cómodamente y déjame llevarte a un mundo lleno de imaginación. En el mágico reino de las historias, donde los personajes cobran vida y los sueños se hacen realidad, estoy aquí para crear un cuento largo y creativo solo para ti.";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mensaje'])) {
        $prompt = $_POST['mensaje'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $openai_api_key,
]);

$data = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [],
];

$data['messages'][] = ['role' => 'system', 'content' => $role];
$data['messages'][] = ['role' => 'user', 'content' => $prompt];

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
$response = curl_exec($ch);

$answer = "";

$decoded_response = json_decode($response, true);
if (isset($decoded_response['choices'][0]['message']['content'])) {
    $answer = $decoded_response['choices'][0]['message']['content'];
} else {
    $answer = "Sorry, I don't understand";   
}

curl_close($ch);

echo $answer;

}
}