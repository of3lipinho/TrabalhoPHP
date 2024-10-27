<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/contratante.css">
    <title>Cadastrar Contratante</title>
</head>
<body>
<div class="cabecalho_container">
        <p class="cabecalho">Cadastro de Contratante</p>
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
                <p><a href="/TrabalhoPHP/Menu/Cadastro/contratante.php">Contratante</a></p>
            </div>
            
            <div class="menu_botao_borda" >
                <p><a href="/TrabalhoPHP/Menu/Consulta/pesquisa_prestador.php">Consultar Prestadores</a></p>
            </div>  

            <div class="menu_botao" >
                <p><a href="/TrabalhoPHP/Menu/Consulta/pesquisa_contratante.php">Consultar Contratantes</a></p>
            </div>
            
        </div>
    </div>
    <form>
        <label for="nome">Nome:</label> 
        <input type="text" name="nome" id="nome">
        <br>

        <label for="data">Data de nascimento:</label>
        <input type="text" name="data" id="data">
        
        <br>

        <label for="telefone">Telefone:</label> 
        <input type="text" name="telefone" id="telefone">
        <br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf">
        <br>

        <label for="trabalho">Qual tipo de trabalho você procura?:</label>
        <input type="text" name="trabalho" id="trabalho"> <br>
        <input type="submit" value="contratante">
        
    </form>

    <div class="rodape_container">
        <p class="rodape">Contato: contato@exemplo.com | Telefone: (11) 1234-5678 | Endereço: Rua Exemplo, 123 - Mococa, SP</p>
        <p class="rodape">© 2024 Autonomos Já. Todos os direitos reservados.</p>
    </div>
</body>
</html>