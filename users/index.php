<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients - Gestion Boutique</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, sans-serif;
            background: #f5f6f8;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 15px;
        }

        h1 {
            font-size: 1.9rem;
            color: #1a1a1a;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 0.95rem;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        .btn.add i {
            font-size: 1.1rem;
        }

        .table-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 14px 16px;
            text-align: left;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: #444;
            border-bottom: 2px solid #e5e7eb;
        }

        tr {
            border-bottom: 1px solid #f0f0f0;
        }

        tr:last-child {
            border-bottom: none;
        }

        tr:hover {
            background: #f9fafb;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .btn-action {
            background: none;
            border: none;
            color: #6b7280;
            cursor: pointer;
            font-size: 1.1rem;
            padding: 4px;
        }

        .btn-action:hover {
            color: #2563eb;
        }

        .btn-action.delete:hover {
            color: #dc2626;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6b7280;
        }

        .empty-state i {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: #d1d5db;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            table {
                font-size: 0.95rem;
            }

            th, td {
                padding: 12px 10px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <header>
        <h1><i class="fas fa-users"></i> Liste des Clients</h1>
        <a href="ajouter.html" class="btn add">
            <i class="fas fa-plus"></i> Nouveau client
        </a>
    </header>

    <div class="table-container">

        <!-- Si tu as des clients via PHP/MySQL, remplace ce bloc par ton code PHP -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Téléphone</th>
                    <th>Date d'ajout</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemple statique - à remplacer par une boucle PHP -->
                <tr>
                    <td>1</td>
                    <td>Jean Rakoto</td>
                    <td>034 00 000 00</td>
                    <td>2025-01-15</td>
                    <td class="actions">
                        <button class="btn-action" title="Voir détails"><i class="fas fa-eye"></i></button>
                        <button class="btn-action" title="Modifier"><i class="fas fa-edit"></i></button>
                        <button class="btn-action delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Marie Rasoa</td>
                    <td>032 11 222 33</td>
                    <td>2025-02-02</td>
                    <td class="actions">
                        <button class="btn-action" title="Voir détails"><i class="fas fa-eye"></i></button>
                        <button class="btn-action" title="Modifier"><i class="fas fa-edit"></i></button>
                        <button class="btn-action delete" title="Supprimer"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>

                <!-- Si aucun client -->
                <!--
                <tr>
                    <td colspan="5">
                        <div class="empty-state">
                            <i class="far fa-user"></i>
                            <p>Aucun client enregistré pour le moment.</p>
                            <a href="ajouter.html" class="btn">Ajouter le premier client</a>
                        </div>
                    </td>
                </tr>
                -->
            </tbody>
        </table>
    </div>

</div>

</body>
</html>