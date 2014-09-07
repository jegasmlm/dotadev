<div class="sides form">
<?php echo $this->Form->create('Side'); ?>
	<fieldset>
		<legend><?php echo __('Edit Side'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Side.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Side.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sides'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add')); ?> </li>
	</ul>
</div>
