CREATE DATABASE IF NOT EXISTS gestion_boutique;
USE gestion_boutique;

-- 1. Table clients (manquante dans ton code)
CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    telephone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 2. Utilisateurs
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    role ENUM('admin','vendeur') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Produits
CREATE TABLE produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prix_achat DECIMAL(10,2) NOT NULL,
    prix_vente DECIMAL(10,2) NOT NULL,
    quantite INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 4. Ventes
CREATE TABLE ventes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    utilisateur_id INT NOT NULL,
    date_vente DATETIME DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (client_id) REFERENCES clients(id),
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
);

-- 5. Détails des ventes
CREATE TABLE vente_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vente_id INT NOT NULL,
    produit_id INT NOT NULL,
    quantite INT NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (vente_id) REFERENCES ventes(id) ON DELETE CASCADE,
    FOREIGN KEY (produit_id) REFERENCES produits(id)
);

-- Données de test
INSERT INTO utilisateurs (nom, email, mot_de_passe, role)
VALUES ('Admin', 'admin@test.com', '123456', 'admin');

INSERT INTO produits (nom, prix_achat, prix_vente, quantite)
VALUES ('Produit A', 5000, 7000, 20);

INSERT INTO clients (nom, telephone)
VALUES ('Jean', '0340000000');

-- Vérification rapide
SELECT * FROM utilisateurs;
SELECT * FROM produits;
SELECT * FROM clients;