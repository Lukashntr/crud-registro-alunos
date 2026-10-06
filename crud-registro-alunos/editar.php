<?php
session_start();
require 'config/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="assets/css/style-adicionar.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <main>
        <header id="intro">
            <h1>Editar Aluno</h1>
            <h3>Preencha os dados do aluno e lance as notas das quatro avaliações.</h3>
        </header>
        <section>
            <?php
            if (isset($_GET['id'])) {
                $alunos_id = mysqli_real_escape_string($conn, $_GET['id']);
                $sql = "SELECT * FROM alunos WHERE id = '$alunos_id'";
                $query = mysqli_query($conn, $sql);

                if (mysqli_num_rows($query) > 0) {
                    $aluno = mysqli_fetch_array($query);
            ?>
            <form class="form" action="acoes.php" method="post">
                <input type="hidden" name="aluno_id" value="<?=$aluno['id']; ?>">
                <div class="form-group">
                    <div class="form-item">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value="<?=$aluno['nome']; ?>" required>
                    </div>
                    <div class="form-item">
                        <label for="idade">Idade:</label>
                        <input type="number" id="idade" name="idade" value="<?=$aluno['idade']; ?>" min="15" required>
                    </div>
                    <div class="form-item">
                        <label for="turma">Turma:</label>
                        <input type="text" id="turma" name="turma" value="<?=$aluno['turma']; ?>" required>
                    </div>
                    <div class="form-group">
                        <div class="form-item">
                            <label for="nota1">Nota 1:</label>
                            <input type="number" class="nota" name="nota1" value="<?=$aluno['nota1']; ?>" min="0" max="10" required>
                        </div>
                        <div class="form-item">
                            <label for="nota2"> Nota 2:</label>
                            <input type="number" class="nota" name="nota2" value="<?=$aluno['nota2']; ?>" min="0" max="10" required>
                        </div>
                        <div class="form-item">
                            <label for="nota3">Nota 3:</label>
                            <input type="number" class="nota" name="nota3" value="<?=$aluno['nota3']; ?>" min="0" max="10" required>
                        </div>
                        <div class="form-item">
                            <label for="nota4">Nota 4:</label>
                            <input type="number" class="nota" name="nota4" value="<?=$aluno['nota4']; ?>" min="0" max="10" required>
                        </div>
                        <div class="form-item">
                            <label>Média:</label>
                            <label id="media" name="media" class="media">0</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-item">
                            <button type="submit" name="editar" class="btn">
                                Salvar
                            </button>
                        </div>
                        <div class="form-item">
                            <button class="btn" type="button">
                                <a href="index.php" id="voltar">Voltar</a>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <?php
            } else {
                echo "<h5>Aluno não encontrado.<h5>";
                }
            }
            ?>
        </section>
    </main>
</body>
</html>