function formatarCPF(campo) {
    // Remove qualquer caractere que não seja número
    let cpf = campo.value.replace(/\D/g, "");

    // Aplica a formatação
    if (cpf.length <= 3) {
      campo.value = cpf;
    } else if (cpf.length <= 6) {
      campo.value = cpf.replace(/(\d{3})(\d{1,3})/, "$1.$2");
    } else if (cpf.length <= 9) {
      campo.value = cpf.replace(/(\d{3})(\d{3})(\d{1,3})/, "$1.$2.$3");
    } else {
      campo.value = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{1,2})/, "$1.$2.$3-$4");
    }
  }
  function formatarTelefone(campo) {
    // Remove qualquer caractere que não seja número
    let telefone = campo.value.replace(/\D/g, "");

    // Aplica a formatação para celular (9 dígitos após o DDD) ou fixo (8 dígitos após o DDD)
    if (telefone.length <= 2) {
        campo.value = "(" + telefone;
    } else if (telefone.length <= 6) {
        campo.value = "(" + telefone.slice(0, 2) + ") " + telefone.slice(2);
    } else if (telefone.length <= 10) {
        campo.value = "(" + telefone.slice(0, 2) + ") " + telefone.slice(2, 6) + "-" + telefone.slice(6);
    } else {
        campo.value = "(" + telefone.slice(0, 2) + ") " + telefone.slice(2, 7) + "-" + telefone.slice(7, 11);
    }
}
