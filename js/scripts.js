$(document).ready(function() {
    /// @brief Call actions.php file when submit
    $("#frmGerar").on("submit", function() {
        event.preventDefault();
        
        var data  = $("#frmGerar").serialize();
        var param = {'param' : data, 'acao' : "frmGerar"};

        $.ajax({
            type: 'post',
            url: 'actions.php',
            data : param
        }).done(function(){
            // mostrar mensagem de sucesso depois de concluido
            console.log('enviado com sucesso');
        });
    });
});