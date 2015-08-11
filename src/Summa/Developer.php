<?php

namespace Summa;

/**
 * Description of Developer
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class Developer extends Employee {

    public $type;

    public function setType(Types\IEmployeeType $developerType) {
        $this->type = $developerType;
    }

    public function getType() {
        return $this->type;
    }

}
