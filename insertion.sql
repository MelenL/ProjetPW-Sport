/*
INSERTION

- Structure de données fictives.
*/

INSERT INTO Categorie (nomCategorie, codeRaccourci) VALUES
                                                        ('Moins de 12 ans', 'M12'),
                                                        ('Moins de 15 ans', 'M15'),
                                                        ('Moins de 18 ans', 'M18'),
                                                        ('Adultes', 'ADT');

INSERT INTO Contact (nom, prenom, email, numeroTel) VALUES
                                                        ('Dupont', 'Jean', 'jean.dupont@gmail.com', '0123456789'),
                                                        ('Martin', 'Sophie', 'sophie.martin@gmail.com', '0234567890'),
                                                        ('Lefevre', 'Pierre', 'pierre.lefevre@gmail.com', '0345678901'),
                                                        ('Dubois', 'Marie', 'marie.dubois@gmail.com', '0456789012'),
                                                        ('Leroy', 'Luc', 'luc.leroy@gmail.com', '0567890123'),
                                                        ('Moreau', 'Julie', 'julie.moreau@gmail.com', '0678901234'),
                                                        ('Lambert', 'Alex', 'alex.lambert@gmail.com', '0789012345'),
                                                        ('Roux', 'Anna', 'anna.roux@gmail.com', '0890123456'),
                                                        ('Fournier', 'Nicolas', 'nicolas.fournier@gmail.com', '0901234567'),
                                                        ('Dumas', 'Isabelle', 'isabelle.dumas@gmail.com', '0012345678');

INSERT INTO Licencie (numeroLicence, nom, prenom, idCategorie, idContact) VALUES
                                                                              (1001, 'Dupont', 'Jean', 1, 1),
                                                                              (1002, 'Martin', 'Sophie', 2, 2),
                                                                              (1003, 'Lefevre', 'Pierre', 3, 3),
                                                                              (1004, 'Dubois', 'Marie', 4, 4),
                                                                              (1005, 'Leroy', 'Luc', 1, 5),
                                                                              (1006, 'Moreau', 'Julie', 2, 6),
                                                                              (1007, 'Lambert', 'Alex', 3, 7),
                                                                              (1008, 'Roux', 'Anna', 4, 8),
                                                                              (1009, 'Fournier', 'Nicolas', 1, 9),
                                                                              (1010, 'Dumas', 'Isabelle', 2, 10);

INSERT INTO Educateur (idLicencie, email, motDePasse, estAdministrateur) VALUES
                                                                             (1, 'jean.d@gmail.com', 'password123', 1),
                                                                             (2, 'sophie.m@gmail.com', 'pass456', 0),
                                                                             (3, 'pierre.l@gmail.com', 'secret789', 0),
                                                                             (4, 'marie.d@gmail.com', 'adminPass', 1),
                                                                             (5, 'luc.l@gmail.com', 'test123', 0);


INSERT INTO MailEdu (dateEnvoi, objet, message, idEducateur) VALUES
                                                                 ('2023-12-01', 'Réunion d"équipe', 'Bonjour à tous, la réunion aura lieu demain à 15h.', 1),
                                                                 ('2023-12-02', 'Entraînement annulé', 'Entraînement annulé en raison des conditions météorologiques.', 4),
                                                                 ('2023-12-03', 'Nouvelle saison', 'Bienvenue à la nouvelle saison de sport! Prêts pour de nouvelles victoires?', 2),
                                                                 ('2023-12-04', 'Réunion urgente', 'Une réunion urgente est prévue ce soir à 18h. Soyez tous présents.', 1),
                                                                 ('2023-12-05', 'Championnat à venir', 'Préparez-vous pour le prochain championnat. Entraînements supplémentaires cette semaine.', 3);

INSERT INTO MailContact (dateEnvoi, objet, message, idContact) VALUES
                                                                   ('2023-12-01', 'Informations importantes', 'Voici quelques informations importantes pour la saison à venir.', 1),
                                                                   ('2023-12-02', 'Inscription confirmée', 'L"inscription de votre enfant a été confirmée. Bienvenue dans l"équipe!', 2),
                                                                   ('2023-12-03', 'Entraînement spécial', 'Entraînement spécial prévu ce week-end. Soyez prêts!', 3),
                                                                   ('2023-12-04', 'Remise des prix', 'La remise des prix aura lieu le mois prochain. Réservez la date.', 4),
                                                                   ('2023-12-05', 'Recrutement de bénévoles', 'Nous avons besoin de bénévoles pour aider lors des événements à venir. Volontaires bienvenus!', 5);
