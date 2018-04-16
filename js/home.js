function validaBusca() {
	if (document.querySelector('#q').value == '') {
		alert("O campo de busca está vazio!");
		return false;

	}
}

document.querySelector('.form-busca').onsubmit = validaBusca;

// $('.form-busca').on('submit' function(){
// 	if(('#q').value ==''){
// 		alert("O campo de busca está vazio!(jquery)");
// 		return false;
// 	}
// });

//banner rotativo
var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;
function trocaBanner() {
	bannerAtual = (bannerAtual + 1) % 2;
	document.querySelector('.banner').src = banners[bannerAtual];
	return true;
}
//fim do banner

var timer = setInterval(trocaBanner, 4000);


//trecho responsável por para o banner
var comando = document.querySelector('.pause');

comando.onclick = function(){
	if (comando.className == "pause"){
			clearInterval(timer);
		comando.className = "play";
	}
	else{
		timer = setInterval(trocaBanner, 4000);
		comando.className = "pause";
	}
	return false;
}


// PAINEL COLLAPSE jquery
$('.novidades, .mais-vendidos').addClass('painel-compacto');


$('.novidades button').click(function(){
	$('.novidades').removeClass('painel-compacto');
});

// REPLICANDO FUNÇÃO PARA O PAINEL "MAIS-VENDIDO"
$('.mais-vendidos button').click(function(){
	$('.mais-vendidos').removeClass('painel-compacto');
});
