<?php

namespace Summa\Types;

use Summa\Types\IEmployeeType;

/**
 * DesignerGraphics
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DesignerGraphics implements IEmployeeType {

    const skill = 'Graphics';

    public function skill() {
        return self::skill;
    }

}
