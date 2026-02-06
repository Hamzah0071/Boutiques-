<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions d’utilisation – École</title>
    <meta name="description" content="Conditions d'utilisation du site web de l'école - Règles d'accès et d'utilisation">
    
    <style>
        :root {
            --primary: rgb(55,152,121);
            --primary-dark: rgba(128, 2, 2, 1);
            --text: #2d3748;
            --light: #f7fafc;
            --gray: #718096;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacOSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--light);
            color: var(--text);
            line-height: 1.7;
            min-height: 100vh;
            padding: 20px 15px;
        }

        .container {
            max-width: 860px;
            margin: 0 auto 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .header {
            background: var(--primary);
            color: white;
            padding: 2.5rem 2rem 2rem;
            text-align: center;
        }

        .header h1 {
            font-size: 2.1rem;
            margin-bottom: 0.6rem;
        }

        .date {
            font-size: 0.95rem;
            opacity: 0.9;
        }

        .content {
            padding: 2.5rem 2rem 3rem;
        }

        h2 {
            color: var(--primary-dark);
            font-size: 1.45rem;
            margin: 2.2rem 0 1rem;
            border-left: 5px solid var(--primary);
            padding-left: 1rem;
        }

        p {
            margin-bottom: 1.1rem;
            color: #4a5568;
        }

        ul {
            margin: 1rem 0 1.5rem 1.8rem;
            list-style: disc;
        }

        li {
            margin-bottom: 0.6rem;
        }

        strong {
            color: var(--primary-dark);
        }

        .accept-box {
            background: #ebf8ff;
            border: 1px solid #bee3f8;
            border-radius: 8px;
            padding: 1.4rem;
            margin: 2.5rem 0;
            text-align: center;
            font-weight: 500;
        }

        .back-btn {
            display: inline-block;
            margin: 0 auto 2rem;
            padding: 0.9rem 2.2rem;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }

        .back-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        .footer-note {
            text-align: center;
            font-size: 0.9rem;
            color: var(--gray);
            margin-top: 3rem;
            padding-bottom: 1.5rem;
        }

        @media (max-width: 640px) {
            .content, .header {
                padding-left: 1.4rem;
                padding-right: 1.4rem;
            }
            .header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Conditions d’utilisation du site</h1>
        <p class="date">Dernière mise à jour : 18 janvier 2026</p>
    </div>

    <div class="content">

        <h2>1. Objet et acceptation</h2>
        <section>
            <h2>1. Objet</h2>
            <p>
                Les présentes conditions d’utilisation définissent les règles d’accès
                et d’utilisation du site <strong>[Nom du site]</strong>.
                Toute navigation sur le site implique l’acceptation de ces conditions.
            </p>
        </section>

        <section>
            <h2>2. Accès au site</h2>
            <p>
                Le site est accessible gratuitement à tout utilisateur disposant
                d’un accès à Internet. Les frais liés à l’accès restent à la charge de l’utilisateur.
            </p>
        </section>

        <section>
            <h2>3. Utilisation du site</h2>
            <p>
                L’utilisateur s’engage à utiliser le site de manière légale et à ne pas
                porter atteinte à son bon fonctionnement.
            </p>
        </section>

        <section>
            <h2>4. Responsabilité</h2>
            <p>
                L’éditeur ne peut être tenu responsable des interruptions du site,
                des bugs ou de toute perte de données.
            </p>
        </section>

        <section>
            <h2>5. Propriété intellectuelle</h2>
            <p>
                Tous les contenus présents sur le site (textes, images, logos, codes)
                sont protégés par le droit de la propriété intellectuelle.
            </p>
        </section>

        <section>
            <h2>6. Modification des conditions</h2>
            <p>
                L’éditeur se réserve le droit de modifier les présentes conditions
                à tout moment. Les utilisateurs sont invités à les consulter régulièrement.
            </p>
        </section>

        <footer>
            <p>&copy; 2026 - [Nom du site]. Tous droits réservés.</p>
        </footer>

</body>
</html>