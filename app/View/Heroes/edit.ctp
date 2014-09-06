<div class="heroes form">
<?php echo $this->Form->create('Hero'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hero'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('role_id');
		echo $this->Form->input('group_id');
		echo $this->Form->input('image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hero.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Hero.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('action' => 'index')); ?></li>
	</ul>
</div>
