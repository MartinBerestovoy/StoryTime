// Aquí es donde deberías obtener los datos del usuario desde tu servidor o base de datos.
// Por simplicidad, asignaremos valores estáticos.

document.getElementById('nombreUsuario').value = "JuanPerez123";
document.getElementById('email').value = "juanperez@email.com";
document.getElementById('password').value = "contraseña123";  // Esto no es seguro mostrarlo así

document.getElementById('cargarFoto').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('foto').src = event.target.result;
        }
        reader.readAsDataURL(file);
    }
});

document.getElementById('desloguear').addEventListener('click', function() {
    // Aquí puedes agregar la lógica para desloguearse, como borrar tokens, etc.
    alert("Deslogueado con éxito!");  // Simulación simple
    window.location.href = "login.html";  // Redirige a la página de inicio de sesión
});
