<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Levelauswahl</title>
		
		<!-- Sidebar & Navigation -->
		<link rel="stylesheet" href="/include/header.css">
		
		<style>
			.start-btn {
				margin-bottom: 0px;
				padding: 20px 40px;
				background-color: #3cb371;
				color: white;
				font-size: 28px;
				font-weight: bold;
				border: none;
				border-radius: 16px;
				cursor: pointer;
				transition: background-color 0.3s ease;
				box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
			}
			.start-btn:hover {
				background-color: #2e8b57;
			}
			.level-grid {
				display: grid;
				grid-template-columns: repeat(2, 1fr);
				gap: 40px;
				margin: 40px 0;
				justify-content: center;
			} /* Quelle: https://developer.mozilla.org/en-US/docs/Web/CSS/grid-template-columns */
			.level-tile {
				padding: 8px;
				display: flex;
				align-items: center;
				justify-content: center;
				font-size: 30px;
				font-weight: bold;
				border-radius: 40px;
				text-decoration: none;
				color: white;
				background-color: #2f4f4f;
				transition: background-color 0.3s;
				width: 100%;
				aspect-ratio: 1 / 1;
				pointer-events: none;
				opacity: 0.4;
				font-family: 'Baloo 2', cursive;
				box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
			}
			.level-tile.active {
				pointer-events: auto;
				opacity: 1;
				background-color: #3cb371;
				cursor: pointer;
			}
			.level-tile.active:hover {
				background-color: #369d60;
			} /* Quelle: https://developer.mozilla.org/en-US/docs/Web/CSS/pointer-events */
			#reset-btn {
				margin-top: 30px;
				padding: 12px 28px;
				background-color: #d9534f;
				color: white;
				border: none;
				border-radius: 12px;
				font-size: 20px;
				cursor: pointer;
				box-shadow: 0 4px 8px rgba(0,0,0,0.3);
				font-family: 'Baloo 2', cursive;
			}
			#reset-btn:hover {
				background-color: #c9302c;
			} 
			.level-tile.completed {
				background-color: #2c9c5f;
				position: relative;
			}
			
			/* === Modal / Hinweis === */
			.modal {
				position: fixed;
				z-index: 9999;
				left: 0; top: 0;
				width: 100%; height: 100%;
				background-color: rgba(0,0,0,0.5);
				display: none;
				align-items: center;
				justify-content: center;
			} /* Quelle: https://developer.mozilla.org/en-US/docs/Web/CSS/position */
			.modal-content {
				background: #fff;
				padding: 30px;
				border-radius: 14px;
				box-shadow: 0 6px 16px rgba(0,0,0,0.3);
				max-width: 400px;
				width: 90%;
				font-family: 'Baloo 2', cursive;
				text-align: center;
				color: #222;
			}
			.modal-buttons {
				margin-top: 20px;
				display: flex;
				gap: 20px;
				justify-content: center;
			}
			.modal-buttons button {
				font-family: 'Baloo 2', cursive;
				font-size: 18px;
				padding: 10px 20px;
				border-radius: 10px;
				border: none;
				cursor: pointer;
				box-shadow: 0 2px 6px rgba(0,0,0,0.2);
			}
			#confirmJa {
				background-color: #d9534f;
				color: white;
			}
			#confirmAbbrechen {
				background-color: #ccc;
				color: #222;
			}
			#confirmJa:hover {
				background-color: #c9302c;
			}
			#confirmAbbrechen:hover {
				background-color: #bbb;
			}
			@media (min-width: 1024px) {
				.level-grid {
					grid-template-columns: repeat(4, 1fr);
				} /* Quelle: https://developer.mozilla.org/en-US/docs/Web/CSS/@media */
			}
			@media (max-width: 768px) {
				.level-grid {
					grid-template-columns: repeat(2, 1fr);
					gap: 30px;
				}
				.level-tile {
					font-size: 30px;
				}
				.start-btn {
					font-size: 24px;
					padding: 16px 32px;
				}
			}
		</style>
	</head>
	<body>
		
        <!-- Sidebar & Navigation -->
        <?php include('../include/header.php'); ?>
		
		<main>
			<h1>Wähle ein Level</h1>
			
			<button class="start-btn" onclick="startSpiel()">🎮 Level starten</button>
			<div class="level-grid" id="levelGrid"></div>
			<button id="reset-btn" onclick="resetSpiel()">🔄 Neu beginnen</button>
		</main>
		
		<!-- Modal / Hinweis -->
		<div id="confirmModal" class="modal">
			
			<div class="modal-content">
				<p>Willst du wirklich neu beginnen? Dein Fortschritt wird gelöscht.</p>
				<div class="modal-buttons">
					<button id="confirmJa">Ja, löschen</button>
					<button id="confirmAbbrechen">Abbrechen</button>
				</div>
			</div>
		</div>
		<script>
			const grid = document.getElementById("levelGrid");
			const totalLevels = 8;
			
			for (let i = 1; i <= totalLevels; i++) {
				const tile = document.createElement("a");
				const levelKey = `level${i}done`;
				const unlocked = i === 1 || localStorage.getItem(`level${i - 1}done`) === "true";
				const completed = localStorage.getItem(levelKey) === "true";
				
				tile.classList.add("level-tile");
				tile.href = `/kinder/spielen/level${i}.php`;
				tile.innerText = completed ? `✔ Level ${i}` : `Level ${i}`;
				if (unlocked) tile.classList.add("active");
				if (completed) tile.classList.add("completed");
				grid.appendChild(tile);
			} // Quelle: https://developer.mozilla.org/en-US/docs/Web/API/Document/createElement // https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage // https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild

			
			function resetSpiel() {
				document.getElementById("confirmModal").style.display = "flex";
			} // Quelle: https://developer.mozilla.org/en-US/docs/Web/CSS/display
			document.getElementById("confirmJa").addEventListener("click", () => {
				localStorage.clear();
				location.reload();
			});// Quelle: https://developer.mozilla.org/en-US/docs/Web/API/Storage/clear // https://developer.mozilla.org/en-US/docs/Web/API/Location/reload
			document.getElementById("confirmAbbrechen").addEventListener("click", () => {
				document.getElementById("confirmModal").style.display = "none";
			});
			
			function startSpiel() {
				const totalLevels = 8;
				let lastUnlockedLevel = 1;
				for (let i = 2; i <= totalLevels; i++) {
					if (localStorage.getItem(`level${i - 1}done`) === "true") {
						lastUnlockedLevel = i;
					} else {
						break;
					}
				}
				window.location.href = `/kinder/spielen/level${lastUnlockedLevel}.php`;
			}
		</script>
        
        <!-- Sidebar & Navigation -->
		<script src="/include/header.js"></script>
        
	</body>
</html>