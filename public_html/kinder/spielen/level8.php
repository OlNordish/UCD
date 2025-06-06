<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Level 8</title>
		<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
		
		<!-- Level CSS -->
		<link rel="stylesheet" href="/include/level.css"/>
        
	</head>
	<body class="level-page">
		<div id="waldszene">
			<div id="counter">0 / 3 Veränderungen entdeckt</div>
			
			<!-- Ansteuerung der SVG -->
			<?php include('../../bilder/level8.svg');?>
			
			<a id="zurueck-btn" href="/kinder/spielen.php">← Zurück</a>
			<div id="sprechblase-container">
				<div id="sprechblase">
					<p id="textfeld">Lade...</p>
					<div class="pfeile">
						<button class="pfeil" id="prev" disabled>&larr;</button>
						<button class="pfeil" id="next" disabled>&rarr;</button>
					</div>
					<div class="level-buttons" id="level-buttons">
						<a href="abschluss.php" class="weiter-btn">Ja, weiter!</a>
						<a href="/kinder/spielen.php" class="zurueck-btn">Zurück zur Übersicht</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			window.erwartet = 3;
			window.levelDoneKey = "level8done";
			window.klickbareElemente = ["nagetiere", "reh_sad", "junge_baeume_kaputt"];
			
			window.levelEinleitung = [
				"Stell dir vor, ich wäre nicht mehr hier…",
				"Was würde im Wald passieren?",
				"Ein Tier ist besonders traurig – aber wer?",
				"Klicke in den Wald, wenn du alles gefunden hast!"
			];
			
			window.veränderungstexte = {
				nagetiere: [
					"Überall Mäuse und Kaninchen!",
					"Niemand hält sie so gut im Zaum wie ich.",
					"Es sind so viele! Ob die genug Essen finden?"
				],
				junge_baeume_kaputt: [
					"Die Mäuse haben alle jungen Bäume angenagt.",
					"Auch die Kaninchen nagen an ihnen.",
					"So können die Bäume nicht groß werden."
				],
				reh_sad: [
					"Das Reh sieht hungrig aus!",
					"Es wachsen nicht genug Sträucher und Pflanzen.",
					"Auch die Blumen sind alle weg."
				]
			};
			
			window.zusammenfassung = [
				"Alles entdeckt!",
				"Wenn ich fehle, haben die Mäuse und Kaninchen die Kontrolle.",
				"Sie suchen nach Essen und machen junge Bäume kaputt!",
				"So gibt es auch für das Reh nichts mehr zu fressen.",
				"Weiter zur Übersicht?"
			];
		</script>
		
		<!-- Level JavaScript -->
		<script src="/include/level.js"></script>
        
	</body>
</html>