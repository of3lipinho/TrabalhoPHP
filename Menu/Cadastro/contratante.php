<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/contratante2.css">
    <script src="Script/formatacao2.js"></script>

    <title>Anunciar Vaga</title>
</head>
<body>
<div class="cabecalho_container">
        <p class="cabecalho">Anunciar Vaga</p>
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
    <form action="Conexao/inserir_contratante.php" method="POST">

    <p>Nome/Empresa:
            <input type="text" name="nome" id="nome" title="Digite seu Nome ou de sua empresa"  required />
        </p>
        <p>Data de Nascimento:
            <input type="date" name="data_nasc" id="data_nasc" title="Digite sua Data de Nascimento ou de sua empresa" required />
        </p>
        <p>Telefone:
            <input type="text" name="telefone" id="telefone" title="Digite seu Telefone ou de sua empresa" maxlength="15" required oninput="formatarTelefone(this)" />
        </p>
        <p>Email:
            <input type="email" name="email" id="email" title="Digite seu Email ou de sua empresa" required />
        </p>
        <p>CPF:
            <input type="text" name="cpf" id="cpf" maxlength="14" minlength="14" title="Caso for uma Pessoa Fisica, digite seu CPF. Caso for Empresa, deixe em branco" oninput="formatarCPF(this)" />
        </p>
        <p>CNPJ:
            <input type="text" name="cnpj" id="cpnj" maxlength="18" minlength="18"   required  title="Caso for uma Empresa, digite seu CNPJ. Caso for Pessoa Fisica, deixe em branco" oninput="formatarCNPJ(this)" />
        </p>
        <p>Vaga:
            <input type="text" name="vaga" id="vaga"  title="Digite a vaga que está anunciando" required />
        </p>
        <p>Descrição:
        <input type="text" name="descricao"  title="Adicione uma Descrição detalhada da vaga" />
        </p>

        <input type="submit" value="Cadastrar" class="cadastrar" />
        
    </form>
    <div class="rodape_container">
        <p class="rodape">Contato: contato@exemplo.com | Telefone: (11) 1234-5678 | Endereço: Rua Exemplo, 123 - Mococa, SP</p>
        <p class="rodape">© 2024 Autonomos Já. Todos os direitos reservados.</p>
    </div>
   
</body>
</html>