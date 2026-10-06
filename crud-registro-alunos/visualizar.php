<?php
require 'config/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Aluno</title>
    <link rel="stylesheet" href="assets/css/style-adicionar.css">
    <link rel="stylesheet" href="assets/css/style-visualizar.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <main>
        <header id="intro">
            <h1>Visualizar Aluno</h1>
            <h3>Visualize os dados do aluno e suas notas.</h3>
        </header>
        <section>
                <div class="form-group">
                    <?php
                    if (isset($_GET['id'])){
                        $alunos_id = mysqli_real_escape_string($conn, $_GET['id']);
                        $sql = "SELECT * FROM alunos WHERE id = '$alunos_id'";
                        $query = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($query) > 0) {
                            $aluno = mysqli_fetch_assoc($query);
                        ?>
                        <div class="form-item">
                            <label for="nome">Nome:</label>
                            <p class="control">
                                <?= htmlspecialchars($aluno['nome'], ENT_QUOTES, 'UTF-8') ?>
                            </p>
                        </div>
                        <div class="form-item">
                            <label for="idade">Idade:</label>
                            <p class="control">
                                <?= htmlspecialchars($aluno['idade'], ENT_QUOTES, 'UTF-8') ?>
                            </p>
                        </div>
                        <div class="form-item">
                            <label for="turma">Turma:</label>
                            <p class="control">
                                <?= htmlspecialchars($aluno['turma'], ENT_QUOTES, 'UTF-8') ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <div class="form-item">
                                <label for="nota1">Nota 1:</label>
                                <p class="control">
                                    <?= htmlspecialchars($aluno['nota1'], ENT_QUOTES, 'UTF-8') ?>
                                </p>
                            </div>
                            <div class="form-item">
                                <label for="nota2"> Nota 2:</label>
                                <p class="control">
                                    <?= htmlspecialchars($aluno['nota2'], ENT_QUOTES, 'UTF-8') ?>
                                </p> 
                            </div>
                            <div class="form-item">
                                <label for="nota3">Nota 3:</label>
                                <p class="control">
                                    <?= htmlspecialchars($aluno['nota3'], ENT_QUOTES, 'UTF-8') ?>
                                </p> 
                            </div>
                            <div class="form-item">
                                <label for="nota4">Nota 4:</label>
                                <p class="control">
                                    <?= htmlspecialchars($aluno['nota4'], ENT_QUOTES, 'UTF-8') ?>
                                </p> 
                            </div>
                            <div class="form-item">
                                <label>Média:</label>
                                <p class="control">
                                    <?= htmlspecialchars($aluno['media'], ENT_QUOTES, 'UTF-8') ?>
                                </p>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <div class="form-item">
                                <button class="btn" type="button">
                                    <a href="index.php" id="voltar">Voltar</a>
                                </button>
                            </div>
                        </div>
                        <?php

                        } else {
                                echo "<h5>Aluno não encontrado.<h5>";
                            }
                    }
                    ?>
                </div>
            </form>
        </section>
    </main>
</body>
</html>