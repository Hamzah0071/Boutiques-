<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil.css">
    <style>
        :root { --primary: #c8102e; --dark: #1a1a1a; --light: #f8f9fa; }
        body { font-family: system-ui, sans-serif; background: var(--light ); padding-top: 140px; line-height: 1.8; color: #444; }
        .legal-container { max-width: 900px; margin: 0 auto 50px; background: white; padding: 60px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h1 { color: var(--dark); margin-bottom: 40px; border-left: 5px solid var(--primary); padding-left: 20px; }
        h2 { color: var(--primary); margin: 30px 0 15px; font-size: 1.3rem; text-transform: uppercase; letter-spacing: 1px; }
        p { margin-bottom: 15px; }
        @media (max-width: 768px) { body { padding-top: 180px; } .legal-container { padding: 30px; } }
    </style>
</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="legal-container">
    <h1>Conditions Générales de Vente</h1>
    <p><em>Dernière mise à jour : 08 Février 2026</em></p>

    <h2>1. Objet</h2>
    <p>Les présentes conditions générales de vente (CGV) régissent les relations contractuelles entre StockPro et toute personne effectuant un achat sur le site.</p>

    <h2>2. Produits et Prix</h2>
    <p>Les produits proposés sont ceux qui figurent sur le site StockPro, dans la limite des stocks disponibles. Les prix sont indiqués en Ariary (Ar) toutes taxes comprises.</p>

    <h2>3. Commandes</h2>
    <p>Le client valide sa commande après avoir vérifié son panier. La vente est considérée comme définitive après confirmation du paiement ou validation de la commande par nos services.</p>

    <h2>4. Livraison</h2>
    <p>Les livraisons sont effectuées à l'adresse indiquée lors de la commande. Les délais sont donnés à titre indicatif (24h-48h pour Antananarivo).</p>

    <h2>5. Droit de rétractation</h2>
    <p>Conformément à la législation en vigueur, le client dispose d'un délai de 7 jours pour retourner un produit qui ne lui conviendrait pas, à condition qu'il soit dans son état d'origine.</p>
</div>
    <!-- Footer -->
    <?php require_once  '../includes/footer.php'; ?>
</body>
</html>