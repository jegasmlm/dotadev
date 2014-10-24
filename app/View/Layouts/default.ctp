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
                            <li id="heroesSec"><?php echo $this->Html->link('Heroes', array('controller'=>'Heroes', 'action'=>'index')); ?></li>
                            <li id="strategySec"><?php echo $this->Html->link('Strategies', array('controller'=>'Strategies', 'action'=>'index')); ?></li>
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
                            <li id="compareSec"><?php echo $this->Html->link('Compare Heroes', array('controller'=>'Heroes', 'action'=>'index')); ?></li>
                        </ul>
                        <?php if($this->Session->read('Auth.User') == null){ ?>
                            <?php echo $this->Html->link('Login', array('controller'=>'users','action'=>'login'), array('class'=>'btn btn-default btn-sm navbar-btn pull-right')); ?>
                        <?php }else{ ?>
                            <?php echo $this->Html->link('Logout', array('controller'=>'users','action'=>'logout'), array('class'=>'btn btn-danger btn-sm navbar-btn pull-right')); ?>
                        <?php } ?>
                        <form class="navbar-form" role="search">
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
            <!--  modal -->
            <div id="Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close"
                                    data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                Sing In
                            </h4>
                        </div>
                        <form class="form-horizontal" role="form" action="user/login" method="post">
                            <?php echo $this->Form->create('User'); ?>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <?php echo $this->Form->input('username', array('type'=>'text', 'class'=>'form-control', 'placeholder'=>'username')); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <?php echo $this->Form->input('password', array('type'=>'password', 'class'=>'form-control', 'placeholder'=>'username'));?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default"
                                        data-dismiss="modal">Close
                                </button>
                                <?php echo $this->Form->button('Sign in',array('type'=>'submit', 'class'=>'btn btn-primary')); ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End of Modal -->
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
</body>
</html>
