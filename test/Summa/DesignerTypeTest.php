<?php

namespace Summa;

/**
 * DesignerTypeTest Class Test
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class DesignerTypeTest extends \PHPUnit_Framework_TestCase {

    public function testInstance() {
        $type = Types\DesignerType::skill('Web');
        $this->assertInstanceOf('Summa\Types\DesignerWeb', $type);
        $this->assertInstanceOf('Summa\Types\IEmployeeType', $type);

        $type = Types\DesignerType::skill('Graphics');
        $this->assertInstanceOf('Summa\Types\DesignerGraphics', $type);
        $this->assertInstanceOf('Summa\Types\IEmployeeType', $type);
    }

    public function _testBadInstance() {
        $this->setExpectedException('Exception');
        Types\DesignerType::skill('Developer');
    }

}
