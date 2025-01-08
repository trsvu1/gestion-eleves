drop database if exists gestion_eleves;
create database gestion_eleves;
use gestion_eleves; 

create table eleve(
	id_eleve int(5) not null auto_increment, 
	nom varchar(50) not null, 
	prenom varchar(50) not null, 
	classe varchar(50) not null,
	matiere1 varchar(50) not null,
	matiere2 varchar(50) not null,
	matiere3 varchar(50) not null,
	matiere4 varchar(50) not null,
	matiere5 varchar(50) not null,
	primary key(id_eleve)
);

