<?php
session_start();
    include("conecta.php");
    $FK_IdOcorrencia = 18; //$_SESSION["id"];

    $objetos  = $_POST["objetos"];
  

    $comando = $pdo->prepare("INSERT INTO obj_recolhidos VALUES ($FK_IdOcorrencia, '$objetos')");
    $resultado = $comando->execute();

    echo ("{\"resposta\":1}");

?>