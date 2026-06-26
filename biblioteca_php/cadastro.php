<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário - biblioteca</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de usuário</h1>
        <p>Crie uma conta para acessar o sistema da biblioteca.</p>

        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'email') { //isset = verificação
            echo '<div class="mensagem-erro">Erro: O email informado já está em uso. Por favor, utilize outro email.</div>';
        } ?>

        <form action="salvar_usuario.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required placeholder="Digite seu nome completo">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-block">Cadastrar</button>
        </form>

        <div class="nav-links">
            <p>Já possui uma conta? <a href="index.php">Fazer login</a></p>
        </div>

        <a href="index.php" class="btn btn-voltar">Voltar para a página inicial</a>

        <div class="dica-navegacao">
            <strong>Fluxo:</strong> Cadastro de usuário → Login → Painel → Gerenciar livros.
        </div>
    </div>
</body>

</html>