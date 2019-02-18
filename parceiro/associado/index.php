<?php

    session_start();

        if(!isset($_SESSION['usuario'])){
            echo "<script>location.href='../login/login.html';</script>";
        }

?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Guilherme Bonato">


    <title>Parceiro CCS</title>



    <!-- bootstrap -->

    <!-- font-awesome/4.7.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="../../bootstrap/jquery-3.3.1.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="../../bootstrap/dist/js/bootstrap.min.js"></script>


    <!--Normalize V8-->
    <script src="../../bootstrap/v8.js"></script>

    <!-- bootstrap -->




    <!--header icon CSS -->
    <link rel="icon" href="../../logos/favicon.png">


    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/associado.css">






</head>
<body>





<!--menu-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="menus">

    <div class="container-fluid">
        <div class="navbar-header">


            <span  style="color:#fff;" class="navbar-toggle fa fa-navicon" data-toggle="collapse" data-target="#links-menu"></span>



            <a class="navbar-brand" href="#" > <img src="../../logos/logotipo.png" id="logotipo-topo"> </a>

        </div>

        <nav id="links-menu" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li><a href="kitbiometrico/kit.php"><span class="fa fa-dashcube"></span> Kit Biometrico </a></li>



            </ul>


            <ul class="nav navbar-nav navbar-right">
                &nbsp;
                <li><a href="#"><span class="fa fa-user-o"></span> <?= $_SESSION['usuario'] ?></a></li>
                <li><a href="editar/editar_fisico.php"><span class="fa fa-pencil"></span> Editar</a></li>
                <li><a href="../../sql/sair.php"><span class="fa fa-mail-reply-all"></span> Sair</a></li>

            </ul>




        </nav>


    </div>


</nav>





<div class="space-80"></div>


    <div class="container" align="center">
        <div class="row">

            <div class="col-sm-4">
                <h3>Column 1</h3>
                <p>Lorem ipsum dolor..</p>
                <p>Ut enim ad..</p>
            </div>

            <div class="col-sm-4">
                <h3>Column 2</h3>
                <p>Lorem ipsum dolor..</p>
                <p>Ut enim ad..</p>
            </div>

            <div class="col-sm-4">
                <h3>Column 3</h3>
                <p>Lorem ipsum dolor..</p>
                <p>Ut enim ad..</p>
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

                    <img src="../../logos/ccs.png" id="ccs">
                    <img src="../../logos/iti.png" id="iti">
                    <img src="../../logos/visa.jpg" id="visa">
                    <img src="../../logos/boleto.jpg" id="boleto">
                    <img src="../../logos/seg.png" id="seg">
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
