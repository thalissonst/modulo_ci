var baseUrl = 'http://localhost/projetos/modulo/'

//Função responsável por realizar uma requisição e buscar as informações
function search() 
{	
    if ($("#type").val() == null || $("#period").val() == null) 
    {
        alert('Algum campo não foi preenchido, preencha todos os campos!');
    }
    else 
    {
        $.ajax({
            url: baseUrl + $("#type").val(),
            method: "GET",
            dataType: "json",
            data: {
                type: $("#type").val(),
                period: $("#period").val()
            },
        })
        .done(function(response) 
        {
            $("#textarea").val(response.data);
        });
    }
}