<div class="heroesUsers view">
<h2><?php echo __('Heroes User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($heroesUser['HeroesUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($heroesUser['User']['id'], array('controller' => 'users', 'action' => 'view', $heroesUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hero'); ?></dt>
		<dd>
			<?php echo $this->Html->link($heroesUser['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $heroesUser['Hero']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experience'); ?></dt>
		<dd>
			<?php echo h($heroesUser['HeroesUser']['experience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($heroesUser['HeroesUser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($heroesUser['HeroesUser']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Heroes User'), array('action' => 'edit', $heroesUser['HeroesUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Heroes User'), array('action' => 'delete', $heroesUser['HeroesUser']['id']), array(), __('Are you sure you want to delete # %s?', $heroesUser['HeroesUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Heroes User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add')); ?> </li>
	</ul>
</div>
