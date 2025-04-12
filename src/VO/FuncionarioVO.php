<?php

namespace Src\VO;

use Src\VO\UsuarioVO;

class FuncionarioVO extends UsuarioVO{

    private $id_setor;

    public function setIdSetor(int $id_setor) : void
    {
        $this->id_setor = $id_setor;
    }

    public function getIdSetor() : int
    {
        return $this->id_setor;
    }
}