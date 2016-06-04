create table admin(
id int primary key auto_increment,
username varchar(32)not null,
password varchar(32) not null

)ENGINE=MyISAM DEFAULT CHARSET=utf8;
insert into admin(username,password) values('admin',md5('admin'));