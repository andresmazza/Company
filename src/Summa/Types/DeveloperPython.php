<?php

namespace Summa\Types;
use Summa\Types\IDeveloperType;
/**
 * Description of DeveloperPython
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DeveloperPython implements IDeveloperType {

    const lang = 'Python';

    public function skill() {
        return self::lang;
    }

}
