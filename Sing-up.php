<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="icon" type="image" href="assets/stockpro copie.svg">
    <link rel="stylesheet" href="./assets/style/sing-in.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="container">
    <form class="register-form">
        <h2>Se connecte</h2>

        <form method="POST" action="">
            <input type="hidden" name="action" value="signup">

            <!-- <div class="row">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nom" placeholder="Nom" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="prenom" placeholder="Prénom" required>
                </div>
            </div> -->

            <!-- <div class="row">
                <div class="input-group">
                    <i class="fas fa-calendar-days"></i>
                    <input type="date" name="date_naissance" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-venus-mars"></i>
                    <select name="sexe" required>
                        <option value="">Sexe</option>
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                    </select>
                </div>
            </div> -->

            <!-- <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="tel" name="telephone" placeholder="Téléphone (facultatif)">
            </div> -->

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Adresse email" required>
            </div>

            <div class="row">
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Mot de passe" minlength="8" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm_password" placeholder="Confirmation" required>
                </div>
            </div>

            

        <button type="submit">Se connecter</button>
        <div class="checkbox-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">J'accepte les <a href="#">conditions d'utilisation</a></label>
            </div>

        <p class="login-link">
    Ta pas encore de compte ?
    <a href="Sing-in.php" class="login-btn">S'inscrire</a>
</p>

    </form>
</div>

</body>
</html>
