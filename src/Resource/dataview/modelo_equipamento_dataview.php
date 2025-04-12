<?php

include_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use Src\VO\ModeloVO;
use Src\Controller\ModeloEquipamentoCTRL;

if(isset($_POST['btn_cadastrar']))
{
    //objeto da informação
    $vo = new ModeloVO();

    $ctrl = new ModeloEquipamentoCTRL();

    //Quando temos POST, usar nome que está na pagina
    $vo->setNomeModelo($_POST['modelo']);

    //var_dump($vo);
    //exit;

    $ret = $ctrl->CadastrarModelo($vo);

    echo $ret;
}