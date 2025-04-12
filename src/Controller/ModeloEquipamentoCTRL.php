<?php

namespace Src\Controller;

use Src\VO\ModeloVO;

//Controller responsavel pela regra de negocio

class ModeloEquipamentoCTRL
{
    public function CadastrarModelo(ModeloVO $vo) : int
    {
        if(empty($vo->getNomeModelo()))
            return 0;
        else
            return 1;
    }
}