<?php

namespace Summa;
use Summa\Types\DeveloperType;
require_once 'bootstrap.php';

$company = new Company();

$employee = EmployeeFactory::build('Developer');
$employee->setId(1);
$employee->setName('ANDRES');
$employee->setLastname('MAZZA');
$employee->setAge(20);
$employee->setType(DeveloperType::skill('PHP'));
$company->addEmployee($employee);

$employee = EmployeeFactory::build('Developer');
$employee->setId(2);
$employee->setName('PEDRO');
$employee->setLastname('PICAPIEDRA');
$employee->setAge(22);
$employee->setType(DeveloperType::skill('NET'));
$company->addEmployee($employee);

$employee = EmployeeFactory::build('Designer');
$employee->setId(3);
$employee->setName('NAME');
$employee->setLastname('LASTNAME');
$employee->setAge(34);
$employee->setType(Types\DesignerType::skill('Web'));
$company->addEmployee($employee);

$employee = EmployeeFactory::build('Designer');
$employee->setId(4);
$employee->setName('NAME');
$employee->setLastname('LASTNAME');
$employee->setAge(33);
$employee->setType(Types\DesignerType::skill('Graphics'));
$company->addEmployee($employee);

$current = $company->findById(1);
echo $current->getType()->skill();
echo "\n";
echo $company->getEmployeesAvg();
echo "\n";
