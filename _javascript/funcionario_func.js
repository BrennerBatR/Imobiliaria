var ant;

function op_menu(el){
    var aux = "op_" + el;  
    
    if(ant != null){  //se for a primeira vez que clica, todos estao invisiveis, entao n precisa mudar nada, do contrario, muda o antigo apra invisivel!
      document.getElementById(ant).style.display = 'none'; 

    }
    document.getElementById(aux).style.display = 'block';
    ant = aux;
}