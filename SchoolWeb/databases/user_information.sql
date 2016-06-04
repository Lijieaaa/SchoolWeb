create table user_information(
id int(2) not null AUTO_INCREMENT primary key,/*编号*/
username varchar(20) not null,/*用户名*/
name varchar(16) not null,/*姓名*/
sex varchar(6) not null,/*性别*/
birthday varchar(32) not null,/*出生年月*/
height varchar(10) not null,/*身高*/
education varchar(100) not null,/*教育背景*/
marry varchar(6) not null,/*婚姻状况*/
city varchar(32) not null,/*居住地*/
hukou varchar(64) not null,/*户口所在地*/
age varchar(4) not null,/*年龄*/
abroad varchar(6) not null,/*有无海外工作经验*/
phone varchar(32) not null,/*电话*/
email varchar(32) not null,/*邮箱*/
description varchar(128) not null/*自我描述*/
)ENGINE=MyISAM DEFAULT CHARSET=utf8;//解决乱码问题

添加字段：
alter table user_information add age varchar(4);
update 表名 set 属性名='新值' where 条件;

insert into user_information(username,name,sex,age,birthday,height,education,marry,city,hukou,abroad,phone,email,description)
 values('5263@qq.com','张三','男','22','1994-03-05','175','本科','未婚','大连市','福建三明','无','18842687522','123@163.com','帅小哥');

 