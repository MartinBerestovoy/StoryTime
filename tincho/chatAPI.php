<?php
$api_key = "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";
$prompt = "Give me a motivational frase";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $api_key,
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n    \"model\": \"gpt-3.5-turbo\",\n    
    \"messages\": [\n      {\n        \"role\": \"system\",\n        \"content\": \"You are a helpful assistant.\"\n      },\n      
    {\n        \"role\": \"user\",\n        \"content\": \" . $prompt . \"\n      }\n    ]\n  }");

$response = curl_exec($ch);
$answer = json_decode($response);
var_dump($answer);

curl_close($ch);
?>