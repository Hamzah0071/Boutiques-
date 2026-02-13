<?php
/**
 * SIDEBAR VENDEUR CORRIGÉE - StockPro
 * Gère les chemins dynamiques et la classe 'active' automatiquement.
 */

$base_url = "/SOLO-PROJET/boutique/";
$current_page = basename($_SERVER['PHP_SELF']); // Récupère le nom du fichier actuel (ex: produits.php)
?>

<aside class="sidebar">
    <a href="<?php echo $base_url; ?>index.php" class="logo">StockPro</a>
    <ul class="nav-links">
        <li>
            <a href="<?php echo $base_url; ?>vendeur/vendeur-dashboard.php" 
               class="<?php echo ($current_page == 'vendeur-dashboard.php') ? 'active' : ''; ?>">
                <i class="fas fa-chart-line"></i> <span>Tableau de bord</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url; ?>vendeur/produits.php" 
               class="<?php echo ($current_page == 'produits.php') ? 'active' : ''; ?>">
                <i class="fas fa-box"></i> <span>Mes Produits</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url; ?>vendeur/commandes.php" 
               class="<?php echo ($current_page == 'commandes.php') ? 'active' : ''; ?>">
                <i class="fas fa-shopping-cart"></i> <span>Commandes</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url; ?>vendeur/parametre.php" 
               class="<?php echo ($current_page == 'parametre.php') ? 'active' : ''; ?>">
                <i class="fas fa-cog"></i> <span>Paramètres</span>
            </a>
        </li>
    </ul>
</aside>
