<?php

    session_start();

    require_once('db.class.php');


    $cpf_cnpj = $_POST['cpf_cnpj'];
    $senha = md5($_POST['senha']);




    $sql = "SELECT * FROM usuarios WHERE (cpf = '$cpf_cnpj' or cnpj = '$cpf_cnpj')  AND senha = '$senha' ";



    $objDb = new db();
    $link = $objDb->conecta_mysql();


    $resultado_id = mysqli_query($link,$sql);

    if($resultado_id){
        $dados_usuario = mysqli_fetch_array($resultado_id);


        if(isset($dados_usuario['usuario'])){

            $_SESSION['usuario'] = $dados_usuario['usuario'];

            echo "<script>location.href='../../parceiro/associado/index.php';</script>";
        }

            else {
                echo "<script>location.href='../../parceiro/eror/inexistente.html';</script>";
            }

        }

        else{
            echo "<script>location.href='../../parceiro/eror/eror.html';</script>";
        }


?>