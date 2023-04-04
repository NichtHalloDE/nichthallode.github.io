<?php
date_default_timezone_set('Europe/Berlin');

if (isset($_GET['domain'])) {
$domain1 = " bei <b>" . $_GET['domain'] . "</b>";
$domain2 = " von <b>" . $_GET['domain'] . "</b>";
$domain3 = $_GET['domain'] . " Support-Team";
} else {
	$domain1 = $domain2 = $domain3 = '';
}

if (isset($_GET['footer'])) {
	if($_GET['footer'] == '0') {
		$footer = false;
	} else {
		$footer = true;
	}
} else {
	$footer = true;
}

if (isset($_GET['signature'])) {
	if($_GET['signature'] == '0') {
		$signature = false;
	} else {
		$signature = true;
	}
} else {
	$signature = true;
}

if (isset($_GET['usage'])) {
	if($_GET['usage'] == '0') {
		$usage = false;
	} else {
		$usage = true;
	}
} else {
	$usage = true;
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NichtHallo.DE</title>
	<meta name="description" content="Sage nicht einfach nur 'Hallo' im Chat!">
	<meta name="keywords" content="nichthallo,hallo,nohello">
	<link rel="icon" type="image/png" href="assets/images/nichthallo.png" />

	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

	<style>	
		@font-face {
			font-family: LilitaOne;
			src: url(assets/fonts/LilitaOne-Regular.ttf) format('truetype');
			font-weight: normal;
    		font-style: normal;
		}
		@font-face {
			font-family: SourceSansPro;
			src: url(assets/fonts/SourceSansPro-Regular.ttf) format('truetype');
			font-weight: normal;
    		font-style: normal;
		}
		 
		.slide-in-bottom{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both}
		.slide-in-bottom-h1{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both}
		.slide-in-bottom-subtitle{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both}
		.fade-in{-webkit-animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both;animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both}
		.bounce-top-icons{-webkit-animation:bounce-top .9s 1s both;animation:bounce-top .9s 1s both}

		.font-LO {
			font-family: LilitaOne;
		}

		.imgShadow {
			filter: drop-shadow(3px 3px 1px #00000045);
			margin-right: 5px;
		}

		.li-ns::marker {
			content: '● ';
			color: #ef4545;
		}
		.li-ss::marker {
			content: '● ';
			color: #11b981;
		}
		
		@-webkit-keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}
		@-webkit-keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}@keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}
		@-webkit-keyframes fade-in{0%{opacity:0}100%{opacity:1}}@keyframes fade-in{0%{opacity:0}100%{opacity:1}}
				
	</style>

</head>


<body class="leading-normal tracking-normal text-gray-900" style="font-family: SourceSansPro, sans-serif;">



<div class="h-screen pb-14 bg-right bg-cover" style="background-image:url('assets/images/bg.svg');">
	<!--Nav-->
	<div class="w-full container mx-auto p-6">
			
		<div class="w-full flex items-center justify-between">
			<a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="#"> 
				 <img class="imgShadow" src="assets/images/nichthallo.png" width="45px" height="auto" /> NichtHallo.DE
			</a>
			
			<?php if ($usage == true) { ?>
				<div class="flex w-1/2 justify-end content-center">		
					<a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4" href="/benutzen">
						<i class="fa-solid fa-circle-info fa-2xl"></i>	
					</a>
				</div>
			<?php } ?>
			
		</div>

	</div>

	<!--Main-->
	<div class="container pt-24 md:pt-48 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
		
		<!--Left Col-->
		<div class="flex flex-col w-full xl:w-3/5 justify-center lg:items-start overflow-y-hidden">
			<h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-LO font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Sage nicht einfach nur "Hallo" im Chat!</h1>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Stell dir vor, du bittest um Hilfe im Support<?php echo $domain1 ?> und möchtest schnell Hilfe bekommen.</p>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Genau das ist das Ziel der meisten Plattformen, Firmen, Anbieter, Dienstleister, usw., dir die schnellstmögliche Hilfe anzubieten.</p>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Nun schreibst du aber nur <i>"Hallo!"</i> um ein Supportgespräch zu beginnen.</p>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Das ist absolut nicht von Vorteil und erschwert das Ziel, schnelle Hilfe zu bieten, ungemein.</p>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Probier es doch einfach mal mit einer direkten Beschreibung deines Anliegens.<br>
			Ein Support-Mitarbeiter<?php echo $domain2 ?> wird sich so-oder-so zurückmelden, um dein Anliegen anzugehen.</p>
		</div>
		
		<!--Right Col-->
		<div class="w-full xl:w-2/6 py-6 overflow-y-hidden">
			<div style="margin-left: 45px; margin-bottom: 30px;">
				<h4 class="my-4 text-3xl md:text-4xl text-red-500 font-LO font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Nicht so...</h4>
				<ul style="margin-left:15px">
					<li class="li-ns slide-in-bottom-h1 leading-normal text-base md:text-1xl">"Hallo, sind Sie da?"</li>
					<li class="li-ns slide-in-bottom-h1">"Hallo, kurze Frage."</li>
					<li class="li-ns slide-in-bottom-h1">"Hast du einen Augenblick?"</li>
					<li class="li-ns slide-in-bottom-h1">"ping" / "bump!"</li>
					<li class="li-ns slide-in-bottom-h1">u.s.w</li>
				</ul>
			</div>
			<div style="margin-left: 45px">
				<h4 class="my-4 text-3xl md:text-4xl text-green-500 font-LO font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Sondern so!</h4>
				<ul style="margin-left:15px">
					<li class="li-ss slide-in-bottom-h1">"Hey, wollte kurz mitteilen, dass ich einen Fehler gefunden habe. <Fehlerbeschreibung>..."</li>
					<li class="li-ss slide-in-bottom-h1">"Hallo, wurde von XYZ bestohlen. Wollte ihn melden. <Beweis/Screenshot>..."</li>
					<li class="li-ss slide-in-bottom-h1">"Guten Tag, ich habe einen Kauf getätigt am <?php echo date("m.d.y") . " um " . date("H:i") ?> Uhr und es nicht erhalten."</li>
					<li class="slide-in-bottom-h1" style="margin-top: 15px;"><b>KURZ GESAGT:</b> Rücke einfach direkt mit deinem Anliegen raus!<br>Damit ist jeder Seite am schnellsten geholfen!</li>
				</ul>
			</div>
		</div>
		
		<?php if ($signature == true) { ?>
			<p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in"><?php echo $domain3 ?></p>
		<?php } ?>
		<?php if ($footer == true) { ?>
			<div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in" >
				<a class="text-gray-500 no-underline hover:no-underline" href="mailto:kontakt@keee.vin">&copy; 2019-<?php echo date("Y") ?> DriverSpy</a>
			</div>
		<?php } ?>
		
	</div>
	

</div>
</body>
</html>
