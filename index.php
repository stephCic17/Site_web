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
	<script type="text/javascript"  src="ressources/needJquery.js"></script>
	<script type="text/javascript" async src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
	<link rel="icon" href="assets/imgs/favicon.ico">
	<script type="text/javascript" async src="script.js"></script>

	 	<link rel="stylesheet" href="css/style.min.css" type="text/css" />

	</head>
	<body>
	<?php echo  get_loginPopup();?>
	<?php echo  get_subscribePopup();?>
	<?php echo  get_sendMailPopup();?>
	<?php echo  get_NavBar();?>
	
		<div  class="center" id="content">
			<div id="landingPage" class="center-wrapper">
				<div id="landing" class="container">
					<div id="title" class="tag -square -uppercase">
						<span id="numberLive">Premier Live</span>
					</div>
					<h2 id="theme" class="bold _text-primary">Thème : l'accouchement</h2>
					<div id="dateLive" class="tag -square -uppercase">
						<span style="padding:10px" class="bold">Jeudi 23 mars à 21 heures</span>
					</div>
					<p id="textLanding" class="lead">Ciconia vous invite à poser toutes vos questions au <a target="_blank" href="https://www.linkedin.com/in/amina-yamgnane-7125a658/"> Docteur Amina Yamgnane</a>.<br/> Elle répondra aux <b>10 questions</b> qui ont obtenu le plus de votes !</p>
				</div>
				<div id="doctorPresentation" class="container">
					<div id="doctorPicture" class="one col">
						<img style="width:60px;border-radius:100%" src="/assets/imgs/amina.jpg"/>
					</div>
					<div class="five col">
					    <p> Le docteur <b>Amina Yamgnane</b> est gynécologue obstétricienne, spécialisée dans la prise en charge des grossesses à haut risque maternel et foetal.</p>
					</div>
				</div>
				<div>
					<a class="button -primary -round -big" href="/ask"><span>Posez-vos questions dès maintenant ICI</span></a>
				</div>
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
	<link rel="stylesheet" href="css/composant.min.css" type="text/css" />
	<link rel="stylesheet" href="css/sub-nav.scss" type="text/css" />


