-- Gestione database remoto:
-- http://spano.sc.unica.it/phpmyadmin

drop database amm15_ripoliEmanuela;

create database amm15_ripoliEmanuela;

drop user 'ripoliEmanuela'@'localhost';

create user 'ripoliEmanuela'@'localhost' identified by 'tasso6062';

grant all on amm15_ripoliEmanuela.* to 'ripoliEmanuela'@'localhost';
