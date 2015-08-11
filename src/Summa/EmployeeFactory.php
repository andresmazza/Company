<?php
namespace Summa;
/**
 * EmployeeFactory
 *
 * @author Andres Mazza <andres.mazza@gmil.com>
 */
class EmployeeFactory {
  public static function build($type) {
        $employeeType = __NAMESPACE__."\\".ucfirst(strtolower($type));
        if (class_exists($employeeType)) {
            return new $employeeType();
        } else {
            throw new \Exception("Invalid classname build type given.");
        }
    }
}
