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
<div class="col-lg-8">
	<div class="panel panel-default">
		<!-- Default Panel Contents -->
		<div class="panel-heading">
			<h2>
				<?php echo __('Sides'); ?>
				<?php echo $this->Html->link('New Side', array('action'=>'add'), array('class'=>'btn btn-info btn-md pull-right')); ?>
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
			<?php foreach ($sides as $side): ?>
				<tr>
					<td><?php echo h($side['Side']['id']); ?>&nbsp;</td>
					<td><?php echo h($side['Side']['name']); ?>&nbsp;</td>
					<td><?php echo h($side['Side']['created']); ?>&nbsp;</td>
					<td><?php echo h($side['Side']['modified']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $side['Side']['id']), array('class'=>'btn btn-success btn-xs')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $side['Side']['id']), array('class'=>'btn btn-warning btn-xs')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $side['Side']['id']), array('class'=>'btn btn-danger btn-xs'), array(), __('Are you sure you want to delete # %s?', $side['Side']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
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
