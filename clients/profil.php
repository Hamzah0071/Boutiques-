<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil.css">
    <style>
        :root { --primary: #c8102e; --dark: #1a1a1a; --light: #f8f9fa; --border: #ddd; }
        body { font-family: system-ui, sans-serif; background: var(--light ); padding-top: 120px; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .profile-header { display: flex; align-items: center; gap: 20px; margin-bottom: 30px; border-bottom: 1px solid var(--border); padding-bottom: 20px; }
        .profile-avatar { width: 80px; height: 80px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 700; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; }
        input { width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 6px; }
        .btn-save { background: var(--primary); color: white; border: none; padding: 12px 24px; border-radius: 6px; cursor: pointer; font-weight: 600; }
    </style>
</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="profile-header">
        <div class="profile-avatar">JD</div>
        <div>
            <h2>Mon Profil</h2>
            <p>Gérez vos informations personnelles</p>
        </div>
    </div>

    <form>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" value="Jean">
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" value="Dupont">
            </div>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" value="jean.dupont@email.com">
        </div>
        <div class="form-group">
            <label>Téléphone</label>
            <input type="text" placeholder="+261 34 XX XXX XX">
        </div>
        <button type="submit" class="btn-save">Enregistrer les modifications</button>
    </form>
</div>

</body>
</html>