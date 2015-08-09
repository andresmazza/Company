<?php

namespace Summa\Types;
use Summa\Types\IEmployeeType;
/**
 * Description of DeveloperPython
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DeveloperPython implements IEmployeeType {

    const lang = 'Python';

    public function skill() {
        return self::lang;
    }

}
