DROP TABLE IF EXISTS Departement ;
CREATE TABLE Departement (
id_dept int AUTO_INCREMENT NOT NULL,
nom_dept VARCHAR(20),
description_dept VARCHAR(20),
type_dept ENUM('secondaire','tertaire') NOT NULL,
nbre_etu_1A_dept INT(5),
nbre_etu_2A_dept INT(5),
long_dept FLOAT(8,6),
lat_dept FLOAT(8,6),
annee_universitaire DATE,
id_site INT NOT NULL,
PRIMARY KEY (id_dept) );

DROP TABLE IF EXISTS Site ;
CREATE TABLE Site (id_site int AUTO_INCREMENT NOT NULL,
libelle_site VARCHAR(20),
long_site FLOAT(8,6),
lat_site FLOAT(8,6),
PRIMARY KEY (id_site) ) ;

ALTER TABLE Departement ADD CONSTRAINT FK_Departement_id_site FOREIGN KEY (id_site) REFERENCES Site (id_site);

insert into Site values (1, 'Belfort technhom', '47.647176', '6.84361');
insert into Site values (2, 'Belfort centre', '47.640497', '6.857268');
insert into Site values (3, 'MontbÃ©liard', '47.49656', '6.804675');

insert into Departement values (1, 'GEII', 'Genie electrique et informatique industrielle', 'secondaire', '42', '48', '47.647176', '6.84361', '2011/2012', '1');
insert into Departement values (1, 'GEII', 'Genie electrique et informatique industrielle', 'secondaire', '56', '36', '47.647176', '6.84361', '2012/2013', '1');
insert into Departement values (1, 'GEII', 'Genie electrique et informatique industrielle', 'secondaire', '52', '50', '47.647176', '6.84361', '2013/2014', '1');

insert into Departement values (2, 'INFO', 'Informatique', 'secondaire', '93', '82', '47.647176', '6.84361', '2011/2012', '1');
insert into Departement values (2, 'INFO', 'Informatique', 'secondaire', '117', '57', '47.647176', '6.84361', '2012/2013', '1');
insert into Departement values (2, 'INFO', 'Informatique', 'secondaire', '110', '84', '47.647176', '6.84361', '2013/2014', '1');

insert into Departement values (3, 'GTE', 'Genie thermique et electrique', 'secondaire', '68', '46', '47.647176', '6.84361', '2011/2012', '1');
insert into Departement values (3, 'GTE', 'Genie thermique et electrique', 'secondaire', '61', '48', '47.647176', '6.84361', '2012/2013', '1');
insert into Departement values (3, 'GTE', 'Genie thermique et electrique', 'secondaire', '68', '51', '47.647176', '6.84361', '2013/2014', '1');

insert into Departement values (4, 'MP', 'Mesures physique', 'secondaire', '37', '38', '47.49656', '6.804675', '2011/2012', '3');
insert into Departement values (4, 'MP', 'Mesures physique', 'secondaire', '32', '35', '47.49656', '6.804675', '2012/2013', '3');
insert into Departement values (4, 'MP', 'Mesures physique', 'secondaire', '50', '29', '47.49656', '6.804675', '2013/2014', '3');

insert into Departement values (4, 'TC', 'technique de commercialisation', 'tertiaire', '82', '103', '47.640497', '6.857268', '2011/2012', '2');
insert into Departement values (4, 'TC', 'technique de commercialisation', 'tertiaire', '93', '74', '47.640497', '6.857268', '2012/2013', '2');
insert into Departement values (4, 'TC', 'technique de commercialisation', 'tertiaire', '85', '84', '47.640497', '6.857268', '2013/2014', '2');

insert into Departement values (5, 'R.T', 'reseau et telecom', 'secondaire', '51', '42', '47.49656', '6.804675', '2011/2012', '3');
insert into Departement values (5, 'R.T', 'reseau et telecom', 'secondaire', '52', '42', '47.49656', '6.804675', '2012/2013', '3');
insert into Departement values (5, 'R.T', 'reseau et telecom', 'secondaire', '57', '46', '47.49656', '6.804675', '2013/2014', '3');

insert into Departement values (5, 'MMI/SRC', "metiers du multimédia et de l'Interne", 'secondaire', '75', '55', '47.49656', '6.804675', '2011/2012', '3');
insert into Departement values (5, 'MMI/SRC', "metiers du multimédia et de l'Interne", 'secondaire', '76', '61', '47.49656', '6.804675', '2012/2013', '3');
insert into Departement values (5, 'MMI/SRC', "metiers du multimédia et de l'Interne", 'secondaire', '78', '57', '47.49656', '6.804675', '2013/2014', '3');

insert into Departement values (5, 'CS', 'carriere sociale', 'tertiaire', '107', '102', '47.647176', '6.84361', '2011/2012', '1');
insert into Departement values (5, 'CS', 'carriere sociale', 'tertiaire', '124', '82', '47.647176', '6.84361', '2012/2013', '1');
insert into Departement values (5, 'CS', 'carriere sociale', 'tertiaire', '101', '105', '47.647176', '6.84361', '2013/2014', '1');

insert into Departement values (5, 'GACO', 'Gestion administrative et commerciale des organisations', 'tertiaire', '86', '81', '47.49656', '6.804675', '2011/2012', '3');
insert into Departement values (5, 'GACO', 'Gestion administrative et commerciale des organisations', 'tertiaire', '86', '79', '47.49656', '6.804675', '2012/2013', '3');
insert into Departement values (5, 'GACO', 'Gestion administrative et commerciale des organisations', 'tertiaire', '82', '75', '47.49656', '6.804675', '2013/2014', '3');

insert into Departement values (5, 'GC', 'genie civile', 'secondaire', '67', '47', '47.647176', '6.84361', '2011/2012', '1');
insert into Departement values (5, 'GC', 'genie civile', 'secondaire', '55', '50', '47.647176', '6.84361', '2012/2013', '1');
insert into Departement values (5, 'GC', 'genie civile', 'secondaire', '57', '52', '47.647176', '6.84361', '2013/2014', '1');