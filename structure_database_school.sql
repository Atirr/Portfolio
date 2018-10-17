MariaDB [Students]> create database School;

create table Students (ID varchar(255), FirstName varchar(255), LastName varchar(255), City varchar(255), Tel varchar(255), Course varchar(255));

create table Teachers (ID varchar(255), FirstName varchar(255), LastName varchar(255), City varchar(255), Tel varchar(255), Course varchar(255));

create table Courses (ID varchar(255), Dutch varchar(255), Englisch varchar(255), German varchar(255), Math varchar(255), Physics varchar(255));

create table Reports (ID varchar(255), Students varchar(255), Date varchar(255), Content varchar(255), Comments varchar(255), Others varchar(255));
