<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Level 1</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">	
	
	<!-- Level CSS -->
	<link rel="stylesheet" href="/include/level.css" />
</head>
	<body class="level-page">
		<div id="waldszene">
			<div id="counter">0 / 3 Dinge entdeckt</div>
			
			<!-- Ansteuerung der SVG -->
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/level1.svg'); ?>
			
			<a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>
			<div id="sprechblase-container">
				<div id="sprechblase">
					<p id="textfeld">Lade...</p>
					<div class="pfeile">
						<button class="pfeil" id="prev" disabled>&larr;</button> <!--  Quelle (lvl 1-8, einmalige Aufführung hier): https://www.w3schools.com/charsets/ref_utf_arrows.asp --> 
						<button class="pfeil" id="next" disabled>&rarr;</button>
					</div>
					<div class="level-buttons" id="level-buttons">
						<a href="level2.php" class="weiter-btn">Ja, weiter!</a>
						<a href="/kinder/spielen.php" class="zurueck-btn">Zurück zur Übersicht</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			window.erwartet = 3;
			window.levelDoneKey = "level1done"; // Quelle (lvl 1-8, einmalige Aufführung hier): https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage 
			window.klickbareElemente = ["maeuse", "eicheln", "samen"];
			
			window.levelEinleitung = [
				"Oh nein, das Eichhörnchen fehlt!",
				"Was verändert sich jetzt im Wald?",
				"Klicke in den Wald, wenn du alles gefunden hast!"
			];
			window.veränderungstexte = {
				maeuse: [
					"Viel mehr Mäuse hier im Wald!",
					"Sie finden viele Eicheln, die sonst eingesammelt würden.",
					"Die Samen der Bäume werden alle gefressen."
				],
				eicheln: [
					"Überall liegen Eicheln herum.",
					"Niemand gräbt sie ein – wer hat das sonst gemacht?",
					"Sie bleiben liegen, aber nichts wächst."
				],
				samen: [
					"Weniger junge Bäumchen!",
					"Die vielen Mäuse fressen die Samen.",
					"Wie soll jetzt noch etwas wachsen?"
				]
			};
			window.zusammenfassung = [
				"Du hast es herausgefunden!",
				"Weil das Eichhörnchen fehlt, bleiben die Eicheln liegen.",
				"Die Mäuse fressen sie – aber es wachsen keine neuen Bäume mehr.",
				"Zum nächsten Level?"
			];
		</script>
		<!-- Level JavaScript -->
		<script src="/include/level.js"></script>
	</body>
</html>
