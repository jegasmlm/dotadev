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

$title_for_layout = "Dota 2 Team Maker";
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
    <link rel="icon shortcut" type="image/png" href="<?php echo $this->webroot ?>img/ask-logo.png">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
        echo $this->Html->css("bootstrap");
		echo $this->Html->css('dota');


		//echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body id="body">
		<div id="header">
            <div class="navbar navbar-inverse">
                <div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navegation</span>
                        </button>
                        <?php echo $this->Html->link('ASK Team Maker', '/', array('class'=>'navbar-brand')); ?>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <?php echo $this->Html->link('Heroes', array('controller'=>'Heroes', 'action'=>'index'), array('class'=>'navbar-brand')); ?>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		<div>

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
</body>
</html>
