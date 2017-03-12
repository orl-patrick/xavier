
# creation database (ménage d'abord)
DROP DATABASE IF EXISTS xavier_db;
CREATE DATABASE xavier_db DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;

# on cree ensuite le user pour la gerer
GRANT all ON xavier_db.* TO 'eole' IDENTIFIED BY 'pisci2010netta';

# on selectionne la database
USE xavier_db;

# on cree la table users (apres avoir fait le ménage)
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(50),
  email VARCHAR(200),
  tel VARCHAR(14),
  message TEXT,
  age VARCHAR(5),
  happy varchar(10)
) DEFAULT CHARACTER SET=utf8;

# controle
DESCRIBE users;
