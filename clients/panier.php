<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil.css">
    <style>
        :root { --primary: #c8102e; --dark: #1a1a1a; --light: #f8f9fa; --border: #eee; }
        body { font-family: system-ui, sans-serif; background: var(--light ); padding-top: 120px; }
        .cart-container { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 2fr 1fr; gap: 30px; padding: 20px; }
        .cart-items, .cart-summary { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .cart-item { display: flex; align-items: center; gap: 20px; padding: 20px 0; border-bottom: 1px solid var(--border); }
        .cart-item img { width: 90px; height: 90px; object-fit: cover; border-radius: 8px; }
        .item-info { flex: 1; }
        .item-price { font-weight: 700; color: var(--primary); font-size: 1.2rem; }
        .btn-checkout { width: 100%; padding: 16px; background: var(--dark); color: white; border: none; border-radius: 8px; font-weight: 700; cursor: pointer; margin-top: 20px; }
        .btn-checkout:hover { background: var(--primary); }
    </style>
</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="cart-container">
    <div class="cart-items">
        <h2>Votre Panier</h2>
        <div class="cart-item">
            <img src="https://images.unsplash.com/photo-1621072156002-e2fccdc0b176?w=200" alt="Produit">
            <div class="item-info">
                <h3>Chemise Homme Classique</h3>
                <p>Taille: M | Couleur: Blanc</p>
                <p class="item-price">68 000 Ar</p>
            </div>
            <button style="background:none; border:none; color:#999; cursor:pointer;"><i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="cart-summary">
        <h3>Résumé de la commande</h3>
        <div style="display:flex; justify-content:space-between; margin: 20px 0;">
            <span>Sous-total</span>
            <span>68 000 Ar</span>
        </div>
        <div style="display:flex; justify-content:space-between; margin-bottom: 20px; font-weight: 700; font-size: 1.3rem; border-top: 1px solid #eee; pt: 15px;">
            <span>Total</span>
            <span style="color: var(--primary );">68 000 Ar</span>
        </div>
        <button class="btn-checkout">Passer à la caisse</button>
    </div>
</div>

</body>
</html>