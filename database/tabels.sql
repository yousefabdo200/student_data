create database student_data;
use student_data;
create table admin(
user_name varchar(150) primary key,
password varchar(150) not null
);


create table student(
s_name varchar(150) ,
s_number varchar(150),
p_number varchar(150),
attend varchar(1000),
year varchar(50),
time varchar(50),
primary key(s_name,s_number)
);
insert into admin (user_name,password) values("admin","admin");
select * from student