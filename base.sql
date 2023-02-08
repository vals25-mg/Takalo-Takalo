create database takalo;

use takalo;

create table users(
    id int primary key auto_increment,
    nom varchar(40),
    prenom varchar(50),
    email varchar(70),
    password varchar(80),
    tel int(10),
    img varchar(80),
    est_admin int,
    date_inscription datetime
);

create table categories(
    id int primary key auto_increment,
    valeur varchar(60)
);

create table objet(
    id int primary key auto_increment,
    idCategories int,
    idProprietaire int,
    prixestimatif double,
    photo varchar(80),
    description  text,
    date_ajout datetime,
    foreign key (idCategories) references categories (id),
    foreign key (idProprietaire) references users (id)
);

create table echange(
    id int primary key auto_increment,
    idUser1 int,
    idUser2 int,
    idObjet1 int,
    idObjet2 int,
    Daty datetime,
    foreign key (idUser1) references users (id),
    foreign key (idUser2) references users (id),
    foreign key (idObjet1) references objet (id),
    foreign key (idObjet2) references objet (id)
);

create table proposition(
    id int primary key auto_increment,
    idDemandeur int,
    idDemande int,
    idObjet1 int,
    idObjet2 int,
    etat int,
    Daty datetime,
    foreign key (idDemandeur) references users (id),
    foreign key (idDemande) references users (id),
    foreign key (idObjet1) references objet (id),
    foreign key (idObjet2) references objet (id)
);

create table historique(
    id int primary key auto_increment,
    id_user_avant int,
    id_objet int,
    id_user_apres int,
    daty datetime,
    foreign key (id_user_avant) references users (id),
    foreign key (id_user_apres) references users (id),
    foreign key (id_objet) references objet (id)
);

insert into users (nom,prenom,email,password,tel,img,est_admin,date_inscription) values ('Rakotonirina','Rado','rado@gmail.com','qwerty',0327551237,'rado.jpg',1,Null);
insert into users (nom,prenom,email,password,tel,img,est_admin,date_inscription) values ('Andrianarivelo','Nasa','nasa@gmail.com','azerty',0334567819,'nasa.jpg',1,Null);
insert into users (nom,prenom,email,password,tel,img,est_admin,date_inscription) values ('Randriamamokatara','Valisoa','valisoa@gmail.com','qwertz',0342378902,'vals.jpg',1,Null);

insert into categories (valeur) values ('Appareils electroniques');
insert into categories (valeur) values ('Moyens de transports');
insert into categories (valeur) values ('Materiels de bureau');
insert into categories (valeur) values ('Materiels de cuisine');
insert into categories (valeur) values ('Mobiliers');
insert into categories (valeur) values ('Habits');
insert into categories (valeur) values ('Chaussures');
insert into categories (valeur) values ('Bijoux');
insert into categories (valeur) values ('Appareils electromenager');


insert into objet (idCategories,idProprietaire,prixestimatif,photo,description,date_ajout) values (NULL,7,56230,'Nike.jpg','Chaussures Nike','2023-02-07 21:32:44');
insert into objet (idCategories,idProprietaire,prixestimatif,photo,description,date_ajout) values (NULL,4,60219,'Jord.jpg','Chaussures Air Jordan','2023-02-07 20:05:44');

  insert into historique(id_user_avant,id_objet,id_user_apres,daty) values (4,2,7,'2023-02-07 23:12:15');
  insert into historique(id_user_avant,id_objet,id_user_apres,daty) values (7,1,4,'2023-02-07 23:12:15');
