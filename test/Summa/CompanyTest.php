<?php

namespace Summa;

/**
 * Company Class Entity Test
 *
 * @author Andres Mazza <andres.mazza@gmail.com>
 */
class CompanyTest extends \PHPUnit_Framework_TestCase {

    protected $obj;

    protected function setUp() {
        $this->obj = new Company();
        parent::setUp();
    }

    protected function tearDown() {
        parent::tearDown();
    }

    public function testInstance() {
        $this->assertInstanceOf('Summa\Company', $this->obj);
    }

}
