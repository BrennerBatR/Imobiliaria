<?php
    include("conecta.php");
    include("topo_busca.php");
    
    

    ini_set( 'display_errors', 0 ); //OCULTA TODOS OS ERROS

    //pegando os valores das variaveis do form do index.html
    $id_imovel = $_POST["id_imovel"];
    $cep = $_POST["cep"];
    $numero=$_POST["numero"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidades"];
    $estado = $_POST["estado"];

    $valor_venda = $_POST["valor_venda"];
    $valor_locacao = $_POST["valor_locacao"];
    
    $elevador = $_POST["elevador"];
    $area_gourmet = $_POST["area_gourmet"];
    $num_quartos = $_POST["num_quartos"];
    $num_banheiro = $_POST["num_banheiro"];
    $vaga_garagem = $_POST["vaga_garagem"];
    $num_andares = $_POST["num_andares"]; 
    $num_suites = $_POST["num_suites"];
    $num_salas = $_POST["num_salas"];
    $num_piscina = $_POST["num_piscina"];
    $area_total = $_POST["area_total"];
    $area_construida = $_POST["area_construida"];
    $tipo_imovel = $_POST["tipo_imovel"];
    $estado_imovel = $_POST["situacao"];
    $qualquer_valor = $_POST["qualquer_preco"];

    $submit = $_POST["buscar"];
    if($submit == "Busca") //CABECALHO DE FUNCIONARIO
        echo $cabecalho;
    else 
        echo $cabecalho_todos;



    $sql = "SELECT * FROM imovel WHERE IM_id > 0 " ;
    
    if($id_imovel  <> NULL)
        $sql .= " && IM_id = '$id_imovel'";    
    if($cep <> NULL)
        $sql .= " && IM_cep = '$cep'" ;
    if($numero <> NULL)
        $sql .= " && IM_numero = '$numero'";
    if($rua <> NULL)
        $sql .= " && IM_RUA = '$rua'";
    if($bairro <> NULL)
        $sql .= " && IM_bairro = '$bairro'";
    if($cidade <> NULL)
        $sql .= " && IM_cidade = '$cidade'";
    if($estado <> NULL)
        $sql .=  " && IM_estado = '$estado'";
   
        
  
    
    if($valor_venda <> NULL && $qualquer_valor == '1'){  //qualquer preco para venda
        $sql .= " && IM_venda = 1  && IM_valor_venda > 0 ";
        $result_estado = "Venda"; //variavel de controle para escrever no resultado da busca!
    }
    else if($valor_venda <> NULL){
        $sql .= " && IM_venda = 1  && IM_valor_venda < $valor_venda ";
        $result_estado = "Venda";
    }
    if($valor_locacao <> NULL && $qualquer_valor == '2'){ //qualqeur preco para locacao
        $sql .= " && IM_aluguel = 1  && IM_valor_aluguel > 0 ";
        $result_estado = "Aluguel";
    }
    else if($valor_locacao <> NULL){
        $sql .= " && IM_aluguel = 1 &&  IM_valor_aluguel < '$valor_locacao'"; 
        $result_estado = "Aluguel";
    }   
    
    if($elevador <> NULL)
        $sql .=  " && IM_elevador = '$elevador'";
    if($area_gourmet <> NULL)
        $sql .=  " && IM_area_gourmet = '$area_gourmet'";
    if($num_quartos <> NULL)
        $sql .=  " && IM_num_quartos = '$num_quartos'";
    if($num_banheiro <> NULL)
        $sql .=  " && IM_num_banheiro = '$num_banheiro'";
    if($vaga_garagem <> NULL)
        $sql .=  " && IM_vaga_garagem = '$vaga_garagem'";
    if($num_andares <> NULL)
        $sql .=  " && IM_num_andares = '$num_andares'";
    if($num_suites<> NULL)
        $sql .=  " && IM_num_suites = '$num_suites'";
    if($num_salas <> NULL)
        $sql .=  " &&  IM_num_salas = '$num_salas'";
    if($num_piscina <> NULL)
        $sql .=  " && IM_num_piscina = '$num_piscina'";
    if($area_total <> NULL)
        $sql .=  " && IM_area_total = '$area_total'";
    if($area_construida <> NULL)
        $sql .=  " && IM_area_construida = '$area_construida'";
    if($descricao <> NULL)
        $sql .=  " && IM_descricao ='$descricao'";
    if($vistoria <> NULL)
        $sql .=  " &&  IM_vistoria = '$vistoria'";
    if($tipo_imovel <> NULL)
        $sql .=  " && TIPO_IMOVEL_TI_id = '$tipo_imovel'";
    if($estado_imovel <> NULL)
        $sql .=  " &&  ESTADO_IMOVEL_EI_id = '$estado_imovel'";
  
    
    //definir o tipo de imovel que foi pesquisado para escrever no resultado da busca!
    if($tipo_imovel == '1')
        $result_tipo = "Casa" ;
    else if($tipo_imovel == '2')
        $result_tipo = "Apartamento";
    else if($tipo_imovel == '3')
        $result_tipo = "Sítio" ;
    else if($tipo_imovel=='4')
        $result_tipo = "Lote";
    else
        $result_tipo = "Todos";

    //definir a situação do imóvel que foi pesquisado para escrever no resultado da busca!
    if($estado_imovel == '1')
        $result_situacao = "Disponível" ;
    else if($estado_imovel == '2')
        $result_situacao = "Alugado";
    else if($estado_imovel == '3')
        $result_situacao = "Vendido" ;
    else if($estado_imovel=='4')
        $result_situacao = "Reforma";
    else
        $result_situacao = "Disponível";
    
    
    //pesquisa os dados na tabela com os campos iguais as variaveis recebidas
    
    if($resultado = mysqli_query($conn, $sql)){ //se o sql estiver correto e conectou, sucesso!
        $numRegistros = mysqli_num_rows($resultado); //essa variavel pega quantos resultados eu recebi
    }
    else
        echo "ERRO!: " . $sql . "<br>" . mysqli_error($conn); //se nao conectou mostra o erro

    // Se houver pelo menos um registro, exibe-o
    if ($numRegistros != 0) {
        $cont = 0;
        // Exibe os resultados 
        while ($produto = mysqli_fetch_object($resultado)) {
            $vetor_id[$cont] = $produto->IM_id;
            $vetor_rua[$cont] = $produto->IM_rua;
            $vetor_banheiro[$cont] = $produto->IM_num_banheiro;
            $vetor_quarto[$cont] = $produto->IM_num_quartos;
            $vetor_garagem[$cont]= $produto->IM_vaga_garagem;
            $vetor_numero[$cont] = $produto->IM_numero;
            $vetor_bairro[$cont] = $produto ->IM_bairro;

            $vetor_endereco[$cont] = "Rua " . $vetor_rua[$cont] ." Nº " . $vetor_numero[$cont] . ", " . $vetor_bairro[$cont];
            $cont ++;   
            
            
        }
        
        

        for($i = 0; $i < $cont ; $i++){
            $posicao_top = (350 +($i*301)) + "px"; //equação para posição da div a ser imprimida
            include("divs.php");
            echo $cabecalho_divs; 
            echo $resultado_divs ;
        }

        echo $fim;

    
    // Se não houver registros
    } 




    
    
        else {
            include("divs.php");
            echo $cabecalho_divs;
            if($submit == "Busca") 
                echo $sem_resultado; //botao nova busca = FUNCIONARIO
            else
                echo $sem_resultado_todos;
		   
	}


    

?>

