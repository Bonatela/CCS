<?php

        require_once('db.class.php');


        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cnpj = $_POST['cnpj'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero_j'];
        $senha = md5($_POST['senha']);



        $objDb = new db();
        $link = $objDb->conecta_mysql();

            //verificar se o usuário já existe
            $sql = "SELECT * FROM usuarios WHERE cnpj = '$cnpj' ";
            if($resultado_id = mysqli_query($link, $sql)){

                $dados_usuario = mysqli_fetch_array($resultado_id);

                if(isset($dados_usuario['usuario'])){


                    echo "<script>location.href='../../parceiro/eror/duplicado_cnpj.html';</script>";

                }else{



                }

            }else{
                echo "<script>location.href='../../parceiro/eror/eror.html';</script>";
            }






        $sql = "INSERT INTO usuarios (usuario, email, telefone, cnpj, cidade, uf, cep, endereco, numero, senha) VALUES ('$usuario', '$email', '$telefone', '$cnpj', '$cidade', '$uf', '$cep', '$endereco', '$numero', '$senha')";


        //executar a query
        if(mysqli_query($link, $sql)){
            echo "<script>location.href='../../parceiro/sucesso/sucesso.html';</script>";
        } else {
            echo "<script>location.href='../../parceiro/eror/eror.html';</script>";
        }

?>