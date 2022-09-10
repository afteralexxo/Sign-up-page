-- warning if you run this query on the database it might drop existing database and make sure to execute
-- DROP DATABASE SIGNUP;
CREATE DATABASE SIGNUP;
USE SIGNUP;
CREATE TABLE USER(
    ID INT AUTO_INCREMENT NOT NULL,
    NAME VARCHAR(20) NOT NULL,
    EMAIL VARCHAR(20) NOT NULL,
    ZIP VARCHAR(10) NOT NULL,
    PRIMARY KEY(ID)
);
INSERT INTO USER(NAME, EMAIL, ZIP) VALUES('Albert Einstiene', 'alberteinstiene', 01369);
SELECT * FROM USER;