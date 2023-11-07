// limparInput.js
document.addEventListener('DOMContentLoaded', function() {
    // Seleciona o botão com a classe 'butB'
    var limparButton = document.querySelector('.butB');
  
    // Seleciona o input com o ID 'buscarInput'
    var buscarInput = document.getElementById('buscarInput');
  
    // Adiciona um evento de clique ao botão
    limparButton.addEventListener('click', function() {
      // Limpa o valor do input
      buscarInput.value = '';
    });
  });
  