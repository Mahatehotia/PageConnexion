DROP TABLE IF EXISTS utilisateurs;

CREATE TABLE utilisateurs (

  idUser int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  prenomUser VARCHAR(50) NOT NULL ,
  nomUser  varchar(32)  NOT NULL,
  pseudo VARCHAR(10) NOT NULL ,
  motDePasse VARCHAR(40) NOT NULL,
  adresseEmail VARCHAR(128) NOT NULL,
  dateInscription VARCHAR(40),
  sexeUser ENUM('homme','femme','autre')

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
