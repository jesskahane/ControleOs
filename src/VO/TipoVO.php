<?php

namespace Src\VO;
use Src\VO\LogErroVO;
use Src\_Public\Util;

class TipoVO extends LogErroVO
{
    private $id;
    private $nome;

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
    public function setNome(string $nome) : void
    {
        $this->nome = Util::RemoverTags($nome);
    }
    public function getNome() :string
    {
        return $this->nome;
    }

}