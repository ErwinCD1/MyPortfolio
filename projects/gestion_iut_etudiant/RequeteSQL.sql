insert into Departement values (1, 'GEII', 'Genie electrique et informatique industrielle', 'secondaire', '42', '48', '47.647176', '6.84361', '2011/2012', '1');
insert into Departement values (2, 'GEII', 'Genie electrique et informatique industrielle', 'secondaire', '56', '36', '47.647176', '6.84361', '2012/2013', '1');
insert into Departement values (3, 'GEII', 'Genie electrique et informatique industrielle', 'secondaire', '52', '50', '47.647176', '6.84361', '2013/2014', '1');

insert into Departement values (4, 'INFO', 'Informatique', 'secondaire', '93', '82', '6.84361', '47.647176', '2011/2012', '1');
insert into Departement values (5, 'INFO', 'Informatique', 'secondaire', '117', '57', '6.84361', '47.647176', '2012/2013', '1');
insert into Departement values (6, 'INFO', 'Informatique', 'secondaire', '110', '84', '6.84361', '47.647176', '2013/2014', '1');

insert into Departement values (7, 'GTE', 'Genie thermique et electrique', 'secondaire', '68', '46', '6.84361', '47.647176', '2011/2012', '1');
insert into Departement values (8, 'GTE', 'Genie thermique et electrique', 'secondaire', '61', '48', '6.84361', '47.647176', '2012/2013', '1');
insert into Departement values (9, 'GTE', 'Genie thermique et electrique', 'secondaire', '68', '51', '6.84361', '47.647176', '2013/2014', '1');

insert into Departement values (10, 'MP', 'Mesures physique', 'secondaire', '37', '38', '6.804675', '47.49656', '2011/2012', '3');
insert into Departement values (11, 'MP', 'Mesures physique', 'secondaire', '32', '35', '6.804675', '47.49656', '2012/2013', '3');
insert into Departement values (12, 'MP', 'Mesures physique', 'secondaire', '50', '29', '6.804675', '47.49656', '2013/2014', '3');

insert into Departement values (13, 'TC', 'technique de commercialisation', 'tertiaire', '82', '103', '6.857268', '47.640497', '2011/2012', '2');
insert into Departement values (14, 'TC', 'technique de commercialisation', 'tertiaire', '93', '74', '6.857268', '47.640497', '2012/2013', '2');
insert into Departement values (15, 'TC', 'technique de commercialisation', 'tertiaire', '85', '84', '6.857268', '47.640497', '2013/2014', '2');

insert into Departement values (16, 'R.T', 'reseau et telecom', 'secondaire', '51', '42', '6.804675', '47.49656', '2011/2012', '3');
insert into Departement values (17, 'R.T', 'reseau et telecom', 'secondaire', '52', '42', '6.804675', '47.49656', '2012/2013', '3');
insert into Departement values (18, 'R.T', 'reseau et telecom', 'secondaire', '57', '46', '6.804675', '47.49656', '2013/2014', '3');

insert into Departement values (19, 'MMI', 'metiers du multimédia et de l'Interne', 'secondaire', '75', '55', '6.804675', '47.49656', '2011/2012', '3');
insert into Departement values (20, 'MMI/SRC', 'metiers du multimédia et de l'Interne', 'secondaire', '76', '61', '6.804675', '47.49656', '2012/2013', '3');
insert into Departement values (21, 'MMI/SRC', 'metiers du multimédia et de l'Interne', 'secondaire', '78', '57', '6.804675', '47.49656', '2013/2014', '3');

insert into Departement values (22, 'CS', 'carriere sociale', 'tertiaire', '107', '102', '6.84361', '47.647176', '2011/2012', '1');
insert into Departement values (23, 'CS', 'carriere sociale', 'tertiaire', '124', '82', '6.84361', '47.647176', '2012/2013', '1');
insert into Departement values (24, 'CS', 'carriere sociale', 'tertiaire', '101', '105', '6.84361', '47.647176', '2013/2014', '1');

insert into Departement values (25, 'GACO', 'Gestion administrative et commerciale des organisations', 'tertiaire', '86', '81', '6.804675', '47.49656', '2011/2012', '3');
insert into Departement values (26, 'GACO', 'Gestion administrative et commerciale des organisations', 'tertiaire', '86', '79', '6.804675', '47.49656', '2012/2013', '3');
insert into Departement values (27, 'GACO', 'Gestion administrative et commerciale des organisations', 'tertiaire', '82', '75', '6.804675', '47.49656', '2013/2014', '3');

insert into Departement values (28, 'GC', 'genie civile', 'secondaire', '67', '47', '6.84361', '47.647176', '2011/2012', '1');
insert into Departement values (29, 'GC', 'genie civile', 'secondaire', '55', '50', '6.84361', '47.647176', '2012/2013', '1');
insert into Departement values (30, 'GC', 'genie civile', 'secondaire', '57', '52', '6.84361', '47.647176', '2013/2014', '1');


les requetes 1 :

SELECT nom_dept,description_dept FROM Departement WHERE id_dept>1 GROUP BY nom_dept;

requetes 2 :

SELECT nom_dept,SUM(nbre_etu_1A_dept) AS Nombre_Total_Etu_1a,SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu_2a,SUM(nbre_etu_1A_dept)+SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu, annee_universitaire,nom_dept FROM Departement WHERE id_dept>1 GROUP BY nom_dept,annee_universitaire ORDER BY annee_universitaire,id_site, nom_dept;

requetes 3 :

SELECT nom_dept,SUM(nbre_etu_1A_dept) AS Nombre_Total_Etu_1a,SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu_2a,SUM(nbre_etu_1A_dept)+SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu, annee_universitaire,nom_dept FROM Departement WHERE id_dept>1 GROUP BY nom_dept,annee_universitaire ORDER BY annee_universitaire,id_site, nom_dept;

requetes 4 : 

SELECT annee_universitaire,SUM(nbre_etu_1A_dept) AS Nombre_Total_Etu_1a,SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu_2a, SUM(nbre_etu_1A_dept)+SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu FROM Departement WHERE id_dept>1 GROUP BY annee_universitaire;