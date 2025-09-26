<?php
require 'Aluno.class.php';

$aluno = new Aluno();

if(!$aluno){ 
    echo "<h1>Banco indisponível. Tente mais tarde</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TelaCadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>

<body>
    <form action="cadastro.php" method = "post">
        <h1></h1>
        <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder = "Informe o nome do aluno">

            <h1></h1>
        <label for="cpf">Cpf</label>
            <input type="text" name="cpf" placeholder = "Informe o cpf do aluno">

            <h1></h1>
        <label for="email">Email</label>
            <input type="text" name="email" placeholder = "Informe o email do aluno">

            <h1></h1>
        <label for="rm">Rm</label>
            <input type="text" name="rm" placeholder = "Informe o rm do aluno">
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>