<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Level 7</title>
		
		<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
		
		<!-- Level CSS -->
		<link rel="stylesheet" href="/include/level.css" />
	</head>
	<body class="level-page">
		<div id="waldszene">
			<div id="counter">0 / 3 Dinge entdeckt</div>
			
			<!-- Ansteuerung der SVG -->
			<?php include(__DIR__ . '/../../bilder/level7.svg');?> <!-- Quelle: https://www.devrobot.de/how-to-include-der-beste-weg-dateien-in-php-einzubinden/ -->
			
			<a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>
			<div id="sprechblase-container">
				<div id="sprechblase">
					<p id="textfeld">Lade...</p>
					<div class="pfeile">
						<button class="pfeil" id="prev" disabled>&larr;</button>
						<button class="pfeil" id="next" disabled>&rarr;</button>
					</div>
					<div class="level-buttons" id="level-buttons">
						<a href="level8.php" class="weiter-btn">Ja, weiter!</a>
						<a href="/kinder/spielen.php" class="zurueck-btn">Zurück zur Übersicht</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			window.erwartet = 3;
			window.levelDoneKey = "level7done";
			window.klickbareElemente = ["junger_baum_kaputt", "specht", "eule_sad"];
			
			window.levelEinleitung = [
				"Zu viele Rehe! Der Wald sieht verändert aus… Was fällt dir auf?",
				"Ein Bewohner musste den Wald verlassen.",
				"In seinem Zuhause wohnen jetzt andere Tiere!",
				"Klicke in den Wald, wenn du alles gefunden hast!"
			];
			
			window.veränderungstexte = {
				junger_baum_kaputt: [
					"Der letzte junge Baum. Auch er sieht nicht gut aus.",
					"Die Rehe haben alle Triebe angefressen.",
					"Auch die Sträucher sind verschwunden."],
				specht: [
					"Der Specht musste den Baum wechseln.",
					"Er hat immer weniger Bäume zur Auswahl!",
					"Er und sein Mitbewohner haben das Eichhörnchen vertrieben."
				],
				eule_sad: [
					"Die Eule hat einen neuen Unterschlupf gefunden!",
					"Es gibt zu wenig gesunde Bäume zum Wohnen.",
					"Sie und ihr Mitbewohner haben das Eichhörnchen vertrieben."
				]
			};
			
			window.zusammenfassung = [
				"Wow! Gut beobachtet!",
				"Zu viele Rehe fressen alle jungen Bäume und Pflanzen.",
				"So kann der Wald nicht nachwachsen.",
				"Es gibt nicht genug Bäume zum Wohnen.",
				"Darum haben Specht und Eule den Baum des Eichhörnchens besetzt.", 
				"Zum nächsten Level?"
			];
		</script>
		
		<!-- Level JavaScript -->
		<script src="/include/level.js"></script>
	</body>
</html>
