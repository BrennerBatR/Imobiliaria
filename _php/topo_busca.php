<?php
include("explode.php");
ini_set( 'display_errors', 0 ); //OCULTA TODOS OS ERROS
//para funcionario
$cabecalho = <<<CABECALHO
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Imobiliária</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../_css/resultado_funcionario.css" />
    <script src="../_javascript/rres_busc.js"></script>
    <link rel="icon" href="../_imagens/icone-titulo.png" type="image/x-icon" />
</head>

<body >
    <div class="cabecalho">
        <header>
            <h1 id="login">$nome</h1>
            <a id="sair" href="desconectar.php" >SAIR</a>

            <div id="menu_cliente">
                <a href="../funcionario.php">Menu</a>
            </div>
        </header>
    </div>
CABECALHO;

$fim = <<<FOOT
    </body>

        </html>
FOOT;

//para todos
$cabecalho_todos = <<<BUSCA_GERAL
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Imobiliária</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../_css/resultado_busca.css" />
    <script src="../_javascript/rres_busc.js"></script>
    <link rel="icon" href="_imagens/icone-titulo.png" type="image/x-icon" />
</head>

<body>
    <div class="cabecalho">
        <header>
            <h1>LOGO</h1>
            <img src="../_imagens/icone-casa.png">

            <nav id="menu"> 
                <h1>Menu Principal</h1>
                <ul>
                    <li>
                        <a href="../principal.html"> Principal</a>
                    </li>
                    <li>
                        <a href="../busca.html"> Busca</a>
                    </li>
                    <li>
                        <a href="../contato.html"> Contato</a>
                    </li>
                </ul>
            </nav>

            <form action="../login.html">
                <button id="area-cliente">Área do cliente</button>
            </form>
        </header>
    </div>



BUSCA_GERAL;
?>