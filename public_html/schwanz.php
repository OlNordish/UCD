<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header Scroll Test</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
    }

    #header {
      background: #2f4f4f;
      color: white;
      padding: 20px;
      font-size: 1.5rem;
      position: relative;
      transition: transform 0.3s ease;
      z-index: 999;
    }

    .content {
      height: 3000px;
      background: linear-gradient(white, lightgray);
      padding-top: 80px;
    }
  </style>
</head>
<body>

  <div id="header">Ich bin der Header</div>
  <div class="content">Scroll mich runter...</div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const header = document.getElementById("header");
      let lastScroll = window.scrollY;

      window.addEventListener("scroll", () => {
        const currentScroll = window.scrollY;

        if (currentScroll > lastScroll && currentScroll > 50) {
          header.style.transform = "translateY(-100%)";
        } else {
          header.style.transform = "translateY(0)";
        }

        lastScroll = currentScroll;
      });
    });
  </script>
</body>
</html>
