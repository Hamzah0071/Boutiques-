<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - StockPro</title>
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
            height: 100vh; 
        }

        .auth-card {
            background: white;
            width: 100%;
            max-width: 400px;
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
            margin-bottom: 30px;
        }

        h2 { margin-bottom: 10px; color: var(--dark); }
        p { color: #666; margin-bottom: 30px; font-size: 0.9rem; }

        .form-group { text-align: left; margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; }
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 1rem;
            transition: 0.3s;
        }
        input:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 0 3px rgba(200, 16, 46, 0.1); }

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
            margin-top: 10px;
        }
        .btn-submit:hover { background: var(--primary-dark); transform: translateY(-1px); }

        .footer-text { margin-top: 25px; font-size: 0.9rem; color: #666; }
        .footer-text a { color: var(--primary); text-decoration: none; font-weight: 600; }
        
        .forgot-password { display: block; text-align: right; font-size: 0.8rem; color: var(--primary); text-decoration: none; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="auth-card">
        <a href="/" class="logo">StockPro</a>
        <h2>Bon retour !</h2>
        <p>Connectez-vous pour gérer vos articles et achats.</p>
        
        <form action="process-login.php" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="votre@email.com" required>
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="••••••••" required>
                <a href="#" class="forgot-password">Mot de passe oublié ?</a>
            </div>
            <button type="submit" class="btn-submit">Se connecter</button>
        </form>

        <div class="footer-text">
            Pas encore de compte ? <a href="Sing-up.php">S'inscrire</a>
        </div>
    </div>
</body>
</html>