<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Commandes - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil-vendeur.css">
    <style>
        :root { --primary: #c8102e; --dark: #1a1a1a; --light: #f8f9fa; }  
        .container { max-width: 900px; margin: 0 auto; padding: 20px; }
        .order-card { background: white; padding: 20px; border-radius: 12px; margin-bottom: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center; }
        .order-id { font-weight: 700; color: var(--dark); }
        .order-status { padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; background: #fff3cd; color: #856404; }
        .order-status.delivered { background: #d4edda; color: #155724; }
        .btn-view { color: var(--primary); text-decoration: none; font-weight: 600; }
    </style>
</head>
<body>

<!-- Navigation -->
  <?php require_once __DIR__ . '/../includes/header-vendeur.php'; ?>

<div class="container">
    <h2 style="margin-bottom: 30px;">Mes Commandes</h2>
    
    <div class="order-card">
        <div>
            <p class="order-id">Commande #SP-8942</p>
            <p style="color: #666; font-size: 0.9rem;">06 Février 2026 • 1 article</p>
        </div>
        <span class="order-status">En cours de livraison</span>
        <p style="font-weight: 700;">68 000 Ar</p>
        <a href="#" class="btn-view">Détails</a>
    </div>

    <div class="order-card">
        <div>
            <p class="order-id">Commande #SP-7521</p>
            <p style="color: #666; font-size: 0.9rem;">15 Janvier 2026 • 2 articles</p>
        </div>
        <span class="order-status delivered">Livré</span>
        <p style="font-weight: 700;">124 000 Ar</p>
        <a href="#" class="btn-view">Détails</a>
    </div>
</div>

</body>
</html>