drop database if exists gestion_eleves;
create database gestion_eleves;
use gestion_eleves; 

create table eleve(
    id_eleve int(5) not null auto_increment, 
    nom varchar(50) not null, 
    prenom varchar(50) not null, 
    classe varchar(50) not null,
    matiere1 decimal(5,2) default 0.00,
    matiere2 decimal(5,2) default 0.00,
    matiere3 decimal(5,2) default 0.00,
    matiere4 decimal(5,2) default 0.00,
    matiere5 decimal(5,2) default 0.00,
    primary key(id_eleve)
);

