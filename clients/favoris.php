<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Favoris - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil.css">
    <style>
        :root { --primary: #c8102e; --dark: #1a1a1a; --light: #f8f9fa; }
        body { font-family: system-ui, sans-serif; background: var(--light ); padding-top: 120px; }
        .container { max-width: 1100px; margin: 0 auto; padding: 20px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 25px; }
        .fav-card { background: white; border-radius: 12px; overflow: hidden; position: relative; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .fav-img { height: 250px; background: #eee center/cover; }
        .fav-info { padding: 15px; text-align: center; }
        .btn-remove { position: absolute; top: 10px; right: 10px; background: white; border: none; width: 35px; height: 35px; border-radius: 50%; color: var(--primary); cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="container">
    <h2 style="margin-bottom: 30px;">Mes Favoris <i class="fas fa-heart" style="color: var(--primary);"></i></h2>
    
    <div class="grid">
        <div class="fav-card">
            <button class="btn-remove"><i class="fas fa-heart"></i></button>
            <div class="fav-img" style="background-image:url('https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?w=500' )"></div>
            <div class="fav-info">
                <h3>Chemise Homme Lin</h3>
                <p style="color: var(--primary); font-weight: 700;">52 000 Ar</p>
            </div>
        </div>
        <!-- Répéter pour d'autres favoris -->
    </div>
</div>

</body>
</html>