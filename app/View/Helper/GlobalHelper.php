<?php
	class GlobalHelper extends Helper 
	{
		public function getDesignation() 
		{
			$emptypes=array(''=>'-- Please Select--','1'=>'Manager','2'=>'Developer','3'=>'Testing');
			return $emptypes;
		}
		
		public function getDepartment() 
		{
			$emptypes=array(''=>'-- Please Select--','1'=>'Admin','2'=>'Accounts','3'=>'IT');
			return $emptypes;
		}
		
		public function getQualification() 
		{
			$emptypes=array(''=>'-- Please Select--','1'=>'SSLC','2'=>'PUC','3'=>'Degree','4'=>'Post Graduate');
			return $emptypes;
		}
	}
	