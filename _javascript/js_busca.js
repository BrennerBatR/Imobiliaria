


function mostrarPreco(valor) {
  var qualquer = document.getElementById("qualquer_preco");
  var preco = document.getElementById("exibe_preco"); //escrever o valor para o usuario (innerHTML) e enviar para o php o valor (.value).
  
  preco.innerHTML = valor;
  preco.value = valor;

  qualquer.value = ''; //se passar o mouse na radio de preco, desmarca o campo (qualqur preco) se ele estiver selecionado!
  qualquer.checked = false;
}
function preco_nome() { //se selecionar venda, o nome do campo preco vira valor_venda ( ao pegar no php, ele joga no sql q é preco de venda e nao de locacao e vice-versa)
  var venda = document.getElementById("venda");
  var locacao = document.getElementById("locacao");
  var preco = document.getElementById("preco");
  var qualquer = document.getElementById("qualquer_preco");


  if (locacao.checked == true) {
    preco.name = 'valor_locacao';
    locacao.value = '1';
    venda.value = '';
  }
  else if (venda.checked == true) {
    preco.name = 'valor_venda';
    venda.value = '1';
    locacao.value = '';
  }
  if(qualquer.checked == true && venda.checked == true ){ //qualquer preco e venda, na busca seta com ovenda e preco > 0
      preco.name = 'valor_venda';
      qualquer.value = 1;
      
    }

  if(qualquer.checked == true && locacao.checked == true ) { // mesma logica do qualquer preco e venda
      preco.name = 'valor_locacao';
      qualquer.value = 2;
     
  }
  
}


/*function mascara(t, mask){ //autocompletar com - e . (hifen e ponto)
  var i = t.value.length;
  var saida = mask.substring(1,0);
  var texto = mask.substring(i)
  if (texto.substring(0,1) != saida){
  t.value += texto.substring(0,1);
  }
}*/
function SomenteNumeros(e){
  var tecla=(window.event)?event.keyCode:e.which;   
  if((tecla>47 && tecla<58)) return true;
  else{
    if (tecla==8 || tecla==0) return true;
else  return false;
  }
}



function TratarCep(e,t,mask){ //somente numeros e autocompletar com hifen (-) e pontos (.)
  var tecla=(window.event)?event.keyCode:e.which;   
  var i = t.value.length;
  var saida = mask.substring(1,0);
  var texto = mask.substring(i)
  if (texto.substring(0,1) != saida){
    t.value += texto.substring(0,1);
    }
  if((tecla>47 && tecla<58)) 
    return true;
  else{
    if (tecla==8 || tecla==0) return true;
      else  return false;
    }
 
}



function verificabusca(busca_form){ //so deixa enviar o formulário se os campos obrigatorios forem preenchidos !.
  var preencha = document.getElementById("preencha");

  if ((busca_form.venda.value == "") && (busca_form.locacao.value == "")){ 
    preencha.innerHTML = "Selecione uma TRANSAÇÃO!";
    busca_form.venda.focus();
    return false;
}
  return true;
}

function verifica_radio(str){
  
    var id = document.getElementById(str);
    if(id.value ==''){
        id.value = '1';
        id.checked = true;
    }
    else if(id.value =='1'){     
        id.value = '';
        id.checked = false;
      }
 
}

