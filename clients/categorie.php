<!-- produit/t-shirt-bleu.html -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>T-shirt Bleu Col rond - Ta boutique</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image" href="../assets/stockpro copie.svg">
  <link rel="stylesheet" href="../assets/style/accueil.css">
  <meta name="description" content="T-shirt 100% coton bio, coupe régulière, couleur bleu marine. Livraison à Antananarivo en 24-48h.">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php require_once  '../includes/header.php'; ?>

<main class="produit-detail">
  <div class="gallery">
    <img src="../assets/images/tshirt-bleu-1.jpg" alt="T-shirt bleu face" class="main-img">
    <!-- miniatures thumbnails -->
  </div>

  <div class="info">
    <h1>T-shirt Bleu Col rond</h1>
    <p class="prix">38 000 Ar</p>
    <p class="stock">En stock (12 pièces)</p>

    <form action="/panier" method="post">
      <label>Taille :
        <select name="taille">
          <option>S</option>
          <option>M</option>
          <option>L</option>
          <option>XL</option>
        </select>
      </label>

      <label>Quantité :
        <input type="number" name="qte" value="1" min="1" max="10">
      </label>

      <button type="submit" class="btn-add">Ajouter au panier</button>
    </form>

    <div class="description">
      <h3>Description</h3>
      <p>T-shirt doux et confortable en coton bio certifié...</p>
    </div>

    <div class="livraison">
      <p>Livraison : 2-4 jours à Tana – Frais 5 000 Ar</p>
    </div>
  </div>
</main>



</body>
</html>