--
-- Base de données :  `eurhacka`
--
CREATE DATABASE `eurhacka`;

USE eurhacka;


--
-- Structure de la table `user`
--
CREATE TABLE `user` (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    pseudo VARCHAR(45),
    mdp VARCHAR(10)
);

--
-- Contenu de la table `user`
--
INSERT INTO `user` (`pseudo`, `mdp`) VALUES
('noel', 'noel');

ALTER TABLE `user` DROP `mdp`;

CREATE TABLE `wishlist` (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(200),
    photo TEXT NOT NULL,
    price INT NOT NULL
);
