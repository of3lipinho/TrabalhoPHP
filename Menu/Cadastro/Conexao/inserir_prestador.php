<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Estilos/inserir2.css">
  <title>Cadastro Realizado</title>
</head>
<body>

<div class="cabecalho_container">
        <p class="cabecalho">Autônomos Mococa</p>
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

<?php
include 'conexao.php';
$nome = $_POST['nome'];
$datanasc = $_POST['datanasc'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$especialidade = $_POST['especialidade'];


try {
  $conn = new PDO("mysql:host=$servername;dbname=Informacao", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO Prestador (nome,datanasc,telefone, email, cpf, especialidade)
  VALUES ('$nome', '$datanasc', '$telefone','$email','$cpf','$especialidade')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<div class='resultado'>";
  echo "<p>Seu Cadastro Foi Realizado Com Sucesso</p> <br />";
  echo "<input type='button' class='cadastrar' value='Voltar para a Página Inicial' onclick=\"window.location.href='/TrabalhoPHP/index.html'\" />";
  echo "</div>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
  

  <div class="rodape_container">
        <p class="rodape">Contato: contato@exemplo.com | Telefone: (11) 1234-5678 | Endereço: Rua Exemplo, 123 - Mococa, SP</p>
        <p class="rodape">© 2024 Autonomos Já. Todos os direitos reservados.</p>
    </div>
</body>
</html>


