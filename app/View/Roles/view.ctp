<div class="roles view">
<h2><?php echo __('Role'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($role['Role']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($role['Role']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($role['Role']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($role['Role']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']), array(), __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies'), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy'), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Heroes'); ?></h3>
	<?php if (!empty($role['Hero'])): ?>
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
	<?php foreach ($role['Hero'] as $hero): ?>
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
<div class="related">
	<h3><?php echo __('Related Strategies'); ?></h3>
	<?php if (!empty($role['Strategy'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($role['Strategy'] as $strategy): ?>
		<tr>
			<td><?php echo $strategy['id']; ?></td>
			<td><?php echo $strategy['name']; ?></td>
			<td><?php echo $strategy['modified']; ?></td>
			<td><?php echo $strategy['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'strategies', 'action' => 'view', $strategy['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'strategies', 'action' => 'edit', $strategy['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'strategies', 'action' => 'delete', $strategy['id']), array(), __('Are you sure you want to delete # %s?', $strategy['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Strategy'), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
