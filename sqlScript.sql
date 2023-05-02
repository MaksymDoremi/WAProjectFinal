use wa;

drop table `User`;

create table `User`
(
	ID int auto_increment,
    Username varchar(40) not null unique,
    Email varchar(100) not null unique,
    `Password` varchar(64) not null,
    primary key(ID)
);

select * from `User`;
