		<meta charset="utf-8">
	<head>
		<link rel="icon" type="image/x-icon" href="../images/favicon.ico">

		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	
		<meta name="description" content="Dev Customs est un site de ressource habbo crÃƒÂ©er par Jordan">
		<meta name="copyright" content="DevCustoms - 2016 - Tous droits rÃƒÂ©servÃƒÂ©s.">
		<title>DevCustoms - Ressource Habbo</title>
		<script>
		function menu1(){
			$('#menu3').fadeOut(300);
			$('#menu2').fadeOut(300);
			$('#onglet').fadeOut(300);
			$('#menu1').fadeOut(300);
			$('#menu2').fadeOut(300);
			$('#menu3').fadeOut(300);
			$('#menu1').fadeIn(1000);
		}
		function dedicasse(){
			$('#dedicasse').fadeIn(300);
		}
		function closededicasse(){
			$('#dedicasse').fadeOut(300);
		}
		
		function menu2(){
			$('#menu3').fadeOut(300);
			$('#menu2').fadeOut(300);
			$('#onglet').fadeOut(300);
			$('#menu1').fadeOut(300);
			$('#menu2').fadeOut(300);
			$('#menu3').fadeOut(300);
			$('#menu1').fadeIn(1000);
		}
		function menu3(){
			$('#menu3').fadeOut(300);
			$('#menu2').fadeOut(300);
			$('#onglet').fadeOut(300);
			$('#menu1').fadeOut(300);
			$('#menu2').fadeOut(300);
			$('#menu3').fadeOut(300);
			$('#menu3').fadeIn(1000);
		}
		function RetourMenu(){
			$('#menu3').fadeOut(300);
			$('#menu2').fadeOut(300);
			$('#onglet').fadeOut(300);
			$('#menu1').fadeOut(300);
			$('#menu2').fadeOut(300);
			$('#menu3').fadeOut(300);
			$('#onglet').fadeIn(1000);
		}
	function send(){
		var textdedi = jQuery('#textdedi').val();
		var pseudodedi = jQuery('#pseudodedi').val();
		jQuery.post('./dedicasseinput.php', { textdedi:textdedi,pseudodedi:pseudodedi },function(data){
					if($.trim(data) == "erreur"){ // erreur
						$('#erreurdedicasse').fadeIn(0);
						}
					if($.trim(data) == "ok"){ //connexion valider
						 window.location.reload();
						}
		});
	}
		</script>
	</head>
	
<body>
<div id="dedicasse" style="display:none;">
<div id="popupbox">
	<div class="box">
		<div class="title">Poste ta dédicasse !<a onclick="closededicasse()"><span>X</span></div></a><br>
		<span>Poste ta dÃ©dicasse ! </span><br>C'est nouveaux  profite s'en c'est totalement gratuit<br>
		Tou abus peux Ãªtre punis d'un ban général du site web ! /!\
		<div id="erreurdedicasse" style="display:none;"><br>Une erreur est survenue</div>
		<input type="text" id="pseudodedi" placeholder="Pseudo" class='pseudo'/><br>
		<input type="text" id='textdedi'  placeholder="Ma dédicasse" class='text'/><br>
		<a onclick="send()"><div id="bouton">Poster</div><br></a>
	</div>
</div>
</div>
<div id="structure">
	<div id="header">
		<div class="dedicasse">
		<a onclick="dedicasse()"><span>Poster ma dÃ©dicasse</span></a>
		</div>
		<div class="logo">
			<img src="http://habbofont.com/font/halloween_2/DevCustoms.gif" alt="logo"/>
		</div>
	</div>
	<div id="menu">	
	<div id="onglet">
		<a href="/index.php">Acceuil</a>
		<a onclick="menu1()">Ressource R63A</a>
		<a onclick="menu2()">Ressource R63C</a>
		<a onclick="menu3()">Customisation</a>
	</div>
	<div id="menu1" style="display:none;">
		
		<a href="/partage.php?categorie=r63acata">CATALOGUE</a>
		<a href="/partage.php?categorie=r63aswf">SWF</a>
		<a href="/partage.php?categorie=r63aemu">EMULATEUR</a>
		
	</div>
	<div id="menu2" style="display:none;">
		
		<a href="/partage.php?categorie=r63ccata">CATALOGUE</a>
		<a href="/partage.php?categorie=r63cswf">SWF</a>
		<a href="/partage.php?categorie=r63cemu">EMULATEUR</a>
		
	</div>
	<div id="menu3" style="display:none;">
		
		<a href="/partage.php?categorie=mobis">MOBIS</a>
		<a href="/partage.php?categorie=vetements">VÃƒÅ TEMENTS</a>
		<a href="/partage.php?categorie=badges">BADGES</a>
		
	</div>
	<span class="closemenu" onclick="RetourMenu()" color="red"><small><small>X</small></small></span>
		</div>
</div>
<div id="structure">
	<div id="dedicasse">
	<marquee>
	<?php
	$sql = mysql_query("SELECT * FROM dedicasse ORDER BY id DESC LIMIT 0,15");
	while($dedicasse = mysql_fetch_array($sql)) {
	?>
		<b><?php echo $dedicasse['pseudo']; ?></b> - <?php echo $dedicasse['text']; ?> || 
	<?php } ?>
	</marquee>
	</div>
</div>