
<div id="page-content-wrapper">
	<div class="container-fluid">
		   <div class="col-md-2"></div>
		   <div class="col-md-8">
		   
		   <div class="hdr">
			<div class="well"><h3>Update Employee </h3> </div>
			</div>

			<?php echo $this->Form->create('Employee',array('url'=>'edit/'.$details['Employee']['id'])); ?>
			<div class="col-md-12 format">
					<div class="col-md-6">
					<?php echo $this->Form->input('first_name', array('label' => 'First Name','placeholder' => "First Name", "class" =>"form-control","value"=>$details['Employee']['first_name'])); ?>
					</div>
					<div class="col-md-6">
						<?php echo $this->Form->input('last_name', array('label' => 'Last Name','placeholder' => "Last Name", "class" =>"form-control","value"=>$details['Employee']['last_name'])); ?>
						<br/>
					</div>
					<div class="col-md-6">
						<?php $designation=$this->Global->getDesignation();?>
						<?php echo $this->Form->input('designation', array('type' => 'select','options' => $designation, 'default'=>$details['Employee']['designation'],'label' => 'Designation','class' => 'form-control')); ?>
					</div>
					<div class="col-md-6">
						<?php $department=$this->Global->getDepartment();?>
						<?php echo $this->Form->input('department', array('type' => 'select','options' => $department, 'label' => 'Department','default'=>$details['Employee']['department'],'class' => 'form-control')); ?>
						<br/>
					</div>
					<div class="col-md-6">
						<?php $qualification=$this->Global->getQualification();?>
						<?php echo $this->Form->input('qualification', array('type' => 'select','options' => $qualification, 'label' => 'Qualification','default'=>$details['Employee']['qualification'],'class' => 'form-control', )); ?>
					</div>
					<div class="col-md-12">
						<?php echo $this->Form->input('key_skills', array('type' => 'textarea','label' => 'Key Skills','placeholder' => "Key Skills", "class" =>"form-control",'value' => $details['Employee']['key_skills'])); ?>
						<br/>
					</div>
					<div class="col-md-12 text-right">
						<input type="submit" class="btn btn-primary btn-sm" value="Submit" > 
						<?php echo $this->Html->link('Cancel', array(
								'controller' => 'employee',
								'action' => 'index'),array('class'=>'btn btn-default btn-sm'));
							?>
					</div>
			</div>
			<?php echo $this->Form->end(); ?>  
		   </div>
		   <div class="col-md-2"></div>
	</div>
 </div>
 