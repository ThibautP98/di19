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
    constraint pk_id PRIMARY KEY (id)
);

CREATE TABLE role
(
    id int(5) not null,
    libelle varchar(40) not null,
    description varchar(150),
    constraint pk_id PRIMARY KEY (id)
);