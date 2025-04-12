<?php

namespace Src\Controller;

use Src\VO\TipoVO;
use Src\Model\TipoEquipamentoMODEL;
use Src\_Public\Util;

class TipoEquipamentoCTRL
{

    private $model;
    public function  __construct()
    {
        $this->model = new TipoEquipamentoMODEL();
    }

    public function CadastrarTipoEquipamentoCTRL(TipoVO $vo) : int
    {
        if(empty($vo->getNome()))
        return 0;

        $vo->setCodLogado(Util::CodigoLogado());
        $vo->setFuncaoErro(CADASTRAR_TIPO_EQUIPAMENTO);
        $ret = $this->model->CadastrarTipoEquipamentoMODEL($vo); 

        return $ret;
    }

    public function AlterarTipoEquipamentoCTRL(TipoVO $vo) : int
    {
        if(empty($vo->getNome()) || empty($vo->getId()))
        return 0;
       
        return $this->model->AlterarTipoEquipamentoMODEL($vo);
    }

    public function ConsultarTipoEquipamentoCTRL() 
    {
        return $this->model->ConsultarTipoEquipamentoMODEL();
    }

    public function ExcluirTipoEquipamentoCTRL(TipoVO $vo) : int
    {
        if(empty($vo->getId()))
        return 0;
        return $this->model->ExcluirTipoEquipamentoMODEL($vo);
    }
}