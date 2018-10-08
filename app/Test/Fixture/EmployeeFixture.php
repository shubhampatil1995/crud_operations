<?php 
class EmployeeFixture extends CakeTestFixture {
	
	// public $import = array('model' => 'Employee', 'records' => true);
  public $useDbConfig = 'test';
      public $fields = array(
          'id' => array('type' => 'integer', 'key' => 'primary'),
          'first_name' => array(
            'type' => 'string',
            'length' => 50,
            'null' => false
          ),
		   'last_name' => array(
            'type' => 'string',
            'length' => 50,
            'null' => false
          ),
		   'designation' => array(
            'type' => 'integer',
            'length' => 2,
            'null' => false
          ),
		   'department' => array(
            'type' => 'integer',
            'length' => 2,
            'null' => false
          ),
		   'qualification' => array(
            'type' => 'integer',
            'length' => 2,
            'null' => false
          ),
		   'key_skills' => array(
            'type' => 'text',
            'length' => 300,
            'null' => false
          )
      );
      public $records = array(
          array(
            'id' => '27',
            'first_name' => 'shubham',
            'last_name' => 'patil',
            'designation' => '2',
            'department' => '3',
            'qualification' => '3',
			'key_skills' => 'php'
          ), 
      );
}