<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="/project_fieldtrip/css/index.css">
</head>
<body>
    <nav class="navbar">
      <div class="nav-container">
        <a href="#" class="nav-logo">
          <span class="emoji">🦧</span>OrangUtan<span>Haven</span>
    </a>
    
    <ul class="nav-links">
      <li><a href="#konservasi">Pendataan</a></li>
      <li><a href="/project_fieldtrip/public/uji_kompetensi.php" class="btn-cta">Uji Kompetensi</a></li>
    </ul>
  </div>
</nav>

<div class="pendataan">
  <?php
    require '../app/db/connection.php';
    require '../app/controllers/showController.php';
    require '../app/models/show.php';

    $controller = new showController();
    $controller->show();
  ?>
</div>

<footer class="footer">
  <div class="footer-content">
    <p>&copy; 2026 <strong>OrangUtan</strong>. Wild, Wise, Wanderer.</p>
    <div class="footer-socials">
      <a href="#">Instagram</a>
      <a href="#">Twitter</a>
      <a href="#">Kontak</a>
    </div>
  </div>
</footer>
</body>
</html>