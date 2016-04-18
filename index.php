﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<!-- Déclaration des normes et des caracteristiques de la page-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Bienvenue sur TimDevOps </title>
<style type="text/css">
/* Paramétrage du corps de la page }*/
body{
	background-color: white;
	text-align : center;
	font-family : Times New roman;
	font-size : 50px;
}

/* Paramétrage des titres */
h1{
	color : black;
}

/* Paramétrage de la div color */
#color{
	margin-left: auto;
	margin-right:auto;
	width: 710px; /* largeur obligatoire pour être centré */
	background-color : <?php $couleur ="pink";echo $couleur;?>;
	border-radius: 10px;
	border : 10px blue double;  /* Ajoute un style sur la bordure */
	border-color : green;
}
</style>
</head>
<body>
	<div id="color">
		<!-- Titre generale -->
		<h1>TimDevOps</h1></br>
		Votre version de logiciel est <?php echo $couleur;?>.</br></br>
		Vous êtes connecté sur la machine de <?php echo gethostname(); ?>.	</br></br>
	</div>
</body>
</html>