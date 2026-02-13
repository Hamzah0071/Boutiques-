<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image" href="../assets/stockpro copie.svg">
  <link rel="stylesheet" href="../assets/style/accueil-vendeur.css">
  <title>Dashboard Vendeur - StockPro</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  
</head>
<body>
  <!-- Navigation -->
  <?php require_once __DIR__ . '/../includes/header-vendeur.php'; ?>

  <main class="main-content">
    <div class="header">
      <h1>Bonjour, Vendeur !</h1>
      <a href="ajouter-produit.php" class="btn-add"><i class="fas fa-plus"></i> Ajouter un produit</a>
    </div>

    <div class="stats-grid">
      <div class="stat-card"><h3>Ventes totales</h3><div class="value">1 250 000 Ar</div></div>
      <div class="stat-card"><h3>Produits actifs</h3><div class="value">12</div></div>
      <div class="stat-card"><h3>Commandes</h3><div class="value">8</div></div>
    </div>

    <div class="table-container">
      <h2>Mes Articles Récents</h2>
      <table>
        <thead>
          <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Statut</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="product-cell">
                <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?w=500" alt="">
                <span>Chemise Classique</span>
              </div>
            </td>
            <td>68 000 Ar</td>
            <td>5</td>
            <td><span class="status active">En ligne</span></td>
            <td class="action-btns">
              <button title="Modifier"><i class="fas fa-edit"></i></button>
              <button title="Supprimer"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>