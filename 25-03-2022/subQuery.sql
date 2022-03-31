MariaDB [Sales]> insert into official(id,department,designation,email) values (1,'marketing','HR','jatin@gmail.com'),
    -> (2,'creater','frontend','akash@gmail.com'),
    -> (3,'developer','java','krishna@gmail.com'),
    -> (7,'developer','python','mukul@gmail.com'),
    -> (8,'manager','system manager','donia@gmail.com');
Query OK, 5 rows affected (0.004 sec)
Records: 5  Duplicates: 0  Warnings: 0


MariaDB [Sales]> select id, Ename  from employee1 where id=(select id from official where email='jatin@gmail.com');
+----+-------+
| id | Ename |
+----+-------+
|  1 | jatin |
+----+-------+
1 row in set (0.001 sec)


MariaDB [Sales]> select id, Ename from employee1 where id in (select id from official where department='developer');
+----+---------+
| id | Ename   |
+----+---------+
|  3 | krishna |
+----+---------+
1 row in set (0.001 sec)


MariaDB [Sales]> select id, Ename from employee1 where id in (select id from official where email in (select email from HR where salary<30000));
+----+---------+
| id | Ename   |
+----+---------+
|  2 | akash   |
|  3 | krishna |
+----+---------+
2 rows in set (0.001 sec)

