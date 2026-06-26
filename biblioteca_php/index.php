<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Biblioteca</h1>
        <p class="subtitulo">Faça login para acessar o sistema da biblioteca.</p>

        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'login') {
            echo '<div class="mensagem-erro">Erro: Email ou senha inválidos. Por favor, tente novamente.</div>';
        }
        ?>

        <form action="autenticar.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-block">Entrar</button>
        </form>

        <div class="nav-links">
            <p>Não possui uma conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>

        <a href="cadastro.php" class="btn btn-voltar">Voltar para o cadastro</a>
        <div class="dica-navegacao">
            <strong>Fluxo:</strong> Login → Painel → Cadastrar ou listar livros.
        </div>
    </div>
</body>
</html>