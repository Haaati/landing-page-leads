<?php 

include("verificar_sessao.php");

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro - Biblioteca</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastrar Novo Livro</h1>
        <p class="subtitulo">Preencha os dados do novo livro.</p>

        <form action="salvar_livro.php" method="POST">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required placeholder="Digite o título do livro">
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" required placeholder="Digite o nome do autor">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" required>
                    <option value="Disponivel">Disponivel</option>
                    <option value="Emprestado">Emprestado</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-block btn-sucesso">Salvar Livro</button>
        </form>
 
        <a href="painel.php" class="btn btn-voltar">Voltar para Painel</a>
    </div>
</body>
</html>