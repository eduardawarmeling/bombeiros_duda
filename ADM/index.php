<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="adm.css">
</head>
<body>

<div class="cabecalho">
        <img src="menu.png" width="350px" class="menu">
    </div>    <br>
<div class="tudo">
    <h2>Inserir Dados</h2>
    <form action="crud.php" method="post" class="form">
        CPF: <br> <input type="text" name="cpf"  required><br>
        Email: <br> <input type="email" name="email"  required><br>
        Senha: <br> <input type="password" name="senha" required><br>
        Nome: <br> <input type="text" name="nome" required><br>
        Telefone: <br> <input type="text" name="telefone" required><br>
        Usuário: <br> <input type="text" name="usuario" required><br>
        <input type="submit" name="inserir" value="Inserir" class="button">
    </form>


    




    <h2>Excluir Dados</h2>
    <form action="crud.php" method="post" class="form">
        CPF do Bombeiro a ser excluído: <input type="cpf" name="cpf" required><br>
        <input type="submit" name="excluir" value="Excluir" class="button">
    </form>

    <form action="crud.php" method="get" class="form">
    CPF do Bombeiro a ser alterado: <input type="text" name="cpfAntigo" required><br><br>
    Novo CPF: <br> <input type="text" name="novoCpf" required><br>
    Novo Email: <input type="email" name="email" required><br>
    Nova Senha: <input type="password" name="senha" required><br>
    Novo Nome: <input type="text" name="nome" required><br>
    Novo Telefone: <input type="text" name="telefone" required><br>
    Novo Usuário: <input type="text" name="usuario" required><br>
    <input type="submit" name="alterar" value="Alterar" class="button">
</form>

    <h2>Listar Dados</h2>
    <form action="crud.php" method="get" class="form">
    <label for="nome">Filtrar por nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Digite um nome">

    
    <input type="submit" name="listar" value="Listar" class="button">
</form>



<?php
// Conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=localhost;dbname=bombeirosbank", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

// Consulta SQL para obter dados dos usuários
$comando = $pdo->prepare("SELECT * FROM cadastro_bombeiro");
$comando->execute();
?>



</table>

</body>
</html>