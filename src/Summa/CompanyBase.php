<?php

namespace Summa;

/**
 * Company Class Entity
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
abstract class CompanyBase {

    private $id;
    private $name;
    private $employees;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function addEmployee(Employee $employees) {
        $this->employees[] = $employees;
    }

    public function listEmployees() {
        return $this->employees;
    }
    
    protected function countEmployees() {
        return sizeof($this->listEmployees());
    }
    

}
