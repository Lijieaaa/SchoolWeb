create table user_information(
id int(2) not null AUTO_INCREMENT primary key,/*���*/
username varchar(20) not null,/*�û���*/
name varchar(16) not null,/*����*/
sex varchar(6) not null,/*�Ա�*/
birthday varchar(32) not null,/*��������*/
height varchar(10) not null,/*���*/
education varchar(100) not null,/*��������*/
marry varchar(6) not null,/*����״��*/
city varchar(32) not null,/*��ס��*/
hukou varchar(64) not null,/*�������ڵ�*/
age varchar(4) not null,/*����*/
abroad varchar(6) not null,/*���޺��⹤������*/
phone varchar(32) not null,/*�绰*/
email varchar(32) not null,/*����*/
description varchar(128) not null/*��������*/
)ENGINE=MyISAM DEFAULT CHARSET=utf8;//�����������

����ֶΣ�
alter table user_information add age varchar(4);
update ���� set ������='��ֵ' where ����;

insert into user_information(username,name,sex,age,birthday,height,education,marry,city,hukou,abroad,phone,email,description)
 values('5263@qq.com','����','��','22','1994-03-05','175','����','δ��','������','��������','��','18842687522','123@163.com','˧С��');

 