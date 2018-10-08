<div id="page-content-wrapper">
	<div class="container-fluid">
		   <div class="col-md-2"></div>
		   <div class="col-md-8">
			
			<div class="hdr">
			<div class="well"><h3>Add Employee</h3></div>
			</div>
		
			<div class="col-md-12 format">

				<?php echo $this->Form->create('Employee',array('url'=>'add')); ?>
						<div class="col-md-6">
							<?php echo $this->Form->input('first_name', array('label' => 'First Name','placeholder' => "First Name", "class" =>"form-control")); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('last_name', array('label' => 'Last Name','placeholder' => "Last Name", "class" =>"form-control")); ?>
							<br/>
						</div>
						
						<div class="col-md-6">
							<?php $designation=$this->Global->getDesignation();?>
							<?php echo $this->Form->input('designation', array('type' => 'select','options' => $designation, 'label' => 'Designation','class' => 'form-control')); ?>
						</div>
						
						<div class="col-md-6">
							<?php $department=$this->Global->getDepartment();?>
							<?php echo $this->Form->input('department', array('type' => 'select','options' => $department, 'label' => 'Department','class' => 'form-control')); ?>
							<br/>
						</div>
						<br/>
	
						<div class="col-md-6">
							<?php $qualification=$this->Global->getQualification();?>
							<?php echo $this->Form->input('qualification', array('type' => 'select','options' => $qualification, 'label' => 'Qualification','class' => 'form-control')); ?>
							<br/>
						</div>
						
						<div class="col-md-12">
							<?php echo $this->Form->input('key_skills', array('type' => 'textarea','label' => 'Key Skills','placeholder' => "Key Skills", "class" =>"form-control")); ?>
							<br/>
						</div>
						
						<div class="col-md-12 text-right">
							<input type="submit" class="btn btn-primary btn-sm" value="Submit" > 
							
							<?php echo $this->Html->link('Cancel', array(
								'controller' => 'employee',
								'action' => 'index'),array('class'=>'btn btn-default btn-sm'));
							?>
						</div>
						
				<?php echo $this->Form->end(); ?>  
			</div>
		   </div>
		   <div class="col-md-2"></div>
	</div>
 </div>
 