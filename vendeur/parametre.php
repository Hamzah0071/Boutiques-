<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres Vendeur - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil-vendeur.css">
    <style>
        :root {
            --primary: #c8102e;
            --primary-dark: #a00d24;
            --dark: #1a1a1a;
            --light: #f8f9fa;
            --white: #ffffff;
            --border: #e0e0e0;
        }

        /* * { margin:0; padding:0; box-sizing:border-box; }
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background: var(--light); 
            color: var(--dark); 
            display: flex; 
            min-height: 100vh; 
            padding-top: 140px; 
        } */

        /* Sidebar (Reprise du Dashboard Vendeur) */
        /* .sidebar { 
            width: 260px; 
            background: var(--dark); 
            color: white; 
            padding: 30px 20px; 
            position: fixed; 
            height: 100%; 
            top: 0;
            left: 0;
             z-index: 10;
            padding-top: 160px;  Aligné avec le padding du body
        } */
        .nav-links { list-style: none; }
        .nav-links li { margin-bottom: 15px; }
        .nav-links a { 
            color: #ccc; 
            text-decoration: none; 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            padding: 12px; 
            border-radius: 8px; 
            transition: 0.3s; 
        }
        .nav-links a:hover, .nav-links a.active { background: var(--primary); color: white; }

        /* Main Content */
        .main-content { 
            flex: 1; 
            margin-left: 260px; 
            padding: 40px; 
            max-width: 1000px;
        }

        .settings-container {
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            overflow: hidden;
        }

        .settings-tabs {
            display: flex;
            background: #f1f1f1;
            border-bottom: 1px solid var(--border);
        }

        .tab-btn {
            padding: 15px 25px;
            border: none;
            background: none;
            cursor: pointer;
            font-weight: 600;
            color: #666;
            transition: 0.3s;
        }

        .tab-btn.active {
            background: var(--white);
            color: var(--primary);
            border-bottom: 3px solid var(--primary);
        }

        .settings-content { padding: 40px; }

        .form-section { margin-bottom: 40px; }
        .form-section h3 { 
            margin-bottom: 20px; 
            color: var(--dark); 
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-section h3 i { color: var(--primary); }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #444; font-size: 0.9rem; }
        input, select, textarea { 
            width: 100%; 
            padding: 12px; 
            border: 1px solid var(--border); 
            border-radius: 6px; 
            font-size: 1rem; 
        }
        input:focus { outline: none; border-color: var(--primary); }

        .btn-save {
            background: var(--primary);
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 6px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-save:hover { background: var(--primary-dark); transform: translateY(-2px); }

        .danger-zone {
            margin-top: 50px;
            padding: 25px;
            border: 1px solid #ffcccc;
            background: #fff5f5;
            border-radius: 8px;
        }
        .danger-zone h4 { color: #c8102e; margin-bottom: 10px; }
        .btn-delete {
            background: none;
            border: 1px solid #c8102e;
            color: #c8102e;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            margin-top: 10px;
        }
        .btn-delete:hover { background: #c8102e; color: white; }

        @media (max-width: 768px) {
            body { padding-top: 180px; }
            .sidebar { width: 70px; padding-top: 200px; }
            .sidebar span { display: none; }
            .main-content { margin-left: 70px; padding: 20px; }
            .form-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- Navigation -->
  <?php require_once __DIR__ . '/../includes/header-vendeur.php'; ?>

    <!-- <aside class="sidebar">
        <ul class="nav-links">
            <li><a href="dashboard.php"><i class="fas fa-chart-line"></i> <span>Tableau de bord</span></a></li>
            <li><a href="produits.php"><i class="fas fa-box"></i> <span>Mes Produits</span></a></li>
            <li><a href="commandes.php"><i class="fas fa-shopping-cart"></i> <span>Commandes</span></a></li>
            <li><a href="parametres.php" class="active"><i class="fas fa-cog"></i> <span>Paramètres</span></a></li>
        </ul>
    </aside> -->

    <main class="main-content">
        <h1 style="margin-bottom: 30px;">Paramètres de la boutique</h1>

        <div class="settings-container">
            <div class="settings-tabs">
                <button class="tab-btn active">Profil Vendeur</button>
                <button class="tab-btn">Sécurité</button>
                <button class="tab-btn">Paiements</button>
            </div>

            <div class="settings-content">
                <form action="update-settings.php" method="POST">
                    
                    <!-- Informations de la boutique -->
                    <div class="form-section">
                        <h3><i class="fas fa-store"></i> Informations de la boutique</h3>
                        <div class="form-group">
                            <label>Nom de la boutique</label>
                            <input type="text" name="shop_name" value="StockPro" placeholder="Ex: Name">
                        </div>
                        <div class="form-group">
                            <label>Description / Bio</label>
                            <textarea name="shop_bio" rows="3" placeholder="Décrivez votre style ou votre boutique...">Vendeur passionné de mode vintage à Diego suarez.</textarea>
                        </div>
                    </div>

                    <!-- Informations personnelles -->
                    <div class="form-section">
                        <h3><i class="fas fa-user-circle"></i> Informations personnelles</h3>
                        <div class="form-grid">
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" name="firstname" value="Hamzah">
                            </div>
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="lastname" value="Nasser">
                            </div>
                        </div>
                        <div class="form-grid">
                            <div class="form-group">
                                <label>Email de contact</label>
                                <input type="email" name="email" value="hamzah@email.com">
                            </div>
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="text" name="phone" value="+261 32 00 000 00">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn-save">Enregistrer les modifications</button>
                </form>

                <!-- Zone de danger -->
                <div class="danger-zone">
                    <h4>Zone de danger</h4>
                    <p style="font-size: 0.85rem; color: #666;">La suppression de votre compte vendeur est irréversible. Tous vos produits seront retirés de la vente.</p>
                    <button class="btn-delete">Désactiver mon compte vendeur</button>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
