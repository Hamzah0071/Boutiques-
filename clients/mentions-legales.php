<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil.css">
    <style>
        :root { --primary: #c8102e; --dark: #1a1a1a; --light: #f8f9fa; }
        body { font-family: system-ui, sans-serif; background: var(--light ); padding-top: 140px; line-height: 1.8; }
        .legal-container { max-width: 900px; margin: 0 auto 50px; background: white; padding: 60px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h1 { color: var(--dark); margin-bottom: 40px; border-left: 5px solid var(--primary); padding-left: 20px; }
        .info-section { margin-bottom: 30px; }
        .info-section strong { color: var(--primary); display: block; margin-bottom: 5px; }
        @media (max-width: 768px) { body { padding-top: 180px; } }
    </style>
</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="legal-container">
    <h1>Mentions Légales</h1>

    <div class="info-section">
        <strong>Éditeur du site</strong>
        <p>StockPro Madagascar  

        Siège social : Analakely, Antananarivo 101  

        Email : contact@stockpro.mg  

        Téléphone : +261 34 00 000 00</p>
    </div>

    <div class="info-section">
        <strong>Hébergement</strong>
        <p>Le site est hébergé par [Nom de votre hébergeur]  

        Adresse de l'hébergeur : [Adresse de l'hébergeur]</p>
    </div>

    <div class="info-section">
        <strong>Propriété intellectuelle</strong>
        <p>L'ensemble du contenu de ce site (textes, images, logos) est la propriété exclusive de StockPro. Toute reproduction est interdite sans autorisation préalable.</p>
    </div>
</div>
    <!-- Footer -->
    <?php require_once  '../includes/footer.php'; ?>
</body>
</html>