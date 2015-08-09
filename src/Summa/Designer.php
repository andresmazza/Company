<?php

namespace Summa;

/**
 * Description of Designer
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class Designer extends Employee {

    public $type;

    public function __construct() {
        
    }

    public function setType(Types\IEmployeeType $developerType) {
        $this->type = $developerType;
    }

    public function getType() {
        return $this->type;
    }

}
