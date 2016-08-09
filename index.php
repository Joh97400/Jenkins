<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<!-- Déclaration des normes et des caracteristiques de la page-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Bienvenue sur TimDevOps </title>
<style type="text/css">
/* Paramétrage du corps de la page */
body{
	background-color: white ;
	text-align : center;
	margin-top : 74px;
	font-family : Georgia;
	font-size : 22px;
}
/* Paramétrage de la div color */
#color{
	border: 15px groove;
	position : relative;
	margin-top : 250px;
	margin-left: auto;
	margin-right:auto;
	height : 250px;
	width: 710px; /* largeur obligatoire pour être centré */
	background-color : <?php $couleur ="purple";echo $couleur;?>;
	border-radius: 10px;
}
#version{
	margin-bottom : 10px;
	margin-top : 5px;
	margin-right : 5px;
	positon:absolute;
	width :100px; 
	font-family : Trebuchet MS;
	font-weight: bold;
	font-size : 17px;
}
#titre{
	margin-bottom : 35px;
	background-color : white;
	color : #1C3F8C;
	font-family : Coronetscript;
	font-size : 37px;
	positon:absolute;
	width :710px; 
}
</style>
<script type="text/javascript">
function toggle_div(bouton, id) { // On déclare la fonction toggle_div qui prend en param le bouton et un id
  var div = document.getElementById(id); // On récupère le div ciblé grâce à l'id
  if(div.style.display=="none") { // Si le div est masqué...
    div.style.display = "block"; // ... on l'affiche...
	bouton.value="Masquer les détails"; // on change la valeur du bouton
  } else { // S'il est visible...
    div.style.display = "none"; // ... on le masque...
	bouton.value ="Plus de détails...";// on change la valeur du bouton
  }
}
</script>
</head>
<body>
	<div id="color">
		<!-- <applet code="devops.class" width="400" height="150"></applet>-->
		<div id="version">Version 1.0</div>
		<!-- Titre generale -->
		<div id="titre">TimDevOps</div>
		Votre version de logiciel est <?php echo $couleur;?>.</br></br>
		<input type="button" onclick="toggle_div(this,'details');" value="Plus de détails..."/></br></br>
		<div id="details" style="display:none;">
			Vous êtes connecté sur la machine de <?php echo gethostname(); ?>.
		</div>
		
	</div>
</body>
</html>