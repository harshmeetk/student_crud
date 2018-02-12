create table student_info{

    id int primary key not null auto_increment,
     stu_FirstName varchar(70) not null,
     stu_LastName varchar(70) not null,
     stu_Email varchar(70) not null,
stu_Grade int(1) not null

);

insert into student_info(id,stu_FirstName,stu_LastName,stu_Email,stu_Grade) values(
 1,'Mary', 'Kom', 'mary@gmail.com','A');

 insert into student_info(id,stu_FirstName,stu_LastName,stu_Email,stu_Grade) values(
2,'Sally', 'Ride', 'Sally_Ride@gmail.com','A');

insert into student_info(id,stu_FirstName,stu_LastName,stu_Email,stu_Grade) values(
 3,'Grace', 'Hopper', 'Grace_Hopper@gmail.com','B');

 insert into student_info(id,stu_FirstName,stu_LastName,stu_Email,stu_Grade) values(
 4,'Frank', 'Smith', 'Frank_Smith@gmail.com','B');

 insert into student_info(id,stu_FirstName,stu_LastName,stu_Email,stu_Grade) values(
 5,'John', 'Smith', 'John_Smith@gmail.com','C');



