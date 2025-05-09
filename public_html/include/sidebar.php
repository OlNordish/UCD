<!doctype html>
<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">
  <section>
    <h3>Erwachsene</h3>
    <a href="/erwachsene/bastelvorlagen.php">Bastelvorlagen</a>
    <a href="/erwachsene/medientipps.php">Medientipps</a>
  </section>
  <section>
    <h3>Kinder</h3>
    <a href="/kinder/entdecken.html">Entdecken</a>
    <a href="/kinder/spielen.html">Spielen</a>
    <a href="/kinder/quiz.html">Quiz</a>
  </section>
</div>

<!-- OVERLAY -->
<div id="overlay" onclick="toggleSidebar()"></div>

<script>
  function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    sidebar.classList.toggle("active");
    overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";
  }
</script>