<div class="rolesHeros view">
<h2><?php echo __('Roles Hero'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rolesHero['RolesHero']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rolesHero['Role']['name'], array('controller' => 'roles', 'action' => 'view', $rolesHero['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hero'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rolesHero['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $rolesHero['Hero']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo h($rolesHero['RolesHero']['level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rolesHero['RolesHero']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rolesHero['RolesHero']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Roles Hero'), array('action' => 'edit', $rolesHero['RolesHero']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Roles Hero'), array('action' => 'delete', $rolesHero['RolesHero']['id']), array(), __('Are you sure you want to delete # %s?', $rolesHero['RolesHero']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles Heros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roles Hero'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add')); ?> </li>
	</ul>
</div>
