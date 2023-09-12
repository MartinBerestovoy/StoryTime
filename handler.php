<?php 

var_dump($_POST);

$tematicas = $_POST['tematicas'];
$tematicasConcatenadas = "";

for($i = 0; $i <= count($tematicas); $i++)
{
     $tematicasConcatenadas .= ", " . $tematicas[$i];
}

$personajes = $_POST['personajes'];
$personajesConcatenados = "";

for($i = 0; $i <= count($personaje); $i++)
{
     $personajesConcatenados .= ", " . $personajes[$i];
}

$lugares = $_POST['lugares'];
$lugaresConcatenados = "";

for($i = 0; $i <= count($lugares); $i++)
{
     $lugaresConcatenados .= ", " . $lugares[$i];
}


$final_prompt = "Crea un cuento el cual tenga como tematica/s " . $tematicasConcatenadas . ", que tenga de protagonista/s a " . $personajesConcatenados . " y que se lleve a cabo en " . $lugaresConcatenados;

?>