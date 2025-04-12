<?php 

namespace Src\Model;

use Exception;
use Src\Model\Conexao;
use Src\VO\SetorVO;
use Src\Model\SQL\NOVO_SETOR_SQL;


class NovoSetorMODEL extends Conexao
{

        private $conexao;

        public function __construct()
        {
            $this->conexao = parent::retornarConexao();
        }


        public function CadastrarNovoSetorMODEL(SetorVO $vo) 
        {
            
            $sql = $this->conexao->prepare(NOVO_SETOR_SQL::INSERIR_NOVO_SETOR()); 
            
            $sql->bindvalue(1, $vo->getNome());

            try 
            {
                $sql->execute();
                return 1;
            }
            
            catch (Exception $ex)
            {
                echo $ex->getMessage();
                return -1;
            }
        }  
        
        public function  ConsultarNovoSetorMODEL()
        {
            $sql = $this->conexao->prepare(NOVO_SETOR_SQL::SELECIONAR_NOVO_SETOR());
            $sql->execute();
            return $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
}