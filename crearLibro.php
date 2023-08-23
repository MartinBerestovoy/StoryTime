<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/crearLibro.css">
</head>
<body>
  <img src="" alt=""> <!--Logo de App-->
  <div class="h1">
    <h1 id="titulo">CREAR LIBRO</h1>
  </div>
  <br>
  <br>
  <br>
  <br>
  <!-- Casillas de Verificación -->

    <form action="URL_DESTINO" method="post">

      <section class="formTematica">
        <h2>CATEGORIA TEMATICA</h2>
        <section class="form">
          <div class="pictograma">
            <label for="pictogramaDivertido" class="checkbox-label">
              <input id="pictogramaDivertido" type="checkbox" class="custom-checkbox" value="divertido" name="pictograma">DIVERTIDO
              <span class="checkmark"></span>
              <img src="imgProyecto/divertido.png" alt="DIVERTIDO">
            </label>
          </div>
          <div class="pictograma">
            <label for="pictogramaGracioso">
              <input id="pictogramaGracioso" type="checkbox" class="custom-checkbox" value="gracioso" name="pictograma">GRACIOSO
              <span class="checkmark"></span>
              <img src="imgProyecto/partirse de risa.png" alt="GRACIOSO">
            </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaEstudios">
            <input id="pictogramaEstudios" type="checkbox" class="custom-checkbox" value="estudios" name="pictograma">ESTUDIOS
            <span class="checkmark"></span>
              <img src="imgProyecto/estudio.png" alt="ESTUDIOS">
          </label>
          </div>
          <br>
        </section>
      </section>

      <br>
      <br>

      <section class="formPersonajes">
        <h2>CATEGORIA PERSONAJES</h2>
        <br>
        <br>
        <section class="form">
          <div class="pictograma">
          <label for="pictogramaPerro">
            <input id="pictogramaPerro" type="checkbox" class="custom-checkbox" value="perro" name="pictograma">PERRO
            <span class="checkmark"></span>
              <img src="imgProyecto/perro.png" alt="PERRO">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaGato">
            <input id="pictogramaGato" type="checkbox" class="custom-checkbox" value="gato" name="pictograma">GATO
            <span class="checkmark"></span>
              <img src="imgProyecto/gato doméstico.png" alt="Imagen 1">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaLobo">
            <input id="pictogramaLobo" type="checkbox" class="custom-checkbox" value="lobo" name="pictograma">LOBO
            <span class="checkmark"></span>
              <img src="imgProyecto/lobo.png" alt="LOBO">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaTRex">
            <input id="pictogramaTRex" type="checkbox" class="custom-checkbox" value="tRex" name="pictograma">T REX
            <span class="checkmark"></span>
              <img src="imgProyecto/Tyrannosaurus Rex.png" alt="T REX">
          </label>
          </div>
          <div class="pictograma">
            <label for="pictogramaBatman">
              <input id="pictogramaBatman" type="checkbox" class="custom-checkbox" value="batman" name="pictograma">BATMAN
              <span class="checkmark"></span>
              <img src="imgProyecto/Batman.png" alt="BATMAN">
            </label>
          </div>
          
          <br> 
        </section>
      </section>
      
      <br>
      <br>
      <br>
      <br>

      <section class="formLugares">
      <h2>CATEGORIA LUGAR</h2>
      <br>
      <br>
        <section class="form">
          <div class="pictograma">
            <label for="pictogramaShopping">
              <input id="pictogramaShopping" type="checkbox" class="custom-checkbox" value="shopping" name="pictograma">SHOPPING
              <span class="checkmark"></span>
              <img src="imgProyecto/centro comercial.png" alt="SHOPPING">
            </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaColegio">
            <input id="pictogramaColegio" type="checkbox" class="custom-checkbox" value="colegio" name="pictograma">COLEGIO
            <span class="checkmark"></span>
            <img src="imgProyecto/colegio.png" alt="COLEGIO">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaAula">
            <input id="pictogramaAula" type="checkbox" class="custom-checkbox" value="aula" name="pictograma">AULA
            <span class="checkmark"></span>
            <img src="imgProyecto/aula.png" alt="AULA">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaPatio">
            <input id="pictogramaPatio" type="checkbox" class="custom-checkbox" value="aula" name="pictograma">PATIO
            <span class="checkmark"></span>
            <img src="imgProyecto/patio.png" alt="PATIO">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaCasa">
            <input id="pictogramaCasa" type="checkbox" class="custom-checkbox" class="custom-checkbox" value="casa" name="pictograma">CASA
            <span class="checkmark"></span>
            <img src="imgProyecto/casa.png" alt="CASA">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaCastillo">
            <input id="pictogramaCastillo" type="checkbox" class="custom-checkbox" value="castillo" name="pictograma">CASTILLO
            <span class="checkmark"></span>
            <img src="imgProyecto/castillo.png" alt="CASTILLO">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaNaveEspacial">
            <input id="pictogramaNaveEspacial" type="checkbox" class="custom-checkbox" value="NaveEspacial" name="pictograma">NAVE ESPACIAL
            <span class="checkmark"></span>
            <img src="imgProyecto/nave espacial.png" alt="NAVE ESPACIAL">
          </label>
          </div>
          <br>
        </section>
      </section>
      <br>
      <br>
      <button type="submit"><a href="generarLibro.php" class="button">CREAR HISTORIA</a> </button>
    </form>
 
</body>
</html>