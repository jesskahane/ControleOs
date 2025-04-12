<?php

namespace Src\VO;

use Src\_Public\Util;

class SetorVO
{

private $id_setor;
private $nome_setor;
    
public function setId(int $id_setor) :void //void: nao retorna
{
    $this->id_setor = $id_setor;
}

public function getId() : int
{
    return $this->id_setor;
}

public function setNome(string $nome_setor) :void //void: nao retorna
{
    $this->nome_setor = Util::RemoverTags($nome_setor);
}

public function getNome() : string
{
    return $this->nome_setor;
}

}


