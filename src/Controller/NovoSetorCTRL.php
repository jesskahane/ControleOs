<?php

namespace Src\Controller;

use Src\VO\SetorVO;
use Src\Model\NovoSetorMODEL;

class NovoSetorCTRL
{

    private $model;
    public function  __construct()
    {
        $this->model = new NovoSetorMODEL();
    }

    public function CadastrarNovoSetorCTRL(SetorVO $vo) : int
    {
        if(empty($vo->getNome()))
        return 0;
       
        $ret = $this->model->CadastrarNovoSetorMODEL($vo); 

        return $ret;
    }

    public function ConsultarNovoSetorCTRL() 
    {
        return $this->model->ConsultarNovoSetorMODEL();
    }
}