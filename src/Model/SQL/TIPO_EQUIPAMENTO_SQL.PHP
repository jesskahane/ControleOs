<?php

namespace Src\Model\SQL;

class TIPO_EQUIPAMENTO_SQL
{
    public static function INSERIR_TIPO_EQUIPAMENTO() : string
    {
        $sql = "INSERT INTO tb_tipo (nome_tipo) VALUES (?)";
        return $sql;
    }

    public static function SELECIONAR_TIPO_EQUIPAMENTO() : string
    {
        $sql = 'SELECT id_tipo,
                       nome_tipo
                  FROM tb_tipo;
                ORDER BY nome_tipo';      
        return $sql;
    }

    public static function ALTERAR_TIPO_EQUIPAMENTO() : string
    {
        $sql = 'UPDATE tb_tipo
                 SET nome_tipo = ?
                WHERE id_tipo = ?';
        return $sql;
    }

    public static function EXCLUIR_TIPO_EQUIPAMENTO() : string
    {
        return 'DELETE FROM tb_tipo WHERE id_tipo = ?';
        
    }

}