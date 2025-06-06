<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Videos &amp; Filme</title>
        
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
            <?php include('../../include/header.php'); ?>

            <main>
            <h1>🎬 Videos über den Wald</h1>
            <p class="intro">Spannende Filme &amp; Clips für Kinder über Tiere, Pflanzen und das Leben im Wald – kostenlos und kindgerecht erzählt.</p>

            <article class="entry-box">
                <img src="../../downloads/Medientipps_Videos/br.png" alt="Logo BR" class="entry-icon" />
                <div class="entry-content">
                    <h2>Anna und die wilden Tiere – Der Wald und seine Bewohner</h2>
                    <p>Reportagen mit echten Tieren, spannend erzählt.</p>
                    <a href="https://www.ardmediathek.de/sendung/anna-und-der-wilde-wald/Y3JpZDovL2JyLmRlL2Jyb2FkY2FzdFNlcmllcy9hbm5hLXVuZC1kZXItd2lsZGUtd2FsZA" target="_blank">In der ARD-Mediathek ansehen</a>
                </div>
            </article>

            <article class="entry-box">
                <img src="../../downloads/Medientipps_Videos/kika.png" alt="Logo KiKa" class="entry-icon" />
                <div class="entry-content">
                    <h2>Wissen macht Ah!: Ab in den Wald!</h2>
                    <p>Spannendes aus dem Wald – von Baumwipfeln bis Wurzelwerk.</p>
                    <a href="https://kinder.wdr.de/tv/wissen-macht-ah/av/video-ab-in-den-wald-100.html" target="_blank">Video ansehen</a>
                </div>
            </article>

            <article class="entry-box">
                <img src="../../downloads/Medientipps_Videos/ardalpha.png" alt="Logo ARD alpha" class="entry-icon" />
                <div class="entry-content">
                    <h2>Lebensgemeinschaft Wald</h2>
                    <p>Einblick in das komplexe Ökosystem des Waldes.</p>
                    <a href="https://www.ardmediathek.de/video/schulfernsehen/lebensgemeinschaft-wald/ard-alpha/Y3JpZDovL2JyLmRlL2Jyb2FkY2FzdC9GMjAxN1dPMDI3MTQ1QTA" target="_blank">ARD alpha ansehen</a>
                </div>
            </article>

            <article class="entry-box">
                <img src="../../downloads/Medientipps_Videos/terrax.jpg" alt="Logo Terra X" class="entry-icon" />
                <div class="entry-content">
                    <h2>Unsere Wälder</h2>
                    <p>Wie Bäume miteinander kommunizieren – erklärt mit beeindruckenden Bildern.</p>
                    <a href="https://www.zdf.de/dokus/unsere-waelder-108" target="_blank">Zur Terra X-Doku</a>
                </div>
            </article>

            <article class="entry-box">
                <img src="../../downloads/Medientipps_Videos/wdr.jpg" alt="Logo WDR" class="entry-icon" />
                <div class="entry-content">
                    <h2>Die Maus: Wer lebt unter einem Stein im Wald?</h2>
                    <p>Entdecke mit der Maus eine verborgene Welt unter einem Stein!</p>
                    <a href="https://kinder.wdr.de/video-was-lebt-unter-einem-stein-im-wald-100.html" target="_blank">Zur Sendung</a>
                </div>
            </article>
        </main>
        
        <!-- Sidebar & Navigation -->
        <script src="../../include/header.js"></script>
        
    </body>
</html>