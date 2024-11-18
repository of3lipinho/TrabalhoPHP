<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/prestador3.css">
    <script src="Script/formatacao.js"></script>
    <title>Cadastrar Prestador</title>

</head>

<body>
<div class="cabecalho_container">
        <p class="cabecalho">Cadastrar Prestador</p>
    </div>
    <div class="menu_container">
        <div class="menu">

            <div class="menu_botao_borda">
                <p><a href="/TrabalhoPHP/index.html">Pagina Inicial </a></p>
            </div>
            <div class="menu_botao_borda">
                <p><a href="/TrabalhoPHP/Menu/Cadastro/prestador.php">Prestadores de Serviço</a></p>
            </div>

            <div class="menu_botao_borda">
                <p><a href="/TrabalhoPHP/Menu/Cadastro/contratante.php">Anunciar Vaga</a></p>
            </div>
            
            <div class="menu_botao_borda" >
                <p><a href="/TrabalhoPHP/Menu/Consulta/pesquisa_prestador.php">Consultar Prestadores</a></p>
            </div>  

            <div class="menu_botao" >
                <p><a href="/TrabalhoPHP/Menu/Consulta/pesquisa_contratante.php">Consultar Vaga</a></p>
            </div>
            
        </div>
    </div>
    </div class="form_container">
    <form action="Conexao/inserir_prestador.php" method="POST">
    <p>Nome:
            <input type="text" name="nome" id="nome" title="Digite seu Nome"  required />
        </p>
        <p>Data de Nascimento:
            <input type="date" name="data_nasc" id="data_nasc" title="Digite sua Data de Nascimento " required />
        </p>
        <p>Telefone:
            <input type="text" name="telefone" id="telefone" title="Digite seu Telefone" maxlength="15" required oninput="formatarTelefone(this)" />
        </p>
        <p>Email:
            <input type="email" name="email" id="email" title="Digite seu Email" required />
        </p>
        <p>CPF:
            <input type="text" name="cpf" id="cpf" maxlength="14" minlength="14" title="Digite seu CPF" oninput="formatarCPF(this)" />
        </p>
        <p>Especialidade:
            <input type="text" name="especialidade" id="especialidade" title="Digite sua Especialidade" required />
        </p>
        <input type="submit" value="Cadastrar" class="cadastrar" />
    </form>
    </div>

    <div class="rodape_container">
        <p class="rodape">Contato: contato@exemplo.com | Telefone: (11) 1234-5678 | Endereço: Rua Exemplo, 123 - Mococa, SP</p>
        <p class="rodape">© 2024 Autonomos Já. Todos os direitos reservados.</p>
    </div>
</body>



</html>