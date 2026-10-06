<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Aluno</title>
    <link rel="stylesheet" href="assets/css/style-adicionar.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <main>
        <header id="intro">
            <h1>REGISTRO DE NOTAS</h1>
            <h3>Preencha os dados do aluno e lance as notas das quatro avaliações.</h3>
        </header>
        <section>
            <form class="form" action="acoes.php" method="post">
                <div class="form-group">
                    <div class="form-item">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>
                    <div class="form-item">
                        <label for="idade">Idade:</label>
                        <input type="number" id="idade" name="idade" min="15" required>
                    </div>
                    <div class="form-item">
                        <label for="turma">Turma:</label>
                        <input type="text" id="turma" name="turma" required>
                    </div>
                    <div class="form-group">
                        <div class="form-item">
                            <label for="nota1">Nota 1:</label>
                            <input type="number" class="nota" name="nota1" min="0" max="10" required>
                        </div>
                        <div class="form-item">
                            <label for="nota2"> Nota 2:</label>
                            <input type="number" class="nota" name="nota2" min="0" max="10" required>
                        </div>
                        <div class="form-item">
                            <label for="nota3">Nota 3:</label>
                            <input type="number" class="nota" name="nota3" min="0" max="10" required>
                        </div>
                        <div class="form-item">
                            <label for="nota4">Nota 4:</label>
                            <input type="number" class="nota" name="nota4" min="0" max="10" required>
                        </div>
                        <div class="form-item">
                            <label>Média:</label>
                            <label id="media" name="media" class="media">0</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-item">
                            <button type="submit" name="confirmar" class="btn">Salvar</button>
                        </div>
                        <div class="form-item">
                            <button class="btn" type="button">
                                <a href="index.php" id="voltar">Voltar</a>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>
</html>