<?php

$_ENV = parse_ini_file(".env");

$role = "¡Hola! Soy StoryBot, tu amigable contador de cuentos. ¿Estás listo para embarcarte en una aventura emocionante? Siéntate cómodamente y déjame llevarte a un mundo lleno de imaginación. En el mágico reino de las historias, donde los personajes cobran vida y los sueños se hacen realidad, estoy aquí para crear un cuento largo y creativo solo para ti. El cuento tiene que ser lo mas largo posible y tiene que tener un solo capitulo.";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mensaje'])) {
        $prompt = $_POST['mensaje'];

$aasfasf = curl_init();
curl_setopt($aasfasf, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
curl_setopt($aasfasf, CURLOPT_RETURNTRANSFER, true);
curl_setopt($aasfasf, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($aasfasf, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $_ENV["openai_api_key"],
]);

$data = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [],
];

$data['messages'][] = ['role' => 'system', 'content' => $role];
$data['messages'][] = ['role' => 'user', 'content' => $final_prompt];

curl_setopt($aasfasf, CURLOPT_POSTFIELDS, json_encode($data));
$response = curl_exec($aasfasf);

$answer = "";

$decoded_response = json_decode($response, true);
if (isset($decoded_response['choices'][0]['message']['content'])) {
    $answer = $decoded_response['choices'][0]['message']['content'];
} else {
    $answer = "Lorem ipsum dolor sit amet consectetur adipiscing, elit ante viverra nostra ornare. Placerat nisl bibendum sociosqu pulvinar euismod velit neque mattis nunc, luctus dui mus tristique nibh nulla nisi eget interdum nec, tempor class suspendisse dis maecenas quis rhoncus libero. Dui ultricies id aliquam elementum venenatis taciti sed tempus placerat sem, per integer lectus fusce vitae nascetur pharetra risus odio, curabitur natoque eu vestibulum interdum montes varius massa urna. Velit vel inceptos a luctus hendrerit rhoncus gravida ullamcorper libero, nibh malesuada suspendisse et penatibus aliquam tempor.";   
}

curl_close($aasfasf);

echo $answer;

}
}