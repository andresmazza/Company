<?php

namespace Summa\Types;
use Summa\Types\IEmployeeType;

/**
 * Description of DeveloperPHP
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DeveloperPhp implements IEmployeeType {

    const lang = 'PHP';

    public function skill() {
        return self::lang;
    }

}
