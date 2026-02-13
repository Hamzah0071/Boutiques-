<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil.css">
    <style>
        :root { --primary: #c8102e; --dark: #1a1a1a; --light: #f8f9fa; --border: #ddd; }
        body { font-family: system-ui, sans-serif; background: var(--light ); padding-top: 140px; }
        .contact-wrapper { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1.5fr; gap: 40px; padding: 20px; }
        .contact-info { background: var(--dark); color: white; padding: 40px; border-radius: 12px; }
        .contact-form { background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        
        .info-item { display: flex; align-items: center; gap: 15px; margin-bottom: 25px; }
        .info-item i { color: var(--primary); font-size: 1.2rem; }
        
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; }
        input, textarea { width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 6px; font-family: inherit; }
        input:focus, textarea:focus { outline: none; border-color: var(--primary); }
        
        .btn-send { background: var(--primary); color: white; border: none; padding: 15px 30px; border-radius: 6px; cursor: pointer; font-weight: 700; width: 100%; transition: 0.3s; }
        .btn-send:hover { background: #a00d24; transform: translateY(-2px); }
        
        @media (max-width: 768px) { .contact-wrapper { grid-template-columns: 1fr; } body { padding-top: 180px; } }
    </style>
</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="contact-wrapper">
    <div class="contact-info">
        <h2 style="color: var(--primary); margin-bottom: 20px;">Contactez-nous</h2>
        <p style="margin-bottom: 30px; color: #ccc;">Une question ? Notre équipe vous répond sous 24h.</p>
        
        <div class="info-item">
            <i class="fas fa-phone"></i>
            <span>+261 34 00 000 00</span>
        </div>
        <div class="info-item">
            <i class="fas fa-envelope"></i>
            <span>contact@stockpro.mg</span>
        </div>
        <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            <span>Analakely, Antananarivo, Madagascar</span>
        </div>
        
        <div style="margin-top: 40px;">
            <h4 style="margin-bottom: 15px;">Suivez-nous</h4>
            <div style="display: flex; gap: 15px; font-size: 1.5rem;">
                <a href="#" style="color: white;"><i class="fab fa-facebook"></i></a>
                <a href="#" style="color: white;"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <form action="send-contact.php" method="POST">
            <div class="form-group">
                <label>Nom complet</label>
                <input type="text" name="name" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="votre@email.com" required>
            </div>
            <div class="form-group">
                <label>Sujet</label>
                <input type="text" name="subject" placeholder="De quoi s'agit-il ?">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" rows="5" placeholder="Votre message ici..." required></textarea>
            </div>
            <button type="submit" class="btn-send">Envoyer le message</button>
        </form>
    </div>
</div>
    <!-- Footer -->
    <?php require_once  '../includes/footer.php'; ?>
</body>
</html>