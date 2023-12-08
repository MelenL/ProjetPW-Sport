/*
CREATE

- Création des tables pour le projet.
*/

CREATE TABLE Categorie (
                           idCategorie INT AUTO_INCREMENT PRIMARY KEY,
                           nomCategorie VARCHAR(255),
                           codeRaccourci VARCHAR(10)
);

CREATE TABLE Contact (
                         idContact INT AUTO_INCREMENT PRIMARY KEY,
                         nom VARCHAR(255),
                         prenom VARCHAR(255),
                         email VARCHAR(255),
                         numeroTel VARCHAR(20)
);


CREATE TABLE Licencie (
                          idLicencie INT AUTO_INCREMENT PRIMARY KEY,
                          numeroLicence INT UNIQUE,
                          nom VARCHAR(255),
                          prenom VARCHAR(255),
                          idCategorie INT,
                          idContact INT,
                          FOREIGN KEY (idCategorie) REFERENCES Categorie(idCategorie),
                          FOREIGN KEY (idContact) REFERENCES Contact(idContact)
);


CREATE TABLE Educateur (
                           idEducateur INT AUTO_INCREMENT PRIMARY KEY,
                           idLicencie INT,
                           email VARCHAR(255),
                           motDePasse VARCHAR(255),
                           estAdministrateur BOOLEAN,
                           FOREIGN KEY (idLicencie) REFERENCES Licencie(idLicencie)
);

CREATE TABLE MailEdu (
                         idMailEdu INT AUTO_INCREMENT PRIMARY KEY,
                         dateEnvoi DATE,
                         objet VARCHAR(255),
                         message TEXT,
                         idEducateur INT,
                         FOREIGN KEY (idEducateur) REFERENCES Educateur(idEducateur)
);

CREATE TABLE MailContact (
                             idMailContact INT AUTO_INCREMENT PRIMARY KEY,
                             dateEnvoi DATE,
                             objet VARCHAR(255),
                             message TEXT,
                             idContact INT,
                             FOREIGN KEY (idContact) REFERENCES Contact(idContact)
);
