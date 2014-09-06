<div class="strategies form">
<?php echo $this->Form->create('Strategy'); ?>
	<fieldset>
		<legend><?php echo __('Edit Strategy'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Strategy.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Strategy.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Strategies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
