<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/resultado_contratante2.css">
    <title>Consulta de Prestadores</title>
</head>
<body>
<div class="cabecalho_container">
        <p class="cabecalho">Vagas</p>
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
    <?php

include "\wamp64\www\TrabalhoPHP\Menu\Cadastro\Conexao\conexao.php";



$filtro = $_POST["filtro"];
$metodo = $_POST["metodo"] ?? '';

if(empty($metodo)){
  echo "<div class='tabela_container'>";
  echo "<p>Selecione um metodo de busca</p>";
  echo "<input class='cadastrar' type='button' value='Voltar para a Pesquisa' onclick=\"window.location.href='pesquisa_prestador.php'\" />"; 
  echo "</div>";
}





class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  // Definir o tipo de retorno como "mixed" para a função current
  public function current(): mixed {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
  }

  // Definir tipo de retorno void para as funções beginChildren e endChildren
  public function beginChildren(): void {
    echo "<tr>";
  }

  public function endChildren(): void {
    echo "</tr>" . "\n";
  }
}

if ($metodo === "nome") {
  echo "<div class='tabela_container'>";
  echo "<table class='tabela' style='border: solid 1px black;'>";
  echo "<tr><th>Nome</th><th>Contato</th><th>Vaga</th><th>Descrição</th></tr>";

  try {
      // Consulta SQL modificada para usar LIKE
      $stmt = $conn->prepare("SELECT nome, telefone, vaga, descricao FROM vagas WHERE nome LIKE :nome");
      // Adiciona os curingas para permitir busca parcial
      $filtroParcial = "%" . $filtro . "%";
      $stmt->bindParam(':nome', $filtroParcial);
      // Execução do banco
      $stmt->execute();

      // Define o resultado como array associativo
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
          echo $v;
      }
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }

  echo "</table>";
  echo "<br />";
  echo "<input class='cadastrar' type='button' value='Voltar para a Pesquisa' onclick=\"window.location.href='pesquisa_prestador.php'\" />";

  echo "</div>";
}


if($metodo==="vagas"){
    echo "<div class='tabela_container'>";   
    echo "<table class='tabela' style='border: solid 1px black;'>";
    echo "<tr><th>Nome</th><th>Contato</th><th>Vaga</th></tr>";
    
    try {
        $stmt = $conn->prepare("SELECT nome, telefone, vaga, descricao FROM vagas WHERE vaga = :vaga");
        $stmt->bindParam(':vaga', $filtro);
        // Execução do banco
        $stmt->execute();
      
        // Definir o resultado como array associativo
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
          echo $v;
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    $conn = null;
    echo "</table>";
    echo "<input class='cadastrar' type='button' value='Voltar para a Pesquisa' onclick=\"window.location.href='pesquisa_prestador.php'\" />";

    echo "</div>";
    };
    if($metodo==="todos"){
      echo "<div class='tabela_container'>";
      echo "<table class='tabela' style='border: solid 1px black;'>";
      echo "<tr><th>Nome</th><th>Contato</th><th>Vaga</th><th>Descricao</th></tr>";
      
      try {
          $stmt = $conn->prepare("SELECT nome, telefone, vaga, descricao FROM vagas");
          // Execução do banco
          $stmt->execute();
        
          // Definir o resultado como array associativo
          $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
          foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
            echo $v;
          }
      } catch(PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
      
      $conn = null;
      echo "</table>";
      echo "<input class='cadastrar' type='button' value='Voltar para a Pesquisa' onclick=\"window.location.href='pesquisa_prestador.php'\" />";

      echo"</div>";
      };
      


?>

</body>
</html>



