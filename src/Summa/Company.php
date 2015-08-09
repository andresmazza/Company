<?php

namespace Summa;

/**
 * Company Class Entity
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class Company extends CompanyBase {

    public function findById($id) {
        if ($this->countEmployees() > 0) {
            foreach ($this->listEmployees() as $employee) {
                if ($id == $employee->getId()) {
                    return $employee;
                }
            }
        }
        throw new \Exception('Employee ID not found');
    }

    public function getEmployeesAvg() {
        $ages = 0;
        $count = 0;
        if ($this->countEmployees() > 0) {
            foreach ($this->listEmployees() as $employee) {
                ++$count;
                $ages = $ages + $employee->getAge();
            }
            $avg = $ages / $count;
        } else {
            $avg = 0;
        }
        return $avg;
    }

}
