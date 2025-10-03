<?php
require "Aluno.class.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gustavomRm    = $_POST['rm'] ?? '';
    $gustavomNome  = $_POST['nome'] ?? '';
    $gustavomEmail = $_POST['email'] ?? '';
    $gustavomSenha = $_POST['senha'] ?? '';
    $gustavomCpf   = $_POST['cpf'] ?? '';

    $gustavomAluno = new Aluno();

    if ($gustavomAluno->conectar()) {
        
        if ($gustavomAluno->consultar($email)) {
            echo "<script>alert('Já existe um aluno cadastrado com esse e-mail.'); window.history.back();</script>";
        } else {
            if ($gustavomAluno->cadastrar($gustavomRm, $gustavomNome, $gustavomEmail, $gustavomSenha, $gustavomCpf)) {
                echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='index.html';</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar. Tente novamente.'); window.history.back();</script>";
            }
        }
    } else {
        echo "<script>alert('Erro na conexão com o banco de dados.'); window.history.back();</script>";
    }
}
?>