<?php

$cabecalho_divs = <<<CABECALHO
<div id="resultado">
<h1>BUSCA DE IMÓVEL</h1>
<ul id="resultado_pesquisa"><span>Resultado da Pesquisa:</span>
    <li>
        <div id="pagamento">$result_estado</div>
    </li>

    <li>
        <div id="tipo">$result_tipo</div>
    </li>

    <li>
        <div id="situacao">$result_situacao</div>
    </li>
</ul>
<select id="ordenar">
    <option id=''>Ordenar por:</option>
    <option id='1'>Preço</option>
    <option id='2'>ID</option>
    <option id='3'>Garagem</option>
</select>
</div>

CABECALHO;


$resultado_divs = <<<RESULTADOS

<div class="div_resultado" id="$i" style="top:$posicao_top">
    <img id="foto_imovel" src="../upload/$vetor_id[$i]/img0.png">
    <img id="icone_casa" src="../_imagens/icone-casa - Original.png">
    <button id="bolinha_verde"></button>
    <h2 id="ID_imovel">$vetor_id[$i]</h2>
    <img id="localizacao" src="../_imagens/icone-localizacao.png">
    <h3 id="endereco">$vetor_endereco[$i]</h3>
    <img id="quarto" src="../_imagens/icone-cama.png">
    <h4 id="num_quarto">$vetor_quarto[$i]</h4>
    <img id="banheiro" src="../_imagens/icone-chuveiro.png"> 
    <h4 id="num_banheiro">$vetor_banheiro[$i]</h4>
    <img id="garagem" src="../_imagens/icone-carro.png"> 
    <h4 id="num_garagem">$vetor_garagem[$i]</h4>
  
    <button id="detalhes">Detalhes</button>

</div>
RESULTADOS;

$sem_resultado = <<<ERRO
    <div class="div_resultado0" id="div_0">
        <h1 id="sem_resultado">Nenhum imóvel encontrado! =(<h1>
        <button id="nova_busca" onclick="voltar_menu(1)">Nova Busca </button>

    </div>


ERRO;

$sem_resultado_todos = <<<ERRO2
    <div class="div_resultado0" id="div_0">
        <h1 id="sem_resultado">Nenhum imóvel encontrado! =(<h1>
        <button id="nova_busca" onclick="voltar_menu(2)">Nova Busca </button>

    </div>


ERRO2;


?>