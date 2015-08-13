<?php

namespace Summa;

/**
 * DeveloperTypeTest Class Test
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DeveloperTypeTest extends \PHPUnit_Framework_TestCase {

    public function testInstance() {
        $type = Types\DeveloperType::skill('php');
        $this->assertInstanceOf('Summa\Types\DeveloperPhp', $type);
        $this->assertInstanceOf('Summa\Types\IEmployeeType', $type);

        $type = Types\DeveloperType::skill('Net');
        $this->assertInstanceOf('Summa\Types\DeveloperNet', $type);
        $this->assertInstanceOf('Summa\Types\IEmployeeType', $type);

        $type = Types\DeveloperType::skill('Python');
        $this->assertInstanceOf('Summa\Types\DeveloperPython', $type);
        $this->assertInstanceOf('Summa\Types\IEmployeeType', $type);
    }

    public function testBadInstance() {
        $this->setExpectedException('Exception');
        Types\DeveloperType::skill('Cobol');
    }

}
