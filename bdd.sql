
DROP TABLE IF EXISTS Utilisateur CASCADE;
DROP TABLE IF EXISTS PersHandicape CASCADE;
DROP TABLE IF EXISTS Intervenant CASCADE;

CREATE TABLE IF NOT EXISTS Utilisateur (
  `idUtilisateur` Serial NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `email` TEXT NOT NULL UNIQUE,
  `mdp` TEXT NOT NULL,
  `nom` TEXT NULL,
  `prenom` TEXT NULL,
  `adresse` TEXT NULL,
  `codepostal` TEXT NULL,
  `ville` TEXT NULL,
  `numero` TEXT NULL);

CREATE TABLE IF NOT EXISTS PersHandicape (
  `descriptionhandicap` TEXT(50) NULL,
  `idUtilisateur` INT NOT NULL PRIMARY KEY,
  CONSTRAINT `idUtilisateur`
    FOREIGN KEY (`idUtilisateur`)
    REFERENCES `mydb`.`utilisateur` (`idUtilisateur`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
);

CREATE TABLE IF NOT EXISTS Intervenant (
  `idUtilisateur` INT NOT NULL PRIMARY KEY,
  `aidemenage` Boolean NULL,
  `aiderepas` Boolean NULL,
  `damecompagnie` Boolean NULL,
  `aidepersonne` Boolean NULL,
  CONSTRAINT `idUtilisateur`
    FOREIGN KEY (`idUtilisateur`)
    REFERENCES `mydb`.`utilisateur` (`idUtilisateur`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
);


