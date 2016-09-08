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
	$('#img-banner').attr('src', banners[bannerAtual]);
}

function controlaBanner(){
	bannerMudando = !bannerMudando;
	if(bannerMudando)
	{
		timer = setInterval(trocaBanner, 4000);
		$('#pause').attr('src', 'img/pause.png');
	}
	else
	{
		clearInterval(timer);
		$('#pause').attr('src', 'img/play.png');
	}
}

$('#pause').on('click', controlaBanner);