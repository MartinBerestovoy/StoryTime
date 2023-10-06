const storyInput = document.getElementById('storyInput');
const convertButton = document.getElementById('convertToAudio');
const audioPlayer = document.getElementById('audioPlayer');

convertButton.addEventListener('click', async () => {
    const storyText = storyInput.value;

    // Llamar a la API y obtener el audio.
    const audioBlob = await convertTextToAudio(storyText);

    const audioUrl = URL.createObjectURL(audioBlob);
    audioPlayer.src = audioUrl;
    audioPlayer.play();
});

async function convertTextToAudio(text) {
    const API_URL = 'https://api.tuservicio.com/tts'; // Reemplaza por la URL de tu API
    const API_KEY = 'tu_clave_de_api'; // Reemplaza con tu clave de API

    const response = await fetch(API_URL, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${API_KEY}`
        },
        body: JSON.stringify({ text: text }) // Ajusta según la estructura que la API requiera
    });

    if (!response.ok) {
        throw new Error(`Error: ${response.statusText}`);
    }

    const audioBlob = await response.blob();
    return audioBlob;
}
