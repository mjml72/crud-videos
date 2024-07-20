CREATE DATABASE freecodecamp;

CREATE TABLE Videos (
	Videoid int NOT NULL AUTO_INCREMENT,
    Title varchar(255) NOT NULL,
    Programing varchar(255) NOT NULL,
    Techstack varchar(255) NOT NULL,
    PRIMARY KEY (Videoid)
);
