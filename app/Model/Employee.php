<?php 

App::uses('AppModel', 'Model');
class Employee extends AppModel {
 public $validate = array(
        'first_name' => array(
			'rule'	=> '/^[a-zA-Z ]{3,50}$/',
            'allowEmpty' => false,
			'message' => 'Use Only Characters and Spaces'
        ),
        'last_name' => array(
            'rule'	=> '/^[a-zA-Z ]{3,50}$/',
            'allowEmpty' => false,
			'message' => 'Use Only Characters and Spaces'
        ),
		'designation' => array(
			'rule' => 'notBlank',
            'allowEmpty' => false,
			'message' => 'Please Select Designation'
        ),
		'department' => array(
			'rule' => 'notBlank',
            'allowEmpty' => false,
			'message' => 'Please Select Department'
        ),
		'qualification' => array(
			'rule' => 'notBlank',
            'allowEmpty' => false,
			'message' => 'Please Select Qualification'
        ),
		'key_skills' => array(
            'rule'	=> '/^[a-zA-Z .,-]{3,300}$/',
            'allowEmpty' => false,
			'message' => 'Use Only Characters and Spaces'
        ),
    );
	
	 public function published($fields = null) {
        $params = array(
            'fields' => $fields
        );

        return $this->find('all', $params);
    }
}