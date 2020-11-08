
ALTER TABLE `bateau` ADD `photo` VARCHAR(100) NULL DEFAULT NULL AFTER `nom`; 

UPDATE `bateau` SET `photo` = 'images/bateaux/korAnt.jpg' WHERE `bateau`.`id` = 1; 
UPDATE `bateau` SET `photo` = 'images/bateaux/ArSolen.jpg' WHERE `bateau`.`id` = 2; 
UPDATE `bateau` SET `photo` = 'images/bateaux/alXi.jpg' WHERE `bateau`.`id` = 3; 
UPDATE `bateau` SET `photo` = 'images/bateaux/luceIsle.jpg' WHERE `bateau`.`id` = 4; 
UPDATE `bateau` SET `photo` = 'images/bateaux/maellys.jpg' WHERE `bateau`.`id` = 5; 


INSERT INTO `traversee` (`num`, `date`, `heure`, `codeLiaison`, `idBateau`) VALUES
(401197, '2020-07-10', '07:45:00', 11, 1),
(401198, '2020-07-10', '09:15:00', 11, 2),
(401199, '2020-07-10', '10:50:00', 11, 3),
(401200, '2020-07-10', '12:15:00', 16, 4),
(401201, '2020-07-10', '14:15:00', 16, 5);