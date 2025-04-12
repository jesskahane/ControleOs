<?php
include_once dirname(__DIR__, 3) . '/vendor/autoload.php';


use Src\Controller\TipoEquipamentoCTRL;
use Src\VO\TipoVO;

//Passar as informações para frente, criar o obj da controller desta página
$ctrl = new TipoEquipamentoCTRL();


if(isset($_POST['btn_cadastrar'])){
    
    //Criar VO
    
    $vo = new TipoVO();
    
    //Setar as informações de acordo com o preenchimento dos campos
    $vo->setNome($_POST['tipo']);
    
    //Chamar a função da controller
    $ret = $ctrl->CadastrarTipoEquipamentoCTRL($vo);

}else if(isset($_POST['btn_alterar']))
{
    //Criar VO
    $vo = new TipoVO();
    
    //Setar as informações de acordo com o preenchimento dos campos
    $vo->setId((int) $_POST['id_alterar']);
    $vo->setNome((string) $_POST['tipo_alterar']);
    
    //Chamar a função da controller
    $ret = $ctrl->AlterarTipoEquipamentoCTRL($vo);
}
else if(isset($_POST['btn_excluir']))
{
    //Criar VO
    $vo = new TipoVO();
    //Setar as informações de acordo com o preenchimento dos campos
    $vo->setId($_POST['id_excluir']);
    //Chamar a função da controller
    $ret = $ctrl->ExcluirTipoEquipamentoCTRL($vo);
}

$tipos_equipamentos = $ctrl->ConsultarTipoEquipamentoCTRL();