MariaDB [Sales]> create table employee1 (id int not null primary key, Ename varchar(50),Eaddress varchar(50), email varchar(50));
Query OK, 0 rows affected (0.013 sec)


MariaDB [Sales]> insert into employee1(id,Ename,Eaddress,email) values (1,'jatin','jaipur','jatin@gmail.com'),
    -> (2,'akash','jaipur','akash@gmail.com'),
    -> (3,'krishna','sikar','krishna@gmail.com'),
    -> (4,'mukul','delhi','mukul@gmail.com'),
    -> (5,'donia','jaipur','donia@gmail.com');
Query OK, 5 rows affected (0.003 sec)
Records: 5  Duplicates: 0  Warnings: 0


MariaDB [Sales]> create table official (id int not null primary key, department varchar(50),designation varchar(50), email varchar(50));
Query OK, 0 rows affected (0.016 sec)

MariaDB [Sales]> insert into official(id,department,designation,email) values (1,'marketing','HR','jatin@gmail.com'),
    -> (2,'creater','frontend','akash@gmail.com'),
    -> (3,'developer','java','krishna@gmail.com'),
    -> (7,'developer','python','mukul@gmail.com'),
    -> (8,'manager','system manager','donia@gmail.com');
Query OK, 5 rows affected (0.004 sec)
Records: 5  Duplicates: 0  Warnings: 0

MariaDB [Sales]> insert into salarydetails(email,salary,designation) values ('jatin@gmail.com',35000,'HR'),
    -> ('akash@gmail.com',12000,'frontend'),
    -> ('krishna@gmail.com',20000,'java'),
    -> ('mukul@gmail.com',23000,'python'),
    -> ('donia@gmail.com',30000,'system manager');
Query OK, 5 rows affected (0.005 sec)
Records: 5  Duplicates: 0  Warnings: 0

MariaDB [Sales]> select e.id, e.Ename,o.department,o.designation from employee1 e join official o on e.id=o.id; 
+----+---------+------------+-------------+
| id | Ename   | department | designation |
+----+---------+------------+-------------+
|  1 | jatin   | marketing  | HR          |
|  2 | akash   | creater    | frontend    |
|  3 | krishna | developer  | java        |
+----+---------+------------+-------------+
3 rows in set (0.001 sec)


MariaDB [Sales]> select e.id, e.Ename,o.department,o.designation,so.salary, so.designation from employee1 e join official o on e.id=o.id join salarydetails so on o.email=so.email; 
+----+---------+------------+-------------+--------+-------------+
| id | Ename   | department | designation | salary | designation |
+----+---------+------------+-------------+--------+-------------+
|  1 | jatin   | marketing  | HR          |  35000 | HR          |
|  2 | akash   | creater    | frontend    |  12000 | frontend    |
|  3 | krishna | developer  | java        |  20000 | java        |
+----+---------+------------+-------------+--------+-------------+
3 rows in set (0.001 sec)

MariaDB [Sales]> select e.id, e.Ename,o.department,o.designation from employee1 e left join official o on e.id=o.id; 
+----+---------+------------+-------------+
| id | Ename   | department | designation |
+----+---------+------------+-------------+
|  1 | jatin   | marketing  | HR          |
|  2 | akash   | creater    | frontend    |
|  3 | krishna | developer  | java        |
|  4 | mukul   | NULL       | NULL        |
|  5 | donia   | NULL       | NULL        |
+----+---------+------------+-------------+
5 rows in set (0.001 sec)

MariaDB [Sales]> select e.id, e.Ename,o.department,o.designation from employee1 e right join official o on e.id=o.id; 
+------+---------+------------+----------------+
| id   | Ename   | department | designation    |
+------+---------+------------+----------------+
|    1 | jatin   | marketing  | HR             |
|    2 | akash   | creater    | frontend       |
|    3 | krishna | developer  | java           |
| NULL | NULL    | developer  | python         |
| NULL | NULL    | manager    | system manager |
+------+---------+------------+----------------+
5 rows in set (0.001 sec)


MariaDB [Sales]> select e.id, e.Ename, Eaddress,o.designation ,o.department from employee1 e left join official o on e.id=o.id union all select e.id, e.Ename, Eaddress,o.designation ,o.department from employee1 e right join official o on e.id=o.id; 
+------+---------+----------+----------------+------------+
| id   | Ename   | Eaddress | designation    | department |
+------+---------+----------+----------------+------------+
|    1 | jatin   | jaipur   | HR             | marketing  |
|    2 | akash   | jaipur   | frontend       | creater    |
|    3 | krishna | sikar    | java           | developer  |
|    4 | mukul   | delhi    | NULL           | NULL       |
|    5 | donia   | jaipur   | NULL           | NULL       |
|    1 | jatin   | jaipur   | HR             | marketing  |
|    2 | akash   | jaipur   | frontend       | creater    |
|    3 | krishna | sikar    | java           | developer  |
| NULL | NULL    | NULL     | python         | developer  |
| NULL | NULL    | NULL     | system manager | manager    |
+------+---------+----------+----------------+------------+
10 rows in set (0.001 sec)

MariaDB [Sales]> 
MariaDB [Sales]> create table Supervisor(id int not null primary key, Sname varchar(50), supervisorid int);
Query OK, 0 rows affected (0.009 sec)

MariaDB [Sales]> insert into Supervisor(id, Sname, supervisorid) values
    -> (1,'jatin',3),
    -> (2,'amit',3),
    -> (3,'donia',4),
    -> (4,'ronak',5);
Query OK, 4 rows affected (0.003 sec)
Records: 4  Duplicates: 0  Warnings: 0

MariaDB [Sales]> select s.Sname, s1.Sname from Supervisor s left join Supervisor s1 on s.supervisorid=s1.id union all select s.Sname, s1.Sname from Supervisor s left join Supervisor s1 on s.supervisorid=s1.id ;
+-------+-------+
| Sname | Sname |
+-------+-------+
| jatin | donia |
| amit  | donia |
| donia | ronak |
| ronak | NULL  |
| jatin | donia |
| amit  | donia |
| donia | ronak |
| ronak | NULL  |
+-------+-------+
8 rows in set (0.002 sec)


