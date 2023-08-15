<?php
include "credentials.php";

$prompt = "Tell me a motivational quote";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $api_key,
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n    \"model\": \"gpt-3.5-turbo\",\n    
    \"messages\": [\n      {\n        \"role\": \"system\",\n        \"content\": \"You are a helpful asistant.\"\n      },\n      
    {\n        \"role\": \"user\",\n        \"content\": \" . $prompt . \"\n      }\n    ]\n  }");

$response = curl_exec($ch);

$decoded_response = json_decode($response, true);
if (isset($decoded_response['choices'][0]['message']['content'])) {
    $answer = $decoded_response['choices'][0]['message']['content'];
} else {
    $answer = "Sorry, I don't understand";   
}

echo($answer);

curl_close($ch);
?>