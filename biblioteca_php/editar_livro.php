<?php 

include("verificar_sessao.php");
include("conexao.php");

$id = $_GET["id"];
$sql = "SELECT * FROM livros WHERE id=$id";
$resultado = mysqli_query($conexao, $sql);
$livro = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="PR-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro - Biblioteca</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Editar livro</h1>
        <p class="subtitulo">Altere os dados do livro e clique em atualizar</p>

        <form action="atualizar_livro.php" method="$_POST">
            <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $livro['titulo']; ?>">
                
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" value="<?php echo $livro['autor']; ?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" required>
                    <option value="Disponível" <?php if($livro['status'] === 'Disponível') echo 'selected'?>>Disponível</option>
                    <option value="Emprestado" <?php if($livro['status'] === 'Emprestado') echo 'selected'?>>Emprestado</option>
                </select>
            </div>
            <button type="submit" class="btn btn-block">Atualizar Livro</button>
        </form>
        <a href="listar_livros.php" class="btn btn-voltar">Voltar para listagem</a>
    </div>
</body>
</html>