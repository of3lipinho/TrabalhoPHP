<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/pesquisa.css">
    <title>Consultar Prestadores</title>
</head>
<body>
<div class="cabecalho_container">
        <p class="cabecalho">Consultar Vaga</p>
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
    <div class="form_container">
    <form action="resultado_contratante.php" method="post">
        <p>Selecione o metodo de busca:
            <select name="metodo" id="metodo">
                <option value="-1" selected disabled>Selecione sua opção</option>
                <option value="nome">Nome</option>
                <option value="vagas">Vagas</option>
                <option value="todos">Exibir Todos</option>
            </select>
        </p>
        <p>Pesquisar:
            <input type="text" id="filtro" name="filtro" placeholder="Ex. João da Silva, Pintor" />
        </p>
        <input type="submit" class="buscar" value="Buscar" />
    </form>
    </div>
    <br><br><br><br><br><br><br><br>

    <footer class="rodape_container">
        <p class="rodape">Contato: contato@exemplo.com | Telefone: (11) 1234-5678 | Endereço: Rua Exemplo, 123 - Mococa, SP</p>
        <p class="rodape">© 2024 Autonomos Já. Todos os direitos reservados.</p>
    </footer>
</body>
</html> 
