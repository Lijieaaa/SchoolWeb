create table job(
id int(11) not null AUTO_INCREMENT primary key,/*���*/
company_name varchar(100)  not null,/*��˾����*/
job_name varchar(100) not null,/*ְλ*/
job_family varchar(100) not null,/*ְλ���ʵϰ��ȫְ*/
job_time varchar(32) not null,/*����ʱ��/��*/
interndeadline varchar(32) not null,/*����ʱ��/�� ʵϰ����*/
update_time varchar(32) not null,/*����ʱ��*/
money_buttom varchar(32) not null,/*��͹���*/
money_Top varchar(32) not null,/*��߹���*/
education varchar(100) not null,/*��������*/
company_situation varchar(100)  not null,/*��˾�ſ�  */
family varchar(32),/*ְλ����1.������2����.....*/
city varchar(32) not null,/*���ڵ�*/
cityAddress varchar(64) not null,/*��ϸ��ַ*/
fuli varchar(32) not null,/*��������*/
youhuo varchar(128) not null,/*ְλ�ջ�*/
job_duties text not null,/*��λְ��*/
job_entails text not null,/*��λҪ��*/
expiration_time varchar(32) /*��Ƹ��Ϣ����ʱ��*/
checkid int(4) not null default '0' comment ;/*0δ��� 1 ���ͨ��*/
)ENGINE=MyISAM DEFAULT CHARSET=utf8;//�����������

����ֶΣ�
alter table job add checkid varchar(4) not null default '0' comment ;

insert into job(company_name,job_name,job_family,job_time,interndeadline,update_time,money_buttom,money_Top,education,company_situation,family,city,cityAddress,fuli,youhuo,job_duties,job_entails,expiration_time,checkid)
 values('���ϼ���','��Ʒ����','ȫְ','5','6','��Сʱǰ','5k','10k','3�꾭��/����','�ƶ������� �� �������� / �ɳ���(B��)','IT','����','������ʯ̲','����һ��,�������,���ݿ���,��˵����',
 '����һ�� �Ͳ� ���ս� ��Ч�� ','1.���ݲ�Ʒ������ɸ�������Webǰ�˿�����ά���� 

2.�Ż�Webǰ��Ӧ�ã������û����飻 

3.���Webǰ��ҳ���ڸ�������ļ��������⣻ 

4.�о�Webǰ�˼����ķ�չ���ḻWeb������ʽ��',
 '1.���������ƶ���ǰ�˿����������飻 

2.��ͨHTML��CSS��Javascript��Ajax��jQuery��Web����������ؼ����� 

3.����Ӧʽҳ�濪�����飬�ܿ��������ƶ����������Ӧ�ã� 

4.��ͨ��վ�����Ż������������Ż���������WEB��׼�ͼ����ԣ��Ա��������ݷ��롢Web���廯�������û������ж��صļ����ʵ�����顣','2016.08.07',1);
