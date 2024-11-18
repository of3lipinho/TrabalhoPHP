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

    // Aplica a formatação de acordo com o tamanho do número
    telefone = telefone.replace(/(\d{2})(\d{4,5})(\d{4})$/, "($1) $2-$3");

    campo.value = telefone;
}

function formatarCNPJ(campo) {
  // Remove qualquer caractere que não seja número
  let cnpj = campo.value.replace(/\D/g, "");

  // Aplica a formatação
  if (cnpj.length <= 2) {
    campo.value = cnpj;
  } else if (cnpj.length <= 5) {
    campo.value = cnpj.replace(/(\d{2})(\d{1,3})/, "$1.$2");
  } else if (cnpj.length <= 8) {
    campo.value = cnpj.replace(/(\d{2})(\d{3})(\d{1,3})/, "$1.$2.$3");
  } else if (cnpj.length <= 12){
    campo.value = cnpj.replace(/(\d{2})(\d{3})(\d{3})(\d{1,4})/, "$1.$2.$3/$4");
  } else {
    campo.value = cnpj.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{1,2})/, "$1.$2.$3/$4-$5");
  }
}
function mostrarAlerta() {
  alert("Este campo é para digitar o seu nome completo.");
}