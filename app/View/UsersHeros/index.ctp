<div class="usersHeros index">
	<h2><?php echo __('Users Heros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hero_id'); ?></th>
			<th><?php echo $this->Paginator->sort('experience'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usersHeros as $usersHero): ?>
	<tr>
		<td><?php echo h($usersHero['UsersHero']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usersHero['User']['name'], array('controller' => 'users', 'action' => 'view', $usersHero['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usersHero['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $usersHero['Hero']['id'])); ?>
		</td>
		<td><?php echo h($usersHero['UsersHero']['experience']); ?>&nbsp;</td>
		<td><?php echo h($usersHero['UsersHero']['created']); ?>&nbsp;</td>
		<td><?php echo h($usersHero['UsersHero']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usersHero['UsersHero']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usersHero['UsersHero']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usersHero['UsersHero']['id']), array(), __('Are you sure you want to delete # %s?', $usersHero['UsersHero']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Users Hero'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add')); ?> </li>
	</ul>
</div>
