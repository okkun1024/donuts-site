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

-- 顧客情報（ダミー）
insert into customer values(null,'小川 正','オガワ タダシ','270-1595','千葉県市川市行徳グリンフィルド203','okkun45@gmail.com','okkun55');


-- 商品情報
DELETE FROM product;
ALTER TABLE `product` auto_increment = 1;
insert into product values(null,'CCドーナツ 当店オリジナル（5個入り）','1500','当店のオリジナル商品、CCドーナツは、サクサクの食感が特徴のプレーンタイプのドーナツです。素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけの良い食感が感じられます。','1' );
insert into product values(null,'チョコレートデライト（5個入り）','1600','','1' );
insert into product values(null,'キャラメルクリーム（5個入り）','1600','','1' );
insert into product values(null,'プレーンクラシック（5個入り）','1500','','1' );
insert into product values(null,'【新作】サマーシトラス（5個入り）','1600','','1' );
insert into product values(null,'ストロベリークラッシュ（5個入り）','1800','','1' );
insert into product values(null,'フルーツドーナツセット（12個入り）','3500','新鮮で豊かなフルーツをたっぷりと使用した贅沢な12個入りセットです。このセットには、季節の最高のフルーツを厳選し、ドーナツに取り入れました。口に入れた瞬間にフルーツの風味と生地のハーモニーが広がります。色鮮やかな見た目も魅力の一つです。','2');
insert into product values(null,'フルーツドーナツセット（14個入り）','4000','','2' );
insert into product values(null,'ベストセレクションボックス（4個入り）','1200','','2' );
insert into product values(null,'クラッシュボックス（7個入り）','2400','','2' );
insert into product values(null,'クリームボックス（4個入り）','1400','','2' );
insert into product values(null,'クリームボックス（9個入り）','2800','','2' );