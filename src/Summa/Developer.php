<?php

namespace Summa;

/**
 * Description of Developer
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class Developer extends Employee {

    public $type;

    public function __construct() {
        
    }

    public function setType(Types\IDeveloperType $developerType) {
        $this->type = $developerType;
    }

    public function getType() {
        return $this->type;
    }

}
