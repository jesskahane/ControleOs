<?php
    //Self comando que reaproveita comandos da mesma classe
    //PDO Classe imbutida propria do PHP para interagir com todos os SGBDs (Softwares de gerenciamento de SQL)

    // Configurações do site
    namespace Src\Model;

    define('HOST', 'localhost'); //IP
    define('USER', 'root'); //usuario
    define('PASS', null); //Senha
    define('DB', 'db_controleos'); //Banco
    /**
     * Conexao.class TIPO [Conexão]
     * Descricao: Estabelece conexões com o banco usando SingleTon
     * @copyright (c) year, WMBarros
     */

    class Conexao {

        /** @var PDO */
        private static $Connect;

        //Função estática não cria objeto na memoria, funciona de forma direta
        //Quando uma estrutura de função é padrão, não sofre alterações, podemos utilizar a função estatica
        private static function Conectar() {
            try {

                //Verifica se a conexão não existe
                if (self::$Connect == null):

                    $dsn = 'mysql:host=' . HOST . ';dbname=' . DB;
                    self::$Connect = new \PDO($dsn, USER, PASS, null);
                endif;
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        
            //Seta os atributos para que seja retornado as excessões do banco
            self::$Connect->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        
            return  self::$Connect;
        }

        public static function GravarErroLog($vo)
        {   //Cria a variável que guardará o nome do arquivo e ser caminho
            $arquivo = PATH . 'Model/Logs/log_erro.txt';
            //Verifica se NÃO EXISTE o arquivo
            if(!file_exists($arquivo))
            {
                //Cria o arquivo
                $arquivo = fopen($arquivo, 'w');
                //w = palavra reservada para escrever no arquivo            
            }
            else 
            {
                //Tenho que abri lo e manter o cursos no final da escrita
                $arquivo = fopen($arquivo, 'a+');
                //a+ = palavra reservada para escrever no arquivo e manter o cursos no final da escrita
            }
            //Criar uma variável para poder escrever no arquivo
            $msg = '.........................' . PHP_EOL;
            $msg .= 'Data do erro: ' . $vo->getDataErro() . PHP_EOL;
            $msg .= 'Hora do erro: ' . $vo->getHoraErro() . PHP_EOL;
            $msg .= 'Código do Logado: ' . $vo->getCodLogado() . PHP_EOL;
            $msg .= 'Função do erro: ' . $vo->getFuncaoErro() . PHP_EOL;
            $msg .= 'Erro Tecnico: ' . $vo->getErroTecnico() . PHP_EOL;

            //Escreve o erro no arquivo ABERTO
            fwrite($arquivo, $msg);
            //Fecha o arquivo
            fclose($arquivo);
        }

        public static function retornarConexao() {
            return  self::Conectar();
        }
    }
?>