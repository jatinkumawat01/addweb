jatin@jatin:~$ sudo /opt/lampp/bin/mysql -u root -p
[sudo] password for jatin: 
Enter password: 
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 2382
Server version: 10.4.22-MariaDB Source distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> CREATE FUNCTION Daily_Wages(wage decimal(10,2)
    ->     return decimal(10,2)
    ->     DETERMINISTIC 
    ->     BEGIN
    ->     DECLARE daily_wage decimal(10,2);
ERROR 1046 (3D000): No database selected
MariaDB [(none)]>     Set daily_wage=wage*8;
ERROR 1193 (HY000): Unknown system variable 'daily_wage'
MariaDB [(none)]>     return(daily_wage);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'return(daily_wage)' at line 1
MariaDB [(none)]>     END$$
    -> 
    -> &&
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'END$$

&&' at line 1
MariaDB [(none)]> use Queries;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
MariaDB [Queries]> delimiter $$
MariaDB [Queries]> CREATE FUNCTION Daily_Wages(wage decimal(10,2)
    ->     return decimal(10,2)
    ->     DETERMINISTIC 
    ->     BEGIN
    ->     DECLARE daily_wage decimal(10,2);
    ->     Set daily_wage=wage*8;
    ->     return(daily_wage);
    ->     END$$
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'return decimal(10,2)
    DETERMINISTIC 
    BEGIN
    DECLARE daily_wage deci...' at line 2
MariaDB [Queries]> CREATE FUNCTION Daily_Wages(wage decimal(10,2)
    ->     returns decimal(10,2)
    ->     DETERMINISTIC 
    ->     BEGIN
    ->     DECLARE daily_wage decimal(10,2);
    ->     Set daily_wage=wage*8;
    ->     return(daily_wage);
    ->     END$$
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'returns decimal(10,2)
    DETERMINISTIC 
    BEGIN
    DECLARE daily_wage dec...' at line 2
MariaDB [Queries]> DELIMITER $$  
MariaDB [Queries]> CREATE FUNCTION Daily_Wages(wage decimal(10,2) )
    -> returns decimal(10,2)
    -> DETERMINISTIC  
    -> BEGIN 
    ->    DECLARE daily_wage decimal(10,2);  
    ->    Set daily_wage = wage*8;
    -> return (daily_wage);
    -> END$$  
ERROR 1558 (HY000): Column count of mysql.proc is wrong. Expected 21, found 20. Created with MariaDB 100108, now running 100422. Please use mysql_upgrade to fix this error
MariaDB [Queries]> CREATE FUNCTION Daily_Wages(wage decimal(10,2) )
    -> returns decimal(10,2)
    -> DETERMINISTIC  
    -> BEGIN 
    ->    DECLARE daily_wage decimal(10,2);  
    ->    Set daily_wage = wage*8;
    -> return (daily_wage);
    -> END$$  
ERROR 1558 (HY000): Column count of mysql.proc is wrong. Expected 21, found 20. Created with MariaDB 100108, now running 100422. Please use mysql_upgrade to fix this error
MariaDB [Queries]> CREATE FUNCTION Daily_Wages(wage decimal(10,2) )
    -> returns decimal(10,2)
    -> DETERMINISTIC  
    -> BEGIN 
    ->    DECLARE daily_wage decimal(10,2);  
    ->    Set daily_wage = wage*8;
    -> return (daily_wage);
    -> END$$  
Query OK, 0 rows affected (0.004 sec)

MariaDB [Queries]> DELIMITER ; 
MariaDB [Queries]> Select Daily_Wages(50);
+-----------------+
| Daily_Wages(50) |
+-----------------+
|          400.00 |
+-----------------+
1 row in set (0.001 sec)

MariaDB [Queries]> DELIMITER $$ 
MariaDB [Queries]> CREATE FUNCTION Customer_Occupation(  
    ->     age int  
    -> )   
    -> RETURNS VARCHAR(20)  
    -> DETERMINISTIC  
    -> BEGIN  
    ->     DECLARE customer_occupation VARCHAR(20);  
    ->     IF age > 35 THEN  
    ->         SET customer_occupation = 'Scientist';  
    ->     ELSEIF (age <= 35 AND   
    ->             age >= 30) THEN  
    ->         SET customer_occupation = 'Engineer';  
    ->     ELSEIF age < 30 THEN  
    ->         SET customer_occupation = 'Actor';  
    -> END IF;  
    ->     -- return the customer occupation  
    ->     RETURN (customer_occupation);  
    -> END$$  
Query OK, 0 rows affected (0.009 sec)

MariaDB [Queries]> DELIMITER;
    -> SELECT name, age, Customer_Occupation(age) FROM customer ORDER BY age;
    -> ;
    -> $$
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'DELIMITER;SELECT name, age, Customer_Occupation(age) FROM customer ORDER BY age' at line 1
MariaDB [Queries]> DELIMITER ;
MariaDB [Queries]> use batch6;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
MariaDB [batch6]> 
MariaDB [batch6]> DELIMITER $$  
MariaDB [batch6]> CREATE FUNCTION Customer_Occupation(  
    ->     age int  
    -> )   
    -> RETURNS VARCHAR(20)  
    -> DETERMINISTIC  
    -> BEGIN  
    ->     DECLARE customer_occupation VARCHAR(20);  
    ->     IF age > 35 THEN  
    ->         SET customer_occupation = 'Scientist';  
    ->     ELSEIF (age <= 35 AND   
    ->             age >= 30) THEN  
    ->         SET customer_occupation = 'Engineer';  
    ->     ELSEIF age < 30 THEN  
    ->         SET customer_occupation = 'Actor';  
    -> END IF;  
    ->     -- return the customer occupation  
    ->     RETURN (customer_occupation);  
    -> END$$ 
Query OK, 0 rows affected (0.004 sec)

MariaDB [batch6]> DELIMITER ;
MariaDB [batch6]> SELECT STUD_NAME, STUD_AG, Customer_Occupation(STUD_AG) FROM StudentData ORDER BY STUD_AG;
+-----------+---------+------------------------------+
| STUD_NAME | STUD_AG | Customer_Occupation(STUD_AG) |
+-----------+---------+------------------------------+
| ram       |      21 | Actor                        |
| mayank    |      21 | Actor                        |
| riya      |      21 | Actor                        |
| donia     |      22 | Actor                        |
| sumit     |      22 | Actor                        |
| nikki     |      22 | Actor                        |
| ronit     |      23 | Actor                        |
| joy       |      23 | Actor                        |
| shayam    |      23 | Actor                        |
| Ram       |      24 | Actor                        |
+-----------+---------+------------------------------+
10 rows in set (0.002 sec)

MariaDB [batch6]> CREATE TABLE people (age INT, name varchar(150));
Query OK, 0 rows affected (0.010 sec)

MariaDB [batch6]> delimiter // 
MariaDB [batch6]> CREATE TRIGGER agecheck BEFORE INSERT ON people FOR EACH ROW IF NEW.age < 0 
    -> THEN SET NEW.age = 0; END IF;//
Query OK, 0 rows affected (0.009 sec)

MariaDB [batch6]> delimiter ;
MariaDB [batch6]> INSERT INTO people VALUES (-20, ‘krrish’), (22, ‘Jatin’);
ERROR 1054 (42S22): Unknown column '‘krrish’' in 'field list'
MariaDB [batch6]> INSERT INTO people VALUES (-20, 'krrish'), (22, 'Jatin');
Query OK, 2 rows affected (0.003 sec)
Records: 2  Duplicates: 0  Warnings: 0

MariaDB [batch6]> select * from people;
+------+--------+
| age  | name   |
+------+--------+
|    0 | krrish |
|   22 | Jatin  |
+------+--------+
2 rows in set (0.001 sec)

MariaDB [batch6]> CREATE TABLE members (id INT AUTO_INCREMENT primary key,name VARCHAR(100) NOT NULL, email VARCHAR(255),birthDate DATE);
Query OK, 0 rows affected (0.010 sec)

MariaDB [batch6]> CREATE TABLE reminders(id INT AUTO_INCREMENT,memberId INT,message VARCHAR(255) NOT NULL,PRIMARY KEY (id , memberId) );
Query OK, 0 rows affected (0.010 sec)

MariaDB [batch6]> DELIMITER $$
MariaDB [batch6]> CREATE TRIGGER after_members_insert
    -> AFTER INSERT
    -> ON members FOR EACH ROW
    -> BEGIN
    ->     IF NEW.birthDate IS NULL THEN
    ->         INSERT INTO reminders(memberId, message)
    ->         VALUES(new.id,CONCAT('Hi ', NEW.name, ', please update your date of birth.'));
    ->     END IF;
    -> END$$
Query OK, 0 rows affected (0.009 sec)

MariaDB [batch6]> DELIMITER ;
MariaDB [batch6]> INSERT INTO members(name, email, birthDate) VALUES('Jatin kumawat', 'jatin@gmail.com', NULL);
Query OK, 1 row affected (0.004 sec)

MariaDB [batch6]> SELECT * FROM reminders;  
+----+----------+-----------------------------------------------------+
| id | memberId | message                                             |
+----+----------+-----------------------------------------------------+
|  1 |        1 | Hi Jatin kumawat, please update your date of birth. |
+----+----------+-----------------------------------------------------+
1 row in set (0.001 sec)

MariaDB [batch6]> INSERT INTO members(name, email, birthDate) VALUES('Jatin kumawat', 'jatin@gmail.com', NULL);
Query OK, 1 row affected (0.004 sec)

MariaDB [batch6]> SELECT * FROM reminders; 
+----+----------+-----------------------------------------------------+
| id | memberId | message                                             |
+----+----------+-----------------------------------------------------+
|  1 |        1 | Hi Jatin kumawat, please update your date of birth. |
|  2 |        2 | Hi Jatin kumawat, please update your date of birth. |
+----+----------+-----------------------------------------------------+
2 rows in set (0.001 sec)

MariaDB [batch6]> CREATE TABLE person (name varchar(45), age int);
Query OK, 0 rows affected (0.013 sec)

MariaDB [batch6]> INSERT INTO person VALUES ('jatin', 25), ('donu', 26),('akash',17);
Query OK, 3 rows affected (0.004 sec)
Records: 3  Duplicates: 0  Warnings: 0

MariaDB [batch6]> delimiter //
MariaDB [batch6]> CREATE TRIGGER person_bu BEFORE UPDATE
    -> ON person
    -> FOR EACH ROW
    -> IF NEW.age < 18 THEN
    -> SIGNAL SQLSTATE '50002' SET MESSAGE_TEXT = 'Person must be older than 18.';
    -> END IF; //
Query OK, 0 rows affected (0.004 sec)

MariaDB [batch6]> delimiter ;
MariaDB [batch6]> UPDATE person SET age = 16 WHERE name = 'labu';
Query OK, 0 rows affected (0.001 sec)
Rows matched: 0  Changed: 0  Warnings: 0

MariaDB [batch6]> SELECT * FROM person; 
+-------+------+
| name  | age  |
+-------+------+
| jatin |   25 |
| donu  |   26 |
| akash |   17 |
+-------+------+
3 rows in set (0.001 sec)

MariaDB [batch6]> 
MariaDB [batch6]> UPDATE person SET age = 16 WHERE name = 'jatin';
ERROR 1644 (50002): Person must be older than 18.
MariaDB [batch6]> delimiter //
MariaDB [batch6]> CREATE TRIGGER person_bd BEFORE DELETE
    -> ON person
    -> FOR EACH ROW
    -> INSERT INTO person_archive (name, age)
    -> VALUES (OLD.name, OLD.age); //
Query OK, 0 rows affected (0.009 sec)

MariaDB [batch6]> delimiter ;
MariaDB [batch6]> delimiter //
MariaDB [batch6]> delimiter ;
MariaDB [batch6]> CREATE TABLE person_archive (name varchar(45), age int);
Query OK, 0 rows affected (0.015 sec)

MariaDB [batch6]> delimiter //
MariaDB [batch6]> CREATE TRIGGER person_bd BEFORE DELETE
    -> ON person
    -> FOR EACH ROW
    -> INSERT INTO person_archive (name, age)
    -> VALUES (OLD.name, OLD.age); //
ERROR 1359 (HY000): Trigger 'batch6.person_bd' already exists
MariaDB [batch6]> delimiter ;
MariaDB [batch6]> DELETE FROM person WHERE name = 'jatin';
Query OK, 1 row affected (0.005 sec)

MariaDB [batch6]> Select * from person_archive;
+-------+------+
| name  | age  |
+-------+------+
| jatin |   25 |
+-------+------+
1 row in set (0.001 sec)

MariaDB [batch6]> CREATE TABLE average_age (age int);
Query OK, 0 rows affected (0.011 sec)

MariaDB [batch6]> delimiter //
MariaDB [batch6]> CREATE TRIGGER person_ad AFTER DELETE
    -> ON person
    -> FOR EACH ROW
    -> UPDATE average_age SET average = (SELECT AVG(person.age) FROM person); //
Query OK, 0 rows affected (0.006 sec)

MariaDB [batch6]> delimiter ;
MariaDB [batch6]> DELETE FROM person WHERE name = 'donia';
Query OK, 0 rows affected (0.002 sec)

MariaDB [batch6]> Select * from average_age;
Empty set (0.001 sec)

MariaDB [batch6]> DELETE FROM person WHERE name = 'donu';
ERROR 1054 (42S22): Unknown column 'average' in 'field list'
MariaDB [batch6]> DELETE FROM person WHERE name ='donu';
ERROR 1054 (42S22): Unknown column 'average' in 'field list'
MariaDB [batch6]> select * from person;
+-------+------+
| name  | age  |
+-------+------+
| donu  |   26 |
| akash |   17 |
+-------+------+
2 rows in set (0.000 sec)

MariaDB [batch6]> DELETE FROM person WHERE name ='akash';
ERROR 1054 (42S22): Unknown column 'average' in 'field list'
MariaDB [batch6]> Select * from average_age;
Empty set (0.001 sec)





-- CREATE FUNCTION Daily_Wages(wage decimal(10,2)
--     returns decimal(10,2)
--     DETERMINISTIC 
--     BEGIN
--     DECLARE daily_wage decimal(10,2);
--     Set daily_wage=wage*8;
--     return(daily_wage);
--     END$$


-- DELIMITER $$  
-- CREATE FUNCTION Customer_Occupation(  
--     age int  
-- )   
-- RETURNS VARCHAR(20)  
-- DETERMINISTIC  
-- BEGIN  
--     DECLARE customer_occupation VARCHAR(20);  
--     IF age > 35 THEN  
--         SET customer_occupation = 'Scientist';  
--     ELSEIF (age <= 35 AND   
--             age >= 30) THEN  
--         SET customer_occupation = 'Engineer';  
--     ELSEIF age < 30 THEN  
--         SET customer_occupation = 'Actor';  
-- END IF;  
--     -- return the customer occupation  
--     RETURN (customer_occupation);  
-- END$$  
-- SELECT STUD_NAME, STUD_AG, Customer_Occupation(STUD_AG) FROM StudentData ORDER BY STUD_AG;



-- CREATE TABLE people (age INT, name varchar(150));


-- delimiter // 
-- CREATE TRIGGER agecheck BEFORE INSERT ON people FOR EACH ROW IF NEW.age < 0 
-- THEN SET NEW.age = 0; END IF;//
-- delimiter ;


-- INSERT INTO people VALUES (-20, ‘Sid’), (30, ‘Josh’);


-- SELECT * FROM people;


-- CREATE TABLE members (id INT AUTO_INCREMENT primary key,name VARCHAR(100) NOT NULL, email VARCHAR(255),birthDate DATE);
-- CREATE TABLE reminders(id INT AUTO_INCREMENT,memberId INT,message VARCHAR(255) NOT NULL,PRIMARY KEY (id , memberId) );
-- DELIMITER $$


-- CREATE TRIGGER after_members_insert
-- AFTER INSERT
-- ON members FOR EACH ROW
-- BEGIN
--     IF NEW.birthDate IS NULL THEN
--         INSERT INTO reminders(memberId, message)
--         VALUES(new.id,CONCAT('Hi ', NEW.name, ', please update your date of birth.'));
--     END IF;
-- END$$


-- DELIMITER ;
-- INSERT INTO members(name, email, birthDate) VALUES('Jatin kumawat', 'jatin@gmail.com', NULL);
-- SELECT * FROM reminders;  





-- CREATE TABLE person (name varchar(45), age int);
-- INSERT INTO person VALUES ('jatin', 25), ('donu', 26),('akash',17);


-- delimiter //
-- CREATE TRIGGER person_bu BEFORE UPDATE
-- ON person
-- FOR EACH ROW
-- IF NEW.age < 18 THEN
-- SIGNAL SQLSTATE '50002' SET MESSAGE_TEXT = 'Person must be older than 18.';
-- END IF; //
-- delimiter ;


-- UPDATE person SET age = 16 WHERE name = 'jatin';
-- SELECT * FROM person; 



-- CREATE TABLE person (name varchar(45), age int);
-- CREATE TABLE person_archive (name varchar(45), age int);
-- INSERT INTO person VALUES ('Matthew', 25), ('Mark', 20);


-- delimiter //
-- CREATE TRIGGER person_bd BEFORE DELETE
-- ON person
-- FOR EACH ROW
-- INSERT INTO person_archive (name, age)
-- VALUES (OLD.name, OLD.age); //
-- delimiter ;


-- DELETE FROM person WHERE name = 'jatin';


-- Select * from person_archive;





-- CREATE TABLE person (name varchar(45), age int);
-- CREATE TABLE average_age (age int);


-- INSERT INTO person VALUES ('Matthew', 25), ('Mark', 20);


-- delimiter //
-- CREATE TRIGGER person_ad AFTER DELETE
-- ON person
-- FOR EACH ROW
-- UPDATE average_age SET average = (SELECT AVG(person.age) FROM person); //
-- delimiter ;


-- DELETE FROM person WHERE name = 'donia';
-- Select * from average_age




DELIMITER //
CREATE PROCEDURE sp_Getage(IN age int)
BEGIN
    select STUD_NAME,STUD_AG,STUD_PHONE from StudentData where STUD_AG=age;
END //
DELIMITER ;

CALL sp_Getage(22);




DELIMITER //
CREATE PROCEDURE sp_CountAge(OUT Total_Name int)
BEGIN
    select count(STUD_NAME) into Total_Name from StudentData where STUD_AG=22;
END //
DELIMITER ;

CALL sp_CountAge(@pname);
Select @Pname as countname;



DELIMITER //
CREATE PROCEDURE sp_Count_Name_Inout(inout Total_Name int, In Age int)
BEGIN
    select count(STUD_NAME) into Total_Name from StudentData where STUD_AG=Age ;
END //
DELIMITER ;

CALL sp_Count_Name_Inout(@T,21);
Select @T as CountName;


select routine_name, routine_type,definer,created,security_type,SQL_Data_Access from information_schema.routines where routine_type='PROCEDURE' and routine_schema='practise';






