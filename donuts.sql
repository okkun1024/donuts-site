drop database if exists donuts;
create database donuts default character set utf8 collate utf8_general_ci;
drop user if exists 'donuts'@'localhost';
create user 'donuts'@'localhost' identified by 'password';
grant all on donuts.* to 'donuts'@'localhost';
use donuts;

create table customer (
	id int auto_increment primary key, 
	name varchar(100) not null, 
    kana varchar(100) not null,
    post_code varchar(100) not null,
	address varchar(200) not null, 
    mail varchar(100) unique not null,
	password varchar(250) not null
);

create table product (
	id int auto_increment primary key, 
	name varchar(200) not null, 
	price int not null,
    description varchar(1000) not null,
    category int not null
);

create table card(
    id int not null,
    primary key(id),
    foreign key(id) references customer(id), 
    card_name varchar(100) not null,
    card_type varchar(100) not null,
    card_no varchar(22) unique not null,
    card_month int not null,
    card_year int not null,
    card_security_code int not null
);

create table purchase(
    id int primary key,
    customer_id int not null,
    foreign key(customer_id) references customer(id)
);

create table purchase_detail(
    purchase_id int not null,
    product_id int not null,
    primary key(purchase_id, product_id),
    foreign key(purchase_id) references purchase(id),
    foreign key(product_id) references product(id),
    count int not null
);