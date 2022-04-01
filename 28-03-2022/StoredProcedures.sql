jatin@jatin:~$ sudo /opt/lampp/bin/mysql -u root -p
[sudo] password for jatin: 
Enter password: 
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 2509
Server version: 10.4.22-MariaDB Source distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> use batch6;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
MariaDB [batch6]> delimiter //
MariaDB [batch6]> CREATE PROCEDURE sp_STUD_NAME()
    -> BEGIN
    ->  select STUD_NAME,STUD_AG,STUD_PHONE from StudentData;
    -> END//
Query OK, 0 rows affected (0.003 sec)

MariaDB [batch6]> delimiter ;
MariaDB [batch6]> CALL sp_STUD_NAME;
+-----------+---------+------------+
| STUD_NAME | STUD_AG | STUD_PHONE |
+-----------+---------+------------+
| Ram       |      24 |  979798799 |
| ram       |      21 |  979798799 |
| shayam    |      23 |  979798799 |
| sumit     |      22 |  979798799 |
| riya      |      21 |  979798799 |
| joy       |      23 |  979798799 |
| nikki     |      22 |  979798799 |
| ronit     |      23 |  979798799 |
| mayank    |      21 |  979798799 |
| donia     |      22 |  987979879 |
+-----------+---------+------------+
10 rows in set (0.000 sec)

Query OK, 0 rows affected (0.000 sec)

MariaDB [batch6]> DELIMITER //
MariaDB [batch6]> CREATE PROCEDURE sp_Getage(IN age int)
    -> BEGIN
    ->     select STUD_NAME,STUD_AG,STUD_PHONE from StudentData where STUD_AG=age;
    -> END //
Query OK, 0 rows affected (0.005 sec)

MariaDB [batch6]> DELIMITER ;
MariaDB [batch6]> CALL sp_sp_Getage(22);
ERROR 1305 (42000): PROCEDURE batch6.sp_sp_Getage does not exist
MariaDB [batch6]> CALL sp_Getage(22);
+-----------+---------+------------+
| STUD_NAME | STUD_AG | STUD_PHONE |
+-----------+---------+------------+
| sumit     |      22 |  979798799 |
| nikki     |      22 |  979798799 |
| donia     |      22 |  987979879 |
+-----------+---------+------------+
3 rows in set (0.001 sec)

Query OK, 0 rows affected (0.001 sec)

MariaDB [batch6]> DELIMITER //
MariaDB [batch6]> CREATE PROCEDURE sp_CountAge(OUT Total_Name int)
    -> BEGIN
    ->     select count(STUD_NAME) into Total_Name from StudentData where STUD_AG=22;
    -> END //
Query OK, 0 rows affected (0.005 sec)

MariaDB [batch6]> DELIMITER ;
MariaDB [batch6]> CALL sp_CountAge(@pname);
Query OK, 1 row affected (0.001 sec)

MariaDB [batch6]> Select @Pname as countname;
+-----------+
| countname |
+-----------+
|         3 |
+-----------+
1 row in set (0.000 sec)

MariaDB [batch6]> DELIMITER //
MariaDB [batch6]> CREATE PROCEDURE sp_Count_Name_Inout(inout Movies_count int, In Age int)
    -> BEGIN
    ->     select count(STUD_NAME) into Total_Name from StudentData where STUD_AG=Age ;
    -> END //
ERROR 1327 (42000): Undeclared variable: Total_Name
MariaDB [batch6]> CREATE PROCEDURE sp_Count_Name_Inout(inout Total_Name int, In Age int)
    -> BEGIN
    ->     select count(STUD_NAME) into Total_Name from StudentData where STUD_AG=Age ;
    -> END //
Query OK, 0 rows affected (0.008 sec)

MariaDB [batch6]> DELIMITER ;
MariaDB [batch6]> CALL sp_Count_Name_Inout(@T,21);
Query OK, 1 row affected (0.001 sec)

MariaDB [batch6]> Select @T as CountName;
+-----------+
| CountName |
+-----------+
|         3 |
+-----------+
1 row in set (0.000 sec)

MariaDB [batch6]> CALL sp_Count_Name_Inout(@T,20);
Query OK, 1 row affected (0.001 sec)

MariaDB [batch6]> Select @T as CountName;
+-----------+
| CountName |
+-----------+
|         0 |
+-----------+
1 row in set (0.000 sec)

MariaDB [batch6]> select routine_name, routine_type,definer,created,security_type,SQL_Data_Access from information_schema.routines where routine_type='PROCEDURE' and routine_schema='practise';
Empty set (0.003 sec)

MariaDB [batch6]> 


