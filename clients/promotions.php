<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotions - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil.css">
    <style>
        :root {
            --primary: #c8102e;
            --primary-dark: #a00d24;
            --dark: #1a1a1a;
            --light: #f8f9fa;
            --white: #ffffff;
            --border: #eee;
        }

        body { 
            font-family: system-ui, -apple-system, sans-serif; 
            background: var(--light); 
            padding-top: 140px; 
            margin: 0;
        }

        .promo-layout {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Sidebar de filtres */
        .promo-sidebar {
            background: var(--white);
            padding: 25px;
            border-radius: 12px;
            height: fit-content;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 160px;
        }

        .filter-section { margin-bottom: 30px; }
        .filter-section h3 { 
            font-size: 1.1rem; 
            margin-bottom: 15px; 
            color: var(--dark);
            border-bottom: 2px solid var(--light);
            padding-bottom: 8px;
        }

        .filter-list { list-style: none; }
        .filter-list li { margin-bottom: 10px; }
        .filter-list a { 
            text-decoration: none; 
            color: #555; 
            display: flex; 
            justify-content: space-between;
            align-items: center;
            transition: 0.3s;
            padding: 5px 0;
        }
        .filter-list a:hover, .filter-list a.active { color: var(--primary); font-weight: 600; }
        
        .promo-badge-filter {
            background: var(--primary);
            color: white;
            padding: 2px 8px;
            border-radius: 20px;
            font-size: 0.75rem;
        }

        /* Grille de produits */
        .promo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
        }

        .product-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            position: relative;
            transition: transform 0.3s;
        }
        .product-card:hover { transform: translateY(-5px); }

        .discount-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--primary);
            color: white;
            padding: 5px 12px;
            border-radius: 50px;
            font-weight: 800;
            z-index: 2;
            box-shadow: 0 4px 8px rgba(200, 16, 46, 0.3);
        }

        .product-img {
            height: 280px;
            background: #eee center/cover;
        }

        .product-info { padding: 20px; text-align: center; }
        .product-info h3 { font-size: 1.1rem; margin-bottom: 10px; color: var(--dark); }
        
        .price-container { display: flex; justify-content: center; align-items: center; gap: 10px; }
        .current-price { font-size: 1.3rem; font-weight: 800; color: var(--primary); }
        .old-price { text-decoration: line-through; color: #999; font-size: 1rem; }

        @media (max-width: 992px) {
            .promo-layout { grid-template-columns: 1fr; }
            .promo-sidebar { position: static; margin-bottom: 20px; }
            body { padding-top: 180px; }
        }
    </style>
</head>
<body>

    <!-- Inclusion du Header -->
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <div class="promo-layout">
        <!-- Sidebar de filtres -->
        <aside class="promo-sidebar">
            <div class="filter-section">
                <h3><i class="fas fa-percentage"></i> Réductions</h3>
                <ul class="filter-list">
                    <li><a href="#" class="active">Toutes les promos <span class="promo-badge-filter">24</span></a></li>
                    <li><a href="#">-40% et plus <span class="promo-badge-filter">5</span></a></li>
                    <li><a href="#">-30% <span class="promo-badge-filter">8</span></a></li>
                    <li><a href="#">-20% <span class="promo-badge-filter">11</span></a></li>
                </ul>
            </div>

            <div class="filter-section">
                <h3><i class="fas fa-tags"></i> Catégories</h3>
                <ul class="filter-list">
                    <li><a href="#">Femmes</a></li>
                    <li><a href="#">Hommes</a></li>
                    <li><a href="#">Enfants</a></li>
                    <li><a href="#">Accessoires</a></li>
                </ul>
            </div>
        </aside>

        <!-- Contenu principal -->
        <main>
            <h1 style="margin-bottom: 30px; color: var(--dark);">Nos Meilleures Offres</h1>
            
            <div class="promo-grid">
                <!-- Produit 1 -->
                <div class="product-card">
                    <div class="discount-tag">-40%</div>
                    <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?w=500')"></div>
                    <div class="product-info">
                        <h3>Chemise Homme Lin</h3>
                        <div class="price-container">
                            <span class="current-price">31 200 Ar</span>
                            <span class="old-price">52 000 Ar</span>
                        </div>
                    </div>
                </div>

                <!-- Produit 2 -->
                <div class="product-card">
                    <div class="discount-tag">-30%</div>
                    <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1621072156002-e2fccdc0b176?w=500')"></div>
                    <div class="product-info">
                        <h3>Chemise Classique</h3>
                        <div class="price-container">
                            <span class="current-price">40 800 Ar</span>
                            <span class="old-price">68 000 Ar</span>
                        </div>
                    </div>
                </div>

                <!-- Produit 3 -->
                <div class="product-card">
                    <div class="discount-tag">-20%</div>
                    <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500')"></div>
                    <div class="product-info">
                        <h3>Robe Été Fleurie</h3>
                        <div class="price-container">
                            <span class="current-price">60 000 Ar</span>
                            <span class="old-price">75 000 Ar</span>
                        </div>
                    </div>
                </div>
                
                <!-- Ajoutez d'autres cartes ici -->
            </div>
        </main>
    </div>

</body>
</html>
