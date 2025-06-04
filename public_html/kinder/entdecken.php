<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Entdecken</title>
		<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
		
		<!-- Level CSS -->
		<link rel="stylesheet" href="/include/level.css" />
		
		<style>
			body.level-page {
				margin: 0;
				font-family: 'Baloo 2', cursive;
				background-color: #22724E !important;
				color: #fff !important;
			}
			#waldszene {
				width: 100%;
				max-height: calc(100vh - 60px);
				position: relative;
			}
			svg {
				width: 100%;
				height: auto;
				display: block;
			} /* Quelle: https://developer.mozilla.org/en-US/docs/Web/SVG/Element/svg */
			#sprechblase-container {
				position: absolute;
				bottom: 2%;
				right: 15%;
				z-index: 100;
				pointer-events: none;
			}
			#sprechblase {
				background: rgba(255, 249, 196, 0.5);
				backdrop-filter: blur(12px);
				-webkit-backdrop-filter: blur(12px);
				padding: 20px 24px;
				border-radius: 20px;
				width: 360px;
				height: 160px;
				font-size: 28px;
				color: #222;
				box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
				line-height: 1.5;
				overflow: hidden;
				position: relative;
				font-family: 'Baloo 2', sans-serif;
				pointer-events: auto;
				z-index: 110;
			}
			#sprechblase p {
				font-family: 'Baloo 2', sans-serif !important;
				font-size: 28px !important;color: #222;
				margin: 0;
			}
			.pfeile {
				position: absolute;
				bottom: 10px;
				right: 10px;
				display: flex;
				gap: 10px;
			}
			.pfeil {
				background: #ffeb3b;
				border: none;
				border-radius: 50%;
				font-size: 20px;
				width: 32px;
				height: 32px;
				cursor: pointer; /* Quelle: https://developer.mozilla.org/en-US/docs/Web/CSS/cursor */
				display: flex;
				align-items: center;
				justify-content: center;
				box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
			}
			.pfeil:disabled {
				opacity: 0.4;
				cursor: default;
			}
			.level-buttons {
				margin-top: 8px;
				display: flex;
				justify-content: flex-end;
				gap: 10px;
				flex-wrap: wrap;
			}
			.level-buttons a {
				padding: 6px 12px;
				border-radius: 8px;
				font-weight: bold;
				font-size: 18px;
				text-decoration: none;
				white-space: nowrap;
				max-width: 48%;
				text-align: center;
				flex: 1 1 auto;
			}
			.weiter-btn {
				background: #ffeb3b;
				color: #222;
			}
			.zurueck-btn {
				background: #ccc;
				color: #222;
			}
			g.active {
				filter: drop-shadow(0 0 10px yellow);
				transform: scale(1.1);
				transform-box: fill-box;
				transform-origin: center;
				transition: transform 0.3s ease;
			} /* Quelle: https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/transform-box */
			#counter {
				position: absolute;
				top: 10px;
				right: 20px;
				background: rgba(255, 255, 255, 0.2);
				padding: 10px 16px;
				border-radius: 10px;
				font-size: 20px;
				z-index: 200;
				pointer-events: none;
			}
			#audio-status {
				position: absolute;
				top: 10px;
				right: 250px;
				background: rgba(255, 255, 255, 0.2);
				padding: 8px 16px;
				border-radius: 10px;
				font-size: 20px;
				color: #222;
				display: flex;
				align-items: center;
				gap: 12px;
				z-index: 200;
				pointer-events: auto;
				color: white;
			}
			#audio-status .audio-label {
				font-weight: bold;
				font-size: 16px;
			}
			#audio-status #play-audio {
				background: #ffeb3b;
				border: none;
				border-radius: 50%;
				font-size: 18px;
				width: 36px;
				height: 36px;
				cursor: pointer;
				display: flex;
				align-items: center;
				justify-content: center;
				box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
			}
			#audio-status #volume-control {
				width: 80px;
				accent-color: #C26A00;
				cursor: pointer;
			}
			@keyframes pulse {
				0% { transform: scale(1); background-color: rgba(255,255,255,0.2); }
				50% { transform: scale(1.2); background-color: rgba(255,255,255,0.5); }
				100% { transform: scale(1); background-color: rgba(255,255,255,0.2); }
			}
			#counter.pulse {
				animation: pulse 0.5s ease;
			}
			@keyframes wackeln {
				0%, 100% { transform: rotate(0deg); }
				25% { transform: rotate(2deg); }
				75% { transform: rotate(-2deg); }
			}
			g.wackel {
				transform-box: fill-box;
				transform-origin: center;
				animation: wackeln 0.6s ease;
			}
			#zurueck-btn {
				position: absolute;
				top: 10px;
				left: 20px;
				background: rgba(255,255,255,0.2);
				padding: 10px 16px;
				border-radius: 10px;
				font-size: 20px;
				color: white;
				text-decoration: none;
				z-index: 90;
				pointer-events: auto;
				transition: background 0.3s ease;
			}
			#zurueck-btn:hover {
				background: rgba(255,255,255,0.35);
			}
			#fuchs_happy {
				display: none;
			}
		</style>
	</head>
	<body class="level-page">
		<div id="waldszene">
			<div id="audio-status">
				<span class="audio-label">Tierstimmen</span>
				
				<button id="play-audio">▶</button>
				<input id="volume-control" type="range" min="0" max="1" step="0.01" value="0.6" />
			</div>
			<div id="counter">0 / 9 Tiere entdeckt</div>
			
			<!-- Ansteuerung der SVG -->
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/bilder/entdecken.svg'); ?>
			
			<a id="zurueck-btn" href="/kinder/fuchsbau.php">← Zurück</a>
			<div id="sprechblase-container">
				<div id="sprechblase">
					<p id="textfeld">Lade...</p>
					<div class="pfeile">
						<button class="pfeil" id="prev" disabled>&larr;</button>
						<button class="pfeil" id="next" disabled>&rarr;</button>
					</div>
					<div class="level-buttons" id="level-buttons">
						<a href="aufraeumen.php" class="weiter-btn">Ja, weiter!</a>
						<a href="/kinder/aufraeumen.php" class="zurueck-btn">Zurück zur Übersicht</a>
					</div>
				</div>
			</div
			</div>
				<script>
					window.erwartet = 9;
					window.klickbareElemente = ["maus", "eichhoernchen", "fuchs", "eule", "specht", "kaninchen", "reh", "wolf", "kaefer"];
					
					window.levelEinleitung = [
						"Hey du! Du bist neu hier... schau dich um!",
						"Ich bin der schlaue Fuchs.",
						"Willkommen im Wald!",
						"Dies ist mein Zuhause, aber ich bin hier nicht allein.",
						"Du kannst mit den anderen Waldbewohnern sprechen. Ich zeig dir wie:",
						"Klicke einfach auf das Tier mit dem du sprechen möchtest.",
						"Guck, hier! Fang mit mir an! Klick auf mich!"
					];
					window.veränderungstexte = {
						maus: ["Pieps! Ich bin die kleine Maus.", "Ich muss aufpassen vor Eule und Fuchs!"],
						eichhoernchen: ["Hallo, ich bin das Eichhörnchen!", "Ich liebe es, Nüsse zu futtern."],
						fuchs: ["Haha! Genau so!",
								"Du kannst die Lautstärke oben rechts ändern oder den Ton pausieren.",
								"Die anderen Tiere erzählen dir etwas über sich.",
								"Ich zuerst: Ich esse Mäuse und manchmal Beeren!",
								"Hast du alles entdeckt oder gelesen klicke einfach auf eine freie Fläche im Wald!"],
						eule: ["Huhuu! Ich bin die Eule.", "Ich jage nachts Mäuse und Frösche."],
						specht: ["Klopf, klopf – ich bin der Specht!", "Ich hacke mit meinem Schnabel Insekten aus Bäumen."],
						kaninchen: ["Hopp, hopp! Ich bin das flinke Kaninchen.", "Ich knabbere gerne Kräuter."],
						reh: ["Grüß dich! Ich bin das Reh!", "Ich mag frische Triebe."],
						wolf: ["Auuu! Ich bin der Wolf.", "Ich bin wichtig für das Gleichgewicht im Wald."],
						kaefer: ["Hallo, ich bin der Borkenkäfer!", "Ich knabbere gerne an Bäumen."]
					};
					window.zusammenfassung = [
						"Du hast alle Tiere entdeckt!",
						"Jeder hat seine Aufgabe hier im Wald.",
						"Aber was ist das? Oh nein...",
						"Menschen haben den Wald verschmutzt!",
						"Kannst du mir helfen?"
					];
					document.addEventListener("DOMContentLoaded", () => {
						const textfeld = document.getElementById("textfeld");
						const nextBtn = document.getElementById("next");
						const prevBtn = document.getElementById("prev");
						const counterBox = document.getElementById("counter");
						const buttonsContainer = document.getElementById("level-buttons");
						const audioBtn = document.getElementById("play-audio");
						const volumeSlider = document.getElementById("volume-control");
						const audio = new Audio(); 
						audio.volume = 1.0; // Quelle: https://developer.mozilla.org/en-US/docs/Web/API/HTMLAudioElement/Audio
						
						let aktuellerText = window.levelEinleitung;
						let aktuellerIndex = 0;
						const entdeckte = new Set();
						let inZusammenfassung = false;
						let bereitZurZusammenfassung = false;
						
						function zeigeText(index) {
							textfeld.innerHTML = aktuellerText[index];
							prevBtn.disabled = index === 0;
							nextBtn.disabled = index >= aktuellerText.length - 1;
							buttonsContainer.style.display = inZusammenfassung && index === aktuellerText.length - 1 ? "flex" : "none";
						}
						function zeigeVeränderung(id) {
							inZusammenfassung = false;
							aktuellerText = window.veränderungstexte[id] || ["Keine Infos."];
							aktuellerIndex = 0;
							zeigeText(0);
							
							document.querySelectorAll("g").forEach(g => g.classList.remove("active")); // Quelle: https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelectorAll
							const el = document.getElementById(id);
							if (el) el.classList.add("active");
							if (!entdeckte.has(id)) {
								entdeckte.add(id);
								counterBox.innerText = `${entdeckte.size} / ${window.erwartet} Tiere entdeckt`;
								counterBox.classList.remove("pulse");
								void counterBox.offsetWidth;
								counterBox.classList.add("pulse");
							}
							if (entdeckte.size === window.erwartet) {
								bereitZurZusammenfassung = true;
							}
							audio.src = `/audio/${id}.mp3`;
							audio.load();
							audio.play().then(() => {
								audioBtn.innerText = "⏸";
							}).catch((e) => {
								console.warn("Konnte Audio nicht abspielen", e);
							});
						}
						function zeigeZusammenfassung() {
							aktuellerText = window.zusammenfassung;
							aktuellerIndex = 0;
							inZusammenfassung = true;
							zeigeText(0);
						}
						
						nextBtn.addEventListener("click", () => {
							if (aktuellerIndex < aktuellerText.length - 1) {
								aktuellerIndex++;
								zeigeText(aktuellerIndex);
							}
						});
						prevBtn.addEventListener("click", () => {
							if (aktuellerIndex > 0) {
								aktuellerIndex--;
								zeigeText(aktuellerIndex);
							} 
						});
						
						(window.klickbareElemente || []).forEach(id => {
							const el = document.getElementById(id);
							if (el) {
								el.style.cursor = "pointer";
								el.addEventListener("click", e => {
									e.stopPropagation();
									zeigeVeränderung(id);
								});
							}
						});
						
						document.getElementById("waldszene").addEventListener("click", (e) => {
							const aufElement = e.target.closest("g"); // Quelle: https://developer.mozilla.org/en-US/docs/Web/API/Element/closest
							const aufBlase = e.target.closest("#sprechblase-container");
							if (!aufElement && !aufBlase) {
								document.querySelectorAll("g").forEach(g => g.classList.remove("active"));
								if (entdeckte.size === window.erwartet && bereitZurZusammenfassung && !inZusammenfassung) {
									bereitZurZusammenfassung = false;
									zeigeZusammenfassung();
								}
								if (!inZusammenfassung) {
									aktuellerText = window.levelEinleitung;
									aktuellerIndex = 0;
									zeigeText(0);
								}
							}
						});
						audioBtn.addEventListener("click", () => {
							if (audio.paused) {
								audio.play();
								audioBtn.innerText = "⏸";
							} else {
								audio.pause();
								audioBtn.innerText = "▶";
							}
						});
						volumeSlider.addEventListener("input", () => {
							audio.volume = parseFloat(volumeSlider.value);
						});
						zeigeText(0);
					});
				</script>
	</body>
</html>
