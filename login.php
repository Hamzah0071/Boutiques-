
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion / Inscription | StockPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4CAF50 0%, #81C784 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            position: relative;
            width: 100%;
            max-width: 1100px;
            min-height: 650px;
            background: white;
            border-radius: 25px;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }

        /* Zone des formulaires */
        .forms-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .signin-signup {
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            left: 75%;
            width: 50%;
            transition: 1s 0.7s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            display: grid;
            grid-template-columns: 1fr;
            z-index: 5;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 3rem;
            transition: all 0.2s 0.7s;
            overflow: hidden;
            grid-column: 1 / 2;
            grid-row: 1 / 2;
        }

        form.sign-up-form {
            opacity: 0;
            z-index: 1;
            pointer-events: none;
        }

        form.sign-in-form {
            z-index: 2;
        }

        .title {
            font-size: 2.2rem;
            background: linear-gradient(135deg, #FF9800, #F57C00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .input-field {
            max-width: 380px;
            width: 100%;
            background-color: #f5f5f5;
            margin: 10px 0;
            height: 55px;
            border-radius: 55px;
            display: grid;
            grid-template-columns: 15% 85%;
            padding: 0 0.4rem;
            position: relative;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .input-field:focus-within {
            border-color: #FF9800;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(255, 152, 0, 0.2);
        }

        .input-field i {
            text-align: center;
            line-height: 55px;
            color: #FF9800;
            transition: 0.5s;
            font-size: 1.1rem;
        }

        .input-field input,
        .input-field select,
        .input-field textarea {
            background: none;
            outline: none;
            border: none;
            line-height: 1;
            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
            width: 100%;
        }

        .input-field input::placeholder {
            color: #aaa;
            font-weight: 500;
        }

        .input-field textarea {
            padding: 15px 0;
            resize: none;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            width: 100%;
            max-width: 380px;
        }

        .btn {
            width: 150px;
            background: linear-gradient(135deg, #2196F3, #1976D2);
            border: none;
            outline: none;
            height: 49px;
            border-radius: 49px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 700;
            margin: 10px 0;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(33, 150, 243, 0.3);
        }

        .btn:hover {
            background: linear-gradient(135deg, #1976D2, #1565C0);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(33, 150, 243, 0.4);
        }

        .btn:active {
            transform: translateY(0);
        }

        /* Panneau latéral animé */
        .panels-container {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .panel {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: space-around;
            text-align: center;
            z-index: 6;
        }

        .left-panel {
            pointer-events: all;
            padding: 3rem 17% 2rem 12%;
        }

        .right-panel {
            pointer-events: none;
            padding: 3rem 12% 2rem 17%;
        }

        .panel .content {
            color: #fff;
            transition: transform 0.9s ease-in-out;
            transition-delay: 0.6s;
        }

        .panel h3 {
            font-weight: 700;
            line-height: 1;
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .panel p {
            font-size: 1rem;
            padding: 0.7rem 0;
            line-height: 1.6;
        }

        .btn.transparent {
            margin: 0;
            background: transparent;
            border: 2px solid #fff;
            width: 150px;
            height: 45px;
            font-weight: 700;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .btn.transparent:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
            box-shadow: none;
        }

        .right-panel .image,
        .right-panel .content {
            transform: translateX(800px);
        }

        .logo-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo {
            width: 150px;
            height: 150px;
            object-fit: contain;
            margin-bottom: 15px;
            filter: drop-shadow(0 8px 16px rgba(0, 0, 0, 0.2));
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .logo-container h2 {
            font-size: 2.8rem;
            color: white;
            margin-bottom: 10px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            font-weight: 800;
        }

        .brand-text {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.1rem;
            font-weight: 400;
            letter-spacing: 1px;
        }

        /* Cercle de fond animé */
        .container:before {
            content: "";
            position: absolute;
            height: 2000px;
            width: 2000px;
            top: -10%;
            right: 48%;
            transform: translateY(-50%);
            background: linear-gradient(135deg, #FDD835 0%, #FFB300 25%, #FF9800 50%, #42A5F5 75%, #66BB6A 100%);
            transition: 1.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border-radius: 50%;
            z-index: 6;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        /* Animation du mode inscription */
        .container.sign-up-mode:before {
            transform: translate(100%, -50%);
            right: 52%;
        }

        .container.sign-up-mode .left-panel .content {
            transform: translateX(-800px);
        }

        .container.sign-up-mode .signin-signup {
            left: 25%;
        }

        .container.sign-up-mode form.sign-up-form {
            opacity: 1;
            z-index: 2;
            pointer-events: all;
        }

        .container.sign-up-mode form.sign-in-form {
            opacity: 0;
            z-index: 1;
            pointer-events: none;
        }

        .container.sign-up-mode .right-panel .content {
            transform: translateX(0%);
        }

        .container.sign-up-mode .left-panel {
            pointer-events: none;
        }

        .container.sign-up-mode .right-panel {
            pointer-events: all;
        }

        /* Responsive */
        @media (max-width: 870px) {
            .container {
                min-height: 800px;
                height: 100vh;
            }

            .signin-signup {
                width: 100%;
                top: 95%;
                transform: translate(-50%, -100%);
                left: 50%;
            }

            .container.sign-up-mode .signin-signup {
                left: 50%;
                top: 5%;
                transform: translate(-50%, 0);
            }

            .panels-container {
                grid-template-columns: 1fr;
                grid-template-rows: 1fr 2fr 1fr;
            }

            .panel {
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                padding: 2.5rem 8%;
                grid-column: 1 / 2;
            }

            .right-panel {
                grid-row: 3 / 4;
            }

            .left-panel {
                grid-row: 1 / 2;
            }

            .image {
                width: 200px;
                transition: transform 0.9s ease-in-out;
                transition-delay: 0.6s;
            }

            .panel .content {
                padding-right: 15%;
                transition: transform 0.9s ease-in-out;
                transition-delay: 0.8s;
            }

            .panel h3 {
                font-size: 1.2rem;
            }

            .panel p {
                font-size: 0.7rem;
                padding: 0.5rem 0;
            }

            .btn.transparent {
                width: 110px;
                height: 35px;
                font-size: 0.7rem;
            }

            .container:before {
                width: 1500px;
                height: 1500px;
                transform: translateX(-50%);
                left: 30%;
                bottom: 68%;
                right: initial;
                top: initial;
                transition: 2s ease-in-out;
            }

            .container.sign-up-mode:before {
                transform: translate(-50%, 100%);
                bottom: 32%;
                right: initial;
            }

            .container.sign-up-mode .left-panel .content {
                transform: translateY(-300px);
            }

            .container.sign-up-mode .right-panel .content {
                transform: translateY(0px);
            }

            .right-panel .content {
                transform: translateY(300px);
            }

            form {
                padding: 0 1.5rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
            
            .logo-container {
                margin-bottom: 10px;
            }
            
            .logo {
                width: 80px;
                height: 80px;
            }
            
            .logo-container h2 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 570px) {
            form {
                padding: 0 1rem;
            }

            .panel .content {
                padding: 0.5rem 1rem;
            }

            .container {
                padding: 1.5rem;
            }

            .container:before {
                bottom: 72%;
                left: 50%;
            }

            .container.sign-up-mode:before {
                bottom: 28%;
                left: 50%;
            }
            
            .panel .content {
                padding: 0;
            }
            
            .panel h3 {
                font-size: 1rem;
            }
            
            .brand-text {
                display: none;
            }
        }

        select {
            cursor: pointer;
        }
        
        .checkbox-field {
            margin: 10px 0;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
        }
        
        .checkbox-field input {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- FORMULAIRE CONNEXION -->
                <form action="" method="POST" class="sign-in-form">
                    <input type="hidden" name="action" value="signin">
                    <h2 class="title">Connexion</h2>
                   
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Mot de passe" required>
                    </div>
                    <button type="submit" class="btn">Se connecter</button>
                </form>

                <!-- FORMULAIRE INSCRIPTION -->
                <form action="" method="POST" class="sign-up-form">
                    <input type="hidden" name="action" value="signup">
                    <h2 class="title">Inscription</h2>

                    <div class="form-row">
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="nom" placeholder="Nom" required>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="prenom" placeholder="Prénom" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-field">
                            <i class="fas fa-calendar"></i>
                            <input type="date" name="date_naissance" required>
                        </div>
                        <!-- <div class="input-field">
                            <i class="fas fa-venus-mars"></i>
                            <select name="sexe" required>
                                <option value="">Sexe</option>
                                <option value="M">Masculin</option>
                                <option value="F">Féminin</option>
                            </select>
                        </div> -->
                    </div>

                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="tel" name="telephone" placeholder="Téléphone (optionnel)">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-map-marker-alt"></i>
                        <textarea name="adresse" placeholder="Adresse (optionnel)" rows="2"></textarea>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <!-- <div class="input-field">
                        <i class="fas fa-user-tag"></i>
                        <select name="role" required>
                            <option value="">Choisir un rôle</option>
                            <option value="eleve">Élève</option>
                            <option value="prof">Professeur</option>
                        </select>
                    </div> -->

                    <div class="form-row">
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Mot de passe" minlength="8" required>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="confirm_password" placeholder="Confirmer" minlength="8" required>
                        </div>
                    </div>

                    <div class="checkbox-field">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">J'accepte les <a href="#" target="_blank">conditions d'utilisation</a></label>
                    </div>

                    <button type="submit" class="btn">S'inscrire</button>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <div class="logo-container">
                        <img src="./assets/images/stockPro.svg" class="logo" alt="Logo StockPro">
                        <h2>StockPro</h2>
                        <p class="brand-text">Excellence • Discipline • Réussite</p>
                    </div>
                    <h3>Nouveau ici ?</h3>
                    <p>Rejoignez la plateforme StockPro et<br>accédez à tous nos services éducatifs</p>
                    <button class="btn transparent" id="sign-up-btn">S'inscrire</button>
                </div>
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <div class="logo-container">
                        <img src="./assets/images/stockPro.svg" alt="">
                        <h2>StockPro</h2>
                        <p class="brand-text">Excellence • Discipline • Réussite</p>
                    </div>
                    <h3>Déjà membre ?</h3>
                    <p>Connectez-vous pour accéder<br>à votre espace personnel</p>
                    <button class="btn transparent" id="sign-in-btn">Se connecter</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });

        // Animation au chargement
        window.addEventListener('load', () => {
            container.style.opacity = '0';
            container.style.transform = 'scale(0.9)';
            setTimeout(() => {
                container.style.transition = 'all 0.5s ease';
                container.style.opacity = '1';
                container.style.transform = 'scale(1)';
            }, 100);
        });
    </script>
</body>
</html>