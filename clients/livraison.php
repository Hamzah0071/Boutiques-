<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraison & Retours - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil.css">
    <style>
        :root { --primary: #c8102e; --dark: #1a1a1a; --light: #f8f9fa; --border: #eee; }
        body { font-family: system-ui, sans-serif; background: var(--light ); padding-top: 140px; line-height: 1.6; }
        .container { max-width: 900px; margin: 0 auto; background: white; padding: 50px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h1 { color: var(--primary); margin-bottom: 30px; border-bottom: 2px solid var(--primary); display: inline-block; padding-bottom: 5px; }
        h2 { color: var(--dark); margin: 30px 0 15px; font-size: 1.4rem; }
        .info-box { background: #fff5f5; border-left: 4px solid var(--primary); padding: 20px; margin: 20px 0; border-radius: 4px; }
        .grid-info { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 30px; }
        .icon-text { display: flex; align-items: flex-start; gap: 15px; }
        .icon-text i { color: var(--primary); font-size: 1.5rem; margin-top: 5px; }
        @media (max-width: 768px) { .grid-info { grid-template-columns: 1fr; } body { padding-top: 180px; } }
    </style>
</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="container">
    <h1>Livraison & Retours</h1>
    
    <div class="info-box">
        <strong>Note :</strong> Nous livrons partout à Madagascar, avec une attention particulière sur Antananarivo.
    </div>

    <div class="grid-info">
        <div class="icon-text">
            <i class="fas fa-truck"></i>
            <div>
                <h2>Délais de Livraison</h2>
                <p><strong>Antananarivo :</strong> 24h à 48h ouvrables.  

                <strong>Province :</strong> 3 à 5 jours selon votre localisation.</p>
            </div>
        </div>
        <div class="icon-text">
            <i class="fas fa-wallet"></i>
            <div>
                <h2>Frais de Port</h2>
                <p>Gratuit à Tana dès 150 000 Ar d'achat. En dessous, forfait de 5 000 Ar.</p>
            </div>
        </div>
    </div>

    <h2>Politique de Retours</h2>
    <p>Vous disposez de <strong>7 jours</strong> après réception de votre commande pour demander un échange ou un remboursement si l'article ne vous convient pas ou présente un défaut.</p>
    <ul>
        <li>L'article doit être dans son état d'origine.</li>
        <li>Les étiquettes ne doivent pas être retirées.</li>
        <li>Le reçu d'achat est obligatoire.</li>
    </ul>
</div>
    <!-- Footer -->
    <?php require_once  '../includes/footer.php'; ?>
</body>
</html>