<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/prestador2.css">
    <title>Consultar Prestadores</title>
</head>
<body>
<div class="cabecalho_container">
        <p class="cabecalho">Pesquisa de Prestadores</p>
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
    <div class="form_container">
    <form action="resultado_prestador.php" method="post">
        <p>Selecione o metodo de filtro:
            <select name="metodo" id="metodo">
                <option value="-1" selected disabled>Selecione sua opção</option>
                <option value="nome">Nome</option>
                <option value="especialidade">Especialidade</option>
                <option value="todos">Exibir Todos</option>
            </select>
        </p>
        <p>Pesquisar:
            <input type="text" id="filtro" name="filtro" placeholder="Ex. João da Silva, Pintor" />
        </p>
        <input type="submit" class="buscar" value="Buscar" />
    </form>
    </div>
</body>
</html>