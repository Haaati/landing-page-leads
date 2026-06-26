<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online - Organize seu Acervo Facilmente</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
       /* Pequenos ajustes extras específicos para a disposição dos elementos na Landing Page */
        header {
            margin-bottom: -20px;
        }
        section {
            margin-bottom: 35px;
            padding-bottom: 25px;
            border-bottom: 1px dashed #d1d5db;
        }
        section:last-of-type {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        footer {
            text-align: center;
            margin: 40px auto;
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <header class="container container-largo cabecalho-index">
        <div class="div-cabecalho">
            <span class="titulo-cabecalho">📖 BookSpace</span>
            <nav class="nav-links nav-links-cabecalho">
                <a href="#inicio" class="links-cabecalho">Início</a>
                <a href="#sobre" class="links-cabecalho">Recursos</a>
                <a href="#captura" class="links-cabecalho">Testar Grátis</a>
            </nav>
        </div>
    </header>

    <main class="container container-largo" id="inicio">
        <section class="section-hero">
            <h1>Simplifique a gestão da sua biblioteca hoje mesmo!</h1>
            <p class="subtitulo">A plataforma digital ideal para organizar seus livros, facilitar buscas e otimizar o tempo de alunos e
                professores em sala de aula</p>
            <div class="dica-navegacao">
                <strong>Como ajudamos no dia a dia?</strong> Centralizamos o cadastro de títulos, eliminamos planilhas confusas em papel
                e permitimos que o acervo inteiro seja consultado ou gerenciado em segundos
            </div>
        </section>
        <section id="sobre">
            <h2 class="titulo-sobre">O que nossa biblioteca oferece?</h2>
            <p>Desenvolvido sob medida para quem precisar de agilidade, o ecossistema une controle administrativo potente com uma
                interface extremamente amigável</p>
            <ul class="beneficios-lista">
                <li><strong>Painel Intuitivo:</strong>Interface limpa eprojetada com blocos grandes, perfeita para computadores, tablets ou projeção em sala de. aula</li>
                <li><strong>Controle total de acervo:</strong>Cadastre novos títulos, liste exemplares e faça edições ou exclusões de forma rápida e segura.</li>
                <li><strong>Fluidez e praticidade:</strong> Sem menus complexos ou configurações complicadas. É entrar, clicar e usar.</li>
            </ul>
        </section>
        <section class="captura" id="captura">
            <h2 class="titulo-captura">Quer testar o sistema gratuitamente?</h2>
            <p class="subtitulo subtitulo-captura">Digite seu email abaixo para garantir seu acesso à plataforma de validação e começar a organizar seu acervo.</p>
            <form action="captura-leads.php" method="post">
                <div class="form-group">
                    <label for="name">Como gostarai de ser chamado?</label>
                    <input type="text" id="nome" name="leads_nome" placeholder="Seu nome completo" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="leads_email" placeholder="Seu melhor email" required>
                </div>
                <button type="submit" class="btn btn-success btn-block">Quero testar grátis</button>
            </form>
        </section>
    </main>
    <footer class="container container-largo rodape">
        <p>© 2026 BookSpace. Todos os direitos reservados.</p>
        <p class="rodape-index">Foco em usabilidade e aprendizagem ágil.</p>
    </footer>
</body>

</html>