-- 1. Table des Utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, -- Correction : suppression du '0'
    phone VARCHAR(20),
    address TEXT,
    role ENUM('client', 'vendeur') DEFAULT 'client', -- Ajouté pour distinguer les utilisateurs
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 2. Table des Catégories
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    FOREIGN KEY (parent_id) REFERENCES categories(id) ON DELETE CASCADE
);

-- 3. Table des Produits
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    user_id INT NOT NULL,
    category_id INT NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    status ENUM('disponible', 'vendu', 'reserve') DEFAULT 'disponible',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- 4. Table des Commandes
CREATE TABLE commandes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    commande_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT DEFAULT 1,
    price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (commande_id) REFERENCES commande(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);



-- Insertion des catégories
INSERT INTO categories (name) VALUES ('Hommes'), ('Femmes'), ('Enfants');
INSERT INTO categories (name, parent_id) VALUES 
('Chemises', 1), ('Pantalons', 1), ('Vestes', 1), 
('Robes', 2), ('Tops', 2), ('Jupes', 2), 
('Petites Robes', 3), ('Pantalons', 3), ('Pull ensemble', 3);
