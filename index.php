<?php

namespace Summa;
use Summa\Types\DeveloperType;
require_once 'bootstrap.php';

$company = new Company();

$employee = new Developer();
$employee->setId(1);
$employee->setName('ANDRES');
$employee->setLastname('MAZZA');
$employee->setAge(3);
$employee->setType(DeveloperType::skill('PHP'));

$company->addEmployee($employee);

$employee = new Developer();
$employee->setId(2);
$employee->setName('JUAN');
$employee->setLastname('LALA');
$employee->setAge(3);
$employee->setType(DeveloperType::skill('PHP'));

$company->addEmployee($employee);


$employee = new Developer();
$employee->setId(3);
$employee->setName('PEDRO');
$employee->setLastname('PICAPIEDRA');
$employee->setAge(7);
$employee->setType(DeveloperType::skill('NET'));

$company->addEmployee($employee);



//print_r($company->listEmployees());

//print_r($company->findById(10));
print_r($company->getEmployeesAvg());
