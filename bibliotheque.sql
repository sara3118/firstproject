create table bibliotheque (id_bibliotheque int primary key auto_increment, nom varchar(200), adresse varchar(200), telephone varchar(15));
​
create table livre (id_livre int primary key auto_increment, id_bibliotheque int,titre varchar(200), genre varchar(200));
​
create table editeur(id_editeur int primary key auto_increment, nom varchar(200), adresse varchar(200));
​
create table auteur(id_auteur int primary key auto_increment,  nom varchar(200), prenom varchar(200),nationalite varchar(200));
​
create client(id_client int primary key auto_increment,  nom varchar(200), prenom varchar(200), telephone varchar(15));
​
create emprunter (id_emprunter int primary key auto_increment, id_client int, id_livre int, date_emprunt date);
​
​
create retour (id_retour int primary key auto_increment, id_client int, id_livre int, date_retour date);
​
create rendre (id_retour int primary key auto_increment, id_client int, id_livre int, date_retour date);
​
create publier(id_publier int primary key auto_increment, id_editeur int, id_auteur int, id_livre int);
​
INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES (NULL, 'BNF', 'Quai François Mauriac\r\n75 013 Paris', '01 53 79 59 59'), (NULL, 'SONIA LIBRARY', '2 Rue des Monts Gets\r\n94400 Vitry sur Seine', '01 44 55 66 77');
​
INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES (NULL, 'MEHDI LIBRARY', '12 RUE DE LA JUSTICE\r\n93400 SAINT OUEN', '0122 33 44 55');
​
INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES (NULL, 'SOSO LIBRARY', '12 RUE DE LA GARE\r\n95100 ARGENTEUIL', '01 21 13 14 15');
​
INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES (NULL, 'MIMI LIBRARY', '22 ALLEE DE BATELIERS\r\n93110 ROSNY SOUS BOIS', '01 21 34 45 56');
​
INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES (NULL, 'SAFIA LIBRARY', '40 AVENUE DE LA RANCUNE\r\n95100 ARGENTEUIL', '01 24 46 68 80');
​
INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES (NULL, 'DZ LIBRARY', '62 BOULEVARD DE LA FIERTE\r\n93110 ROSNY SOUS BOIS', '01 64 42 88 00');
​
INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logolivre`) VALUES (NULL, '2', 'L\'étranger', 'Littérature française', '');
​
INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logolivre`) VALUES(NULL, '1', 'Caligula', 'Littérature française', '');
​
INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logolivre`) VALUES(NULL, '3', 'Correspondance', 'Littérature française', '');
​
INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logolivre`) VALUES(NULL, '2', 'Contes de la folie ordinaire', 'Littérature américaine', '');
​
INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logolivre`) VALUES(NULL, '1', 'La peste', 'Littérature française', '');
​
INSERT INTO `editeur` (`id_editeur`, `nom`,`adresse`) VALUES (NULL, 'FLAMMARION','87 Quai Panhard et Levassor\r\n75016 Paris');
​
INSERT INTO `auteur` (`id_auteur`, `nom`,`prenom`,`nationalite`) VALUES (NULL, 'CAMUS','Albert','Française');
​
INSERT INTO `auteur` (`id_auteur`, `nom`,`prenom`,`nationalite`) VALUES (NULL, 'BUCKOVSKI','Charles','Américaine');
​
INSERT INTO `auteur` (`id_auteur`, `nom`,`prenom`,`nationalite`) VALUES (NULL, 'CESAIRE','Aimé','Française');
​
INSERT INTO `auteur` (`id_auteur`, `nom`,`prenom`,`nationalite`) VALUES (NULL, 'ZOLA','Emile','Française');
​
INSERT INTO `client` (`id_client`, `nom`, `prenom`, `telephone`) VALUES (NULL, 'DOUADI', 'Sonia', '06 07 08 09 00'), (NULL, 'SCHOENARTS', 'Matthias', '06 05 04 03 02');
​
INSERT INTO `emprunter` (`date_emprunt`, `id_client`, `id_livre`, `id_emprunter`) VALUES ('2020-09-18', '1', '2', NULL);
​
INSERT INTO `emprunter` (`date_emprunt`, `id_client`, `id_livre`, `id_emprunter`) VALUES ('2020-09-18', '2', '4', NULL);
​
DELETE FROM `emprunter` WHERE id_client=1 AND id_livre=2;
​
UPDATE `bibliotheque` SET `nom` = 'BNF BNF' WHERE `id_bibliotheque` = 1
​
SELECT nom, adresse FROM `bibliotheque` WHERE id_bibliotheque=1
​
SELECT adresse FROM `bibliotheque` WHERE nom !="SONIA LIBRARY" 
​
SELECT adresse FROM `bibliotheque` WHERE nom="SONIA LIBRARY"
​
SELECT telephone FROM `client` WHERE id_client=1
​
SELECT titre FROM `livre` WHERE genre="Littérature française"
AND `id_bibliotheque`=2
​
SELECT titre FROM `livre` WHERE genre="Littérature américaine"
AND `id_bibliotheque`=2
​
SELECT titre FROM `livre` WHERE genre="Littérature française"
AND NOT `id_bibliotheque`=3
​
SELECT titre FROM `livre` ORDER BY titre ASC;
​
SELECT titre FROM `livre` ORDER BY titre DESC;
​
Select adresse FROM bibliotheque WHERE   adresse like "%gare%" and nom like "%biblio%" or telephone like "04%"
​
​
Select adresse FROM bibliotheque WHERE   adresse like "%gare_" and nom like "%biblio%" or telephone like "04%"
​
SELECT titre FROM `bibliotheque`, `livre` WHERE livre.id_bibliotheque=bibliotheque.id_bibliotheque
​
SELECT nom, titre, date_emprunt 
FROM client, livre, emprunter 
WHERE emprunter.id_client=client.id_client and emprunter.id_livre=livre.id_livre
