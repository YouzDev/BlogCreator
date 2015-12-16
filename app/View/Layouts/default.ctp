<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', ' ');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Blog Creator'; ?>
	</title>
	<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('bootstrap');
	echo $this->Html->css('style');
	?>

	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?> 
</head>
<header></header>
<body>
	<div id="container">

		<div id="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer"></div>

		<div id="footer">
			
<<<<<<< HEAD
		
=======
			<p>
>>>>>>> b4f651d234a3edea0a0f652c3da47dca06b2feb6
			
		
		</div>
<<<<<<< HEAD
=======

>>>>>>> b4f651d234a3edea0a0f652c3da47dca06b2feb6
	</div>
</body>
</html>
