function CarregarExcluir(id, nome)
{
    //.VAL é usado para imput
    //.html Injeta o texto que vc quiser entre o <span>
    $("#id_excluir").val(id);
    $("#nome_excluir").html(nome);
}

function CarregarTipoEquipamento(id, nome)
{
    $("#tipo_alterar").val(nome);
    $("#id_alterar").val(id);
  
}