function showModal(id)
{
    $('#modal-infos_'+id+'').show();
}

function closeModal(id)
{
    $('#modal-infos_'+id+'').hide();
}

function editar(id)
{
    window.location.href = "cadastro/editar.php?id="+id+""
}

function excluir(id){

    $.ajax({
        method: "POST",
        url: "cadastro/excluir.php",
        data: {
            id: id
        }, 
        dataType: "html",
    })
    .success(function(response){               
        location.reload();
    
    })
}
