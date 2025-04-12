<?php

namespace Src\VO;

use Src\_Public\Util;
use Src\VO\LogErroVO;

class UsuarioVO extends LogErroVO
{

    private $id;
    private $tipo;
    private $nome;
    private $email;
    private $tel;
    private $senha;
    private $status;


    public function setId($id)
    {
        $this->id =  $id;
    }
    public function getId(): int
    {
        return $this->id;
    }
    //GET E SET TIPO
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo(): int
    {
        return $this->tipo;
    }

    //GET e SET NOME
    public function setNome($nome)
    {
        $this->nome = Util::TratarDados($nome);
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    //GET e SET EMAIL
    public function setEmail($email): void
    {
        $this->email = Util::RemoverTags($email);
    }
    public function getEmail(): string
    {
        return $this->email;
    }

    //GET e SET TEl
    public function setTelefone($telefone): void
    {
        $this->tel = Util::TirarCaracteresEspeciais($telefone);
    }
    public function getTelefone(): string
    {
        return $this->tel;
    }

    //GET e SET SENHA
    public function setSenha($senha): void
    {
        $this->senha = Util::RemoverTags($senha);
    }
    public function getSenha(): string
    {
        return $this->senha;
    }

    //GET e SET STATUS
    public function setStatus($status): void
    {
        $this->status = Util::RemoverTags($status);
    }
    public function getStatus(): int
    {
        return $this->status;
    }
}
