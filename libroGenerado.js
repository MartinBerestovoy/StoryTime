const audioInput = document.getElementById('audioInput');
const processButton = document.getElementById('processAudio');
const resultDiv = document.getElementById('result');

processButton.addEventListener('click', async () => {
    if (audioInput.files.length === 0) {
        alert('Por favor, sube un archivo de audio primero.');
        return;
    }

    const audioFile = audioInput.files[0];
    const audioData = await audioFile.arrayBuffer();

    // Llamar a la API y procesar el audio.
    callAudioAPI(audioData);
});

async function callAudioAPI(audioData) {
    const API_URL = 'https://api.tuservicio.com/endpoint'; // Reemplaza por la URL de tu API
    const API_KEY = 'tu_clave_de_api'; // Reemplaza con tu clave de API

    const response = await fetch(API_URL, {
        method: 'POST',
        headers: {
            'Content-Type': 'audio/wav', // Reemplaza con el formato adecuado si es necesario
            'Authorization': `Bearer ${API_KEY}`
        },
        body: audioData
    });

    const data = await response.json();

    resultDiv.textContent = JSON.stringify(data);
}
