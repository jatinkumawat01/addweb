Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 1606
Server version: 10.4.22-MariaDB Source distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> use Queries;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed

1 DISPLAY THE DEPT INFORMATION FROM DEPARTMENT TABLE.

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
5 rows in set (0.001 sec)

MariaDB [Queries]> create table employee (
    ->   Enumber int(11) NOT NULL,
    ->   EName varchar(30) NOT NULL,
    ->   JOB varchar(50) NOT NULL,
    ->   Salary bigint(10) NOT NULL,
    ->   Department varchar(50) NOT NULL,
    ->   Joining date NOT NULL,
    ->   Commission INT(11) NOT NULL,
    ->   Experience INT(11) NOT NULL
    -> );
ERROR 1050 (42S01): Table 'employee' already exists
MariaDB [Queries]> drop table employee;
Query OK, 0 rows affected (0.009 sec)

MariaDB [Queries]> create table employee (   Enumber int(11) NOT NULL,   EName varchar(30) NOT NULL,   JOB varchar(50) NOT NULL,   Salary bigint(10) NOT NULL,   Department varchar(50) NOT NULL,   Joining date NOT NULL,   Commission INT(11) NOT NULL,   Experience INT(11) NOT NULL );
Query OK, 0 rows affected (0.016 sec)

MariaDB [Queries]> INSERT INTO employee (Enumber, EName, JOB, Salary, Department, Joining, Commission,Experience) VALUES
    -> (1, 'jatin', 'full stack', 320000, 'NUMBER10', '1990/02/04',2000,32),
    -> (2, 'shashank', 'full stack', 32000, 'NUMBER20', '1990/04/03',0,32),
    -> (3, 'krishna', 'java developer', 4500, 'NUMBER3', '2000/04/04',3000,22),
    -> (4, 'jinal', 'Data science', 4000, 'NUMBER40', '2010/11/04',2000,12),
    -> (5, 'madu', 'HR', 5000, 'NUMBER5', '2021/12/01',1000,1),
    -> (6, 'donia', 'clerks', 320000, 'NUMBER20', '1990/02/04',2000,32),
    -> (7, 'krrish', 'drawing', 32000, 'NUMBER10', '1990/04/03',0,32),
    -> (8, 'kartik', 'saleman', 2500, 'NUMBER10', '2000/04/04',3000,22),
    -> (9, 'akash', 'analyst', 3000, 'NUMBER20', '2010/11/04',2000,12),
    -> (10, 'mohit', 'clerks', 5000, 'NUMBER11', '2021/12/01',1000,1);
Query OK, 10 rows affected (0.008 sec)
Records: 10  Duplicates: 0  Warnings: 0

MariaDB [Queries]> 

2 DISPLAY THE DETAILS OF ALL EMPLOYEES.

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

MariaDB [Queries]> select Ename, JOB from employee;
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
+----------+----------------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Salary ,JOB from employee;
+--------+----------------+
| Salary | JOB            |
+--------+----------------+
| 320000 | full stack     |
|  32000 | full stack     |
|   4500 | java developer |
|   4000 | Data science   |
|   5000 | HR             |
| 320000 | clerks         |
|  32000 | drawing        |
|   2500 | saleman        |
|   3000 | analyst        |
|   5000 | clerks         |
+--------+----------------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select ID, Salary  from employee;
ERROR 1054 (42S22): Unknown column 'ID' in 'field list'
MariaDB [Queries]> select Enumber, Salary  from employee;
+---------+--------+
| Enumber | Salary |
+---------+--------+
|       1 | 320000 |
|       2 |  32000 |
|       3 |   4500 |
|       4 |   4000 |
|       5 |   5000 |
|       6 | 320000 |
|       7 |  32000 |
|       8 |   2500 |
|       9 |   3000 |
|      10 |   5000 |
+---------+--------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Ename, 12*Salary anual_salary from employee;
+----------+--------------+
| Ename    | anual_salary |
+----------+--------------+
| jatin    |      3840000 |
| shashank |       384000 |
| krishna  |        54000 |
| jinal    |        48000 |
| madu     |        60000 |
| donia    |      3840000 |
| krrish   |       384000 |
| kartik   |        30000 |
| akash    |        36000 |
| mohit    |        60000 |
+----------+--------------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Ename, 12*Salary anual_salary from employee;
+----------+--------------+
| Ename    | anual_salary |
+----------+--------------+
| jatin    |      3840000 |
| shashank |       384000 |
| krishna  |        54000 |
| jinal    |        48000 |
| madu     |        60000 |
| donia    |      3840000 |
| krrish   |       384000 |
| kartik   |        30000 |
| akash    |        36000 |
| mohit    |        60000 |
+----------+--------------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Ename, Department FROM employee where department='NUMBER10'; 
+--------+------------+
| Ename  | Department |
+--------+------------+
| jatin  | NUMBER10   |
| krrish | NUMBER10   |
| kartik | NUMBER10   |
+--------+------------+
3 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where JOB in('clerks','drawing') and Salary>3000;
+--------+
| Ename  |
+--------+
| donia  |
| krrish |
| mohit  |
+--------+
3 rows in set (0.001 sec)

MariaDB [Queries]> select Enumber, Ename from employee where commission>0;
+---------+---------+
| Enumber | Ename   |
+---------+---------+
|       1 | jatin   |
|       3 | krishna |
|       4 | jinal   |
|       5 | madu    |
|       6 | donia   |
|       8 | kartik  |
|       9 | akash   |
|      10 | mohit   |
+---------+---------+
8 rows in set (0.001 sec)

MariaDB [Queries]> select Enumber, Ename from employee where commission=0;
+---------+----------+
| Enumber | Ename    |
+---------+----------+
|       2 | shashank |
|       7 | krrish   |
+---------+----------+
2 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where JOB in('clerks','analyst','salsman') and Salary>3000;
+-------+
| Ename |
+-------+
| donia |
| mohit |
+-------+
2 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where Joining<'1990/06/30' or Joining>'1990/12/31';
+----------+
| Ename    |
+----------+
| jatin    |
| shashank |
| krishna  |
| jinal    |
| madu     |
| donia    |
| krrish   |
| kartik   |
| akash    |
| mohit    |
+----------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where JOB in('clerks','analyst','drawing') and Salary>3000;
+--------+
| Ename  |
+--------+
| donia  |
| krrish |
| mohit  |
+--------+
3 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where Experience>=5 ;
+----------+
| Ename    |
+----------+
| jatin    |
| shashank |
| krishna  |
| jinal    |
| donia    |
| krrish   |
| kartik   |
| akash    |
+----------+
8 rows in set (0.001 sec)

MariaDB [Queries]> SELECT CURDATE() AS Today; 
+------------+
| Today      |
+------------+
| 2022-03-24 |
+------------+
1 row in set (0.000 sec)

MariaDB [Queries]> select user from mysql.user;
+------+
| user |
+------+
| root |
| root |
|      |
| pma  |
| root |
+------+
5 rows in set (0.001 sec)

MariaDB [Queries]> select current_user;
+----------------+
| current_user   |
+----------------+
| root@localhost |
+----------------+
1 row in set (0.000 sec)

MariaDB [Queries]> select Ename from employee where Department='NUMBER10' OR Department='NUMBER20' OR Department='NUMBER40' OR JOB IN('cleraks','saleman','analyst');
+----------+
| Ename    |
+----------+
| jatin    |
| shashank |
| jinal    |
| donia    |
| krrish   |
| kartik   |
| akash    |
+----------+
7 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where Ename like '%A';
+---------+
| Ename   |
+---------+
| krishna |
| donia   |
+---------+
2 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where Ename like '%s';
Empty set (0.001 sec)

MariaDB [Queries]> select Ename from employee where Ename like '%S';
Empty set (0.001 sec)

MariaDB [Queries]> select Ename from employee where Ename like 's%';
+----------+
| Ename    |
+----------+
| shashank |
+----------+
1 row in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where Ename like '%a';
+---------+
| Ename   |
+---------+
| krishna |
| donia   |
+---------+
2 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where length(Ename) = 5;
+-------+
| Ename |
+-------+
| jatin |
| jinal |
| donia |
| akash |
| mohit |
+-------+
5 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where Ename like '_a%';
+--------+
| Ename  |
+--------+
| jatin  |
| madu   |
| kartik |
+--------+
3 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where JOB!='manager';
+----------+
| Ename    |
+----------+
| jatin    |
| shashank |
| krishna  |
| jinal    |
| madu     |
| donia    |
| krrish   |
| kartik   |
| akash    |
| mohit    |
+----------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Ename from employee where JOB not in ('manager','clerks','analyst');
+----------+
| Ename    |
+----------+
| jatin    |
| shashank |
| krishna  |
| jinal    |
| madu     |
| krrish   |
| kartik   |
+----------+
7 rows in set (0.001 sec)

MariaDB [Queries]> select sum(Salary) from employee;
+-------------+
| sum(Salary) |
+-------------+
|      728000 |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select max(Salary) from employee;
+-------------+
| max(Salary) |
+-------------+
|      320000 |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select min(Salary) from employee;
+-------------+
| min(Salary) |
+-------------+
|        2500 |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select avg(Salary) from employee;
+-------------+
| avg(Salary) |
+-------------+
|  72800.0000 |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select min(Salary) from employee where JOB='clerks';
+-------------+
| min(Salary) |
+-------------+
|        5000 |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select min(Salary) from employee where Department='NUMBER20';
+-------------+
| min(Salary) |
+-------------+
|        3000 |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select min(Salary) from employee where JOB='saleman';
+-------------+
| min(Salary) |
+-------------+
|        2500 |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select avg(Salary) from employee where JOB='manager';
+-------------+
| avg(Salary) |
+-------------+
|        NULL |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select avg(Salary) from employee where JOB='analyst' and Department="NUMBER40";
+-------------+
| avg(Salary) |
+-------------+
|        NULL |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select sum(Salary) from employee where JOB='analyst' and Department="NUMBER40";
+-------------+
| sum(Salary) |
+-------------+
|        NULL |
+-------------+
1 row in set (0.001 sec)

MariaDB [Queries]> select Ename ,Salary from employee order by salary asc;
+----------+--------+
| Ename    | Salary |
+----------+--------+
| kartik   |   2500 |
| akash    |   3000 |
| jinal    |   4000 |
| krishna  |   4500 |
| mohit    |   5000 |
| madu     |   5000 |
| shashank |  32000 |
| krrish   |  32000 |
| donia    | 320000 |
| jatin    | 320000 |
+----------+--------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Ename ,Salary from employee order by salary desc;
+----------+--------+
| Ename    | Salary |
+----------+--------+
| jatin    | 320000 |
| donia    | 320000 |
| shashank |  32000 |
| krrish   |  32000 |
| madu     |   5000 |
| mohit    |   5000 |
| krishna  |   4500 |
| jinal    |   4000 |
| akash    |   3000 |
| kartik   |   2500 |
+----------+--------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select * from employee order by Ename asc;
+---------+----------+----------------+--------+------------+------------+------------+------------+
| Enumber | EName    | JOB            | Salary | Department | Joining    | Commission | Experience |
+---------+----------+----------------+--------+------------+------------+------------+------------+
|       9 | akash    | analyst        |   3000 | NUMBER20   | 2010-11-04 |       2000 |         12 |
|       6 | donia    | clerks         | 320000 | NUMBER20   | 1990-02-04 |       2000 |         32 |
|       1 | jatin    | full stack     | 320000 | NUMBER10   | 1990-02-04 |       2000 |         32 |
|       4 | jinal    | Data science   |   4000 | NUMBER40   | 2010-11-04 |       2000 |         12 |
|       8 | kartik   | saleman        |   2500 | NUMBER10   | 2000-04-04 |       3000 |         22 |
|       3 | krishna  | java developer |   4500 | NUMBER3    | 2000-04-04 |       3000 |         22 |
|       7 | krrish   | drawing        |  32000 | NUMBER10   | 1990-04-03 |          0 |         32 |
|       5 | madu     | HR             |   5000 | NUMBER5    | 2021-12-01 |       1000 |          1 |
|      10 | mohit    | clerks         |   5000 | NUMBER11   | 2021-12-01 |       1000 |          1 |
|       2 | shashank | full stack     |  32000 | NUMBER20   | 1990-04-03 |          0 |         32 |
+---------+----------+----------------+--------+------------+------------+------------+------------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Ename, Salary*12 as 'Annual' from employee order by Salary desc
    -> ;
+----------+---------+
| Ename    | Annual  |
+----------+---------+
| jatin    | 3840000 |
| donia    | 3840000 |
| shashank |  384000 |
| krrish   |  384000 |
| madu     |   60000 |
| mohit    |   60000 |
| krishna  |   54000 |
| jinal    |   48000 |
| akash    |   36000 |
| kartik   |   30000 |
+----------+---------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Ename, Salary, Salary*15/100 as 'HRA', Salary*10/100 as 'DA', Salary*5/100 as 'PF', Salary+Salary*15/100+Salary*10/100-Salary*5/100 as 'Total salary' from employee;
+----------+--------+------------+------------+------------+--------------+
| Ename    | Salary | HRA        | DA         | PF         | Total salary |
+----------+--------+------------+------------+------------+--------------+
| jatin    | 320000 | 48000.0000 | 32000.0000 | 16000.0000 |  384000.0000 |
| shashank |  32000 |  4800.0000 |  3200.0000 |  1600.0000 |   38400.0000 |
| krishna  |   4500 |   675.0000 |   450.0000 |   225.0000 |    5400.0000 |
| jinal    |   4000 |   600.0000 |   400.0000 |   200.0000 |    4800.0000 |
| madu     |   5000 |   750.0000 |   500.0000 |   250.0000 |    6000.0000 |
| donia    | 320000 | 48000.0000 | 32000.0000 | 16000.0000 |  384000.0000 |
| krrish   |  32000 |  4800.0000 |  3200.0000 |  1600.0000 |   38400.0000 |
| kartik   |   2500 |   375.0000 |   250.0000 |   125.0000 |    3000.0000 |
| akash    |   3000 |   450.0000 |   300.0000 |   150.0000 |    3600.0000 |
| mohit    |   5000 |   750.0000 |   500.0000 |   250.0000 |    6000.0000 |
+----------+--------+------------+------------+------------+--------------+
10 rows in set (0.001 sec)

MariaDB [Queries]> select Department,count(Department) from employee group by Department;
+------------+-------------------+
| Department | count(Department) |
+------------+-------------------+
| NUMBER10   |                 3 |
| NUMBER11   |                 1 |
| NUMBER20   |                 3 |
| NUMBER3    |                 1 |
| NUMBER40   |                 1 |
| NUMBER5    |                 1 |
+------------+-------------------+
6 rows in set (0.001 sec)

MariaDB [Queries]> select JOB,count(JOB) from employee group by JOB;
+----------------+------------+
| JOB            | count(JOB) |
+----------------+------------+
| analyst        |          1 |
| clerks         |          2 |
| Data science   |          1 |
| drawing        |          1 |
| full stack     |          2 |
| HR             |          1 |
| java developer |          1 |
| saleman        |          1 |
+----------------+------------+
8 rows in set (0.001 sec)

MariaDB [Queries]> select Department, sum(Salary) from employee group by Department;
+------------+-------------+
| Department | sum(Salary) |
+------------+-------------+
| NUMBER10   |      354500 |
| NUMBER11   |        5000 |
| NUMBER20   |      355000 |
| NUMBER3    |        4500 |
| NUMBER40   |        4000 |
| NUMBER5    |        5000 |
+------------+-------------+
6 rows in set (0.001 sec)

MariaDB [Queries]> select Department, max(Salary) from employee group by Department;
+------------+-------------+
| Department | max(Salary) |
+------------+-------------+
| NUMBER10   |      320000 |
| NUMBER11   |        5000 |
| NUMBER20   |      320000 |
| NUMBER3    |        4500 |
| NUMBER40   |        4000 |
| NUMBER5    |        5000 |
+------------+-------------+
6 rows in set (0.001 sec)

MariaDB [Queries]> select JOB, sum(Salary) from employee group by JOB;
+----------------+-------------+
| JOB            | sum(Salary) |
+----------------+-------------+
| analyst        |        3000 |
| clerks         |      325000 |
| Data science   |        4000 |
| drawing        |       32000 |
| full stack     |      352000 |
| HR             |        5000 |
| java developer |        4500 |
| saleman        |        2500 |
+----------------+-------------+
8 rows in set (0.001 sec)

MariaDB [Queries]> select JOB, min(Salary) from employee group by JOB;
+----------------+-------------+
| JOB            | min(Salary) |
+----------------+-------------+
| analyst        |        3000 |
| clerks         |        5000 |
| Data science   |        4000 |
| drawing        |       32000 |
| full stack     |       32000 |
| HR             |        5000 |
| java developer |        4500 |
| saleman        |        2500 |
+----------------+-------------+
8 rows in set (0.001 sec)

MariaDB [Queries]> select Department,count(Department) from employee group by Department having count(*);
+------------+-------------------+
| Department | count(Department) |
+------------+-------------------+
| NUMBER10   |                 3 |
| NUMBER11   |                 1 |
| NUMBER20   |                 3 |
| NUMBER3    |                 1 |
| NUMBER40   |                 1 |
| NUMBER5    |                 1 |
+------------+-------------------+
6 rows in set (0.001 sec)

MariaDB [Queries]> select Department,count(Department) from employee group by Department having count(*)>3;
Empty set (0.001 sec)

MariaDB [Queries]> select JOB,sum(Salary) from employee group by JOB having sum(Salary)>40000;
+------------+-------------+
| JOB        | sum(Salary) |
+------------+-------------+
| clerks     |      325000 |
| full stack |      352000 |
+------------+-------------+
2 rows in set (0.001 sec)

MariaDB [Queries]> select JOB,count(JOB) from employee group by JOB having count(*)>3;
Empty set (0.001 sec)

MariaDB [Queries]> 





-- pdf task


