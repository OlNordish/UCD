<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Tiere des Waldes</title>
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
            <h1>🦊 Tiere des Waldes</h1>
            <p class="intro">Spannende Bastelideen rund um Reh, Fuchs, Eule &amp; Co.</p>

            <article class="entry-box">
                <img src="../../downloads/bastelvorlagen/Bastelvorlage_1.png" alt="Origami-Fuchs" class="entry-icon">
                <div class="entry-content">
                    <h2>Origami-Fuchs falten</h2>
                    <p>Bastele den cleveren Waldbewohner aus nur einem Blatt Papier und einem Stift.</p>
                    <a href="../../downloads/fuchs.pdf" download>PDF herunterladen</a>
                </div>
            </article>

            <article class="entry-box">
                <img src="../../downloads/bastelvorlagen/Bastelvorlage_2.png" alt="Kastanienfiguren" class="entry-icon">
                <div class="entry-content">
                    <h2>Kastanienfiguren basteln</h2>
                    <p>Gestalte Tiere und Fantasiewesen aus kleinen Waldschätzen.</p>
                    <a href="../../downloads/kastanienfiguren.pdf" download>PDF herunterladen</a>
                </div>
            </article>

            <article class="entry-box">
                <img src="../../downloads/bastelvorlagen/Bastelvorlage_3.png" alt="Eule basteln" class="entry-icon">
                <div class="entry-content">
                    <h2>Eule aus Pappteller basteln</h2>
                    <p>Deine eigene Wald-Eule – einfach, bunt und zum Aufhängen.</p>
                    <a href="../../downloads/eule.pdf" download>PDF herunterladen</a>
                </div>
            </article>

            <article class="entry-box">
                <img src="../../downloads/bastelvorlagen/Bastelvorlage_4.png" alt="Waldtiere aus Klorollen" class="entry-icon">
                <div class="entry-content">
                    <h2>Waldtiere aus Klorollen basteln</h2>
                    <p>Fuchs, Igel &amp; Eichhörnchen ganz einfach selber machen – mit Rollen, Papier &amp; Naturmaterialien.</p>
                    <a href="../../downloads/igel.pdf" download>PDF herunterladen</a>
                <div>
            </article>

            <article class="entry-box">
                <img src="../../downloads/bastelvorlagen/Bastelvorlage_5.png" alt="Papier-Vogel basteln" class="entry-icon">
                <div class="entry-content">
                    <h2>Fliegender Papier-Vogel</h2>
                    <p>Ein bunter Vogel aus Papier, der mit Wind sogar flattern kann – bastel dir deinen eigenen Himmelsfreund!</p>
                    <a href="../../downloads/vogel.pdf" download>PDF herunterladen</a>
                </div>
            </article>
        </main>
        <!-- Sidebar & Navigation -->
        <script src="../../include/header.js"></script>
    </body>
</html>