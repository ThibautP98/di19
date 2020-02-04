CREATE TABLE categorie
(
    id int(5) not null,
    libelle varchar(40) not null,
    description varchar(150),
    constraint pk_id PRIMARY KEY (id)
);

CREATE TABLE utilisateurs
(
    id int(5) not null,
    username varchar(40) not null,
    mail varchar(40) not null,
    password varchar(40) not null,
    id_role varchar(40);
    constraint pk_id PRIMARY KEY (id)
);

CREATE TABLE role
(
    id int(5) not null,
    libelle varchar(40) not null,
    description varchar(150),
    constraint pk_id PRIMARY KEY (id)
);

ALTER TABLE articles
ADD id_categorie int(5);

ALTER TABLE articles
ADD statut varchar(40);

ALTER TABLE articles
ADD foreign key (id_categorie) references categorie(id);

ALTER TABLE utilisateurs
ADD foreign key (id_role) references role.id;
