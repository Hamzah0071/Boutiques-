<header>
    <div class="header-top">
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Rechercher des articles">
        </div>
        <div class="header-actions">
            <!-- Attention : balise <a> imbriquée incorrectement -->
            <span class="auth-links">
                <a href="../Sing-in.php">S'inscrire</a> | <a href="../Sing-up.php">Se connecter</a>
            </span>
            <a href="#" class="sell-button">Vends tes articles</a>
            <a href="#" class="help-link"><i class="fa-solid fa-circle-question"></i></a>
            <a href="../clients/profil.php" class="lang-link"><i class="fa-solid fa-user"></i></a>
        </div>
    </div>
    
    <nav class="header-nav">
        <a href="../clients/accueil.php" class="logo">StockPro</a>
        <ul class="nav-menu">
            <li><a href="#">Boutique</a></li>

            <li class="dropdown">  
                <a href="#">Femmes ▾</a>
                <div class="dropdown-content">
                    <a href="/categorie/robes">Robes</a>
                    <a href="/categorie/tops">Tops & Blouses</a>
                    <a href="/categorie/bas">Jupes & Pantalons</a>
                    <a href="/categorie/ensembles">Ensembles</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="#">Hommes ▾</a>
                <div class="dropdown-content">
                    <a href="../clients/categorie.php">Chemises</a>
                    <a href="/categorie/polos">Polos & T-shirts</a>
                    <a href="/categorie/pantalons">Pantalons & Jeans</a>
                    <a href="/categorie/vestes">Vestes</a>
                </div>
            </li>

            <li><a href="/categorie/enfants">Enfants</a></li>
            <li><a href="/promotions">Promotions</a></li>
            <li><a href="/nouveautes">Nouveautés</a></li>
        </ul>

        <div class="nav-icons">
            <a href="../clients/favoris.php"><i class="fa-solid fa-heart"></i></a>
            <a href="../clients/panier.php"><i class="fa-solid fa-shop"></i></a>
            <!-- Tu peux remettre les icônes plus tard quand tu auras le système de connexion/panier -->
        </div>
    </nav>
</header>