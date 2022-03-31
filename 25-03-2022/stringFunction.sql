MariaDB [Sales]> select replace(dayname(curdate()), substring(dayname(curdate()),4),substring('jatin',4));
+-----------------------------------------------------------------------------------+
| replace(dayname(curdate()), substring(dayname(curdate()),4),substring('jatin',4)) |
+-----------------------------------------------------------------------------------+
| Friin                                                                             |
+-----------------------------------------------------------------------------------+
1 row in set (0.000 sec)




MariaDB [Sales]> SELECT ASCII('2');
+------------+
| ASCII('2') |
+------------+
|         50 |
+------------+
1 row in set (0.000 sec)

MariaDB [Sales]> SELECT CHAR_LENGTH("jatin");
+----------------------+
| CHAR_LENGTH("jatin") |
+----------------------+
|                    5 |
+----------------------+
1 row in set (0.000 sec)

MariaDB [Sales]> SELECT CONCAT('Jat', 'i', 'n');
+-------------------------+
| CONCAT('Jat', 'i', 'n') |
+-------------------------+
| Jatin                   |
+-------------------------+
1 row in set (0.000 sec)

MariaDB [Sales]> SELECT CONCAT_WS('_','Jatin','kumawat' );
+-----------------------------------+
| CONCAT_WS('_','Jatin','kumawat' ) |
+-----------------------------------+
| Jatin_kumawat                     |
+-----------------------------------+
1 row in set (0.001 sec)

MariaDB [Sales]> SELECT FIELD('ej', 'Hej', 'ej', 'Heja', 'hej', 'foo');
+------------------------------------------------+
| FIELD('ej', 'Hej', 'ej', 'Heja', 'hej', 'foo') |
+------------------------------------------------+
|                                              2 |
+------------------------------------------------+
1 row in set (0.000 sec)

MariaDB [Sales]> select length('jatin kumawat');
+-------------------------+
| length('jatin kumawat') |
+-------------------------+
|                      13 |
+-------------------------+
1 row in set (0.000 sec)

MariaDB [Sales]> select lower('JATIN KUMAWAT');
+------------------------+
| lower('JATIN KUMAWAT') |
+------------------------+
| jatin kumawat          |
+------------------------+
1 row in set (0.000 sec)

MariaDB [Sales]> SELECT LPAD('hi',4,'$$');
+-------------------+
| LPAD('hi',4,'$$') |
+-------------------+
| $$hi              |
+-------------------+
1 row in set (0.000 sec)

MariaDB [Sales]> SELECT LPAD('hi',5,'$$');
+-------------------+
| LPAD('hi',5,'$$') |
+-------------------+
| $$$hi             |
+-------------------+
1 row in set (0.000 sec)

MariaDB [Sales]> SELECT LPAD('jatin',5,'$$');
+----------------------+
| LPAD('jatin',5,'$$') |
+----------------------+
| jatin                |
+----------------------+
1 row in set (0.001 sec)

MariaDB [Sales]> SELECT LPAD('jatin',23,'$$');
+-------------------------+
| LPAD('jatin',23,'$$')   |
+-------------------------+
| $$$$$$$$$$$$$$$$$$jatin |
+-------------------------+
1 row in set (0.001 sec)

MariaDB [Sales]> select ord('2');
+----------+
| ord('2') |
+----------+
|       50 |
+----------+
1 row in set (0.000 sec)

MariaDB [Sales]> select ord('12');
+-----------+
| ord('12') |
+-----------+
|        49 |
+-----------+
1 row in set (0.001 sec)

MariaDB [Sales]> select ord('129');
+------------+
| ord('129') |
+------------+
|         49 |
+------------+
1 row in set (0.000 sec)

MariaDB [Sales]> select ord('9');
+----------+
| ord('9') |
+----------+
|       57 |
+----------+
1 row in set (0.000 sec)

MariaDB [Sales]> select repeat('jatin ',3);
+--------------------+
| repeat('jatin ',3) |
+--------------------+
| jatin jatin jatin  |
+--------------------+
1 row in set (0.000 sec)

MariaDB [Sales]> select soundex('jatin');
+------------------+
| soundex('jatin') |
+------------------+
| J350             |
+------------------+
1 row in set (0.000 sec)

MariaDB [Sales]> 
