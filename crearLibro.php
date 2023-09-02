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
  <img src="imgProyecto/logo.png" alt="logo" clas="logo"> <!--Logo de App-->
  <div class="h1">
    <h1 class="headline" id="titulo">CREAR LIBRO</h1>
  </div>
  <br>
  <br>
  <br>
  <br>
  <!-- Casillas de Verificación -->

    <form action="handler.php" method="post">

    <h2 class="headline">CATEGORIA TEMATICA</h2>
      <section class="formTematica">
        <section class="form">
          <div class="pictograma">
            <label for="pictogramaDivertido" class="checkbox-label">
              <input id="pictogramaDivertido" type="checkbox" class="custom-checkbox" value="divertido" name="tematica[]">DIVERTIDO
              <span class="checkmark"></span>
              <img src="imgProyecto/divertido.png" alt="DIVERTIDO">
            </label>
          </div>
          <div class="pictograma">
            <label for="pictogramaGracioso">
              <input id="pictogramaGracioso" type="checkbox" class="custom-checkbox" value="gracioso" name="tematica[]">GRACIOSO
              <span class="checkmark"></span>
              <img src="imgProyecto/partirse de risa.png" alt="GRACIOSO">
            </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaEstudios">
            <input id="pictogramaEstudios" type="checkbox" class="custom-checkbox" value="estudios" name="tematica[]">ESTUDIOS
            <span class="checkmark"></span>
              <img src="imgProyecto/estudio.png" alt="ESTUDIOS">
          </label>
          </div>
          <br>
        </section>
      </section>

      <br>
      <br>

      <h2 class="headline">CATEGORIA PERSONAJES</h2>
      <section class="formPersonajes">
        <br>
        <br>
        <section class="form">
          <div class="pictograma" >
          <label for="pictogramaPerro">
            <input id="pictogramaPerro" type="checkbox" class="custom-checkbox" value="perro" name="personajes[]">PERRO
            <span class="checkmark"></span>
              <img src="imgProyecto/perro.png" alt="PERRO">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaGato">
            <input id="pictogramaGato" type="checkbox" class="custom-checkbox" value="gato" name="personajes[]">GATO
            <span class="checkmark"></span>
              <img src="imgProyecto/gato doméstico.png" alt="Imagen 1">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaLobo">
            <input id="pictogramaLobo" type="checkbox" class="custom-checkbox" value="lobo" name="personajes[]">LOBO
            <span class="checkmark"></span>
              <img src="imgProyecto/lobo.png" alt="LOBO">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaTRex">
            <input id="pictogramaTRex" type="checkbox" class="custom-checkbox" value="tRex" name="personajes[]">T REX
            <span class="checkmark"></span>
              <img src="imgProyecto/Tyrannosaurus Rex.png" alt="T REX">
          </label>
          </div>
          <div class="pictograma">
            <label for="pictogramaBatman">
              <input id="pictogramaBatman" type="checkbox" class="custom-checkbox" value="batman" name="personajes[]">BATMAN
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

      <h2 class="headline">CATEGORIA LUGAR</h2>
      <section class="formLugares">
      <br>
      <br>
        <section class="form">
          <div class="pictograma">
            <label for="pictogramaShopping">
              <input id="pictogramaShopping" type="checkbox" class="custom-checkbox" value="shopping" name="lugar[]">SHOPPING
              <span class="checkmark"></span>
              <img src="imgProyecto/centro comercial.png" alt="SHOPPING">
            </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaColegio">
            <input id="pictogramaColegio" type="checkbox" class="custom-checkbox" value="colegio" name="lugar[]">COLEGIO
            <span class="checkmark"></span>
            <img src="imgProyecto/colegio.png" alt="COLEGIO">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaAula">
            <input id="pictogramaAula" type="checkbox" class="custom-checkbox" value="aula" name="lugar[]">AULA
            <span class="checkmark"></span>
            <img src="imgProyecto/aula.png" alt="AULA">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaPatio">
            <input id="pictogramaPatio" type="checkbox" class="custom-checkbox" value="aula" name="lugar[]">PATIO
            <span class="checkmark"></span>
            <img src="imgProyecto/patio.png" alt="PATIO">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaCasa">
            <input id="pictogramaCasa" type="checkbox" class="custom-checkbox" class="custom-checkbox" value="casa" name="lugar[]">CASA
            <span class="checkmark"></span>
            <img src="imgProyecto/casa.png" alt="CASA">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaCastillo">
            <input id="pictogramaCastillo" type="checkbox" class="custom-checkbox" value="castillo" name="lugar[]">CASTILLO
            <span class="checkmark"></span>
            <img src="imgProyecto/castillo.png" alt="CASTILLO">
          </label>
          </div>
          <div class="pictograma">
          <label for="pictogramaNaveEspacial">
            <input id="pictogramaNaveEspacial" type="checkbox" class="custom-checkbox" value="NaveEspacial" name="lugar[]">NAVE ESPACIAL
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

    <!-- $final_prompt = "Crea un libro el cual tenga como tematica " + $tematica[] + ", que tenga de protagonista a " + $personaje[] + " y que se lleve a cabo en " + $lugar[]; -->

</body>
</html>



