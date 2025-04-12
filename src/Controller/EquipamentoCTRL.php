<?php

namespace Src\Controller;

use Src\VO\EquipamentoVO;

//Controller responsavel pela regra de negocio

class EquipamentoCTRL
{
    public function CadastrarEquipamento(EquipamentoVO $vo) : int
    {
        if(empty($vo->getIdTipo()) || empty($vo->getIdModelo()) || 
        empty($vo->getIdentificacao()) || 
        empty($vo->getDescricao()))
            return 0;
        else
            return 1;
    }
}