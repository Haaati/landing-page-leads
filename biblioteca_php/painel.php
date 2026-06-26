<?php 
include("verificar_sessao.php");
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - Biblioteca</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Olá, <?php echo $_SESSION['nome']; ?>!</h1>
        <p class="subtitulo">Bem-vindo ao painel da biblioteca. Escolha uma das opções abaixo.</p>

        <div class="painel-cards">
            <a href="cadastrar_livro.php" class="card-link">Cadastrar Novo Livro</a>
            <a href="listar_livro.php" class="card-link">Listar Livros</a>
            <a href="logout.php" class="card-link">Sair</a>
        </div>

        <div class="dica-navegacao">
            <strong>Fluxo:</strong> Painel → Cadastrar ou listar livros → Editar ou excluir livros.
        </div>
</body>
</html>