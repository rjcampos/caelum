var $section_destaques = document.querySelector(".destaque img");
var $pause_button = document.querySelector("#pause");
var bannerAtual = 0;
var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerMudando = true;
var timer = setInterval(trocaBanner, 4000);

function trocaBanner(){
	if(bannerAtual == 0)
	{
		bannerAtual = 1;
	}
	else
	{
		bannerAtual = 0;
	}
	$section_destaques.src = banners[bannerAtual];
}

function controlaBanner(){
	bannerMudando = !bannerMudando;
	if(bannerMudando)
	{
		timer = setInterval(trocaBanner, 4000);
		$pause_button.src = "img/pause.png";
	}
	else
	{
		clearInterval(timer);
		$pause_button.src = "img/play.png";
	}
}

$pause_button.addEventListener('click', controlaBanner);