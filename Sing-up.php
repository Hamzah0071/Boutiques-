<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
        :root {
            --primary: #c8102e;
            --primary-dark: #a00d24;
            --dark: #1a1a1a;
            --light: #f8f9fa;
            --border: #ddd;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Segoe UI', sans-serif; 
            background: var(--light ); 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: 100vh;
            padding: 20px;
        }

        .auth-card {
            background: white;
            width: 100%;
            max-width: 450px;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        .logo {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
            display: block;
            margin-bottom: 20px;
        }

        h2 { margin-bottom: 10px; color: var(--dark); }
        p { color: #666; margin-bottom: 25px; font-size: 0.9rem; }

        .form-group { text-align: left; margin-bottom: 15px; }
        .row { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        
        label { display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.85rem; }
        input {
            width: 100%;
            padding: 11px;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 0.95rem;
        }
        input:focus { outline: none; border-color: var(--primary); }

        .terms { font-size: 0.8rem; color: #777; margin: 20px 0; text-align: left; }
        .terms input { width: auto; margin-right: 8px; }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-submit:hover { background: var(--primary-dark); }

        .footer-text { margin-top: 20px; font-size: 0.9rem; color: #666; }
        .footer-text a { color: var(--primary); text-decoration: none; font-weight: 600; }
    </style>
</head>
<body>
    <div class="auth-card">
        <a href="/" class="logo">StockPro</a>
        <h2>Créer un compte</h2>
        <p>Rejoignez la communauté StockPro dès aujourd'hui.</p>
        
        <form action="process-signup.php" method="POST">
            <div class="row">
                <div class="form-group">
                    <label>Prénom</label>
                    <input type="text" name="firstname" placeholder="Jean" required>
                </div>
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="lastname" placeholder="Dupont" required>
                </div>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="votre@email.com" required>
            </div>
            
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="Minimum 8 caractères" required>
            </div>

            <div class="terms">
                <label><input type="checkbox" required> J'accepte les <a href="#" style="color:var(--primary)">Conditions Générales</a> et la politique de confidentialité.</label>
            </div>

            <button type="submit" class="btn-submit">S'inscrire</button>
        </form>

        <div class="footer-text">
            Déjà un compte ? <a href="Sing-in.php">Se connecter</a>
        </div>
    </div>
</body>
</html>