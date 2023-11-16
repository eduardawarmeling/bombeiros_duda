<?php
session_start();
    include("conecta.php");
    $FK_IdOcorrencia = 17; //$_SESSION["id"];

    $Observacoes  = $_POST["Observacoes"];
  

    $comando = $pdo->prepare("INSERT INTO obj_recolhidos VALUES ($FK_IdOcorrencia, '$Observacoes')");
    $resultado = $comando->execute();

    echo ("{\"resposta\":1}");

?>