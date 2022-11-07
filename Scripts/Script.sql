CREATE DATABASE library;

use library;

show tables;

CREATE TABLE books(
id int unsigned not null auto_increment,
name varchar(100) not null,
primary key(id)
);

CREATE TABLE customers(
id int unsigned not null auto_increment,
name varchar(100) not null,
primary key(id)
);

CREATE TABLE requests(
id int unsigned not null auto_increment,
book_id int unsigned not null,
constraint requests_fk foreign key (book_id) references books(id)
on delete cascade on update cascade,
primary key(id)
);

CREATE TABLE rented_books(
id int unsigned not null auto_increment,
book_id int unsigned not null,
customer_id int unsigned not null,
constraint book_fk foreign key (book_id) references books(id) on
delete cascade on update cascade,
constraint customer_fk foreign key (customer_id) references
customers (id) on delete cascade on update cascade,
primary key(id)
);

CREATE TABLE authors(
id int unsigned not null auto_increment,
name varchar(100) not null,
book_id int unsigned not null,
constraint authors_fk foreign key (book_id) references books(id)
on delete cascade on update cascade,
primary key(id)
);

CREATE TABLE genres(
id int unsigned not null auto_increment,
genre varchar(100) not null,
book_id int unsigned not null,
constraint genres_fk foreign key (book_id) references books(id) on
delete cascade on update cascade,
primary key(id)
);

CREATE TABLE suppliers(
id int unsigned not null auto_increment,
name_fantasy varchar(100) not null,
request_id int unsigned not null,
address varchar(100),
email varchar(100),
contact_phone int(11),
constraint suppliers_fk foreign key (request_id) references
requests(id) on delete cascade on update cascade,
primary key(id)
);