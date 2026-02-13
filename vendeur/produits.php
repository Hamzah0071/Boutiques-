<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/style/accueil-vendeur.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <title>Ajouter un Produit - StockPro</title>
  <style>
    :root {
      --primary: #c8102e;
      --dark: #1a1a1a;
      --light: #f8f9fa;
      --border: #ddd;
    }

    .form-container { max-width: 700px; margin: 0 auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); }
    h2 { margin-bottom: 30px; color: var(--dark); border-left: 5px solid var(--primary); padding-left: 15px; }
    
    .form-group { margin-bottom: 20px; }
    label { display: block; margin-bottom: 8px; font-weight: 600; color: #444; }
    input, select, textarea { width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 6px; font-size: 1rem; }
    input:focus { outline: none; border-color: var(--primary); }
    
    .upload-area { border: 2px dashed var(--border); padding: 40px; text-align: center; border-radius: 8px; cursor: pointer; transition: 0.3s; margin-bottom: 20px; }
    .upload-area:hover { border-color: var(--primary); background: #fff5f5; }
    
    .btn-submit { width: 100%; padding: 16px; background: var(--primary); color: white; border: none; border-radius: 6px; font-size: 1.1rem; font-weight: 700; cursor: pointer; transition: 0.3s; }
    .btn-submit:hover { background: #a00d24; transform: translateY(-2px); }
    
    .row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
  </style>
</head>
<body>
   <!-- Navigation -->
  <?php require_once __DIR__ . '/../includes/header-vendeur.php'; ?>
  <div class="form-container">
    <h2>Mettre en vente un article</h2>
    <form>
      <div class="upload-area">
        <i class="fas fa-cloud-upload-alt" style="font-size: 2rem; color: var(--primary); margin-bottom: 10px;"></i>
        <p>Cliquez ou glissez vos photos ici (Max 5 photos)</p>
      </div>

      <div class="form-group">
        <label>Titre de l'annonce</label>
        <input type="text" placeholder="Ex: Chemise en lin bleue">
      </div>

      <div class="row">
        <div class="form-group">
          <label>Catégorie</label>
          <select>
            <option>Hommes</option>
            <option>Femmes</option>
            <option>Enfants</option>
          </select>
        </div>
        <div class="form-group">
          <label>Prix (Ar)</label>
          <input type="number" placeholder="0.00">
        </div>
      </div>

      <div class="form-group">
        <label>Description</label>
        <textarea rows="5" placeholder="Décrivez votre article (état, matière, taille...)"></textarea>
      </div>

      <button type="submit" class="btn-submit">Publier l'article</button>
    </form>
  </div>
</body>
</html>