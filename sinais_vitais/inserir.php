<?php
    include("conecta.php");
    $FK_IdOcorrencia = 22; //$_SESSION["id"];

    $pressao  = $_POST["pressao"];
    $pulso   = $_POST["pulso"];
    $sat  = $_POST["sat"];
    $temp  = $_POST["temp"];
    $a      =$_POST["a"];
    $b      =$_POST["b"];
    $hgt  = $_POST["hgt"];
    $resp     = $_POST["resp"];
    

    $comando = $pdo->prepare("INSERT INTO sinais_vitais VALUES ($FK_IdOcorrencia, '$pressao' , '$pulso', '$sat', '$temp', '$a' , '$b' , '$hgt', '$resp')");
    $resultado = $comando->execute();

    echo ("{\"resposta\":1}");

?>