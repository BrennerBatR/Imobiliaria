/*function div_child(ID) {
        ID ++;
        alert("entrou!");
        var novaDiv = document.createElement("div");
        document.body.appendChild(novaDiv);
        novaDiv.className = "div_resultado";//coloca essa nova div como da classe "cobrinha" definida no css
        novaDiv.id = "div_" + ID;
        ID++;
        novaDiv.style.top = (50 +(ID*301)) + "px";
}
*/

function voltar_menu(op){

        if(op == 1)
                location.href = "../busca_funcionario.php"; //se tiver em modo funcionario
        else
                location.href = "../busca.html"; // se tiver em modo geral
}