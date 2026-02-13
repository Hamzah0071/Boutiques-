<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vends tes articles - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../assets/style/accueil.css">
    <style>
        :root {
            --primary: #c8102e;
            --primary-dark: #a00d24;
            --dark: #1a1a1a;
            --light: #f8f9fa;
            --border: #ddd;
        }

        body { 
            font-family: system-ui, -apple-system, sans-serif; 
            background: var(--light); 
            padding-top: 140px; 
            margin: 0;
        }

        .sell-container { 
            max-width: 800px; 
            margin: 0 auto 50px; 
            background: white; 
            padding: 40px; 
            border-radius: 12px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.08); 
        }

        .sell-header { 
            text-align: center; 
            margin-bottom: 40px; 
        }

        .sell-header h1 { 
            font-size: 2.2rem; 
            color: var(--dark); 
            margin-bottom: 10px; 
        }

        .sell-header p { 
            color: #666; 
            font-size: 1.1rem; 
        }

        /* Zone d'upload photo */
        .photo-upload {
            border: 2px dashed var(--border);
            padding: 40px;
            text-align: center;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
            margin-bottom: 30px;
            background: #fafafa;
        }

        .photo-upload:hover {
            border-color: var(--primary);
            background: #fff5f5;
        }

        .photo-upload i {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        /* Formulaire */
        .form-section { margin-bottom: 30px; }
        .form-section h3 { 
            border-bottom: 2px solid var(--light); 
            padding-bottom: 10px; 
            margin-bottom: 20px; 
            color: var(--dark);
        }

        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #444; }
        
        input[type="text"], 
        input[type="number"], 
        select, 
        textarea { 
            width: 100%; 
            padding: 12px; 
            border: 1px solid var(--border); 
            border-radius: 8px; 
            font-size: 1rem; 
            font-family: inherit;
        }

        input:focus, select:focus, textarea:focus { 
            outline: none; 
            border-color: var(--primary); 
            box-shadow: 0 0 0 3px rgba(200, 16, 46, 0.1);
        }

        .row { 
            display: grid; 
            grid-template-columns: 1fr 1fr; 
            gap: 20px; 
        }

        .btn-publish { 
            width: 100%; 
            padding: 18px; 
            background: var(--primary); 
            color: white; 
            border: none; 
            border-radius: 8px; 
            font-size: 1.2rem; 
            font-weight: 700; 
            cursor: pointer; 
            transition: 0.3s; 
            margin-top: 20px;
        }

        .btn-publish:hover { 
            background: var(--primary-dark); 
            transform: translateY(-2px); 
            box-shadow: 0 5px 15px rgba(200, 16, 46, 0.3);
        }

        @media (max-width: 768px) { 
            body { padding-top: 180px; }
            .row { grid-template-columns: 1fr; }
            .sell-container { padding: 25px; margin: 10px; }
        }
    </style>
</head>
<body>

    <!-- Inclusion du Header -->
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <div class="sell-container">
        <div class="sell-header">
            <h1>Vends tes articles</h1>
            <p>Donne une seconde vie à tes vêtements et gagne de l'argent.</p>
        </div>

        <form action="process-vendre.php" method="POST" enctype="multipart/form-data">
            
            <!-- Upload Photos -->
            <div class="photo-upload" onclick="document.getElementById('file-input').click();">
                <i class="fas fa-camera"></i>
                <h3>Ajoute jusqu'à 5 photos</h3>
                <p>Les photos claires vendent plus vite !</p>
                <input type="file" id="file-input" name="photos[]" multiple hidden accept="image/*">
            </div>

            <!-- Détails de l'article -->
            <div class="form-section">
                <h3>Détails de l'article</h3>
                
                <div class="form-group">
                    <label>Titre de l'annonce</label>
                    <input type="text" name="title" placeholder="Ex: Chemise en lin Zara" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" rows="4" placeholder="Décris l'état, la matière, la coupe..." required></textarea>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label>Catégorie</label>
                        <select name="category" required>
                            <option value="">Choisir une catégorie</option>
                            <option value="femmes">Femmes</option>
                            <option value="hommes">Hommes</option>
                            <option value="enfants">Enfants</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>État</label>
                        <select name="condition" required>
                            <option value="neuf">Neuf avec étiquette</option>
                            <option value="tres-bon">Très bon état</option>
                            <option value="bon">Bon état</option>
                            <option value="satisfaisant">Satisfaisant</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Prix et Livraison -->
            <div class="form-section">
                <h3>Prix et Localisation</h3>
                
                <div class="row">
                    <div class="form-group">
                        <label>Prix (Ariary)</label>
                        <input type="number" name="price" placeholder="0 Ar" required>
                    </div>
                    <div class="form-group">
                        <label>Ville / Quartier</label>
                        <input type="text" name="location" placeholder="Ex: Analakely, Tana" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-publish">Publier mon annonce</button>
        </form>
    </div>
    
    <!-- Footer -->
    <?php require_once  '../includes/footer.php'; ?>

</body>
</html>
