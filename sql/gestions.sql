drop database if exists gestion_eleves;
create database gestion_eleves;
use gestion_eleves; 

create table eleve(
	id_eleve int(5) not null auto_increment, 
	nom varchar(50) not null, 
	prenom varchar(50) not null, 
	classe varchar(50) not null, 
	primary key(id_eleve)
);

