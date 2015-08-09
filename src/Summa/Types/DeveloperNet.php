<?php

namespace Summa\Types;

use Summa\Types\IEmployeeType;

/**
 * Description of DeveloperNet
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DeveloperNet implements IEmployeeType {

    const lang = 'Net';

    public function skill() {
        return self::lang;
    }

}
