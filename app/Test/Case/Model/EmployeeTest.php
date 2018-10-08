<?php 

App::uses('Employee', 'Model');

class EmployeeTest extends CakeTestCase {
    public $fixtures = array('app.employee');

    public function setUp() {
        parent::setUp();
        $this->Employee = ClassRegistry::init('Employee');
    }

    public function testPublished() {
        $result = $this->Employee->published(array('id', 'first_name', 'last_name', 'designation', 'department', 'qualification', 'key_skills'));
        $expected = array(
							array('Employee' => array('id' => '27', 'first_name' => 'shubham', 'last_name' => 'patil', 'designation' => '2', 'department' => '3','qualification' => '3', 'key_skills' => 'php')),
						);
        $this->assertEquals($expected, $result);
    }
}