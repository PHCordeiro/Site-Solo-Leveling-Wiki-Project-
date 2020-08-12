function exibir(id){
	var elemento = document.getElementById(id).style.display;
	if(elemento == "none"){
		document.getElementById(id).style.display = 'block';
		botao.textContent = "Less";
	}
	else{
		document.getElementById(id).style.display = 'none';
		botao.textContent = "More";
	}
}

function calcular(xp){
	let xpInicial = 98;
	let leveis = 0;
	while(xp > xpInicial){
		xp -= xpInicial;
		xpInicial *= 2;
		leveis++;
	}
	alert("Seu pokemon irá upar "+leveis+" com essa quantidade de xp!");
}