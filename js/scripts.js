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
            console.log('enviado com sucesso');
        });
    });
});