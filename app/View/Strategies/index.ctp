<div class="col-lg-2">
	<div class="panel panel-default">
		<div class="panel-heading"><h4><?php echo __('Actions'); ?></h4></div>
		<div class="panel-body">
			<div class="list-group">
				<?php echo $this->Html->link(__('List Heros'), array('controller' => 'heroes', 'action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Sides'), array('controller' => 'sides', 'action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Roles Heros'), array('controller' => 'roles_heros', 'action' => 'index'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('List Users Heros'), array('controller' => 'users_heros', 'action' => 'index'),array('class'=>'list-group-item')); ?>
			</div>
		</div>
	</div>
</div>
<div class="strategies index">
	<h2><?php echo __('Strategies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($strategies as $strategy): ?>
	<tr>
		<td><?php echo h($strategy['Strategy']['id']); ?>&nbsp;</td>
		<td><?php echo h($strategy['Strategy']['name']); ?>&nbsp;</td>
		<td><?php echo h($strategy['Strategy']['modified']); ?>&nbsp;</td>
		<td><?php echo h($strategy['Strategy']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $strategy['Strategy']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $strategy['Strategy']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $strategy['Strategy']['id']), array(), __('Are you sure you want to delete # %s?', $strategy['Strategy']['id'])); ?>
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
