
<?php 
class EmployeeControllerTest extends ControllerTestCase {
    public $fixtures = array('app.employee');

    public function testIndex() {
        $result = $this->testAction('/employee/index');
        debug($result);
    }
	
	 public function testAdd() {
		$result = $this->testAction('/employee/add');
		$data = array(
		'Employee' => array(
			'first_name' => 'shubham',
			'last_name' => 'patil',
			'designation' => 'php developer',
			'department' => 'IT',
			'qualification' => 'bca',
			'key_skills'	=> 'php',
			)
		);
		$result = $this->testAction('/employee/add', array('data' => $data, 'method' => 'post'));
		$this->assertInternalType('array', $data);
		
		// $this->assertEqual($data,array(
		// 'Employee' => array(
				// 'first_name' => 'shubham',
				// 'last_name' => 'patil',
				// 'designation' => 'php developer',
				// 'department' => 'IT',
				// 'qualification' => 'bca',
				// 'key_skills'	=> 'php',
				// )
			// )
		// );
    }
	
	 public function testEdit() {
        $result = $this->testAction('/employee/edit/7');
		$data = array(
		'Employee' => array(
			'first_name' => 'shubham',
			'last_name' => 'patil',
			'designation' => 'php developer',
			'department' => 'IT',
			'qualification' => 'bca',
			'key_skills'	=> 'php',
			)
		);
		$result = $this->testAction('/Employee/edit/7',array('data' => $data, 'method' => 'post'));
		$this->assertInternalType('array', $data);
    }
	
	 public function testDelete() {
        $result = $this->testAction('/employee/delet/7');
		debug($result);
    }
}