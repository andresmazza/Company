<?php

namespace Summa;
use Summa\Types\DeveloperType;
require_once 'bootstrap.php';

$company = new Company();

$employee = new Developer();
$employee->setId(1);
$employee->setName('ANDRES');
$employee->setLastname('MAZZA');
$employee->setAge(39);
$employee->setType(DeveloperType::skill('PHP'));

$company->addEmployee($employee);
$company->addEmployee($employee);
$company->addEmployee($employee);



print_r($employee->getType()->skill());
