DROP DATABASE IF EXISTS SocialNetWork;
Create DATABASE SocialNetWork ;
Use SocialNetWork ;

CREATE TABLE`users` (
 `First_name` varchar(255) NOT NULL,
 `Last_name` varchar(255) NOT NULL,
 `Nickname` varchar(255) NULL,
 `Email` varchar(255) NOT NULL,
 `Password` varchar(255) NOT NULL,
 `Gender` bit(1) NOT NULL,
 `Birthday_Date` date NOT NULL,
 `FB_Join_Date` date NOT NULL,
 `aboutme` varchar(550) NULL,
 `hometown` varchar(255) NULL,
 `marital_status` varchar(255) NULL,
 `userPic` LONGBLOB  NULL,
 imgname varchar(50),
 PRIMARY KEY (`Email`)
);

CREATE TABLE `SocialNetWork`.`phones` (

 `Email` varchar(255) NOT NULL,

 `phone_no` VARCHAR(45) NOT NULL,

 `type` VARCHAR(45) NULL,

 PRIMARY KEY (`Email`, `phone_no`));




CREATE TABLE  `friend` (
`myEmail` varchar(255) NOT NULL,
`myfriendEmail` varchar(255) NOT NULL ,
PRIMARY KEY (`myEmail`,`myfriendEmail`)


);
CREATE TABLE  `friendRequest` (
`myEmail` varchar(255) NOT NULL,
`myfriendEmail` varchar(255) NOT NULL ,
 friendDate timestamp,
PRIMARY KEY (`myEmail`,`myfriendEmail`)
);
ALTER TABLE friend ADD foreign key (myEmail) references users (Email);
ALTER TABLE friend ADD foreign key (myfriendEmail) references users (Email);
ALTER TABLE phones ADD foreign key (Email) references users (Email);

CREATE table post(
   statpost text,
   id int AUTO_INCREMENT ,
   postedtime timestamp ,
   ispublic ENUM('t', 'f') ,
   PRIMARY KEY(id),
   `Email` varchar(255) NOT NULL,
   img LONGBLOB,
   imgname varchar(50),
   FOREIGN KEY(`Email`) REFERENCES users(`Email`)

);


CREATE TABLE `like` (
   postid int(11),
   `Email` varchar(255) NOT NULL,
   isliked enum('t', 'f'),
   FOREIGN KEY (postid) REFERENCES post(id),
   FOREIGN KEY (`Email`) REFERENCES users(`Email`)
   );
