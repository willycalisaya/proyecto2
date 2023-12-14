<?php
$conex = mysqli_connect("localhost","root","","registro");


$query = "SELECT verbo FROM verbos ORDER BY RAND() LIMIT 1";
$resultado = mysqli_query($conex, $query);

if ($resultado) {
    $fila = mysqli_fetch_assoc($resultado);
    $palabra = $fila['verbo'];
    echo json_encode(['palabra' => $palabra]); 
} else {
    echo json_encode(['error' => 'Error al obtener la palabra']); 
}


mysqli_close($conex);
?>