<?php

namespace Summa\Types;

/**
 * Description of DesignerType
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DesignerType {

    public static function skill($type) {
        $designerType = "Summa\Types\Designer" . ucfirst(strtolower($type));
        if (class_exists($designerType)) {
            return new $designerType();
        } else {
            throw new \Exception("Invalid designer type given.");
        }
    }

}
