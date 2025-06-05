<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title>Waldzeit – Startseite</title>
		
		<!-- Sidebar & Navigation -->
		<link rel="stylesheet" href="/include/header.css">
		
		<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&family=Fredoka:wght@400;500&family=Nunito&display=swap" rel="stylesheet">
		
		<style>
			.intro-section {
				text-align: center;
				margin: 1.5rem auto;
			}
			.intro-section h1 {
				font-size: 2.5rem;
				color: #fff;
				text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
				margin-bottom: 1rem;
			}
			.intro-section p {
				font-size: 1.2rem;
				max-width: 700px;
				margin: 1rem auto 0;
				background: rgba(255, 255, 255, 0.2);
				padding: 1rem 1.5rem;
				border-radius: 12px;
			}
			.kinderbereich {
				display: flex;
				flex-direction: column;
				align-items: center;
				margin: 2rem 0;
			}
			.kinderbereich img {
				width: 200px;
				margin-bottom: 1rem;
			}
			.kinderbereich h2 {
				font-size: 2rem;
				color: #fff;
				text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
				margin-bottom: 1rem;
			}
			.button-links {
				display: flex;
				flex-direction: row;
				flex-wrap: nowrap;
				justify-content: center; /* Quelle: https://wiki.selfhtml.org/wiki/CSS/Eigenschaften/justify-content */
				align-items: center;
				gap: 1rem;
				max-width: 90%;
				flex-shrink: 0; /* Quelle: https://developer.mozilla.org/de/docs/Web/CSS/flex-shrink */
			}
			.button-links a {
				background-color: #4A6D4F;
				color: white;
				text-decoration: none;
				padding: 0.8rem 1.4rem;
				border-radius: 12px;
				font-size: 1rem;
				font-weight: bold;
				transition: transform 0.2s ease, background-color 0.3s ease;
				white-space: nowrap; /* Quelle: https://wiki.selfhtml.org/wiki/CSS/Eigenschaften/white-space */ 
			}
			.button-links a:hover {
				background-color: #365539;
				transform: scale(1.05);
			}
			.elternbereich {
				max-width: 700px;
				margin: 4rem auto;
				padding: 2rem;
				background: rgba(255, 255, 255, 0.95);
				border-radius: 16px;
				box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
			}
			.elternbereich h3 {
				font-size: 1.5rem;
				font-family: 'Fredoka', sans-serif;
				color: #3a3a3a;
			}
			.elternbereich p {
				font-size: 1rem;
				line-height: 1.6;
				color: #444;
			}
			.elternbereich a {
				display: inline-block;
				margin-top: 1rem;
				color: #2f4f4f;
				font-weight: bold;
				text-decoration: underline; /* Quelle: https://wiki.selfhtml.org/wiki/CSS/Eigenschaften/text-decoration */
			}
			.elternbereich a:hover {
				text-decoration: none;
			}
		</style>
	</head>
	<body>
		
		<!-- Sidebar & Navigation -->
		<?php include(__DIR__ . '/include/header.php'); ?> <!-- Quelle: https://www.devrobot.de/how-to-include-der-beste-weg-dateien-in-php-einzubinden/ -->
		
		<main>
			<section class="intro-section">
				<h1>🌳 Willkommen bei Waldzeit!</h1>
				<p>Entdecke den Wald spielerisch – mit spannenden Inhalten für Kinder, Eltern und alle Naturentdecker:in.</p></section>
			
			<section class="kinderbereich">
				<img src="/downloads/index.png" alt="Wald Illustration mit Mutter, Sohn und Fuchs">
				<h2>Kinderbereich</h2>
				<div class="button-links">
					<a href="/kinder/entdecken.php">🔍 Auf Spurensuche</a>
					<a href="/kinder/aufraeumen.php">🧹 Saubere Sache!</a>
					<a href="/kinder/spielen.php">🎲 Walddetektiv:in</a>
				</div>
			</section>
		</main>
		
		<section class="elternbereich">
			<h3>👨‍👩‍👧 Elternbereich</h3>
			<p>Dieser Bereich richtet sich an alle, die Kinder beim Entdecken des Waldes begleiten. Ob zu Hause oder draußen: Hier finden Erwachsene Anregungen, um Themen zu vertiefen und das Naturerlebnis gemeinsam zu gestalten.</p>
			<p>Von Mal- und Bastelvorlagen über Medientipps bis hin zu pädagogischen Ideen – das Begleitmaterial lädt dazu ein, spielerisch Umweltbewusstsein zu fördern und mit allen Sinnen in den Wald einzutauchen.</p>
			<a href="/erwachsene/begleitmaterial.php">Begleitmaterial öffnen</a>
		</section>
		
		<!-- Sidebar & Navigation -->
		<script src="/include/header.js"></script>
	</body>
</html>