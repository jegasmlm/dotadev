<div class="rolesHeros index">
	<h2><?php echo __('Roles Heros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('role_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hero_id'); ?></th>
			<th><?php echo $this->Paginator->sort('level'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rolesHeros as $rolesHero): ?>
	<tr>
		<td><?php echo h($rolesHero['RolesHero']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rolesHero['Role']['name'], array('controller' => 'roles', 'action' => 'view', $rolesHero['Role']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rolesHero['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $rolesHero['Hero']['id'])); ?>
		</td>
		<td><?php echo h($rolesHero['RolesHero']['level']); ?>&nbsp;</td>
		<td><?php echo h($rolesHero['RolesHero']['created']); ?>&nbsp;</td>
		<td><?php echo h($rolesHero['RolesHero']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rolesHero['RolesHero']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rolesHero['RolesHero']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rolesHero['RolesHero']['id']), array(), __('Are you sure you want to delete # %s?', $rolesHero['RolesHero']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Roles Hero'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add')); ?> </li>
	</ul>
</div>
