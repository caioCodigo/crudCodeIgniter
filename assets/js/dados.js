
var formulario = document.getElementById('form');
var usuario = document.getElementById('user');
var senha = document.getElementById('pass');

form.addEventListener('submit', function(e) {
    // alerta o valor do campo
    alert("nome: "+usuario.value+" e senha: "+senha.value);

    // impede o envio do form
    e.preventDefault();
});



getElementById('user').on('click', function () {

    var textBoxVal = $(this).val();
    JSON({
      type: 'POST',
      url: '<?php echo base_url();?>log/index   ', // link to CI function
      data: {
          val: $(this).val()
      }
    });
  
  });