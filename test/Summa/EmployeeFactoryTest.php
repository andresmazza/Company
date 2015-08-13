<?php

namespace Summa;

/**
 * EmployeeFactoryTest Class Test
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class EmployeeFactoryTest extends \PHPUnit_Framework_TestCase {

    public function testInstance() {
        $developer = EmployeeFactory::build('Developer');
        $this->assertInstanceOf('Summa\Developer', $developer);
        $this->assertInstanceOf('Summa\Employee', $developer);

        $designer = EmployeeFactory::build('Designer');
        $this->assertInstanceOf('Summa\Designer', $designer);
        $this->assertInstanceOf('Summa\Employee', $designer);
    }

    public function testBadInstance() {
        $this->setExpectedException('Exception');
        EmployeeFactory::build('BadName');
    }

}
