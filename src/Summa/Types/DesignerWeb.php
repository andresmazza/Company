<?php

namespace Summa\Types;

use Summa\Types\IEmployeeType;

/**
 * DesignerWeb
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DesignerWeb implements IEmployeeType {

    const skill = 'Web';

    public function skill() {
        return self::skill;
    }

}
