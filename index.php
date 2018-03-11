<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='assets/style.css'/>
		<title>Jeu de Pile ou Face</title>
	</head>
	<body>
	<p>On va jetter la piece jusqu'à ce qu'on obtienne un Face !</p>
	<?php
	$nombreDeJets = 0;
	do {
		$jet = rand(0,1);
		$nombreDeJets ++;
		if ($jet){
			echo "<div class=\"piece\">F</div>";
		}
		else {
			echo "<div class=\"piece\">P</div>";
		}
	} while ($jet);
	if ($nombreDeJets == 1) {
		$motJet = "jet";
	} else {
		$motJet = "jets";
	}
	echo "<p>Il y a eu {$nombreDeJets} {$motJet}!</p>";
	?>
    </body>
</html>
