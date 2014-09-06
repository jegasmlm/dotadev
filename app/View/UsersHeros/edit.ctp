<div class="usersHeros form">
<?php echo $this->Form->create('UsersHero'); ?>
	<fieldset>
		<legend><?php echo __('Edit Users Hero'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('hero_id');
		echo $this->Form->input('experience');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UsersHero.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UsersHero.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users Heros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add')); ?> </li>
	</ul>
</div>
