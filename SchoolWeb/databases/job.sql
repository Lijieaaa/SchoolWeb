create table job(
id int(11) not null AUTO_INCREMENT primary key,/*编号*/
company_name varchar(100)  not null,/*公司名称*/
job_name varchar(100) not null,/*职位*/
job_family varchar(100) not null,/*职位类别实习或全职*/
job_time varchar(32) not null,/*工作时间/周*/
interndeadline varchar(32) not null,/*工作时长/月 实习有用*/
update_time varchar(32) not null,/*发布时间*/
money_buttom varchar(32) not null,/*最低工资*/
money_Top varchar(32) not null,/*最高工资*/
education varchar(100) not null,/*教育背景*/
company_situation varchar(100)  not null,/*公司概况  */
family varchar(32),/*职位类形1.互联网2经管.....*/
city varchar(32) not null,/*所在地*/
cityAddress varchar(64) not null,/*详细地址*/
fuli varchar(32) not null,/*福利待遇*/
youhuo varchar(128) not null,/*职位诱惑*/
job_duties text not null,/*岗位职责*/
job_entails text not null,/*岗位要求*/
expiration_time varchar(32) /*招聘信息到期时间*/
checkid int(4) not null default '0' comment ;/*0未审核 1 审核通过*/
)ENGINE=MyISAM DEFAULT CHARSET=utf8;//解决乱码问题

添加字段：
alter table job add checkid varchar(4) not null default '0' comment ;

insert into job(company_name,job_name,job_family,job_time,interndeadline,update_time,money_buttom,money_Top,education,company_situation,family,city,cityAddress,fuli,youhuo,job_duties,job_entails,expiration_time,checkid)
 values('吴氏集团','产品经理','全职','5','6','九小时前','5k','10k','3年经验/本科','移动互联网 · 电子商务 / 成长型(B轮)','IT','大连','大连金石滩','五险一金,明察秋毫,数据库类,你说我听',
 '五险一金 餐补 年终奖 绩效奖 ','1.依据产品需求完成高质量的Web前端开发和维护； 

2.优化Web前端应用，改善用户体验； 

3.解决Web前端页面在各浏览器的兼容性问题； 

4.研究Web前端技术的发展，丰富Web交互方式。',
 '1.两年以上移动端前端开发工作经验； 

2.精通HTML、CSS、Javascript、Ajax、jQuery等Web开发领域相关技术； 

3.有响应式页面开发经验，能开发兼容移动版浏览器的应用； 

4.精通网站性能优化，技术体验优化；深刻理解WEB标准和兼容性，对表现与数据分离、Web语义化、提升用户体验有独特的见解和实践经验。','2016.08.07',1);
