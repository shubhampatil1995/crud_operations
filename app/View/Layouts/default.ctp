<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('simple-sidebar.css'); 
		echo $this->Html->css('bootstrap.min.cdn');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
	
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vdriveit-Solution</title>
	

    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->
</head>
<body>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Vdrivit
                    </a>
                </li>
             <!--   <li>
                    <a href="employee">Dashboard</a>
                </li>
                <li>
                    <a href="add">Add Employee</a>
                </li>-->
				<li>
				<?php echo $this->Html->link(
						'Dashboard',
						array(
							'controller' => 'employee',
							'action' => 'index',
							'full_base' => true
						)
					);?>
                </li>
                <li>
					<?php echo $this->Html->link(
						'Add Employee',
						array(
							'controller' => 'employee',
							'action' => 'add',
							'full_base' => true
						)
					);?>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
		<a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
		<?= $this->fetch('content') ?>
        <!-- Page Content -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
	<?= $this->Html->script('jquery.min.js'); ?>
	<?= $this->Html->script('bootstrap.bundle.min.js'); ?> 
	<?= $this->Html->script('bootstrap.min.cdn.js'); ?> 
	<?= $this->Html->script('bootstrap.min.jquery.js'); ?>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
