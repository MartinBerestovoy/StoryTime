<?php 

var_dump($_POST);


/* for($i = 0; $i <= count($tematicas); $i++)
 {
     $tematicasLibro = $tematicasLibro . $_POST[];
 }

 for($i = 0; $i <= count($tematicas); $i++)
 {
     $tematicas[$i] = $tematicas[$i] . $_POST;
}
*/

$tematicas = $_POST['tematicas'];
$tematicasConcatenadas = "";

for($i = 0; $i <= count($tematicas); $i++)
{
     $tematicasConcatenadas .= ", " . $tematicas[$i];
}


$final_prompt = "Crea un cuento el cual tenga como tematica/s " . $tematicasConcatenadas . ", que tenga de protagonista/s a " . $personajesConcatenados . " y que se lleve a cabo en " . $lugaresConcatenados;

?>