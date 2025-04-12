<?php

namespace Src\VO;

use Src\_Public\Util;

class AlocarVO
{
    private $id;
    private $id_equipamento;
    private $id_setor;

    //GET e SET Id
    public function setId(int $id) : void
    {
        $this-> id = $id;
    }

    public function getId() : int
    {
        return $this->id;
    }

    //GET e SET EQUIPAMENTO
    public function setIdEquipamento(int $id_equipamento) : void
    {
        $this->id_equipamento = $id_equipamento;
    }
    public function getIdEquipamento() :int
    {
        return $this->id_equipamento;
    }

    //GET e SET SETOR
    public function setIdSetor(int $id_setor) : void
    {
        $this->id_setor = $id_setor;
    }
    public function getIdSetor() :int
    {
        return $this->id_setor;
    }

    //GET DATA - somente leitura

    public function getDataAlocar() : string
    {
        return Util::DataAtual();
    }
}