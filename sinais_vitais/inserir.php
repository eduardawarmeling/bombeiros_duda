<?php
    include("conecta.php");
    $FK_IdOcorrencia = 16; //$_SESSION["id"];

    $pressao1  = $_POST["pressao1"];
    $pressao2  = $_POST["pressao2"];
    $pulso   = $_POST["pulso"];
    $sat  = $_POST["sat"];
    $temp  = $_POST["temp"];
    $a      =$_POST["a"];
    $b      =$_POST["b"];
    $hgt  = $_POST["hgt"];
    $resp     = $_POST["resp"];
    

    $comando = $pdo->prepare("INSERT INTO sinais_vitais VALUES ('$pressao1' '$pressao2', '$pulso', '$sat', '$temp', '$a' , '$hgt', '$resp')");
    $resultado = $comando->execute();

    echo ("{\"resposta\":1}");

?>