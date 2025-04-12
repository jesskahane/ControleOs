<?php

namespace Src\Model\SQL;

class NOVO_SETOR_SQL
{
    public static function INSERIR_NOVO_SETOR()
    {
        $sql = "INSERT INTO tb_setor (nome_setor) VALUES (?)";
        return $sql;
    }

    public static function SELECIONAR_NOVO_SETOR()
    {
        $sql = 'SELECT id_setor,
                       nome_setor
                  FROM tb_setor;
                ORDER BY nome_setor';      
        return $sql;
    }


}