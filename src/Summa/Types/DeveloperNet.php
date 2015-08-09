<?php

namespace Summa\Types;

use Summa\Types\IDeveloperType;

/**
 * Description of DeveloperNet
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DeveloperNet implements IDeveloperType {

    const lang = 'Net';

    public function skill() {
        return self::lang;
    }

}
