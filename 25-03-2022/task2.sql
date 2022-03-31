MariaDB [Sales]> use Queries;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
MariaDB [Queries]> select * from employee;
+---------+----------+----------------+--------+------------+------------+------------+------------+
| Enumber | EName    | JOB            | Salary | Department | Joining    | Commission | Experience |
+---------+----------+----------------+--------+------------+------------+------------+------------+
|       1 | jatin    | full stack     | 320000 | NUMBER10   | 1990-02-04 |       2000 |         32 |
|       2 | shashank | full stack     |  32000 | NUMBER20   | 1990-04-03 |          0 |         32 |
|       3 | krishna  | java developer |   4500 | NUMBER3    | 2000-04-04 |       3000 |         22 |
|       4 | jinal    | Data science   |   4000 | NUMBER40   | 2010-11-04 |       2000 |         12 |
|       5 | madu     | HR             |   5000 | NUMBER5    | 2021-12-01 |       1000 |          1 |
|       6 | donia    | clerks         | 320000 | NUMBER20   | 1990-02-04 |       2000 |         32 |
|       7 | krrish   | drawing        |  32000 | NUMBER10   | 1990-04-03 |          0 |         32 |
|       8 | kartik   | saleman        |   2500 | NUMBER10   | 2000-04-04 |       3000 |         22 |
|       9 | akash    | analyst        |   3000 | NUMBER20   | 2010-11-04 |       2000 |         12 |
|      10 | mohit    | clerks         |   5000 | NUMBER11   | 2021-12-01 |       1000 |          1 |
+---------+----------+----------------+--------+------------+------------+------------+------------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where JOB ='saleman' or  Salary> max(select Salary from employee where JOB ='clerks');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'select Salary from employee where JOB ='clerks')' at line 1
MariaDB [Queries]> select max(JOB) from employee where JOB ='clerks';
+----------+
| max(JOB) |
+----------+
| clerks   |
+----------+
1 row in set (0.001 sec)

MariaDB [Queries]> select max(Salary) from employee where JOB ='clerks';
+-------------+
| max(Salary) |
+-------------+
|      320000 |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where JOB ='saleman' and Salary > (select max(Salary) from employee where JOB ='clerks');
Empty set (0.001 sec)

MariaDB [Queries]> insert into employee values (11,'raj','saleman',640000,'NUMBER40','1990-12-03',0,32);
Query OK, 1 row affected (0.003 sec)

MariaDB [Queries]> select Ename from employee where JOB ='saleman' and Salary > (select max(Salary) from employee where JOB ='clerks');
+-------+
| Ename |
+-------+
| raj   |
+-------+
1 row in set (0.001 sec)

MariaDB [Queries]> SELECT UPPER(Ename) from employee;
+--------------+
| UPPER(Ename) |
+--------------+
| JATIN        |
| SHASHANK     |
| KRISHNA      |
| JINAL        |
| MADU         |
| DONIA        |
| KRRISH       |
| KARTIK       |
| AKASH        |
| MOHIT        |
| RAJ          |
+--------------+
11 rows in set (0.001 sec)

MariaDB [Queries]> SELECT lower(Ename) from employee;
+--------------+
| lower(Ename) |
+--------------+
| jatin        |
| shashank     |
| krishna      |
| jinal        |
| madu         |
| donia        |
| krrish       |
| kartik       |
| akash        |
| mohit        |
| raj          |
+--------------+
11 rows in set (0.001 sec)

MariaDB [Queries]> SELECT initcap(Ename) from employee;
ERROR 1558 (HY000): Column count of mysql.proc is wrong. Expected 21, found 20. Created with MariaDB 100108, now running 100422. Please use mysql_upgrade to fix this error
MariaDB [Queries]> SELECT proper(Ename) from employee;
ERROR 1558 (HY000): Column count of mysql.proc is wrong. Expected 21, found 20. Created with MariaDB 100108, now running 100422. Please use mysql_upgrade to fix this error
MariaDB [Queries]> SELECT concat(Upper(substring(Ename,1,1),lower(substring(Ename,2)) from employee; 
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'from employee' at line 1
MariaDB [Queries]> SELECT concat(Upper(substring(Ename,1,1)),lower(substring(Ename,2)) from employee;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'from employee' at line 1
MariaDB [Queries]> SELECT concat(upper(substring(Ename,1,1)),lower(substring(Ename,2)) from employee;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'from employee' at line 1
MariaDB [Queries]> SELECT concat(upper(substring(Ename,1,1)),lower(substring(Ename,2))) from employee;
+---------------------------------------------------------------+
| concat(upper(substring(Ename,1,1)),lower(substring(Ename,2))) |
+---------------------------------------------------------------+
| Jatin                                                         |
| Shashank                                                      |
| Krishna                                                       |
| Jinal                                                         |
| Madu                                                          |
| Donia                                                         |
| Krrish                                                        |
| Kartik                                                        |
| Akash                                                         |
| Mohit                                                         |
| Raj                                                           |
+---------------------------------------------------------------+
11 rows in set (0.001 sec)

MariaDB [Queries]> SELECT concat(upper(substring(Ename,1,1)),lower(substring(Ename,2))) as Name from employee;
+----------+
| Name     |
+----------+
| Jatin    |
| Shashank |
| Krishna  |
| Jinal    |
| Madu     |
| Donia    |
| Krrish   |
| Kartik   |
| Akash    |
| Mohit    |
| Raj      |
+----------+
11 rows in set (0.001 sec)

MariaDB [Queries]> select length(Ename) from employee;
+---------------+
| length(Ename) |
+---------------+
|             5 |
|             8 |
|             7 |
|             5 |
|             4 |
|             5 |
|             6 |
|             6 |
|             5 |
|             5 |
|             3 |
+---------------+
11 rows in set (0.001 sec)

MariaDB [Queries]> select Ename,  length(Ename) from employee;
+----------+---------------+
| Ename    | length(Ename) |
+----------+---------------+
| jatin    |             5 |
| shashank |             8 |
| krishna  |             7 |
| jinal    |             5 |
| madu     |             4 |
| donia    |             5 |
| krrish   |             6 |
| kartik   |             6 |
| akash    |             5 |
| mohit    |             5 |
| raj      |             3 |
+----------+---------------+
11 rows in set (0.001 sec)

MariaDB [Queries]> select concat(Ename,Enumber) from employee;
+-----------------------+
| concat(Ename,Enumber) |
+-----------------------+
| jatin1                |
| shashank2             |
| krishna3              |
| jinal4                |
| madu5                 |
| donia6                |
| krrish7               |
| kartik8               |
| akash9                |
| mohit10               |
| raj11                 |
+-----------------------+
11 rows in set (0.001 sec)

MariaDB [Queries]> select substing_index('COMPUTER MANTENANCE CORPORATION',' ');
ERROR 1558 (HY000): Column count of mysql.proc is wrong. Expected 21, found 20. Created with MariaDB 100108, now running 100422. Please use mysql_upgrade to fix this error
MariaDB [Queries]> select substring_index('COMPUTER MANTENANCE CORPORATION',' ');
ERROR 1582 (42000): Incorrect parameter count in the call to native function 'substring_index'
MariaDB [Queries]> select substring_index('COMPUTER MANTENANCE CORPORATION',' ',-1);
+-----------------------------------------------------------+
| substring_index('COMPUTER MANTENANCE CORPORATION',' ',-1) |
+-----------------------------------------------------------+
| CORPORATION                                               |
+-----------------------------------------------------------+
1 row in set (0.000 sec)

MariaDB [Queries]> select substring_index('COMPUTER MANTENANCE CORPORATION',' ',3);
+----------------------------------------------------------+
| substring_index('COMPUTER MANTENANCE CORPORATION',' ',3) |
+----------------------------------------------------------+
| COMPUTER MANTENANCE CORPORATION                          |
+----------------------------------------------------------+
1 row in set (0.001 sec)

MariaDB [Queries]> Select instr(‘computer maintenance corporation’,’a’,1,1)
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'corporation’,’a’,1,1)' at line 1
MariaDB [Queries]> Select replace(‘Allens’,’A’,’b’);
ERROR 1054 (42S22): Unknown column '‘Allens’' in 'field list'
MariaDB [Queries]> Select instr('computer maintenance corporation','a',1,1)
    -> ;
ERROR 1582 (42000): Incorrect parameter count in the call to native function 'instr'
MariaDB [Queries]> Select replace('Allens','A','b');
+---------------------------+
| replace('Allens','A','b') |
+---------------------------+
| bllens                    |
+---------------------------+
1 row in set (0.000 sec)

MariaDB [Queries]> Select Ename , JOB, replace(JOB, 'manager','BOSS') as replace_job from employee;  
+----------+----------------+----------------+
| Ename    | JOB            | replace_job    |
+----------+----------------+----------------+
| jatin    | full stack     | full stack     |
| shashank | full stack     | full stack     |
| krishna  | java developer | java developer |
| jinal    | Data science   | Data science   |
| madu     | HR             | HR             |
| donia    | clerks         | clerks         |
| krrish   | drawing        | drawing        |
| kartik   | saleman        | saleman        |
| akash    | analyst        | analyst        |
| mohit    | clerks         | clerks         |
| raj      | saleman        | saleman        |
+----------+----------------+----------------+
11 rows in set (0.001 sec)

MariaDB [Queries]> insert into employee values (12,'rajat','manger',640000,'NUMBER40','1990-12-03',0,32);
Query OK, 1 row affected (0.004 sec)

MariaDB [Queries]> insert into employee values (12,'raju','manager',640000,'NUMBER40','1990-12-03',0,32);
Query OK, 1 row affected (0.003 sec)

MariaDB [Queries]> update table set JOB='manager' from employee where JOB ='manger';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'table set JOB='manager' from employee where JOB ='manger'' at line 1
MariaDB [Queries]> update epmloyee set JOB='manager'  where JOB ='manger';
ERROR 1146 (42S02): Table 'Queries.epmloyee' doesn't exist
MariaDB [Queries]> update employee set JOB='manager'  where JOB ='manger';
Query OK, 1 row affected (0.003 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> select * from employee;
+---------+----------+----------------+--------+------------+------------+------------+------------+
| Enumber | EName    | JOB            | Salary | Department | Joining    | Commission | Experience |
+---------+----------+----------------+--------+------------+------------+------------+------------+
|       1 | jatin    | full stack     | 320000 | NUMBER10   | 1990-02-04 |       2000 |         32 |
|       2 | shashank | full stack     |  32000 | NUMBER20   | 1990-04-03 |          0 |         32 |
|       3 | krishna  | java developer |   4500 | NUMBER3    | 2000-04-04 |       3000 |         22 |
|       4 | jinal    | Data science   |   4000 | NUMBER40   | 2010-11-04 |       2000 |         12 |
|       5 | madu     | HR             |   5000 | NUMBER5    | 2021-12-01 |       1000 |          1 |
|       6 | donia    | clerks         | 320000 | NUMBER20   | 1990-02-04 |       2000 |         32 |
|       7 | krrish   | drawing        |  32000 | NUMBER10   | 1990-04-03 |          0 |         32 |
|       8 | kartik   | saleman        |   2500 | NUMBER10   | 2000-04-04 |       3000 |         22 |
|       9 | akash    | analyst        |   3000 | NUMBER20   | 2010-11-04 |       2000 |         12 |
|      10 | mohit    | clerks         |   5000 | NUMBER11   | 2021-12-01 |       1000 |          1 |
|      11 | raj      | saleman        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |
|      12 | rajat    | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |
|      12 | raju     | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |
+---------+----------+----------------+--------+------------+------------+------------+------------+
13 rows in set (0.001 sec)

MariaDB [Queries]> Select Ename , JOB, replace(JOB, 'manager','BOSS') as replace_job from employee; 
+----------+----------------+----------------+
| Ename    | JOB            | replace_job    |
+----------+----------------+----------------+
| jatin    | full stack     | full stack     |
| shashank | full stack     | full stack     |
| krishna  | java developer | java developer |
| jinal    | Data science   | Data science   |
| madu     | HR             | HR             |
| donia    | clerks         | clerks         |
| krrish   | drawing        | drawing        |
| kartik   | saleman        | saleman        |
| akash    | analyst        | analyst        |
| mohit    | clerks         | clerks         |
| raj      | saleman        | saleman        |
| rajat    | manager        | BOSS           |
| raju     | manager        | BOSS           |
+----------+----------------+----------------+
13 rows in set (0.000 sec)

MariaDB [Queries]> select * from department;,
ERROR 1146 (42S02): Table 'Queries.department' doesn't exist
    -> select * from Department;,
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '
select * from Department' at line 1
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [Queries]> show table
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [Queries]> show tables
    -> ;
+-------------------+
| Tables_in_Queries |
+-------------------+
| Queries1          |
| employee          |
| student           |
+-------------------+
3 rows in set (0.001 sec)

MariaDB [Queries]> , select * from Queries1;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' select * from Queries1' at line 1
MariaDB [Queries]> select * from Queries1;
+----+----------------+------------+--------------------+
| ID | Department     | Joining    | Email              |
+----+----------------+------------+--------------------+
|  1 | full stack     | 2022-02-02 | jatin@gmail.com    |
|  2 | full stack     | 2022-02-02 | shashank@gmail.com |
|  3 | java developer | 2005-11-12 | krishna@gmail.com  |
|  4 | Data science   | 2022-02-02 | jinal@gmail.com    |
|  5 | HR             | 2021-04-02 | madu@gmail.com     |
+----+----------------+------------+--------------------+
5 rows in set (0.000 sec)

MariaDB [Queries]> use Sales;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
MariaDB [Sales]> show tables;
+-----------------+
| Tables_in_Sales |
+-----------------+
| HR              |
| Supervisor      |
| employee1       |
| official        |
| salarydetails   |
+-----------------+
5 rows in set (0.001 sec)

MariaDB [Sales]> select 22*363 as day; 
+------+
| day  |
+------+
| 7986 |
+------+
1 row in set (0.000 sec)

MariaDB [Sales]> select 22*12 as months; 
+--------+
| months |
+--------+
|    264 |
+--------+
1 row in set (0.000 sec)

MariaDB [Sales]> Select to_char(sysdate,’date month day year’)
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'day year’)' at line 1
MariaDB [Sales]> Select to_char(sysdate,'1947-08-15')
    -> ;
ERROR 1558 (HY000): Column count of mysql.proc is wrong. Expected 21, found 20. Created with MariaDB 100108, now running 100422. Please use mysql_upgrade to fix this error
MariaDB [Sales]> Select to_char(sysdate,'15-08-1947');
ERROR 1558 (HY000): Column count of mysql.proc is wrong. Expected 21, found 20. Created with MariaDB 100108, now running 100422. Please use mysql_upgrade to fix this error
MariaDB [Sales]>  Select  next_day (sysdate,’SATURDAY’ );
ERROR 1558 (HY000): Column count of mysql.proc is wrong. Expected 21, found 20. Created with MariaDB 100108, now running 100422. Please use mysql_upgrade to fix this error
MariaDB [Sales]> Select  next_day (sysdate,’SATURDAY’ );
ERROR 1558 (HY000): Column count of mysql.proc is wrong. Expected 21, found 20. Created with MariaDB 100108, now running 100422. Please use mysql_upgrade to fix this error
MariaDB [Sales]> select * from employee;
ERROR 1146 (42S02): Table 'Sales.employee' doesn't exist
MariaDB [Sales]> select * from employee1;
+----+---------+----------+-------------------+
| id | Ename   | Eaddress | email             |
+----+---------+----------+-------------------+
|  1 | jatin   | jaipur   | jatin@gmail.com   |
|  2 | akash   | jaipur   | akash@gmail.com   |
|  3 | krishna | sikar    | krishna@gmail.com |
|  4 | mukul   | delhi    | mukul@gmail.com   |
|  5 | donia   | jaipur   | donia@gmail.com   |
+----+---------+----------+-------------------+
5 rows in set (0.007 sec)

MariaDB [Sales]> select * from Queris1;
ERROR 1146 (42S02): Table 'Sales.Queris1' doesn't exist
MariaDB [Sales]> select * from Queri1;
ERROR 1146 (42S02): Table 'Sales.Queri1' doesn't exist
MariaDB [Sales]> select * from Queris;
ERROR 1146 (42S02): Table 'Sales.Queris' doesn't exist
MariaDB [Sales]> use Queris;
ERROR 1049 (42000): Unknown database 'Queris'
MariaDB [Sales]> use Queries;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
MariaDB [Queries]> select * from employee;
+---------+----------+----------------+--------+------------+------------+------------+------------+
| Enumber | EName    | JOB            | Salary | Department | Joining    | Commission | Experience |
+---------+----------+----------------+--------+------------+------------+------------+------------+
|       1 | jatin    | full stack     | 320000 | NUMBER10   | 1990-02-04 |       2000 |         32 |
|       2 | shashank | full stack     |  32000 | NUMBER20   | 1990-04-03 |          0 |         32 |
|       3 | krishna  | java developer |   4500 | NUMBER3    | 2000-04-04 |       3000 |         22 |
|       4 | jinal    | Data science   |   4000 | NUMBER40   | 2010-11-04 |       2000 |         12 |
|       5 | madu     | HR             |   5000 | NUMBER5    | 2021-12-01 |       1000 |          1 |
|       6 | donia    | clerks         | 320000 | NUMBER20   | 1990-02-04 |       2000 |         32 |
|       7 | krrish   | drawing        |  32000 | NUMBER10   | 1990-04-03 |          0 |         32 |
|       8 | kartik   | saleman        |   2500 | NUMBER10   | 2000-04-04 |       3000 |         22 |
|       9 | akash    | analyst        |   3000 | NUMBER20   | 2010-11-04 |       2000 |         12 |
|      10 | mohit    | clerks         |   5000 | NUMBER11   | 2021-12-01 |       1000 |          1 |
|      11 | raj      | saleman        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |
|      12 | rajat    | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |
|      12 | raju     | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |
+---------+----------+----------------+--------+------------+------------+------------+------------+
13 rows in set (0.001 sec)

MariaDB [Queries]> Select JOB from employee where Department=NUMBER10 and  JOB in(select JOB from employee where Department=NUMBER20);
ERROR 1054 (42S22): Unknown column 'NUMBER10' in 'where clause'
MariaDB [Queries]> Select JOB from employee where Department='NUMBER10' and  JOB in(select JOB from employee where Department='NUMBER20');
+------------+
| JOB        |
+------------+
| full stack |
+------------+
1 row in set (0.001 sec)

MariaDB [Queries]> Select JOB from employee where Department='NUMBER10' intersect select JOB from employee where Department='NUMBER10');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')' at line 1
MariaDB [Queries]> Select distinct(JOB) from employee where Department='NUMBER10' and JOB in(select JOB from employee where Department='NUMBER20');
+------------+
| JOB        |
+------------+
| full stack |
+------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select JOB from employee where Department='NUMBER10' and JOB not in (select JOB from employee where Department<>'NUMBER10');
+---------+
| JOB     |
+---------+
| drawing |
+---------+
1 row in set (0.005 sec)

MariaDB [Queries]> alter employee add Grade varchar(10);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'employee add Grade varchar(10)' at line 1
MariaDB [Queries]> alter table employee add Grade varchar(10);
Query OK, 0 rows affected (0.007 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [Queries]> update employee set Grade =1 where Enumber=1;
Query OK, 1 row affected (0.005 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =3 where Enumber=2;
Query OK, 1 row affected (0.005 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =5 where Enumber=3;
Query OK, 1 row affected (0.003 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =1 where Enumber=4;
Query OK, 1 row affected (0.007 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =3 where Enumber=5;
Query OK, 1 row affected (0.003 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =2 where Enumber=6;
Query OK, 1 row affected (0.003 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =4 where Enumber=7;
Query OK, 1 row affected (0.005 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =3 where Enumber=8;
Query OK, 1 row affected (0.009 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =1 where Enumber=9;
Query OK, 1 row affected (0.002 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =2 where Enumber=10;
Query OK, 1 row affected (0.003 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =5 where Enumber=11;
Query OK, 1 row affected (0.003 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =5 Enumber=13 where Ename='raju';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Enumber=13 where Ename='raju'' at line 1
MariaDB [Queries]> update employee set Grade =5, Enumber=13 where Ename='raju';
Query OK, 1 row affected (0.003 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> update employee set Grade =3 where Ename='rajat';
Query OK, 1 row affected (0.003 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> select * from employee where JOB='saleman' and Grade=3;
+---------+--------+---------+--------+------------+------------+------------+------------+-------+
| Enumber | EName  | JOB     | Salary | Department | Joining    | Commission | Experience | Grade |
+---------+--------+---------+--------+------------+------------+------------+------------+-------+
|       8 | kartik | saleman |   2500 | NUMBER10   | 2000-04-04 |       3000 |         22 |     3 |
+---------+--------+---------+--------+------------+------------+------------+------------+-------+
1 row in set (0.001 sec)

MariaDB [Queries]> select Ename, JOB from employee where JOB !="manager";
+----------+----------------+
| Ename    | JOB            |
+----------+----------------+
| jatin    | full stack     |
| shashank | full stack     |
| krishna  | java developer |
| jinal    | Data science   |
| madu     | HR             |
| donia    | clerks         |
| krrish   | drawing        |
| kartik   | saleman        |
| akash    | analyst        |
| mohit    | clerks         |
| raj      | saleman        |
+----------+----------------+
11 rows in set (0.001 sec)

MariaDB [Queries]> select Ename, JOB from employee where JOB ="manager";
+-------+---------+
| Ename | JOB     |
+-------+---------+
| rajat | manager |
| raju  | manager |
+-------+---------+
2 rows in set (0.001 sec)

MariaDB [Queries]> select * from employee where length(Ename)>4;
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+
| Enumber | EName    | JOB            | Salary | Department | Joining    | Commission | Experience | Grade |
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+
|       1 | jatin    | full stack     | 320000 | NUMBER10   | 1990-02-04 |       2000 |         32 |     1 |
|       2 | shashank | full stack     |  32000 | NUMBER20   | 1990-04-03 |          0 |         32 |     3 |
|       3 | krishna  | java developer |   4500 | NUMBER3    | 2000-04-04 |       3000 |         22 |     5 |
|       4 | jinal    | Data science   |   4000 | NUMBER40   | 2010-11-04 |       2000 |         12 |     1 |
|       6 | donia    | clerks         | 320000 | NUMBER20   | 1990-02-04 |       2000 |         32 |     2 |
|       7 | krrish   | drawing        |  32000 | NUMBER10   | 1990-04-03 |          0 |         32 |     4 |
|       8 | kartik   | saleman        |   2500 | NUMBER10   | 2000-04-04 |       3000 |         22 |     3 |
|       9 | akash    | analyst        |   3000 | NUMBER20   | 2010-11-04 |       2000 |         12 |     1 |
|      10 | mohit    | clerks         |   5000 | NUMBER11   | 2021-12-01 |       1000 |          1 |     2 |
|      12 | rajat    | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     3 |
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select * from employee where Department like 's%' and location like '%o';
Empty set (0.001 sec)

MariaDB [Queries]> select * from employee where Department like 's%' and location like '%o';
Empty set (0.000 sec)

MariaDB [Queries]> select * from employee where Department like 's%' and location like '%o';
Empty set (0.001 sec)

MariaDB [Queries]> select * from employee ;
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
| Enumber | EName    | JOB            | Salary | Department | Joining    | Commission | Experience | Grade | location |
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
|       1 | jatin    | full stack     | 320000 | NUMBER10   | 1990-02-04 |       2000 |         32 |     1 | o        |
|       2 | shashank | full stack     |  32000 | NUMBER20   | 1990-04-03 |          0 |         32 |     3 | udaipur  |
|       3 | krishna  | java developer |   4500 | NUMBER3    | 2000-04-04 |       3000 |         22 |     5 | jaipur   |
|       4 | jinal    | Data science   |   4000 | NUMBER40   | 2010-11-04 |       2000 |         12 |     1 | udaipur  |
|       5 | madu     | HR             |   5000 | NUMBER5    | 2021-12-01 |       1000 |          1 |     3 | jaipur   |
|       6 | donia    | clerks         | 320000 | NUMBER20   | 1990-02-04 |       2000 |         32 |     2 | ajmer    |
|       7 | krrish   | drawing        |  32000 | NUMBER10   | 1990-04-03 |          0 |         32 |     4 | jaipur   |
|       8 | kartik   | saleman        |   2500 | NUMBER10   | 2000-04-04 |       3000 |         22 |     3 | ajmer    |
|       9 | akash    | analyst        |   3000 | NUMBER20   | 2010-11-04 |       2000 |         12 |     1 | NULL     |
|      10 | mohit    | clerks         |   5000 | NUMBER11   | 2021-12-01 |       1000 |          1 |     2 | jaipur   |
|      11 | raj      | saleman        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     5 | sikar    |
|      12 | rajat    | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     3 | jaipur   |
|      13 | raju     | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     5 | jaipur   |
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
13 rows in set (0.001 sec)

MariaDB [Queries]> select * from employee ;
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
| Enumber | EName    | JOB            | Salary | Department | Joining    | Commission | Experience | Grade | location |
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
|       1 | jatin    | full stack     | 320000 | NUMBER10   | 1990-02-04 |       2000 |         32 |     1 | o        |
|       2 | shashank | full stack     |  32000 | NUMBER20   | 1990-04-03 |          0 |         32 |     3 | udaipur  |
|       3 | krishna  | java developer |   4500 | NUMBER3    | 2000-04-04 |       3000 |         22 |     5 | jaipur   |
|       4 | jinal    | Data science   |   4000 | NUMBER40   | 2010-11-04 |       2000 |         12 |     1 | udaipur  |
|       5 | madu     | HR             |   5000 | NUMBER5    | 2021-12-01 |       1000 |          1 |     3 | jaipur   |
|       6 | donia    | clerks         | 320000 | NUMBER20   | 1990-02-04 |       2000 |         32 |     2 | ajmer    |
|       7 | krrish   | drawing        |  32000 | NUMBER10   | 1990-04-03 |          0 |         32 |     4 | jaipur   |
|       8 | kartik   | saleman        |   2500 | NUMBER10   | 2000-04-04 |       3000 |         22 |     3 | ajmer    |
|       9 | akash    | analyst        |   3000 | NUMBER20   | 2010-11-04 |       2000 |         12 |     1 | NULL     |
|      10 | mohit    | clerks         |   5000 | NUMBER11   | 2021-12-01 |       1000 |          1 |     2 | jaipur   |
|      11 | raj      | saleman        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     5 | sikar    |
|      12 | rajat    | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     3 | jaipur   |
|      13 | raju     | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     5 | jaipur   |
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
13 rows in set (0.001 sec)

MariaDB [Queries]> select * from employee where Department like 's%' and location like '%o';
Empty set (0.001 sec)

MariaDB [Queries]> select * from employee where JOB='manager and Ename='jones';
    '> ;
    '> '
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'jones';
;
'' at line 1
MariaDB [Queries]> select * from employee where JOB='manager' and Ename='jones';
+---------+-------+---------+--------+------------+------------+------------+------------+-------+----------+
| Enumber | EName | JOB     | Salary | Department | Joining    | Commission | Experience | Grade | location |
+---------+-------+---------+--------+------------+------------+------------+------------+-------+----------+
|      13 | jones | manager | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     5 | jaipur   |
+---------+-------+---------+--------+------------+------------+------------+------------+-------+----------+
1 row in set (0.001 sec)

MariaDB [Queries]> select * from employee where Department like 's%' and location like '%o';
Empty set (0.001 sec)

MariaDB [Queries]> select * from employee where Salary *120/100 >3000;
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
| Enumber | EName    | JOB            | Salary | Department | Joining    | Commission | Experience | Grade | location |
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
|       1 | jatin    | full stack     | 320000 | NUMBER10   | 1990-02-04 |       2000 |         32 |     1 | o        |
|       2 | shashank | full stack     |  32000 | NUMBER20   | 1990-04-03 |          0 |         32 |     3 | udaipur  |
|       3 | krishna  | java developer |   4500 | NUMBER3    | 2000-04-04 |       3000 |         22 |     5 | jaipur   |
|       4 | jinal    | Data science   |   4000 | NUMBER40   | 2010-11-04 |       2000 |         12 |     1 | udaipur  |
|       5 | madu     | HR             |   5000 | NUMBER5    | 2021-12-01 |       1000 |          1 |     3 | jaipur   |
|       6 | donia    | clerks         | 320000 | NUMBER20   | 1990-02-04 |       2000 |         32 |     2 | ajmer    |
|       7 | krrish   | drawing        |  32000 | NUMBER10   | 1990-04-03 |          0 |         32 |     4 | jaipur   |
|       9 | akash    | analyst        |   3000 | NUMBER20   | 2010-11-04 |       2000 |         12 |     1 | NULL     |
|      10 | mohit    | clerks         |   5000 | NUMBER11   | 2021-12-01 |       1000 |          1 |     2 | jaipur   |
|      11 | raj      | saleman        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     5 | sikar    |
|      12 | rajat    | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     3 | jaipur   |
|      13 | jones    | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     5 | jaipur   |
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
12 rows in set (0.001 sec)

MariaDB [Queries]> select Ename, JOB from employee ;
+----------+----------------+
| Ename    | JOB            |
+----------+----------------+
| jatin    | full stack     |
| shashank | full stack     |
| krishna  | java developer |
| jinal    | Data science   |
| madu     | HR             |
| donia    | clerks         |
| krrish   | drawing        |
| kartik   | saleman        |
| akash    | analyst        |
| mohit    | clerks         |
| raj      | saleman        |
| rajat    | manager        |
| jones    | manager        |
+----------+----------------+
13 rows in set (0.001 sec)

MariaDB [Queries]> select Ename, JOB from employee where JOB ="saleman";
+--------+---------+
| Ename  | JOB     |
+--------+---------+
| kartik | saleman |
| raj    | saleman |
+--------+---------+
2 rows in set (0.001 sec)

MariaDB [Queries]> show tables;
+-------------------+
| Tables_in_Queries |
+-------------------+
| Queries1          |
| employee          |
| student           |
+-------------------+
3 rows in set (0.001 sec)

MariaDB [Queries]> select * from Queries1;
+----+----------------+------------+--------------------+
| ID | Department     | Joining    | Email              |
+----+----------------+------------+--------------------+
|  1 | full stack     | 2022-02-02 | jatin@gmail.com    |
|  2 | full stack     | 2022-02-02 | shashank@gmail.com |
|  3 | java developer | 2005-11-12 | krishna@gmail.com  |
|  4 | Data science   | 2022-02-02 | jinal@gmail.com    |
|  5 | HR             | 2021-04-02 | madu@gmail.com     |
+----+----------------+------------+--------------------+
5 rows in set (0.006 sec)

MariaDB [Queries]> select e.Ename , d.Derpartment from employee e , Queries1 d;
ERROR 1054 (42S22): Unknown column 'd.Derpartment' in 'field list'
MariaDB [Queries]> select e.Ename ,JOB from employee;
ERROR 1054 (42S22): Unknown column 'e.Ename' in 'field list'
MariaDB [Queries]> select Ename ,JOB from employee;
+----------+----------------+
| Ename    | JOB            |
+----------+----------------+
| jatin    | full stack     |
| shashank | full stack     |
| krishna  | java developer |
| jinal    | Data science   |
| madu     | HR             |
| donia    | clerks         |
| krrish   | drawing        |
| kartik   | saleman        |
| akash    | analyst        |
| mohit    | clerks         |
| raj      | saleman        |
| rajat    | manager        |
| jones    | manager        |
+----------+----------------+
13 rows in set (0.001 sec)

MariaDB [Queries]> select Ename ,JOB as Department from employee;
+----------+----------------+
| Ename    | Department     |
+----------+----------------+
| jatin    | full stack     |
| shashank | full stack     |
| krishna  | java developer |
| jinal    | Data science   |
| madu     | HR             |
| donia    | clerks         |
| krrish   | drawing        |
| kartik   | saleman        |
| akash    | analyst        |
| mohit    | clerks         |
| raj      | saleman        |
| rajat    | manager        |
| jones    | manager        |
+----------+----------------+
13 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where Department='saleman';
Empty set (0.001 sec)

MariaDB [Queries]> select Ename from employee where JOB='saleman';
+--------+
| Ename  |
+--------+
| kartik |
| raj    |
+--------+
2 rows in set (0.001 sec)

MariaDB [Queries]> select * from employee;
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
| Enumber | EName    | JOB            | Salary | Department | Joining    | Commission | Experience | Grade | location |
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
|       1 | jatin    | full stack     | 320000 | NUMBER10   | 1990-02-04 |       2000 |         32 |     1 | o        |
|       2 | shashank | full stack     |  32000 | NUMBER20   | 1990-04-03 |          0 |         32 |     3 | udaipur  |
|       3 | krishna  | java developer |   4500 | NUMBER3    | 2000-04-04 |       3000 |         22 |     5 | jaipur   |
|       4 | jinal    | Data science   |   4000 | NUMBER40   | 2010-11-04 |       2000 |         12 |     1 | udaipur  |
|       5 | madu     | HR             |   5000 | NUMBER5    | 2021-12-01 |       1000 |          1 |     3 | jaipur   |
|       6 | donia    | clerks         | 320000 | NUMBER20   | 1990-02-04 |       2000 |         32 |     2 | ajmer    |
|       7 | krrish   | drawing        |  32000 | NUMBER10   | 1990-04-03 |          0 |         32 |     4 | jaipur   |
|       8 | kartik   | saleman        |   2500 | NUMBER10   | 2000-04-04 |       3000 |         22 |     3 | ajmer    |
|       9 | akash    | analyst        |   3000 | NUMBER20   | 2010-11-04 |       2000 |         12 |     1 | NULL     |
|      10 | mohit    | clerks         |   5000 | NUMBER11   | 2021-12-01 |       1000 |          1 |     2 | jaipur   |
|      11 | raj      | saleman        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     5 | sikar    |
|      12 | rajat    | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     3 | jaipur   |
|      13 | jones    | manager        | 640000 | NUMBER40   | 1990-12-03 |          0 |         32 |     5 | jaipur   |
+---------+----------+----------------+--------+------------+------------+------------+------------+-------+----------+
13 rows in set (0.001 sec)

MariaDB [Queries]> update employee set location='chicago' where Ename='jinal';
Query OK, 1 row affected (0.003 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [Queries]> select Ename, Department, Salary Commission from employee where Salary between 2000 and 5000;
+---------+------------+------------+
| Ename   | Department | Commission |
+---------+------------+------------+
| krishna | NUMBER3    |       4500 |
| jinal   | NUMBER40   |       4000 |
| madu    | NUMBER5    |       5000 |
| kartik  | NUMBER10   |       2500 |
| akash   | NUMBER20   |       3000 |
| mohit   | NUMBER11   |       5000 |
+---------+------------+------------+
6 rows in set (0.001 sec)

MariaDB [Queries]> select Ename , Salary , JOB from employee where Salary >(select max(Salary) from employee where JOB='manager'); 
Empty set (0.001 sec)

MariaDB [Queries]> select Ename , Salary , JOB from employee where Salary >(select max(Salary) from employee where JOB='manager'); 
+-------+--------+---------+
| Ename | Salary | JOB     |
+-------+--------+---------+
| akash | 800000 | analyst |
+-------+--------+---------+
1 row in set (0.001 sec)

MariaDB [Queries]> SELECT ename FROM emp WHERE deptno = (SELECT deptno FROM dept WHERE dname='sales');
+--------+
| ename  |
+--------+
| allen  |
| ward   |
| martin |
| blake  |
| turner |
| james  |
+--------+
6 rows in set (0.001 sec)


Select JOB from employee where Department=NUMBER10 and  JOB in(select JOB from employee where Department=NUMBER20);
Select JOB from employee where Department='NUMBER10' intersect select JOB from employee where Department='NUMBER10');
Select distinct(JOB) from employee where Department='NUMBER10' and JOB in(select JOB from employee where Department='NUMBER20');
SELECT substr(hiredate,1,2) or substr(sal,-2,2) as newchar FROM emp;
select ename,SUBSTR(hiredate,1,2)||ename||substr(sal,-2,2) from emp