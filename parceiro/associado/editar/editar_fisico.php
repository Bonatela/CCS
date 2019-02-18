<?php

    session_start();


    if(!isset($_SESSION['usuario'])){
        echo "<script>location.href='../../login/login.html';</script>";
    }
echo $_SESSION['id'];
echo $_SESSION['usuario'];

?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Guilherme Bonato">


    <title>Editar</title>



    <!-- bootstrap -->

    <!-- font-awesome/4.7.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../../bootstrap/dist/css/bootstrap.min.css">



    <!-- jQuery library -->
    <script src="../../../bootstrap/jquery-3.3.1.js"></script>



    <!-- Latest alert  and minified JS -->
    <script src="../../../bootstrap/bootstrap-notify.min.js"></script>


    <!-- Latest mask and minified JS -->
    <script src="../../../bootstrap/jquery.mask.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="../../../bootstrap/dist/js/bootstrap.min.js"></script>


    <!--Normalize V8-->
    <script src="../../../bootstrap/v8.js"></script>

    <!-- bootstrap -->


    <!--JS-->
    <script src="js/mask_editar_fisico.js"></script>

    <!--header icon CSS -->
    <link rel="icon" href="../../../logos/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/associado.css">






</head>
<body>





<!--menu-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="menus">

    <div class="container-fluid">
        <div class="navbar-header">


            <span  style="color:#fff;" class="navbar-toggle fa fa-navicon" data-toggle="collapse" data-target="#links-menu"></span>



            <a class="navbar-brand" href="../index.php" > <img src="../../../logos/logotipo.png" id="logotipo-topo"> </a>

        </div>

        <nav id="links-menu" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li><a href="../index.php"><span class="fa fa-arrow-circle-o-left"></span> Voltar</a></li>


            </ul>


            <ul class="nav navbar-nav navbar-right">
                &nbsp;
                <li><a href="#"><span class="fa fa-user-o"></span> <?= $_SESSION['usuario'] ?></a></li>
                <li><a href="#"><span class="fa fa-pencil"></span> Editar</a></li>
                <li><a href="../../../sql/sair.php"><span class="fa fa-mail-reply-all"></span> Sair</a></li>

            </ul>




        </nav>


    </div>


</nav>






        <div class="space-50"></div>
        <div class="space-50"></div>

            <div class="container">

                <h2>Edite seus dados de cadastro</h2>
            </div>


            <div class="container">
                <div class="row">

                    <div class="col-lg-4">



                        <div class="list-group">
                            <a href="#" class="list-group-item disabled">Dados Atuais</a>

                            <a href="#" class="list-group-item"><?= $_SESSION['usuario'] ?></a>
                            <a href="#" class="list-group-item"><?= $_SESSION['email'] ?></a>
                            <a href="#" class="list-group-item"><?= $_SESSION['telefone'] ?></a>
                            <a href="#" class="list-group-item"><?= $_SESSION['cpf'] ?></a>
                            <a href="#" class="list-group-item"><?= $_SESSION['cidade'] ?></a>
                            <a href="#" class="list-group-item"><?= $_SESSION['uf'] ?></a>
                            <a href="#" class="list-group-item"><?= $_SESSION['cep'] ?></a>
                            <a href="#" class="list-group-item"><?= $_SESSION['endereco'] ?></a>
                            <a href="#" class="list-group-item"><?= $_SESSION['numero_f'] ?></a>


                        </div>



                    </div>



                    <div class="col-lg-8">

                        <form action="#" method="post">

                        <div class="list-group">
                            <a href="#" class="list-group-item disabled">Novos Dados</a>
                            <br>
                            <input name="usuario" type="text" class="form-control" id="fisico" placeholder="Nome">
                            <br>
                            <input name="email" type="email" class="form-control" id="email" placeholder="email">
                            <br>
                            <input name="telefone" type="text" class="form-control" id="telefone"  pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" placeholder="Telefone">
                            <br>
                            <input name="cpf" type="text" class="form-control" id="cpf" placeholder="CPF">
                            <br>
                            <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Cidade">
                            <br>
                            <input name="uf" type="text" class="form-control" id="uf" placeholder="UF">
                            <br>
                            <input name="cep" type="text" class="form-control" id="cep" placeholder="00000-000">
                            <br>
                            <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Rua / Avenida">
                            <br>
                            <input name="numero_f" type="text" class="form-control" id="numero" placeholder="nº 0">


                        </div>

                            <button type="submit" class="btn btn-success">Editar</button>
                        </form>

                    </div>




                </div>
            </div>






<hr>
<!-- Links Footer -->
<div class="jumbotron" id="baixo">
    <div class="container" align="left">


        <div class="container">
            <div class="row">



                <div class="col-sm-4" id="txt-footer1">
                    <h5 style="color: #3b3b3b">Links Úteis</h5>

                    <div class="container" align="left">
                        <p><a href="https://www.validcertificadora.com.br/Identificacao.aspx/005370">Meus Pedidos</a></p>
                        <p><a href="http://www.validcertificadora.com.br/cancelamento/005370">Sobre Reembolso</a></p>
                        <p><a href="http://www.validcertificadora.com.br/cancelamento/005370">Sobre 2ª via NFE</a></p>
                    </div>

                </div>


                <div class="col-sm-4" id="txt-footer2">
                    <h5 style="color: #3b3b3b"> Veja Também </h5>

                    <div class="container" align="left">
                        <p><a href="http://www.validcertificadora.com.br/Valid-Certificados-Digitais.htm/005370">Certificados Digitais</a></p>
                        <p><a href="http://www.validcertificadora.com.br/certificados-ssl/005370">Certificados SSL</a></p>
                        <p><a href="http://www.validcertificadora.com.br/suporte/005370">Instalação e Suporte</a></p>
                    </div>

                </div>

                <div class="col-sm-4" id="txt-footer3">

                    <h5 style="color: #3b3b3b">Clique VALID e pronto!</h5>

                    <div class="container" align="left">

                        <p>
                            VALID Certificadora Digital Ltda. <br>Uma empresa do Grupo VALID S/A <br>
                        </p>

                        <p>
                            R. 15 de Janeiro 373 – 8º Andar<br>Centro Canoas - RS – CEP: 92.010-300
                        </p>

                        <p><span style="color:#014f5b" class="fa fa-phone "></span> <a href="tel:5130314832"> 3031 - 4832</a>

                            &nbsp;
                            <a href="https://www.facebook.com/CertificadoraSul/" > <span style="color:#014f5b" class="fa fa-facebook-official fa-2x"></span></a>
                            &nbsp;
                            <a href="https://www.instagram.com/certificadorasul/?hl=pt-br" > <span style="color:#014f5b" class="fa fa-instagram fa-2x"></span></a>
                            &nbsp;
                            <a href="https://twitter.com/CompanhiaSul" > <span style="color:#014f5b" class="fa fa-twitter fa-2x"></span></a></p>

                    </div>
                    <br><br><br>
                </div>




                <div class="container-fluid" align="center" id="img-footer">

                    <img src="../../../logos/ccs.png" id="ccs">
                    <img src="../../../logos/iti.png" id="iti">
                    <img src="../../../logos/visa.jpg" id="visa">
                    <img src="../../../logos/boleto.jpg" id="boleto">
                    <img src="../../../logos/seg.png" id="seg">
                </div>


            </div><!--row-->
        </div> <!--container-->


    </div> <!--container-->
</div><!--jumbo-->



<div class="jumbotron-fluid text-center" id="final">
    <p>
        <br>
        © 2018 Companhia Certificadora Sul - Todos os direitos reservados
    </p>


</div>
<!-- Links Footer -->


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'EWPoJVPCeA';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->


</body>
</html>
