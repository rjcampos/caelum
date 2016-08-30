var numero = 12000000;
//toFixed retorna string
var formatado = numero.toFixed(2).replace(".",",");
var contador = 0;
//length - 4 elimina as casas decimais da contagem
for(var i = formatado.length - 4; i >= 0; i--){
	contador++;
	if(contador == 3){
		formatado = formatado.slice(0, i) + "." + formatado.slice(i);
		contador = 0;
	}
}

var formatado = "R$ " + formatado;
console.log(formatado);

var texto = "120,35";
var valor = parseFloat(texto.replace(",",".").replace("R$ ",""));
console.log(valor);