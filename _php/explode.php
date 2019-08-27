<?php //aqui eu separo a string de login ate o ponto e imprimo
    ini_set( 'display_errors', 0 ); //OCULTA TODOS OS ERROS
    session_start();
    $quebrar = explode(".", $_SESSION["login"]); //quebra a string ate o . e divide em 2 partes!
    $nome = $quebrar[0];

/*
        $sql = "INSERT INTO imovel (IM_cep, IM_numero, IM_rua, IM_bairro, IM_cidade, IM_estado, IM_venda, IM_aluguel, IM_valor_venda, IM_valor_aluguel, IM_elevador, IM_area_gourmet, IM_num_quartos, IM_num_banheiro, IM_vaga_garagem, IM_num_andares, IM_num_suites, IM_num_salas, IM_num_piscina, IM_area_total, IM_area_construida, IM_descricao, IM_vistoria, TIPO_IMOVEL_TI_id, ESTADO_IMOVEL_EI_id ) VALUES ('$cep', '$numero', '$rua', '$bairro' ,'$cidade','$estado','$venda', '$locacao','$valor_venda','$valor_locacao', '$elevador','$area_gourmet','$num_quartos','$num_banheiro', '$vaga_garagem', '$num_andares' ,'$num_suites','$num_salas' ,'$num_piscina' ,'$area_total' ,'$area_construida','$descricao','$vistoria','$tipo_imovel','$estado_imovel')";
     
        if (mysqli_query($conn, $sql)) {
            echo "Os dados foram gravados com SUCESSO!";
            //a partir daqui faço o upload de imagens
            $nome_pasta = mysqli_insert_id($conn); //aqui eu pego o ultimo ip cadastrado no banco
            $imagem = $_FILES['file']['name'];
             
            $_UP['pasta'] = '../upload/'. $nome_pasta . '/'; //salvo a pasta dentro de upload com o nome da pasta = id da casa 
            mkdir($_UP['pasta'], 0777);
            
            echo "<br> Pasta com id = $nome_pasta <br>";
            
            if(isset($_FILES['file']['tmp_name'])){
                $name_file = $_FILES['file']['name'];
                $tmp_name = $_FILES['file']['tmp_name'];
                $local_image = $_UP['pasta'];
                move_uploaded_file($tmp_name, $local_image.$name_file);
                echo "Upload de imagens com sucesso! <br>";
            }
        }
         else {
            echo "ERRO!: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
   */
    ?>
