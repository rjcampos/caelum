function numberToReal(numero){
	//toFixed retorna string
	var formatado = numero.toFixed(2).replace(".",",");
	var contador = 0;
	//Se tamanho for menor que 6, número tem menos de 4 dígitos
	if(formatado.length > 6){
		//length - 4 elimina as casas decimais da contagem
		for(var i = formatado.length - 4; i >= 0; i--){
			contador++;
			if(contador == 3){
				formatado = formatado.slice(0, i) + "." + formatado.slice(i);
				contador = 0;
			}
		}
	}
	return "R$ " + formatado;
}

function realToNumber(texto){
	return parseFloat(texto.replace(",",".").replace("R$ ",""));
}