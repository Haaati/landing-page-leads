<?php

include("verificar_sessao.php");
include("conexao.php");

$sql = "SELECT * FROM livros";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar livros - Biblioteca</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container container-largo">
        <h1>Listagem de livros</h1>
        <p class="subtitulo">Todos os livros cadastrados no sistema</p>

        <table class="tabela-livros">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php
            while ($livro = mysqli_fetch_assoc($resultado)) {
            ?>
                <tr>
                    <td><?php echo $livro['id']; ?></td>
                    <td><?php echo $livro['titulo']; ?></td>
                    <td><?php echo $livro['autor']; ?></td>
                    <td><?php echo $livro['status']; ?></td>
                    <td class="acoes">
                        <a href="editar_livro.php?id=<?php echo $livro['id']; ?>" class="link-editar">Editar</a>
                        <a href="excluir_livro.php?id=<?php echo $livro['id']; ?>" class="link-excluir">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <a href="painel.php" class="btn btn-voltar">Voltar para o painel</a>
    </div>
</body>

</html>