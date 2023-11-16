<?php

$Observacoes = $_POST["Observacoes"];

include("conecta.php");

// Preparar a consulta SQL com um parâmetro
$comando = $pdo->prepare("INSERT INTO obs_importantes (Observacoes) VALUES (:Observacoes)");

// Vincular o valor do parâmetro
$comando->bindParam(':Observacoes', $Observacoes);

// Executar a consulta
$resultado = $comando->execute();

// Verificar se a consulta foi bem-sucedida
if ($resultado) {
    echo "{\"resultado\":1}";
} else {
    echo "{\"resultado\":0}";
}

?>