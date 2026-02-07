<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image" href="../assets/stockpro copie.svg">
  <link rel="stylesheet" href="../assets/style/accueil.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>StockPro</title>
  <meta name="description" content="Découvrez les dernières tendances mode pour hommes, femmes et enfants. Livraison rapide à Antananarivo et partout à Madagascar."/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
 
</head>
<body>

  <!-- Top promo bar -->
  <!-- <div class="top-bar">
    Livraison gratuite à Tana dès 150 000 Ar • -15% sur votre première commande avec le code BIENVENUE
  </div> -->

  <!-- Navigation -->
  <?php require_once  '../includes/header.php'; ?>
  <!-- Hero -->
  <section class="hero">
    <div class="hero-content">
      <h1>Style & Élégance Malgache</h1>
      <p>Découvrez notre nouvelle collection printemps-été 2026 – pièces uniques, tissus de qualité, conçues pour vous.</p>
      <a href="/boutique" class="btn">Découvrir la collection</a>
    </div>
  </section>

  <!-- Nouveautés -->
  <section>
    <h2>Nouveautés</h2>
    <div class="grid">
      <div class="product-card">
        <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1621072156002-e2fccdc0b176?w=500')"></div>
        <div class="product-info">
          <h3>Chemise home classique </h3>
          <p class="price">68 000 Ar</p>
        </div>
      </div>
      <!-- 5–7 cartes similaires -->
      <div class="product-card">
        <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?w=500')"></div>
        <div class="product-info">
          <h3>Chemise homme lin</h3>
          <p class="price">52 000 Ar</p>
        </div>
      </div>
      <!-- Ajoute 4–5 autres produits ici -->
    </div>
  </section>

  <!-- Promotions -->
  <section style="background:#fff; padding:100px 20px;">
    <h2>Promotions – Jusqu’à -40%</h2>
    <div class="grid">
      <img src="assets/stockpro copie.svg" alt="">
      <!-- cartes promo -->
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-links">
      <a href="./commandes.php">Livraison & Retours</a>
      <a href="/contact">Contact</a>
      <a href="/cgv">Conditions Générales</a>
      <a href="/mentions-legales">Mentions légales</a>
      <a href="/confidentialite">Confidentialité</a>
    </div>
    <p>© 2026 MaBoutique – Antananarivo, Madagascar</p>
  </footer>

</body>
</html>