<?php
include_once dirname(__DIR__, 3) . '/vendor/autoload.php';


use Src\Controller\NovoSetorCTRL;
use Src\VO\SetorVO;


//Passar as informações para frente, criar o obj da controller desta página
$ctrl = new NovoSetorCTRL();


if(isset($_POST['btn_cadastrar'])){
    
    //Criar VO
    
    $vo = new SetorVO();
    
    //Setar as informações de acordo com o preenchimento dos campos
    $vo->setNome($_POST['setor']);
    
    //Chamar a função da controller
    $ret = $ctrl->CadastrarNovoSetorCTRL($vo);
}

$setores_cadastrados = $ctrl->ConsultarNovoSetorCTRL();