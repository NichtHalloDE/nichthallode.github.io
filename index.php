<?php
date_default_timezone_set('Europe/Berlin');

if (isset($_GET['domain'])) {
$domain1 = " bei <span class='text-warning'>" . $_GET['domain'] . "</span>";
$domain2 = " von <span class='text-warning'>" . $_GET['domain'] . "</span>";
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

?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <meta name="language" content="de">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sage nicht einfach nur 'Hallo' im Chat!">
  <meta name="keywords" content="nichthallo,hallo,nohello">

  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/nichthallo.png">
  <link rel="icon" type="image/png" href="assets/img/nichthallo.png" />
  
  <title>
    NichtHallo.DE
  </title>
  <script src="./assets/js/plugins/typedjs.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v6.3.0/css/all.css" rel="stylesheet">
  <link href="./assets/css/blk-design-system-pro.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="index-page">

  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <p class="navbar-brand">
          <span>Nicht[<span class="text-primary" id="typed"></span>].DE</span>
        </p>
      </div>
    </div>
  </nav>

  <div class="wrapper">
    <div class="main">
      <div class="contactus-3">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h3 style="font-size: 2.5rem;" class="title">Sage nicht einfach nur "Hallo" im Chat!</h3>
              <p>Stell dir vor, du bittest um Hilfe im Support<?php echo $domain1 ?> und möchtest schnell Hilfe bekommen.
                <br>Genau das ist das Ziel der meisten Plattformen, Firmen, Anbieter, Dienstleister, usw., dir die schnellstmögliche Hilfe anzubieten.
                <br>Nun schreibst du aber nur <i>"Hallo!"</i> um ein Supportgespräch zu beginnen.
                <br>Das ist absolut nicht von Vorteil und erschwert das Ziel, schnelle Hilfe zu bieten, ungemein.
                <br>Probier es stattdessen doch einfach mal mit einer direkten Beschreibung deines Anliegens.<br>
			            Ein Support-Mitarbeiter<?php echo $domain2 ?> wird sich so-oder-so zurückmelden, um dein Anliegen anzugehen.
              </p>
              <br>
              <br>
              <h3 style="font-size: 2.5rem;" class="title">Beispiele</h3>
              <p>Wenn du ein Gespräch beginnst. Beispielsweise ein Supportgespräch.
                <br>Wenn du schnell Hilfe haben möchtest, solltest du auf keinen Fall das Gespräch mit einer der folgenden Phrasen beginnen.</p><br>
              <p class="blockquote blockquote-danger text-light">
                „Hallo, sind Sie da?“
                <br>„Hallo, kurze Frage.“
                <br>„Hast du einen Augenblick?“
                <br>„ping“ oder „bump!“
                <br>usw
              </p>
              <br>
              <br>
              <p>Vielleicht versuchst du es mal mit einem dieser Beispiele.</p><br>
              <p class="blockquote blockquote-success text-light">
                „Hey, wollte kurz mitteilen, dass ich einen Fehler gefunden habe“
                <br>„Hallo, wurde von XYZ bestohlen. Wollte ihn melden. ...“
                <br>„Guten Tag, ich habe einen Kauf getätigt am <?php echo date("d.m.y") . " um " . date("H:i") ?> Uhr und es nicht erhalten.“
              </p>
              <br>
              <p><span class="text-info">KURZ GESAGT:</span> Rücke einfach direkt mit deinem Anliegen raus!<br>Damit ist jeder Seite am schnellsten geholfen!</p>
              <br>
              <br>
              <?php if ($signature == true && ($domain1 || $domain2 || $domain3) != null) { ?>
              <p><span class="text-white" style="font-size: 1rem;">Dein <?php echo $domain3 ?></span></p>
              <?php } ?>
            </div>
          </div>

        </div>
      </div>
      
    </div>
    <?php if ($footer == true) { ?>
    <footer class="footer" data-background-color="black">
      <div class="container">
        <a class="footer-brand" href="">NichtHallo.DE</a>
        <ul class="pull-center">
          <li>
            <p>
              &copy; 2019-<?php echo date('Y') ?> NichtHalloDE
            </p>
          </li>
        </ul>
        <ul class="social-buttons pull-right">
          <li>
            <a href="https://github.com/NichtHalloDE" class="btn btn-icon btn-neutral btn-link">
              <i class="fab fa-github"></i>
            </a>
          </li>
        </ul>
      </div>
    </footer>
    <?php } ?>
  </div>
</body>

<script>
  if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
          typeSpeed: 90,
          backSpeed: 90,
          backDelay: 1200,
          smartBackspace: true,
          startDelay: 500,
          loop: true,
          showCursor: false,
          fadeOut: true,
          fadeOutClass: 'typed-fade-out',
          fadeOutDelay: 700,
          strings: [
              'Hallo',
              'Hi',
              'Kurze Frage',
          ],
      });
  }
</script>

</html>
