<?php

include "connexion.php";
include "footer.php";
include "user/Users.php";
include "navbar.php";
include "popup.php";

session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"/>
	<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta http-equiv="Content-Type" content="text/html"/>

	<title>Ciconia</title>
	<meta name="author" content="Ciconia"/>
	<meta name="description" content="Ciconia et votre grossesse"/>
	<meta name="keywords" content="grossesse, timeline"/>

	<link rel="icon" href="assets/imgs/favicon.ico">
	<script type="text/javascript" src="ressources/jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/content.css" type="text/css" />
	<link rel="stylesheet" href="css/modal.css" type="text/css" />
	<link rel="stylesheet" href="css/navbar.css" type="text/css" />
	<link rel="stylesheet" href="css/footer.css" type="text/css" />
	<link rel="stylesheet" href="css/sub-nav.css" type="text/css" />

	</head>
	<body>
	<?php echo  get_loginPopup();?>
	<?php echo  get_subscribePopup();?>
	<?php echo  get_sendMailPopup();?>
	<?php echo  get_NavBar();?>
	
		<div style="height: calc(100% - 100px)" class="center" id="content">
	<div class="center-wrapper">
			<div style="text-align:left;" class="container">
				<div style="border: none" class="tag -square -uppercase"><span style="margin-left: -1px;margin-bottom: -15px;">Premier Live</span></div>
	<h2 style="margin-bottom: 5px" class="bold _text-primary">Thème : l'accouchement</h2>
	<div class="tag -square -uppercase"><span style="font-size: 1.3rem" class="bold">Rendez vous le jeudi 23 mars à 21 heures</span></div>
	<p class="lead">Ciconia vous invite à poser toutes vos questions au <a target="_blank" href="https://www.linkedin.com/in/amina-yamgnane-7125a658/"> Docteur Amina Yamgnane</a>.<br/> Elle répondra aux <b>10 questions</b> qui ont obtenu le plus de votes !</p>
<p> Le docteur <b>Amina Yamgnane</b> est gynécologue obstétricienne, spécialisée dans la prise en charge des grossesses à haut risque maternel et foetal. Chef de Service de la Maternité à American Hospital of Paris</p>
				<a class="button -line-primary -round -big" href="/ask">À vos claviers Mesdames</a>
	</div>
	</div>
			</div>
		</div>
		<?php echo get_footer(); ?>
</body>
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-93913285-1', 'auto');
 ga('send', 'pageview'); 
</script>
