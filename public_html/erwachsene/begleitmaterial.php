<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Wald erleben – Gemeinsam</title>
		
		<!-- Sidebar & Navigation -->
		<link rel="stylesheet" href="/include/header.css">
		
		<style>
			p.intro {
				font-size: 1.2rem;
				text-align: center;
				margin-bottom: 2.5rem;
				color: #4A4A4A;
			}
			.entry-grid {
				display: flex;
				flex-direction: column;
				gap: 2rem;
				max-width: 800px;
				margin: 0 auto;
			}
			.entry-box {
				display: grid;
				grid-template-columns: auto 1fr;
				gap: 1.5rem;
				align-items: center;
				background-color: rgba(255, 255, 255, 0.95);
				color: #333;
				border-radius: 12px;
				box-shadow: 0 4px 12px rgba(0,0,0,0.3);
				padding: 1.5rem;
			}
			.entry-icon {
				width: 80px;
				height: 80px;
				object-fit: contain;
				background: #f0f0f0;
				border-radius: 8px;
				box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25);
			}
			.entry-content h2 {
				font-size: 1.4rem;
				margin: 0 0 0.5rem;
				color: #5A3E36;
			}
			.entry-content p {
				margin: 0 0 0.75rem;
				color: #3C3C3C;
			}
			.entry-content a {
				color: #4A6D4F;
				font-weight: bold;
				text-decoration: none;
			}
			.entry-content a:hover {
				text-decoration: underline;
				color: #365539;
			}
		</style>
	</head>
	<body>
		
		<!-- Sidebar & Navigation -->
		<?php include(__DIR__ . '/../include/header.php'); ?> <!-- Quelle: https://www.devrobot.de/how-to-include-der-beste-weg-dateien-in-php-einzubinden/ -->
		
		<main>
			<h1>🌲 Gemeinsam mit Ihrem kleinen Grashüpfer!</h1>
			<p class="intro">Waldwissen vertiefen, kreativ werden, weitergeben – Materialien und Tipps für Eltern, Lehrkräfte &amp; Interessierte.</p>
			<div class="entry-grid">
				<div class="entry-box">
					<img src="/downloads/medientipps.png" alt="Icon Medientipps" class="entry-icon" />
					<div class="entry-content">
						<h2>Medientipps für Kinder</h2>
						<p>Bücher, Videos, Hörspiele &amp; Spiele – kindgerecht erklärt für Eltern und Pädagog:innen zusammengestellt.</p>
						<a href="medientipps.php">Zu den Medientipps</a>
					</div>
				</div>
				<div class="entry-box">
					<img src="/downloads/bastelvorlagen.png" alt="Icon Bastelvorlagen" class="entry-icon" />
					<div class="entry-content">
						<h2>Bastelideen zum Thema Wald</h2>
						<p>Jahreszeiten, Tiere, Umweltschutz – kreative Vorlagen zum Herunterladen und Loslegen.</p>
						<a href="bastelvorlagen.php">Zu den Bastelvorlagen</a>
					</div>
				</div>
			</div>
		</main>
		<!-- Sidebar & Navigation -->
		<script src="/include/header.js"></script>
	</body>
</html>