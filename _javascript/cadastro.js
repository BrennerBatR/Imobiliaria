function checkbox_venda() {

  // Pega a checkbox;
  var checkBox = document.getElementById("venda");
  // Pega o text;
  var text = document.getElementById("valor_venda");

  // Se marcar ,a opacidade fica total!
  if (checkBox.checked == true) {
    checkBox.value = 1;
    text.style.opacity = 1;
    text.removeAttribute('disabled');
  } else {
    checkBox.value = '';
    text.value = ''; // coloca o preço como null
    text.style.opacity = 0.5;
    text.setAttribute('disabled', 'disabled');

  }
}

function checkbox_locacao() {

  // Pega a checkbox;
  var checkBox = document.getElementById("locacao");
  // Pega o text;
  var text = document.getElementById("valor_locacao");

  // Se marcar ,a opacidade fica total!
  if (checkBox.checked == true) {
    text.style.opacity = 1;
    checkBox.value = 1;
    document.getElementById("valor_locacao").removeAttribute('disabled');
  } else {
    checkBox.value = '';
    text.value = '';
    text.style.opacity = 0.5;
    text.setAttribute('disabled', 'disabled');
  }
}

function SomenteNumeros(e) { //so deixa preencher se digitar numeros !
  var tecla = (window.event) ? event.keyCode : e.which;
  if ((tecla > 47 && tecla < 58)) return true;
  else {
    if (tecla == 8 || tecla == 0) return true;
    else return false;
  }
}



function TratarCep(e, t, mask) { //somente numeros e autocompletar com hifen (-) e pontos (.)
  var tecla = (window.event) ? event.keyCode : e.which;
  var i = t.value.length;
  var saida = mask.substring(1, 0);
  var texto = mask.substring(i)
  if (texto.substring(0, 1) != saida) {
    t.value += texto.substring(0, 1);
  }
  if ((tecla > 47 && tecla < 58))
    return true;
  else {
    if (tecla == 8 || tecla == 0) return true;
    else return false;
  }

}



function verificacadastro(cadastro_form) { //so deixa enviar o formulário se os campos obrigatorios forem preenchidos !.
  var preencha = document.getElementById("preencha");

  if (cadastro_form.tipo_imovel.value == "") {
    preencha.innerHTML = "Selecione um TIPO IMÓVEL!";
    cadastro_form.tipo_imovel.focus();
    return false;
  }
  if ((cadastro_form.venda.value == "") && (cadastro_form.locacao.value == "")) {
    preencha.innerHTML = "Selecione uma TRANSAÇÃO!";
    cadastro_form.venda.focus();
    return false;
  }
  if (cadastro_form.venda.value == "1") { //se tiver selecionado como venda precisa escrever um valor para ele !
    if (cadastro_form.valor_venda.value == "") {
      preencha.innerHTML = "Preencha um valor para VENDA!";
      cadastro_form.valor_venda.focus();
      return false;
    }
  }


  if (cadastro_form.locacao.value == "1") { //se tiver selecionado como locação precisa escrever um valor para ele !
    if (cadastro_form.valor_locacao.value == "") {
      preencha.innerHTML = "Preencha um valor para LOCAÇÃO!";
      cadastro_form.valor_locacao.focus();
      return false;
    }
  }
  if (cadastro_form.estado.value == "") {
    preencha.innerHTML = "Selecione um ESTADO!";
    cadastro_form.estado.focus();
    return false;
  }
  if (cadastro_form.cidades.value == "") {
    preencha.innerHTML = "Selecione uma CIDADE!";
    cadastro_form.cidades.focus();
    return false;
  }
  if (cadastro_form.bairro.value == "") {
    preencha.innerHTML = "Preencha o campo BAIRRO!";
    cadastro_form.bairro.focus();
    return false;
  }
  if (cadastro_form.rua.value == "") {
    preencha.innerHTML = "Preencha o campo RUA!";
    cadastro_form.rua.focus();
    return false;
  }
  if (cadastro_form.numero.value == "") {
    preencha.innerHTML = "Preencha o campo Nº !";
    cadastro_form.numero.focus();
    return false;
  }
  if (cadastro_form.cep.value == "") {
    preencha.innerHTML = "Preencha o campo CEP !";
    cadastro_form.cep.focus();
    return false;
  } 

  return true;

}

function verifica_radio(str) {

  var id = document.getElementById(str);
  if (id.value == '') {
    id.value = '1';
    id.checked = true;
  }
  else if (id.value == '1') {
    id.value = '';
    id.checked = false;
  }

}


/*function verifica_file(formulario, arquivo) { 
  
  extensoes_permitidas = new Array(".png", ".jpg", ".jpg"); 
  meuerro = ""; 
  if (!arquivo) { 
     //Se não tenho arquivo, é porque não se selecionou um arquivo no formulário. 
       meuerro = "Não foi selecionado nenhum arquivo"; 
  }else{ 
     //recupero a extensão deste nome de arquivo 
     extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase(); 
     //alert (extensao); 
     //comprovo se a extensão está entre as permitidas 
     permitida = false; 
     for (var i = 0; i < extensoes_permitidas.length; i++) { 
        if (extensoes_permitidas[i] == extensao) { 
        permitida = true; 
        break; 
        } 
     } 
     if (!permitida) { 
        meuerro = "Comprova a extensão dos arquivos a subir. \nSó se podem subir arquivos com extensões: " + extensoes_permitidas.join(); 
       }else{ 
           //submeto! 
        alert ("Tudo correto. Vou submeter o formulário."); 
        formulario.submit(); 
        return 1; 
       } 
  } 
  //se estou aqui é porque não se pode submeter 
  alert (meuerro); 
  return 0; 
} */