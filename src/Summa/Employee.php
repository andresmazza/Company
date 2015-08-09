<?php
namespace Summa;
/**
 * abstract Entity Employee
 *
 * @author Andres Mazza <andres.mazza@gmil.com>
 */
abstract class Employee {

    private $id;
    private $name;
    private $lastname;
    private $age;
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getAge() {
        return $this->age;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setAge($age) {
        $this->age = $age;
    }

}
