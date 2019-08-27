lista_atual = 1;
lista_maxima = 2;
intervalo_troca = 3000;

function slider() {
    document.getElementById("lista_1").style.visibility = "hidden";
    document.getElementById("lista_2").style.visibility = "visible";

    sliderTimer = setInterval(trocar, intervalo_troca);

}


function trocar() {
    document.getElementById("lista_1").style.visibility = "hidden";
    document.getElementById("lista_2").style.visibility = "hidden";

    document.getElementById("lista_"+lista_atual).style.visibility = "visible";

    lista_atual = lista_atual+1;

    if (lista_atual > lista_maxima) {
        lista_atual = 1;
    }
}