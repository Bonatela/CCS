<?php

    class db {

        //host
        private $host = 'localhost';

        //usuario
        private $usuario = 'compa382_super';

        //senha
        private $senha = '12345';

        //banco de dados
        private $database = 'compa382_ccs';

        public function conecta_mysql(){

            //criar conexao
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

            //ajustar o charset de comunicação entre a aplicação e o banco de dados
            mysqli_set_charset($con, 'utf8');

            //verificar se houve erro de conexão
            if(mysqli_connect_errno()){
                echo 'Erro ao tentar se conectar com BD MySQL: ' . mysqli_connect_error();
            }

            return $con;

        }

    }

?>