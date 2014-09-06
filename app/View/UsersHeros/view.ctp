<div class="usersHeros view">
<h2><?php echo __('Users Hero'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usersHero['UsersHero']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersHero['User']['name'], array('controller' => 'users', 'action' => 'view', $usersHero['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hero'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersHero['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $usersHero['Hero']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experience'); ?></dt>
		<dd>
			<?php echo h($usersHero['UsersHero']['experience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usersHero['UsersHero']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($usersHero['UsersHero']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Hero'), array('action' => 'edit', $usersHero['UsersHero']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Hero'), array('action' => 'delete', $usersHero['UsersHero']['id']), array(), __('Are you sure you want to delete # %s?', $usersHero['UsersHero']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Heros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Hero'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add')); ?> </li>
	</ul>
</div>
