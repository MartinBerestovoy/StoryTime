<?php 

var_dump($_POST);


// for($i = 0; $i <= count($tematicas); $i++)
// {
//     $tematicasLibro = $tematicasLibro . $_POST[];
// }

// for($i = 0; $i <= count($tematicas); $i++)
// {
//     $tematicas[$i] = $tematicas[$i] . $_POST;
// }

$tematicas = $_POST['tematicas'];
$tematicasConcatenadas = "";

for($i = 0; $i <= count($tematicas); $i++)
{
     $tematicasConcatenadas = $tematicasConcatenadas + ", " + $tematicas[$i];
}


$final_prompt = "Crea un libro el cual tenga como tematica " + $tematicasConcatenadas + ", que tenga de protagonista a " + $personajesConcatenados + " y que se lleve a cabo en " + $lugaresConcatenados;

?>