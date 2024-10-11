<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/prestador.css">
    <title>Cadastrar Prestador</title>
    
</head>
<body>
<div class="cabecalho_container">
        <p class="cabecalho">Autônomos Mococa</p>
    </div>
    <div class="menu_container">
        <div class="menu">

            <div class="menu_botao_borda">
                <p><a href="/projeto/TrabalhoPHP/Menu/Cadastro/prestador.php">Prestadores de Serviço</a></p>
            </div>

            <div class="menu_botao_borda">
                <p><a href="/projeto/TrabalhoPHP/Menu/Cadastro/contratante.php">Contratante</a></p>
            </div>
            
            <div class="menu_botao_borda" >
                <p><a href="/projeto/TrabalhoPHP/Menu/Consulta/prestador.php">Consultar Prestadores</a></p>
            </div>  

            <div class="menu_botao" >
                <p><a href="/projeto/TrabalhoPHP/Menu/Consulta/contratante.php">Consultar Contratantes</a></p>
            </div>
            
        </div>
    </div class="form_container">
    <form action="Conexao/conexao_prestador.php" method="POST">
        <p>Nome
        <input type="text" name="nome" id="nome" required />
        </p> 
        <p>Data de Nascimento
        <input type="date" name="data_nasc" id="data_nasc" required />
        </p>
        <p>Telefone
        <input type="text" name="telefone" id="telefone" required />
        </p>
        <p>Email
        <input type="email" name="email" id="email" required />
        </p>
        <p>CPF
        <input type="text" name="CPF" id="CPF" required />
        </p>
        <p>Especialidade
        <input type="text" name="especialidade" id="especialidade" required />
        </p>  
    </form>
    </div>
</body>
</html>