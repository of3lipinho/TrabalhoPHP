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