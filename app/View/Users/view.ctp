<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Heroes'); ?></h3>
	<?php if (!empty($user['Hero'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Hero'] as $hero): ?>
		<tr>
			<td><?php echo $hero['id']; ?></td>
			<td><?php echo $hero['name']; ?></td>
			<td><?php echo $hero['role_id']; ?></td>
			<td><?php echo $hero['group_id']; ?></td>
			<td><?php echo $hero['image']; ?></td>
			<td><?php echo $hero['created']; ?></td>
			<td><?php echo $hero['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'heroes', 'action' => 'view', $hero['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'heroes', 'action' => 'edit', $hero['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'heroes', 'action' => 'delete', $hero['id']), array(), __('Are you sure you want to delete # %s?', $hero['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
