function MostrarMensagem(ret)
{
    switch (ret){
        case -1:
            toastr.error('Ocorreu um erro na operação')
            break;
        case 0:
            toastr.warning('Preemcher os campos obrigatórios')
            break;
        case 1:
            toastr.success('Ação realizada com sucesso')
            break;    
    }
}