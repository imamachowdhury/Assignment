<?php

// Write a query to select all columns and rows from the employees table.
$query = "SELECT * FROM employees";

// Write a query to select only the name and salary columns of all employees with a salary greater than 50000.
$query = "SELECT name, salary FROM employees WHERE salary > 50000";

// Write a query to calculate the average salary of all employees.
$query = "SELECT AVG(salary) FROM employees";

// Write a query to count the number of employees who work in the "Marketing" department.
$query = "SELECT COUNT(*) FROM employees WHERE department = 'Marketing'";

// Write a query to update the salary column of the employee with an id of 1001 to 60000.
$query = "UPDATE employees SET salary = 60000 WHERE id = 1001";

// Write a query to delete all employees whose salary is less than 30000.
$query = "DELETE FROM employees WHERE salary < 30000";

// Write a query to select all columns and rows from the departments table.
$query = "SELECT * FROM departments";

// Write a query to select only the name and manager columns of the "Finance" department.
$query = "SELECT name, manager FROM departments WHERE name = 'Finance'";

// Write a query to calculate the total number of employees in each department.
$query = "SELECT COUNT(*) FROM employees GROUP BY department";

// Write a query to insert a new department called "Research" with a manager named "John Doe".
$query = "INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe')";


