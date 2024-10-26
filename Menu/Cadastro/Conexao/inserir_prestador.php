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
  echo "Seu cadastro foi realizado com sucesso <br />";
  echo "<input type='button' value='Voltar para a Página Inicial' onclick=\"window.location.href='/TrabalhoPHP/index.html'\" />";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>