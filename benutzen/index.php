<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NichtHallo.DE</title>
	<link rel="icon" type="image/png" href="../assets/images/nichthallo.png" />

	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

	<style>	
		@font-face {
			font-family: LilitaOne;
			src: url(../assets/fonts/LilitaOne-Regular.ttf) format('truetype');
			font-weight: normal;
    		font-style: normal;
		}
		@font-face {
			font-family: SourceSansPro;
			src: url(../assets/fonts/SourceSansPro-Regular.ttf) format('truetype');
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



<div class="h-screen pb-14 bg-right bg-cover" style="background-image:url('../assets/images/bg.svg');">
	<!--Nav-->
	<div class="w-full container mx-auto p-6">
			
		<div class="w-full flex items-center justify-between">
			<a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="/"> 
				 <img class="imgShadow" src="../assets/images/nichthallo.png" width="45px" height="auto" /> NichtHallo.DE
			</a>
			
		</div>

	</div>

	<!--Main-->
	<div class="container pt-24 md:pt-48 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
		
		<!--Left Col-->
		<div class="flex flex-col w-full xl:w-5/5 justify-center lg:items-start overflow-y-hidden">
			<h1 class="my-4 text-3xl md:text-5xl text-blue-500 font-LO font-bold leading-tight text-center md:text-left slide-in-bottom-h1">So funktioniert NichtHallo.DE</h1>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Diese Seite soll jedem helfen!</p>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Soll an gewünschten Stellen eine Domain dargestellt werden, besteht die Möglichkeit folgender Eingabe in der URL:<br>
            <code>domain=Beispiel.de</code></p>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Durch die Angabe einer Domain in der URL wird eine Signatur in den Text eingefügt:<br>
            <i>Beispiel.de Support-Team</i><br>
            <br>
            Dies kann jedoch ausgeblendet werden mit der folgenden Angabe in der URL:<br>
            <code>signature=0</code></p>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Oben rechts wird ein "i" in einem Kreis dargstellt, der auf diese Anleitung verweist.<br>
            Dies kann ebenfalls mit folgender Angabe in der URL umgangen werden:<br>
            <code>usage=0</code></p>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Soll die gesamte Fußzeile (Copyright) ausgeblendet werden, kann folgende Angabe verwendet werden:<br>
            <code>footer=0</code></p>
            <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Die gesamte URL kann wie folgt verwendet werden</br>
            <code>https://www.nichthallo.de?domain=Beispiel.de&signature=0&usage=0&footer=0</code></p>
            <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle"><br>Vorschläge für Veränderungen an der Seite sind gewünscht.<br>
            <code>kontakt@keee.vin</code></p>
		</div>
			<div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in" >
				<a class="text-gray-500 no-underline hover:no-underline" href="mailto:kontakt@keee.vin">&copy; 2019-<?php echo date("Y") ?> DriverSpy</a>
			</div>
		
	</div>
	

</div>
</body>
</html>
