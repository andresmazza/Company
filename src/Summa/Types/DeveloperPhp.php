<?php

namespace Summa\Types;
use Summa\Types\IDeveloperType;

/**
 * Description of DeveloperPHP
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DeveloperPhp implements IDeveloperType {

    const lang = 'PHP';

    public function skill() {
        return self::lang;
    }

}
