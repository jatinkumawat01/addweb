create table emp (empno int(4) not null,  ename varchar(50),  job varchar(40),  mgr int(4),  hiredate date,  sal float(7,2),  comm float(7,2),  deptno int(2));



insert into emp values (7369, 'smith', 'clerk', 7902, '1981-03-23', 800, null, 20);

insert into emp values (7499, 'allen', 'salesman', 7698, '1981-11-23', 1600, 300, 30);

insert into emp values (7521, 'ward', 'salesman', 7698, '1981-04-27', 1250, 500, 30);

insert into emp values (7566, 'jones', 'manager', 7839,'1981-12-23', 2975, null, 20);

insert into emp values (7654, 'martin', 'salesman', 7698,'1981-07-03', 1250, 1400, 30);

insert into emp values (7698, 'blake', 'manager', 7839,'1982-09-23', 2850, null, 30);

insert into emp values (7782, 'clark', 'manager', 7839,'1981-05-23', 2450, null, 10);

insert into emp values (7788, 'scott', 'analyst', 7566,'1981-06-08', 3000, null, 20);

insert into emp values (7839, 'king', 'president', null,'1982-11-23', 5000, null, 10);

insert into emp values (7844, 'turner', 'salesman', 7698,'1981-08-13', 1500, 0, 30);

insert into emp values (7876, 'adams', 'clerk', 7788,'1981-12-23', 1100, null, 20);

insert into emp values (7900, 'james', 'clerk', 7698,'1981-09-14', 950, null, 30);

insert into emp values (7902, 'ford', 'analyst', 7566,'1981-06-08', 3000, null, 20);

insert into emp values (7934, 'miller', 'clerk', 7782,'1981-04-15', 1300, null, 10);


create table dept ( deptno int(2),  dname varchar(30),  loc varchar50(50));

insert into dept values (10, 'accounting', 'new york');

insert into dept values (20, 'research', 'dallas');

insert into dept values (30, 'sales', 'chicago');

insert into dept values (40, 'operations', 'boston');

alter table dept add primary key(deptno);
select e.* from emp e, emp e1 where e.mgr= e1.empno and e.deptno=e1.deptno;
SELECT * FROM EMP WHERE MGR IS NULL;
select * from emp 