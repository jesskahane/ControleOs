<?php

namespace Src\VO;

use Src\_Public\Util;

//VO responsavel por trafegar pelas camadas da frente. 

class ModeloVO
{
    private $id_modelo;
    private $nome_modelo;

//ID MODELO
public function setIdModelo (int $id_modelo) : void
{
    $this->id_modelo = $id_modelo;
}

public function getIdModelo() : int
{
    return $this->id_modelo;
}

//NOME MODELO
public function setNomeModelo (string $nome_modelo) : void
{
    $this->nome_modelo = Util::RemoverTags($nome_modelo);
}

public function getNomeModelo() : string
{
    return $this->nome_modelo;
}

}