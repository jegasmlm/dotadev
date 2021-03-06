<div class="col-lg-8 col-lg-push-2">
	<div class="panel panel-default">
		<!-- Default Panel Contents -->
		<div class="panel-heading">
			<h2>
				<?php echo __('Groups'); ?>
				<?php echo $this->Html->link('New Group', array('action'=>'add'), array('class'=>'btn btn-info btn-md pull-right')); ?>
			</h2>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('created'); ?></th>
					<th><?php echo $this->Paginator->sort('modified'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($groups as $group): ?>
				<tr>
					<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
					<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
					<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
					<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id']), array('class'=>'btn btn-success btn-xs')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id']), array('class'=>'btn btn-warning btn-xs')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array('class'=>'btn btn-danger btn-xs'), array(), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div>
			<ul class="pagination">
				<li><?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));?></li>
				<li><?php echo $this->Paginator->numbers(array('separator' => ''));?></li>
				<li><?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));?></li>
			</ul>
		</div>
	</div>
</div>
