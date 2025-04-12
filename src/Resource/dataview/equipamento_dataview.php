<?php

use Src\Controller\EquipamentoCTRL;
use Src\VO\EquipamentoVO;

include_once dirname(__DIR__, 3) . '/vendor/autoload.php';

if(isset($_POST['btn_cadastrar']))
{
    $vo = new EquipamentoVO();
    $ctrl = new EquipamentoCTRL();

    $vo->setIdentificacao((string)$_POST['identificacao']);
    $vo->setDescricao($_POST['observacoes']);
    $vo->setIdModelo((int)$_POST['modelo']);
    $vo->setIdTipo((int)$_POST['tipo']);

    $ret = $ctrl->CadastrarEquipamento($vo);
}