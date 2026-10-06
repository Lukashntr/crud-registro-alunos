<?php
require 'config/conexao.php';
require 'acoes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="assets/css/style-lista.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <header id="intro">
        <h1>Lista de Alunos</h1>
        <h3>Aqui você pode visualizar e gerenciar os dados dos alunos.</h3>
        <a href="adicionar.php" class="btn-adicionar">Adicionar Aluno</a>
    </header>
    <main>
        <?php include 'mensagem.php';?>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Idade</td>
                    <td>Turma</td>
                    <td>Nota 1</td>
                    <td>Nota 2</td>
                    <td>Nota 3</td>
                    <td>Nota 4</td>
                    <td>Média</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM alunos";
                $alunos = mysqli_query($conn, $sql);
                if (mysqli_num_rows($alunos) > 0) {
                    foreach ($alunos as $aluno) {
                ?>
                    <tr>
                        <td data-label="ID"><?= $aluno['id'] ?></td>
                        <td data-label="Nome"><?= $aluno['nome'] ?></td>
                        <td data-label="Idade"><?= $aluno['idade'] ?></td>
                        <td data-label="Turma"><?= $aluno['turma'] ?></td>
                        <td data-label="Nota 1"><?= $aluno['nota1'] ?></td>
                        <td data-label="Nota 2"><?= $aluno['nota2'] ?></td>
                        <td data-label="Nota 3"><?= $aluno['nota3'] ?></td>
                        <td data-label="Nota 4"><?= $aluno['nota4'] ?></td>
                        <td data-label="Média"><?= $aluno['media'] ?></td>
                        <td data-label="Ações">
                            <a href="visualizar.php?id=<?= $aluno['id'] ?>" class="btn-visualizar">Visualizar</a>
                            <a href="editar.php?id=<?= $aluno['id'] ?>" class="btn-editar">Editar</a>
                            <form action="acoes.php" method="post" style="display:inline;">
                                <button type="submit" name="excluir" class="btn-excluir" value="<?= $aluno['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este aluno?');"    >
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>

                <?php

                    }
                } else {
                    echo "<h5>Nenhum aluno encontrado.<h5>";
                }
                ?>
            </tbody>
        </table>
    
    </main>

</body>
</html>