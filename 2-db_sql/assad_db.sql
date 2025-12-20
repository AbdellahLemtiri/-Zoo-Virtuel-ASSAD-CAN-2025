CREATE TABLE habitats (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  type_climat VARCHAR(100),
  description TEXT,
  zone_zoo VARCHAR(100)
);

CREATE TABLE animaux (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  espece VARCHAR(100),
  alimentation VARCHAR(100),
  image VARCHAR(255),
  pays_origine VARCHAR(100),
  description_courte TEXT,
  id_habitat INT,
  FOREIGN KEY (id_habitat) REFERENCES habitats(id) 
);

CREATE TABLE utilisateurs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  role VARCHAR(20) NOT NULL,
  mot_passe_hash VARCHAR(255) NOT NULL,
  approuve INT DEFAULT 0,
  CHECK (role IN ('admin', 'guide', 'visiteur'))  
);


CREATE TABLE  visites_guidees (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(150) NOT NULL,
  date_heure DATETIME,
  langue VARCHAR(50),
  capacite_max INT,
  statut ENUM('ouverte', 'annulee', 'terminee') DEFAULT 'ouverte',
  duree INT,
  prix DECIMAL(8,2)
);

CREATE TABLE etapes_visite (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre_etape VARCHAR(150),
  description_etape TEXT,
  ordre_etape INT,
  id_visite INT,
  FOREIGN KEY (id_visite) REFERENCES visites_guidees(id) ON DELETE CASCADE
);

CREATE TABLE reservations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_visite INT,
  id_utilisateur INT,
  nb_personnes INT,
  date_reservation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_visite) REFERENCES visites_guidees(id) ON DELETE CASCADE,
  FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id) ON DELETE CASCADE
);

CREATE TABLE commentaires (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_visite_guidee INT,
  id_utilisateur INT,
  note INT CHECK (note BETWEEN 1 AND 5),  
  texte TEXT,
  date_commentaire TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_visite_guidee) REFERENCES visites_guidees(id) ON DELETE CASCADE,
  FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id) ON DELETE CASCADE
);
