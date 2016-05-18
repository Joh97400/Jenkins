<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<!-- Déclaration des normes et des caracteristiques de la page-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Bienvenue sur TiDevOps </title>
<style type="text/css">
/* Paramétrage du corps de la page */
body{
	background-color: #EEEEEE ;
	text-align : center;
	margin-top : 74px;
}

/** Paramétrage des titres **/
p{
	font-size : 27px;
	font-family : Comic Sans;
}
/* Paramétrage de la div color */
#color{
	border: 15px groove;
	position : relative;
	margin-top : 50px;
	margin-left: auto;
	margin-right:auto;
	height : 450px;
	width: 710px; /* largeur obligatoire pour être centré */
	background-color : <?php $couleur ="white";echo $couleur; ?>;
	border-radius: 10px;
}
#version{
	margin-bottom : 80px;
	margin-top : 5px;
	margin-right : 5px;
	positon:absolute;
	width :100px; 
}
#titre{
	color : green;
	font-family : Coronetscript;
	left : 40px;
	margin-bottom : 75px;
	position : float;
	font-size : 47px;
}
</style>
</head>
<body>
	<div id="color">
		<applet code="devops.class" width="300" height="150"></applet>
		<div id="version">Version 1.0</div>
		<!-- Titre generale -->
		<div id="titre">TimDevOps</div>
		<p>Votre version de logiciel est <?php echo $couleur;?>.</p>
		<p>Vous êtes connecté sur la machine de <?php echo gethostname();?>.</p>
	</div>
</body>
</html>
