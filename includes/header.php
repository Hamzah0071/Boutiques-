<?php
/**
 * HEADER CORRIGÉ - StockPro
 * Ce fichier utilise des chemins dynamiques pour fonctionner quel que soit le dossier.
 */
//  Le problème des ../ est qu'ils dépendent du dossier où vous êtes.
//  Si vous êtes dans vestes.php (très profond), il faudrait faire ../../../.
// Ma solution : J'ai créé une variable $base_url = "/SOLO-PROJET/boutique/";. Tous les liens partent maintenant de cette racine.
//  Ainsi, le header fonctionnera parfaitement, que vous soyez sur la page d'accueil ou au fin fond d'une catégorie.

// On définit la racine du projet pour les liens
// Si vous déplacez le projet, modifiez simplement cette ligne.

$base_url = "/SOLO-PROJET/boutique/"; 
?>

<header>
    <div class="header-top">
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Rechercher des articles">
        </div>
        <div class="header-actions">
            <span class="auth-links">
                <a href="<?php echo $base_url; ?>Sing-in.php">S'inscrire</a> | 
                <a href="<?php echo $base_url; ?>Sing-up.php">Se connecter</a>
            </span>
            <a href="<?php echo $base_url; ?>clients/vendre.php" class="sell-button">Vends tes articles</a>
            <a href="#" class="help-link"><i class="fa-solid fa-circle-question"></i></a>
            <a href="<?php echo $base_url; ?>clients/profil.php" class="lang-link"><i class="fa-solid fa-user"></i></a>
        </div>
    </div>
    
    <nav class="header-nav">
        <a href="<?php echo $base_url; ?>clients/accueil.php" class="logo">StockPro</a>
        <ul class="nav-menu">
            <li class="dropdown">  
                <a href="#">Femmes <i class="fa-solid fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="<?php echo $base_url; ?>clients/categorie/robes/robes.php">Robes</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/tops/tops.php">Tops & Blouses</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/bas/bas.php">Jupes & Pantalons</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/ensembles/ensembles.php">Ensembles</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/bas/bas.php">Tenis</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/ensembles/ensembles.php">Talon</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="#">Hommes <i class="fa-solid fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="<?php echo $base_url; ?>clients/categorie/chemises/chemises.php">Chemises</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/T-shirts/T-shirts.php">Polos & T-shirts</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/pantalons/pantalons.php">Pantalons & Jeans</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/vestes/vestes.php">Vestes</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/pantalons/pantalons.php">Tenis</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/vestes/vestes.php">Mocasin</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="#">Enfant <i class="fa-solid fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="<?php echo $base_url; ?>clients/categorie/chemises/chemises.php">Pull</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/T-shirts/T-shirts.php">salopette</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/pantalons/pantalons.php">Pantalons & Jeans</a>
                    <a href="<?php echo $base_url; ?>clients/categorie/vestes/vestes.php">Vestes</a>
                </div>
            </li>
            <li><a href="<?php echo $base_url; ?>clients/promotions.php">Promotions</a></li>
            <!-- <li><a href="<?php echo $base_url; ?>nouveautes.php">Nouveautés</a></li> -->
        </ul>

        <div class="nav-icons">
            <a href="<?php echo $base_url; ?>clients/favoris.php"><i class="fa-solid fa-heart"></i></a>
            <a href="<?php echo $base_url; ?>clients/panier.php"><i class="fa-solid fa-shop"></i></a>
        </div>
    </nav>
</header>
