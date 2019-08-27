<?php
include("_php/explode.php");
ini_set( 'display_errors', 0 ); //OCULTA TODOS OS ERROS
$cadastro =<<<CADASTRO
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Imobíliaria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="_css/cadastroo_style.css" />
    <script src="_javascript/cadastro_imovel.js"></script>
    <link rel="icon" href="_imagens/icone-titulo.png" type="image/x-icon" />
</head>

<body>
        <div class="cabecalho">
                <header>
                    <h1 id="login">$nome</h1>
                    <a id="sair" href="_php/desconectar.php" >SAIR</a> 

                    <div id="menu_cliente"> >
                        <a href="funcionario.php">Menu</a>
                    </div>
                </header>
        </div>
    

    <div class="cadastro_imovel">
        <h1>&nbsp;&nbsp;&nbsp;CADASTRAR IMÓVEL</h1>
        <div id="preencha"></div>

        <form   onsubmit="return verificacadastro(this)" class="cadastro" action="_php/cadastro_imovel.php" method="post" enctype="multipart/form-data">
            <div id="parte1">
                <h2>Descrição</h2>
                <textarea id="descricao" name="descricao" placeholder="Descrição do Imóvel"></textarea>
                <br>

                <h2>Tipo Imóvel<span>*</span></h2>
                <select id="tipo_imovel" name="tipo_imovel">
                    <option value='' selected>Selecione um tipo</option>
                    <option value="1">Casa</option>
                    <option value="2">Apartamento</option>
                    <option value="3">Sítio</option>
                    <option value="4">Lote</option>
                </select>
                <h2>Imagens</h2>
                <div class = "upload">
                    <input id="imagem" type="file" name = "file[]" multiple="multiple" required>
                </div>
            </div>

            <div id="parte2">
                <h2>Transação<span>*</span></h2>
                <input id="venda" onclick="checkbox_venda()" type="checkbox" name="venda" value="" />
                <label for="venda">Venda</label>
                <br>
                <input id="valor_venda" onpaste="return false" ondrop="return false" onkeypress="return SomenteNumeros(this)" type="text" name="valor_venda" placeholder="R$" disabled/>
                <br>
                <input id="locacao" onclick="checkbox_locacao()" type="checkbox" name="locacao" value="" />
                <label for="locacao">Locação</label>
                <br>
                <input id="valor_locacao" onpaste="return false" ondrop="return false" onkeypress="return SomenteNumeros(this)" type="text" name="valor_locacao" placeholder="R$" disabled>
                <br>


                <h2 id="vistoria_h2">Vistoria</h2>
                <textarea id="vistoria" name="vistoria" placeholder="Vistoria"></textarea>
            </div>

            <div id="parte3">
                <h2 id="endereco">Endereço</h2>
                <h3>Estado:<span>*</span></h3>
                <select id="estado" name="estado">
                    <option value='' selected>Selecione um estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>

                <h3>Cidade:<span>*</span></h3>
                <select id="cidades" name="cidades">
                    <option value='' selected>Selecione uma cidade</option>
                    <option value="Ipatinga">Ipatinga</option>
                    <option value="Itabira">Itabira</option>
                    <option value="Belo Horizonte">Belo Horizonte</option>
                    <option value="Pedro Leopoldo">Pedro Leopoldo</option>
                    <option value="João Molevade">João Molevade</option>
                </select>
                <h3>Bairro:<span>*</span></h3>
                <input id="bairro" type="text" name="bairro" placeholder="Bairro" />
                <h3>Rua:<span>*</span></h3>
                <input id="rua" type="text" name="rua" placeholder="Rua">
                <h3>N°:<span>*</span></h3>
                <input id="numero" onpaste="return false" ondrop="return false" type="text" name="numero" placeholder="Nº" onkeypress="return SomenteNumeros(this)" />
                <h3>CEP:<span>*</span></h3>
                <input id="cep" type="text" onpaste="return false" ondrop="return false" name="cep" placeholder="00.000-000" onkeypress="return TratarCep(event,this,'##.###-###')" maxlength="10"
                />

            </div>

            <div id="parte4">
                <h2>Dados</h2>

                <input id="num_quartos" onpaste="return false" ondrop="return false" type="text" name="num_quartos" placeholder="NºQuartos" onkeypress="return SomenteNumeros(this)">
                <input id="num_banheiro" onpaste="return false" ondrop="return false" type="text" name="num_banheiro" placeholder="NºBanheiros " onkeypress="return SomenteNumeros(this)"/>
                <input id="num_salas"  onpaste="return false" ondrop="return false" type="text" name="num_salas" placeholder="NºSalas" onkeypress="return SomenteNumeros(this)"/>

                <input id="num_suites" onpaste="return false" ondrop="return false"  type="text" name="num_suites" placeholder="NºSuítes" onkeypress="return SomenteNumeros(this)"/>
                <input id="num_piscina"  onpaste="return false" ondrop="return false"  type="text" name="num_piscina" placeholder="NºPiscinas" onkeypress="return SomenteNumeros(this)"/>
                <input id="num_andares"  onpaste="return false" ondrop="return false"  type="text" name="num_andares" placeholder="NºAndares" onkeypress="return SomenteNumeros(this)" />

                <input id="area_total"  onpaste="return false" ondrop="return false"  type="text" name="area_total" placeholder="Área Total" onkeypress="return SomenteNumeros(this)"/>
                <input id="area_constuida" onpaste="return false" ondrop="return false" type="text" name="area_construida" placeholder="Área Construída" onkeypress="return SomenteNumeros(this)"/>
                <input id="vaga_garagem"  onpaste="return false" ondrop="return false"  type="text" name="vaga_garagem" placeholder="Vagas Garagem" onkeypress="return SomenteNumeros(this)"/>

                <h2 id="extras">Extras</h2>
                <input id="elevador" type="radio" name="elevador" value='' onclick="verifica_radio('elevador')" >
                <label for="elevador">Elevador</label>
                <br>
                <input id="area_gourmet" type="radio" name="area_gourmet" value='' onclick="verifica_radio('area_gourmet')">
                <label for="area_gourmet">Área Gourmet</label>

            </div>
            <input id="concluir" type="submit" name="buscar" value="Cadastrar">
        </form>
    </div>




</body>

</html>

CADASTRO;

?>

<?php

if ($_SESSION["login"] <> null)
    echo $cadastro;
else{

    echo "Você não tem permissões para acessar essa página, faça o LOGIN!";
}
?>