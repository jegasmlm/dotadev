<div class="heroes view">
<h2><?php echo __('Hero'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role Id'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['role_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Id'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['group_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hero['Hero']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hero'), array('action' => 'edit', $hero['Hero']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hero'), array('action' => 'delete', $hero['Hero']['id']), array(), __('Are you sure you want to delete # %s?', $hero['Hero']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('action' => 'add')); ?> </li>
	</ul>
</div>
