// script.js

document.addEventListener('DOMContentLoaded', function() {
    const select = document.getElementById('produtos');

    select.addEventListener('change', function() {
        const produtoSelecionado = select.value;
        if (produtoSelecionado) {
            window.location.href = produtoSelecionado; // Redireciona para a página do produto
        }
    });
});
