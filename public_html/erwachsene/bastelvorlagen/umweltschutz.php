<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Umweltschutz</title>
        <!-- Sidebar & Navigation -->
        <link rel="stylesheet" href="../../include/header.css">

        <style>
            p.intro {
                font-size: 1.2rem;
                text-align: center;
                margin-bottom: 2rem;
                color: #4A4A4A;
            }
            .entry-box {
                width: 90%;
                display: grid;
                grid-template-columns: auto 1fr;
                gap: 1rem;
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
                object-fit: cover;
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
            <?php include('../../include/header.php'); ?> <!-- Quelle: https://www.devrobot.de/how-to-include-der-beste-weg-dateien-in-php-einzubinden/ -->

            <main>
            <h1>🌍 Umweltschutz</h1>
            <p class="intro">Male oder bastle für die Natur: Umweltschutz und Nachhaltigkeit kindgerecht erklärt.</p>
                
            <article class="entry-box">
                <img src="../../downloads/bastelvorlagen/Bastelvorlage_9.png" alt="Umweltschutz malen" class="entry-icon">
                <div class="entry-content">
                    <h2>Malvorlage zum Umweltschutz</h2>
                    <p>Male bunte Bilder, die zeigen, wie wir unsere Natur schützen können!</p>
                <a href="../../downloads/umweltschutz.pdf" download>PDF herunterladen</a>
                </div>
            </article>
                
            <article class="entry-box">
                <img src="../../downloads/bastelvorlagen/Bastelvorlage_10.png" alt="Erde schützen malen" class="entry-icon">
                 <div class="entry-content">
                    <h2>Malvorlage: Die Erde schützen</h2>
                    <p>Gestalte tolle Bilder und lerne, wie wichtig der Schutz unserer Umwelt ist!</p>
                    <a href="../../downloads/erde.pdf" download>PDF herunterladen</a>
                </div>
            </article>
                
            <article class="entry-box">
                <img src="../../downloads/bastelvorlagen/Bastelvorlage_11.png" alt="Recycling ausmalen" class="entry-icon">
                <div class="entry-content">
                    <h2>Malvorlage zum Recycling</h2>
                    <p>Male die Erde und Recycling-Symbole bunt aus – für mehr Umweltbewusstsein beim Malen!</p>
                    <a href="../../downloads/recycling.pdf" download>PDF herunterladen</a>
                </div>
            </article>
        </main>
        <!-- Sidebar & Navigation -->
        <script src="../../include/header.js"></script>
    </body>
</html>