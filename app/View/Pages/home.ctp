<?php
/**
 * Created by PhpStorm.
 * User: QUAD04
 * Date: 9/8/2014
 * Time: 1:12 PM
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <h3><?php echo __('Actions'); ?></h3>
            <ul>
                <li><?php echo $this->Html->link(__('List Heroes'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('List Sides'), array('controller' => 'sides', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('List Roles Heros'), array('controller' => 'roles_heros', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('List Users Heros'), array('controller' => 'users_heros', 'action' => 'index')); ?> </li>
            </ul>
        </div>
        <div class="col-lg-10">

        </div>
    </div>
</div>