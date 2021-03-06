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

    /**
     * Test AddEmployee
     *
     * @param array $args
     * @param array $expects
     *
     * @return void
     *
     * @dataProvider providerAddEmployee
     */
    public function testAddEmployee($args, $expect) {
        foreach ($args as $employee) {
            $this->obj->addEmployee($employee);
        }
        $this->assertEquals(sizeof($this->obj->listEmployees()), $expect['size']);
    }

    public function providerAddEmployee() {
        $employee0 = $this->getEmployeeMock();
        $employee0->setId(1);
        $employee0->setName('NAME');
        $employee0->setLastName('LASTNAME');
        $employee0->setAge(33);

        $testCase01 = array(
            'param' => array($employee0),
            'expect' => array('size' => 1)
        );

        $employee0 = $this->getEmployeeMock();
        $employee0->setId(1);
        $employee0->setName('NAME');
        $employee0->setLastName('LASTNAME');
        $employee0->setAge(10);

        $employee1 = $this->getEmployeeMock();
        $employee1->setId(2);
        $employee1->setName('NAME');
        $employee1->setLastName('LASTNAME');
        $employee1->setAge(10);


        $testCase02 = array(
            'param' => array($employee0, $employee1),
            'expect' => array('size' => 2)
        );
        $employee0 = $this->getEmployeeMock();
        $employee0->setId(1);
        $employee0->setName('NAME');
        $employee0->setLastName('LASTNAME');
        $employee0->setAge(33);

        $testCase03 = array(
            'param' => array($employee0),
            'expect' => array('size' => 1)
        );


        return array($testCase01, $testCase02, $testCase03);
    }

    /**
     * Test testFindById
     *
     * @param array $args
     * @param array $expect
     *
     * @return void
     *
     * @dataProvider providerFindById
     */
    public function testFindById($args, $expect) {
        foreach ($args as $employee) {
            $this->obj->addEmployee($employee);
        }
        $current = $this->obj->findById(1);
        $this->assertEquals($current->getId(), $expect['id']);
        $this->setExpectedException('Exception');
        $current = $this->obj->findById(33);
    }

    public function providerFindById() {
        $employee0 = new Developer();
        $employee0->setId(1);
        $employee0->setName('NAME');
        $employee0->setLastName('LASTNAME');
        $employee0->setAge(33);

        $testCase01 = array(
            'param' => array($employee0),
            'expect' => array('id' => 1)
        );

        return array($testCase01);
    }

    /**
     * Test testGetEmployeesAvg
     *
     * @param array $args
     * @param array $expect
     *
     * @return void
     *
     * @dataProvider providerGetEmployeesAvg
     */
    public function testGetEmployeesAvg($args, $expect) {
        foreach ($args as $employee) {
            $this->obj->addEmployee($employee);
        }
        $avg = $this->obj->getEmployeesAvg();
        $this->assertEquals($avg, $expect['avg']);
    }

    public function providerGetEmployeesAvg() {
        $employee0 = new Developer();
        $employee0->setId(1);
        $employee0->setName('NAME');
        $employee0->setLastName('LASTNAME');
        $employee0->setAge(33);

        $testCase01 = array(
            'param' => array($employee0),
            'expect' => array('avg' => 33)
        );

        $employee2 = new Developer();
        $employee2->setId(1);
        $employee2->setName('NAME');
        $employee2->setLastName('LASTNAME');
        $employee2->setAge(21);

        $employee3 = new Developer();
        $employee3->setId(1);
        $employee3->setName('NAME');
        $employee3->setLastName('LASTNAME');
        $employee3->setAge(33);

        $testCase02 = array(
            'param' => array($employee2, $employee3),
            'expect' => array('avg' => 27)
        );
        return array($testCase01, $testCase02);
    }

    /**
     * Create a Employee Mock
     */
    protected function getEmployeeMock() {
        return $this->getMock('Summa\Employee');
    }

}
