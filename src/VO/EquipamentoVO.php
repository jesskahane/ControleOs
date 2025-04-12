<?php

namespace Src\VO;

use Src\_Public\Util;

class EquipamentoVO
{
    private $id_equipamento;
    private $identificacao;
    private $descricao;
    private $situacao;
    private $id_tipo;
    private $id_modelo;
    private $data_descarte;

    public function setIdEquipamento(int $id_equipamento) : void
    {
        $this->id_equipamento = $id_equipamento;
    }
    public function getIdEquipamento() : int
    {
        return $this->id_equipamento;
    }

    public function setIdentificacao(string $identificacao) : void
    {
        $this->identificacao = Util::RemoverTags($identificacao);
    }
    public function getIdentificacao() : string
    {
        return $this->identificacao;
    }

    public function setDescricao(string $descricao) : void
    {
        $this->descricao = Util::RemoverTags($descricao);
    }
    public function getDescricao() : string
    {
        return $this->descricao;
    }

    public function setSituacao(int $situacao) : void
    {
        $this->situacao = $situacao;
    }
    public function getSituacao() : int
    {
        return $this->situacao;
    }

    public function setIdTipo(int $id_tipo) : void
    {
        $this->id_tipo = $id_tipo;
    }
    public function getIdTipo() : int
    {
        return $this->id_tipo;
    }

    public function setIdModelo(int $id_modelo) : void
    {
        $this->id_modelo = $id_modelo;
    }
    public function getIdModelo() : int
    {
        return $this->id_modelo;
    }

    public function getDataDescarte() : string
    {
        return Util::DataHoraAtual();
    }
}    