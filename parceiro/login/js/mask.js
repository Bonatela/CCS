$(document).ready(function(){



    var options = {
        onKeyPress: function (cpf, ev, el, op) {
            var masks = ['000.000.000-000', '00.000.000/0000-00'];
            $('#cpf_cnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
        }
    }

    $('#cpf_cnpj').length > 11 ? $('#cpf_cnpj').mask('00.000.000/0000-00', options) : $('#cpf_cnpj').mask('000.000.000-00#', options);


    $('#btn_login').click(function () {

           var campo_vazio = false;

               if($('#cpf_cnpj').val() == ''){
                    alert('Campo usuário vazio ou errado');
                    campo_vazio = true;
                }

                if($('#senha').val() == ''){
                    alert('Campo senha vazio ou errado ');
                    campo_vazio = true;
                }

            if (campo_vazio) return false;
    });



});