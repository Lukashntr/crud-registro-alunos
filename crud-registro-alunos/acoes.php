<?php
session_start();
require 'config/conexao.php';

if (isset($_POST['confirmar'])) {
    $nome  = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $idade = (int)$_POST['idade'];
    $turma = mysqli_real_escape_string($conn, trim($_POST['turma']));
    $nota1 = (float)$_POST['nota1'];
    $nota2 = (float)$_POST['nota2'];
    $nota3 = (float)$_POST['nota3'];
    $nota4 = (float)$_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    $sql = "INSERT INTO alunos (nome, idade, turma, nota1, nota2, nota3, nota4, media) 
            VALUES ('$nome', '$idade', '$turma', '$nota1', '$nota2', '$nota3', '$nota4', '$media')";
    
    $resultado = mysqli_query($conn, $sql);

    if ($resultado && mysqli_affected_rows($conn) > 0) {
        $_SESSION['mensagem'] = "Aluno adicionado com sucesso!";
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = "Erro ao adicionar aluno: " . mysqli_error($conn);
        header('Location: adicionar.php');
        exit;
    }
}


if (isset($_POST['editar'])) {
    $aluno_id = mysqli_real_escape_string($conn, $_POST['aluno_id']);

    
    $nome  = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $idade = (int)$_POST['idade'];
    $turma = mysqli_real_escape_string($conn, trim($_POST['turma']));
    $nota1 = (float)$_POST['nota1'];
    $nota2 = (float)$_POST['nota2'];
    $nota3 = (float)$_POST['nota3'];
    $nota4 = (float)$_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    $sql = "UPDATE alunos SET 
                nome = '$nome', 
                idade = '$idade', 
                turma = '$turma', 
                nota1 = '$nota1', 
                nota2 = '$nota2', 
                nota3 = '$nota3', 
                nota4 = '$nota4', 
                media = '$media' 
            WHERE id = '$aluno_id'";
    
    $resultado = mysqli_query($conn, $sql);

    if ($resultado && mysqli_affected_rows($conn) > 0) {
        $_SESSION['mensagem'] = "Aluno atualizado com sucesso!";
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = "Erro ao Editar aluno: " . mysqli_error($conn);
        header('Location: adicionar.php');
        exit;
    }
}

if (isset($_POST['excluir'])){
    $usuario_id = mysqli_real_escape_string($conn, $_POST['excluir']);

    $sql = "DELETE FROM alunos WHERE id = '$usuario_id'";
    echo $usuario_id;
    
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['mensagem'] = "Aluno excluído com sucesso!";
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = "Erro ao excluir aluno: " . mysqli_error($conn);
        header('Location: lista.php');
        exit;
    }
}
?>

