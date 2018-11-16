<?php


            // Recuperadno os Dados Enviados pelo Form
            $GetPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $Error = true;


            //Variaveis Locais
            $Email = $GetPost['email'];
            $Telefone = $GetPost['telefone'];
            $Nome = $GetPost['nome'];
            $Endereco = $GetPost['end'];
            $Cidade = $GetPost['cidade'];
            $Uf = $GetPost['uf'];
            $Cep = $GetPost['cep'];





            //Incluir PHP MAILER
            include_once 'mailer/src/SMTP.php';
            include_once 'mailer/src/PHPMailer.php';


            //Enviando o e-mail Classe phpmail

            $Mailer = new \PHPMailer\PHPMailer\PHPMailer();

            $Mailer->CharSet = "utf8";
            $Mailer->IsSMTP();

            $Mailer->Host = "certificadorasul.com.br";

            $Mailer->SMTPAuth = true;
            $Mailer->Username = "site@certificadorasul.com.br";
            $Mailer->Password = "134679";
            $Mailer->SMTPSecure = "tls";
            $Mailer->Port = 587;

            $Mailer->FromName = "($Nome)";
            $Mailer->From = "site@certificadorasul.com.br";
            $Mailer->AddAddress("sac@certificadorasul.com.br","site@certificadorasul.com.br");

            $Mailer->IsHTML(true);

            $Mailer->Subject = "SSL Compra Site";
            $Mailer->Body = "Compra SSL  <br> Nome: $Nome <br> E-Mail: $Email  <br> Telefone: $Telefone <br> Endereco: $Endereco <br> Cidade: $Cidade <br> CEP: $Cep  <br> UF: $Uf";

            //Verificar
            if($Mailer->Send()){
                $Error = false;
            }


?>



<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Guilherme Bonato">


    <title>Certificadora Sul</title>


    <!--header icon CSS -->
    <link rel="icon" href="../logos/favicon.png">

    <!--CSS -->
    <link rel="stylesheet" href="return/css/css.css">

    <!--bootstrap WEB -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--bootstrap WEB -->





</head>
<body>


        <!--menu-->
        <nav class="navbar navbar-inverse navbar-fixed-top">

            <div class="container-fluid">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links-menu">
                        <i class="material-icons">Menu</i>
                    </button>

                    <a class="navbar-brand" href="../index.html">CCS</a>

                </div>

                <nav id="links-menu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">

                        <li><a href="../produtos/todos/todos.html"><span class="fa fa-server"></span> Certificados</a></li>
                        <li><a href="../produtos/bancario/bancario.html"><span class="fa fa-bank"></span> CIP</a></li>
                        <li><a href="../produtos/mobile/mobile.html"><span class="fa fa-tablet"></span> Mobile</a></li>
                        <li><a class="scroll" href="../map/mail.html"><span class="fa fa-map-marker"></span> Pontos</a></li>
                        <li><a href="../download/download.html"> <span class="fa fa-download"></span> Download</a></li>



                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="fa fa-wechat"></span> Sobre<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="scroll" href="../faq/faq.html">FAQ</a></li>
                                <li><a class="scroll" href="../map/mail.html">Email</a></li>
                            </ul>
                        </li>

                        <li><a class="scroll" href="../parceiro/parceiro.html"><span class="fa fa-slideshare"></span> Parceiro</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="fa fa-user-o"></span> Cadastrar</a></li>
                        <li><a href="#"><span class="fa fa-users"></span> Logar</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://www.facebook.com/CertificadoraSul/"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="https://www.instagram.com/certificadorasul/?hl=pt-br"><span class="fa fa-instagram"></span></a></li>
                        <li><a href="https://twitter.com/CompanhiaSul"><span class="fa fa-twitter"></span></a></li>
                    </ul>


                </nav>


            </div>


        </nav>




                        <div class="space-80"></div>

                        <div class="container" align="center">

                            <div class="space-80"></div>
                            <h2>Mensagem enviada com sucesso!</h2>


                            <div class="btn-group">
                                <button type="button" class="button"><span><a href="../produtos/ssl/ssl.html" style="color: whitesmoke">Voltar</a> </span></button>
                            </div>

                        </div>

                        <div class="space-80"></div>



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

                        <p><span class="fa fa-phone "></span> <a href="tel:5130314832"> 3031 - 4832</a>

                            &nbsp;
                            <a href="https://www.facebook.com/CertificadoraSul/" > <span class="fa fa-facebook-official fa-2x"></span></a>
                            &nbsp;
                            <a href="https://www.instagram.com/certificadorasul/?hl=pt-br" > <span class="fa fa-instagram fa-2x"></span></a>
                            &nbsp;
                            <a href="https://twitter.com/CompanhiaSul" > <span class="fa fa-twitter fa-2x"></span></a></p>

                    </div>
                    <br><br><br>
                </div>




                <div class="container-fluid" align="center" id="img-footer">

                    <img src="../logos/ccs.png" id="ccs">
                    <img src="../logos/iti.png" id="iti">
                    <img src="../logos/visa.jpg" id="visa">
                    <img src="../logos/boleto.jpg" id="boleto">
                    <img src="../logos/seg.png" id="seg">
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




</body>
</html>




