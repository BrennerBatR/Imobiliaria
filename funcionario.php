<?php 
include("_php/explode.php");
ini_set( 'display_errors', 0 ); //OCULTA TODOS OS ERROS
$funcionario = <<<FUNCIONARIO
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Imobíliaria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="_css/funcionario_style.css" />
    <script src="_javascript/funcionario_func.js"></script>
    <link rel="icon" href="_imagens/icone-titulo.png" type="image/x-icon" />
</head>

<body>
    <div class="cabecalho">
        <header>
            <h1 id="login">$nome</h1>
            <a id="sair" href="_php/desconectar.php" >SAIR</a>

            <nav id="menu_cliente"> >
                <h1>Menu do cliente</h1>
                <ul>
                    <li>
                        <button id="teste" onclick="op_menu('imoveis')">Imóveis</button>
                    </li>
                    <li>
                        <button onclick="op_menu('cliente')">Clientes</button>
                    </li>
                    <li>
                        <button onclick="op_menu('contratos')">Contratos</button>
                    </li>
                    <li>
                        <button onclick="op_menu('pagamentos')">Pagamentos</button>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <div id="op_imoveis" style="display:none">
        <header>
            <nav id="area_escolha">
                <h1>Imóveis</h1>
                <ul>
                    <li>
                        <a href="cadastro_imovel.php">CADASTRAR IMÓVEL</a>
                    </li>
                    <li>
                        <a href="busca_funcionario.php">BUSCAR IMÓVEL</a>
                    </li>
                    <li>
                        <a href="funcionario.php">EDITAR IMÓVEL</a>
                    </li>
                    <li>
                        <a href="funcionario.php">EXCLUIR IMÓVEL</a>
                    </li>
                </ul>
            </nav>
        </header>

    </div>

    <div id="op_cliente" style="display:none">
        <header>
            <nav id="area_escolha">
                <h1>Clientes</h1>
                <ul>
                    <li>
                        <a href="funcionario.php">CADASTRAR CLIENTE</a>
                    </li>
                    <li>
                        <a href="funcionario.php">BUSCAR CLIENTE</a>
                    </li>
                    <li>
                        <a href="funcionario.php">EDITAR CLIENTE</a>
                    </li>
                    <li>
                        <a href="funcionario.php">EXCLUIR CLIENTE</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>


    <div id="op_contratos" style="display:none">
        <header>
            <nav id="area_escolha">
                <h1>Contratos</h1>
                <ul>
                    <li>
                        <a href="funcionario.php">CADASTRAR CONTRATO</a>
                    </li>
                    <li>
                        <a href="funcionario.php">BUSCAR CONTRATO</a>
                    </li>
                    <li>
                        <a href="funcionario.php">EDITAR CONTRATO</a>
                    </li>
                    <li>
                        <a href="funcionario.php">EXCLUIR CONTRATO</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <div id="op_pagamentos" style="display:none">
        <header>
            <nav id="area_escolha">
                <h1>Pagamentos</h1>
                <ul>
                    <li>
                        <a href="funcionario.php">EM DESENVOLVIMENTO!</a>
                    </li>
                    <!--<li>
                    <a href="funcionario.php">BUSCAR CONTRATO</a>
                </li>
                <li>
                    <a href="funcionario.php">EDITAR CONTRATO</a>
                </li>
                <li>
                    <a href="funcionario.php">EXCLUIR CONTRATO</a>
                </li> -->
                </ul>
            </nav>
        </header>
    </div>

</body>

</html>


FUNCIONARIO;



?>

<?php

if ($_SESSION["login"] <> null)
    echo $funcionario;
else{
    echo "o login é ".$_SESSION["login"] . "<br>";
    echo "Você não tem permissões para acessar essa página, faça o LOGIN!";
}
?>