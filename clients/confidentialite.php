<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confidentialité - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil.css">
    <style>
        :root { --primary: #c8102e; --dark: #1a1a1a; --light: #f8f9fa; }
        body { font-family: system-ui, sans-serif; background: var(--light ); padding-top: 140px; line-height: 1.8; }
        .legal-container { max-width: 900px; margin: 0 auto 50px; background: white; padding: 60px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h1 { color: var(--dark); margin-bottom: 40px; border-left: 5px solid var(--primary); padding-left: 20px; }
        h2 { color: var(--primary); margin-top: 30px; font-size: 1.2rem; }
        @media (max-width: 768px) { body { padding-top: 180px; } }
    </style>
</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="legal-container">
    <h1>Politique de Confidentialité</h1>

    <h2>Collecte des données</h2>
    <p>Nous collectons les informations que vous nous fournissez lors de la création de votre compte : nom, prénom, adresse e-mail et numéro de téléphone.</p>

    <h2>Utilisation des données</h2>
    <p>Vos données sont utilisées exclusivement pour la gestion de vos commandes, l'amélioration de nos services et, si vous l'avez accepté, l'envoi de nos offres promotionnelles.</p>

    <h2>Protection des données</h2>
    <p>StockPro s'engage à protéger vos données personnelles et à ne jamais les vendre ou les partager avec des tiers à des fins commerciales.</p>

    <h2>Vos droits</h2>
    <p>Vous disposez d'un droit d'accès, de modification et de suppression de vos données personnelles. Vous pouvez exercer ce droit depuis votre espace client ou en nous contactant.</p>
</div>
    <!-- Footer -->
    <?php require_once  '../includes/footer.php'; ?>
</body>
</html>