
<div id="page-content-wrapper">
	<div class="container-fluid">
		   <div class="col-md-12">
		   <?= $this->Flash->render();?>
		   
		    <div class="hdr">
				<div class="well"><h3>Employees List </h3></div>
			</div>
			
			<div class="hdr">
			<table class="table table-bordered">
				<tr>
					<th class="text-center">SL No.</th>
					<th class="text-center">Employee Name</th>
					<th class="text-center">Designation</th>
					<th class="text-center">Department</th>
					<th class="text-center">Qualification</th>
					<th class="text-center">Skills</th>
					<th class="text-center">Action</th>
				</tr>
				<?php if($res) {
						$designation=$this->Global->getDesignation();
						$department=$this->Global->getDepartment();
						$qualification=$this->Global->getQualification();
						$i=0; foreach ($res as $row): $i++; ?>
					<tr>
						<td class="text-center" ><?= $i; ?></td>
						<td class="text-center" > <?= $row['Employee']['first_name'].' '.$row['Employee']['last_name']; ?> </td>
						<td class="text-center" > <?= $designation[$row['Employee']['designation']]; ?> </td>
						<td class="text-center" > <?= $department[$row['Employee']['department']]; ?> </td>
						<td class="text-center" > <?= $qualification[$row['Employee']['qualification']]; ?> </td>
						<td class="text-center" > <?= $row['Employee']['key_skills']; ?> </td>
						<td class="text-center"> <?= $this->Html->link('Edit', ['controller' => 'Employee', 'action' => 'edit',$row['Employee']['id']],array('class'=>'btn btn-primary btn-sm')) ?>  <?= $this->Html->link('Delete', ['controller' => 'Employee', 'action' => 'delet',$row['Employee']['id']], array('confirm' => 'Are you sure you want to delete this Employee?', 'class' => 'btn btn-default btn-sm')) ?></td>
					</tr>
				<?php endforeach; 
					}
					else{
					?>
					<tr><td colspan="9" class="text-center"><h5>There are not Applicants for the Job.</h5></td></tr>
				<?php	}
				?>
			</table>	
			</div>
		   </div>
	</div>
 </div>
 
