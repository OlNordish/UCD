<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bastelvorlagen – Übersicht</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      background-color: #8fbc8f;
    }

    nav {
      background-color: #2f4f4f;
      color: white;
      padding: 10px 20px;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      z-index: 10;
    }

    .nav-logo {
      text-align: center;
      font-weight: bold;
      font-size: 20px;
    }

    main {
      padding: 100px 40px 40px 40px;
      max-width: 800px;
      margin: auto;
    }

    h1 {
      margin-bottom: 20px;
    }

		.theme-grid {
	  display: grid;
	  grid-template-columns: 1fr 1fr;
	  gap: 40px;
	  margin-top: 30px;
	}

	.theme-card {
	  border-radius: 10px;
	  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
	  padding: 20px;
	  text-align: center;
	  transition: transform 0.2s ease;
	  color: #333;
	}

	.theme-card:hover {
	  transform: scale(1.03);
	}

	.theme-card h3 {
	  margin-bottom: 10px;
	}

	.theme-card a {
	  display: inline-block;
	  margin-top: 10px;
	  background-color: #3cb371;
	  color: white;
	  text-decoration: none;
	  padding: 10px 16px;
	  border-radius: 6px;
	}

	.theme-card a:hover {
	  background-color: #2e8b57;
	}

	/* Farbliche Differenzierung */
	.theme-tiere {
	  background-color: #eafbe0;
	}

	.theme-pflanzen {
	  background-color: #dff0e1;
	}

	.theme-umweltschutz {
	  background-color: #f0f9ea;
	}

	.theme-jahreszeiten {
	  background-color: #f3f3da;
	}

  </style>
</head>
<body>

  <!-- Navigation -->
  <nav>
    <div class="nav-logo">Bastelvorlagen für Eltern</div>
  </nav>

  <!-- Hauptinhalt -->
  <main>
    <h1>Wählen Sie eine Themenwelt</h1>
    <p>Hier finden Sie kindgerechte Bastelvorlagen zum Ausdrucken und Entdecken – sortiert nach spannenden Themenwelten.</p>

    <div class="theme-grid">
      <div class="theme-card">
        <h3>Tiere des Waldes</h3>
        <p>Masken und Figuren zum Ausschneiden und Basteln.</p>
        <a href="bastelvorlagen/tiere.php">Ansehen</a>
      </div>
      <div class="theme-card">
        <h3>Bäume und Pflanzen</h3>
        <p>Blätterdruck, Bastelbäume &amp; mehr rund um das Waldgrün.</p>
        <a href="bastelvorlagen/pflanzen.php">Ansehen</a>
      </div>
      <div class="theme-card">
        <h3>Umweltschutz</h3>
        <p>Kreatives Lernen über Müll, Recycling und den Wald als Lebensraum.</p>
        <a href="bastelvorlagen/umweltschutz.php">Ansehen</a>
      </div>
      <div class="theme-card">
        <h3>Jahreszeiten und Wetter</h3>
        <p>Frühling, Sommer, Herbst und Winter zum Ausmalen und Basteln.</p>
        <a href="bastelvorlagen/jahreszeiten.php">Ansehen</a>
      </div>
    </div>
  </main>

</body>
</html>
