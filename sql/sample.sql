DROP TABLE IF EXISTS utilisateurs;
DROP TABLE IF EXISTS chiens;

CREATE TABLE regions(
  idRegion INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nomRegion VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE departements(
  idDepartement INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nomDepartement VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE utilisateurs (
  idUtilisateur INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  prenomUtilisateur VARCHAR(50) NOT NULL ,
  nomUtilisateur  VARCHAR(32)  NOT NULL,
  pseudoUtilisateur VARCHAR(10) NOT NULL ,
  mdpUtilisateur VARCHAR(40) NOT NULL,
  mailUtilisateur VARCHAR(128) NOT NULL,
  sexeUtilisateur ENUM('homme','femme','autre'),
  avatarUtilisateur VARCHAR(50),
  inscriptionUtilisateur VARCHAR(40),
  cpUtilisateur CHAR(5),
  id_Departement INT(10),
  id_Region INT(10),
    foreign KEY (id_Region) references regions(idRegion) on delete cascade,
    foreign KEY (id_Departement) references departements(idDepartement) on delete cascade


) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE dogs(
  idDog INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  prenomChien VARCHAR(50) NOT NULL,
  raceChien VARCHAR(50) NOT NULL,
  dateNaissanceChien DATE,
  lofChien INT(10),
  loofChien INT(10),
  puceChien INT(10),
  avatar VARCHAR(50),
  id_Utilisateur INT(10),
  foreign KEY (id_Utilisateur) references utilisateurs(idUtilisateur) on delete cascade
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;