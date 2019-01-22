<?php

    session_start();

    unset ($_SESSION['usuario']);
    echo "<script>location.href='../parceiro/parceiro.html';</script>";

    ?>