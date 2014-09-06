<div class="strategiesRoles view">
<h2><?php echo __('Strategies Role'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($strategiesRole['StrategiesRole']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($strategiesRole['Role']['name'], array('controller' => 'roles', 'action' => 'view', $strategiesRole['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Strategy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($strategiesRole['Strategy']['name'], array('controller' => 'strategies', 'action' => 'view', $strategiesRole['Strategy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($strategiesRole['StrategiesRole']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($strategiesRole['StrategiesRole']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Strategies Role'), array('action' => 'edit', $strategiesRole['StrategiesRole']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Strategies Role'), array('action' => 'delete', $strategiesRole['StrategiesRole']['id']), array(), __('Are you sure you want to delete # %s?', $strategiesRole['StrategiesRole']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategies Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies'), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy'), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
	</ul>
</div>
