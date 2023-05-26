
create database WA;

use WA;

create table `User`
(
	ID int not null auto_increment,
    Username varchar(50) not null, -- aka login
    Email varchar(50) not null,
    `Password` varchar(64) not null,
	PRIMARY KEY (ID)
    
);

