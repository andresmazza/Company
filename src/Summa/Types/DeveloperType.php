<?php

namespace Summa\Types;

/**
 * Description of DeveloperType
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DeveloperType {

    public static function skill($type) {
        $developerType = "Summa\Types\Developer" . ucfirst(strtolower($type));
        if (class_exists($developerType)) {
            return new $developerType();
        } else {
            throw new \Exception("Invalid developer type given.");
        }
    }

}
