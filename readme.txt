Arquivo para guardar informações importantes

Largura da Pagina: 1536px
Altura da Pagina Total: 679px
Altura da Pagina onde há conteudo: 442px
Tamanho maximoo das imagens para não ativar o scroll vertical: 237px 

Cada imagem deve ter as seguintes Medidas:
4 imagens: Heigth=237px / Width: 374px / Margin Left e Right=5px
3 imagens: Heigth=237px / Width: 376.5px / Margin Left e Right=5px

Linkar
<link rel="stylesheet" href="Estilos/nomedoarquivo.css">
<script src="Script/nomedoarquivo.js"></script>


//MENU E CABEÇALHO HTML
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
    //MENU E CABEÇALHO css

   body {
    font-family: Arial, Helvetica, sans-serif; 
    margin: 0; 
    overflow-x: hidden; 
    background-color: #d6d6d6; 
}

.cabecalho_container {
    display: flex; 
    justify-content: center; 
    align-items: center; 
    background-color: #454545; 
    padding: 10px; 
    width: 100%; 
    box-sizing: border-box; 
}

.cabecalho {
    color: white; 
    font-size: 25px; 
    font-weight: bold; 
}

.menu_container {
    display: flex; 
    justify-content: center; 
    align-items: center; 
    background-color: #a6a6a6; 
    height: 90px; 
    box-sizing: border-box; 
}

.menu {
    display: flex; 
    justify-content: center; 
    width: 100%; 
}

.menu a {
    color: white; 
    font-size: 18px; 
    text-decoration: none; 
    padding: 15px 30px; 
}
.menu_botao_borda{
    background-color:  #627082;
    border-right: white 1px solid;
 }
 .menu_botao{
     background-color: #627082;
 }


.menu a:hover {
    background-color: rgba(255, 255, 255, 0.144);
}



//FORMATAÇÃO PARA FORMULARIO

CRIE UMA DIV COM A CLASS FORM_CONTAINER
ESCREVA O CODIGO DO FORMULARIO DENTRO DELA, APÓS ISSO COLE ESSE CODIGO NO CSS DA Pagina


form {
    background-color: beige;
    border: 1px solid black;
    border-radius: 15px;
    box-shadow:  0 1px 50px rgba(32, 17, 36, 0.3); /* Sombra em volta do form */
    padding: 20px;
    margin: 20px auto; /* Margem automática nas laterais */
    margin-top: 70px;
    width: 350px; /* Defina uma largura fixa ou percentual */
    display: flex; /* Se você estiver usando flexbox */
    flex-direction: column; /* Para organizar os elementos dentro do form */
    align-items: center; /* Centraliza os itens dentro do form */
}
.form_container {
    max-width: 400px; /* Define a largura máxima do formulário */
    margin: 0 auto; /* Centraliza o formulário na página */
}

.form_container p {
    display: flex; /* Usar flexbox para alinhar os elementos */
    flex-direction: column; /* Coloca os elementos em coluna */
    margin-bottom: 15px; /* Espaçamento entre os campos */
}

.form_container input[type="text"],
.form_container input[type="date"],
.form_container input[type="email"] {
    width: 100%; /* Faz os inputs ocuparem 100% da largura do contêiner */
    padding: 10px; /* Adiciona um pouco de preenchimento dentro dos inputs */
    box-sizing: border-box; /* Inclui o preenchimento na largura total */
}
.cadastrar {
    width: 250px; /* Ajuste o valor conforme necessário */
    padding: 10px; /* Adiciona um pouco de espaço interno */
    font-size: 16px;
    border-radius: 15px;   
    border: 2px black solid;
}

//RODAPE
<footer class="rodape_container">
        <p class="rodape">Contato: contato@exemplo.com | Telefone: (11) 1234-5678 | Endereço: Rua Exemplo, 123 - Mococa, SP</p>
        <p class="rodape">© 2024 Autonomos Já. Todos os direitos reservados.</p>
    </footer>




.rodape_container {
    display: flex; 
    justify-content: center; 
    align-items: center; 
    background-color: #454545; 
    width: 100%; 
    box-sizing: border-box; 
    margin-top: 30px;
    height: 60px;
}

.rodape {
    color: white; 
    font-size: 15px; 
    font-weight: bold; 
    padding: 10px;
    font-style: italic;
}