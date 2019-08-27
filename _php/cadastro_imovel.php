<?php
    include("conecta.php");
    //pegando os valores das variaveis do form do index.html
    ini_set( 'display_errors', 0 ); //OCULTA TODOS OS ERROS
    $cep = $_POST["cep"];
    $numero=$_POST["numero"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidades"];
    $estado = $_POST["estado"];
    $venda = $_POST["venda"];
    $locacao = $_POST["locacao"];
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
    $descricao = $_POST["descricao"];
    $vistoria = $_POST["vistoria"];
    $tipo_imovel = $_POST["tipo_imovel"];
    $estado_imovel = 1; //por padrao definimos disponivel!
    //inserir no banco de dados, ordem que esta no BD !!

   


        $sql = "INSERT INTO imovel (IM_cep, IM_numero, IM_rua, IM_bairro, IM_cidade, IM_estado, IM_venda, IM_aluguel, IM_valor_venda, IM_valor_aluguel, IM_elevador, IM_area_gourmet, IM_num_quartos, IM_num_banheiro, IM_vaga_garagem, IM_num_andares, IM_num_suites, IM_num_salas, IM_num_piscina, IM_area_total, IM_area_construida, IM_descricao, IM_vistoria, TIPO_IMOVEL_TI_id, ESTADO_IMOVEL_EI_id ) VALUES ('$cep', '$numero', '$rua', '$bairro' ,'$cidade','$estado','$venda', '$locacao','$valor_venda','$valor_locacao', '$elevador','$area_gourmet','$num_quartos','$num_banheiro', '$vaga_garagem', '$num_andares' ,'$num_suites','$num_salas' ,'$num_piscina' ,'$area_total' ,'$area_construida','$descricao','$vistoria','$tipo_imovel','$estado_imovel')";
     
        if (mysqli_query($conn, $sql)) {
            echo "Os dados foram gravados com SUCESSO!";
            //a partir daqui faço o upload de imagens
            $arquivo = isset($_FILES['file']) ? $_FILES['file']: FALSE;
            if($arquivo){
            $nome_pasta = mysqli_insert_id($conn); //aqui eu pego o ultimo ip cadastrado no banco
            $_UP['pasta'] = '../upload/'. $nome_pasta ; //salvo a pasta dentro de upload com o nome da pasta = id da casa 
            mkdir($_UP['pasta'], 0777);
            
            echo "<br> Pasta com id = $nome_pasta <br>";
            
            echo "arquivo = " .$arquivo . "<br>";
            echo "qtd de arquivos = " . count($arquivo['name']) . "<br>";
                for($i = 0; $i< count($arquivo['name']); $i++){
                    $arquivo['name'][$i] = "img" . $i .".png"; //faço as imagens que vao ser upadas receber o nome img0, img1 etc.. para facilitar a busca
                    $destino = $_UP['pasta']."/".$arquivo['name'][$i];
                    if(move_uploaded_file($arquivo['tmp_name'][$i], $destino)){
                        echo "Upload da ". $arquivo['name'][$i]." efetuada com sucesso! <br>";
                    }
                }
            }
        }
         else {
            echo "ERRO!: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
   
       


?>