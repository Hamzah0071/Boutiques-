<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image" href="../assets/stockpro copie.svg">
  <link rel="stylesheet" href="../../../assets/style/accueil.css">
  <title>Détails Produit - StockPro</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <style>
    :root {
      --primary: #c8102e;
      --primary-dark: #a00d24;
      --dark: #1a1a1a;
      --gray: #555;
      --light: #f8f9fa;
      --border: #ddd;
    }

    /* Correction du padding-top pour ne pas que le header cache le contenu */
    body { 
        font-family: system-ui, -apple-system, sans-serif; 
        color: var(--dark); 
        background: white; 
        line-height: 1.6; 
        padding-top: 140px; /* Ajusté pour votre header-top + header-nav */
        margin: 0;
    }

    .container { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }
    
    .product-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
    
    .product-gallery img { width: 100%; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }

    .product-info h1 { font-size: 2.5rem; margin-bottom: 10px; }
    .category { color: var(--gray); text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; }
    .price-tag { font-size: 2rem; font-weight: 700; color: var(--primary); margin: 20px 0; }
    
    .description { margin-bottom: 30px; color: var(--gray); }

    .options { margin-bottom: 30px; }
    .options h4 { margin-bottom: 10px; }
    .size-picker { display: flex; gap: 10px; }
    .size-btn { padding: 10px 20px; border: 1px solid var(--border); border-radius: 6px; cursor: pointer; transition: 0.2s; }
    .size-btn:hover, .size-btn.active { border-color: var(--primary); color: var(--primary); }

    .actions { display: flex; gap: 20px; }
    .btn-add { flex: 1; padding: 16px; background: var(--primary); color: white; border: none; border-radius: 50px; font-weight: 600; cursor: pointer; transition: 0.3s; }
    .btn-add:hover { background: var(--primary-dark); transform: translateY(-2px); }
    .btn-wish { padding: 16px 20px; border: 1px solid var(--border); border-radius: 50px; background: white; cursor: pointer; color: var(--gray); }
    .btn-wish:hover { color: var(--primary); border-color: var(--primary); }

    @media (max-width: 768px) { 
        body { padding-top: 180px; } /* Plus d'espace sur mobile car le header s'empile */
        .product-layout { grid-template-columns: 1fr; gap: 30px; } 
    }
  </style>
</head>
<body>
  <!-- Inclusion du Header -->
  <?php require_once __DIR__ . '/../../../includes/header.php'; ?>

  <div class="container">
    <div class="product-layout">
      <div class="product-gallery">
        <img src="https://images.unsplash.com/photo-1621072156002-e2fccdc0b176?w=800" alt="Produit">
      </div>
      <div class="product-info">
        <span class="category">Hommes > Veste</span>
        <h1>Veste Homme Classique</h1>
        <p class="price-tag">70 000 Ar</p>
        <p class="description">Une Veste élégante et confortable, parfaite pour toutes les occasions. Fabriquée avec des tissus de haute qualité pour assurer une durabilité et un style impeccable.</p>
        
        <div class="options">
          <h4>Taille</h4>
          <div class="size-picker">
            <div class="size-btn">S</div>
            <div class="size-btn active">M</div>
            <div class="size-btn">L</div>
            <div class="size-btn">XL</div>
          </div>
        </div>

        <div class="actions">
          <button class="btn-add">Ajouter au panier</button>
          <button class="btn-wish"><i class="far fa-heart"></i></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php require_once __DIR__ . '/../../../includes/footer.php'; ?>
</body>
</html>
