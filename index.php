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


$employee = new Designer();
$employee->setId(4);
$employee->setName('NAME');
$employee->setLastname('LASTNAME');
$employee->setAge(34);
$employee->setType(Types\DesignerType::skill('Web'));

$company->addEmployee($employee);


$employee = new Designer();
$employee->setId(5);
$employee->setName('NAME');
$employee->setLastname('LASTNAME');
$employee->setAge(33);
$employee->setType(Types\DesignerType::skill('Graphics'));

$company->addEmployee($employee);


$employee = new Designer();
$employee->setId(6);
$employee->setName('NAME');
$employee->setLastname('LASTNAME');
$employee->setAge(33);
$employee->setType(Types\DesignerType::skill('Web'));

$company->addEmployee($employee);




$current = $company->findById(6);
echo $current->getType()->skill();

print_r($company->getEmployeesAvg());
