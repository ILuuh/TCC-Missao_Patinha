function confirmar(cnpj){
    var resposta = confirm("Confirma exclusão?");
    if(resposta==true){
        window.location.href="apagar.php?cod="+cnpj;
    }
}

function validarCNPJ(cnpj) {
 
    cnpj = cnpj.replace(/[^\d]+/g,'');
 
    if(cnpj == '') return false;
     
    if (cnpj.length != 14)
        return false;
 
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" || 
        cnpj == "11111111111111" || 
        cnpj == "22222222222222" || 
        cnpj == "33333333333333" || 
        cnpj == "44444444444444" || 
        cnpj == "55555555555555" || 
        cnpj == "66666666666666" || 
        cnpj == "77777777777777" || 
        cnpj == "88888888888888" || 
        cnpj == "99999999999999")
        return false;
         
    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for( i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;
         
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
          return false;
           
    return true;
    
}

const formAdm = document.getElementById("formAdm");
const campoCnpj = document.getElementById("cnpj");
formAdm.addEventListener('submit', function(event){
    if (validarCNPJ(campoCnpj.value)== false) {
        event.preventDefault();
        campoCnpj.value="";
        campoCnpj.focus();
        alert("Informe um Cnpj valido");
        
    }
});

function formatar(mascara, documento){
    var i = documento.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(i)
    if (texto.substring(0,1) != saida){
    documento.value += texto.substring(0,1);}}

const validateEmail = (email) => {
        const re = /\S+@\S+\.\S+/;
        return re.test(email);
};

function validarSenha(senha) {
    // Verifique se a senha possui pelo menos uma letra minúscula
    const regexLetraMinuscula = /[a-z]/;
    
    // Verifique se a senha possui pelo menos um caractere especial
    const regexCaractereEspecial = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/;
    
    // Verifique se a senha possui pelo menos um número
    const regexNumero = /[0-9]/;
    
    // Verifique se a senha atende a todos os requisitos
    if (
      regexLetraMinuscula.test(senha) &&
      regexCaractereEspecial.test(senha) &&
      regexNumero.test(senha)
    ) {
      return true; // A senha atende a todos os requisitos
    } else {
      return false; // A senha não atende a todos os requisitos
    }
  }
