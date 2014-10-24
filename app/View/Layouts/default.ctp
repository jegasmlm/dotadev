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
        echo $this->Html->css("bootstrap");
        echo $this->Html->css('dota');

        echo $this->Html->script('//code.jquery.com/jquery-1.11.1.min.js');
        echo $this->Html->script('//code.jquery.com/ui/1.10.3/jquery-ui.min.js');

        echo $this->Html->script('bootstrap');
        echo $this->Html->script('dotaFunc');

		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body id="body">
		<div id="header">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <?php echo $this->Html->link('ASK Team Maker', '/', array('class'=>'navbar-brand')); ?>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown" id="randomSec">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Generate Team <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <?php echo $this->Html->link('All Random', array('controller'=>'Heroes', 'action'=>'randomTeam')); ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('Random by Strategy', array('controller'=>'Heroes', 'action'=>'randomTeamByStrategy')); ?>
                                    </li>
                                </ul>
                            </li>
                            <?php if($this->Session->read('Auth.User') != null){?>
                                <li><?php echo $this->Html->link('Administrator', array('controller'=>'Heroes', 'action'=>'index')); ?></li>
                                <p class="navbar-text navbar-right">Signed in as <?php echo $this->Session->read('Auth.User.username');?></p>
                            <?php }?>
                        </ul>
                        <?php if($this->Session->read('Auth.User') == null){ ?>
                            <?php echo $this->Html->link('Login', array('controller'=>'users','action'=>'login'), array('class'=>'btn btn-default btn-sm navbar-btn pull-right')); ?>
                        <?php }else{ ?>
                            <?php echo $this->Html->link('Logout', array('controller'=>'users','action'=>'logout'), array('class'=>'btn btn-danger btn-sm navbar-btn pull-right')); ?>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
		<div>
            <?php if($this->Session->read('Auth.User') != null){?>
                <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4><?php echo __('Actions'); ?></h4></div>
                        <div class="panel-body">
                            <div class="list-group">
                                <?php echo $this->Html->link(__('List Heros'), array('controller' => 'heroes', 'action' => 'index'),array('class'=>'list-group-item')); ?>
                                <?php echo $this->Html->link(__('List Sides'), array('controller' => 'sides', 'action' => 'index'),array('class'=>'list-group-item')); ?>
                                <?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index'),array('class'=>'list-group-item')); ?>
                                <?php echo $this->Html->link(__('List Strategies'), array('controller' => 'strategies', 'action' => 'index'),array('class'=>'list-group-item')); ?>
                                <?php echo $this->Html->link(__('List Roles Heros'), array('controller' => 'roles_heros', 'action' => 'index'),array('class'=>'list-group-item')); ?>
                                <?php echo $this->Html->link(__('List Users Heros'), array('controller' => 'users_heros', 'action' => 'index'),array('class'=>'list-group-item')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
			<?php echo $this->fetch('content'); ?>
		</div>
</body>
</html>
