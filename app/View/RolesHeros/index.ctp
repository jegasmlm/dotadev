<div class="col-lg-8 col-lg-push-2">
	<div class="panel panel-default">
		<!-- Default Panel Contents -->
		<div class="panel-heading">
			<h2>
				<?php echo __('Roles Heroes'); ?>
				<?php echo $this->Html->link('New Role For a Hero', array('action'=>'add'), array('class'=>'btn btn-info btn-md pull-right')); ?>
			</h2>
		</div>
		<table class="table">
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
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $rolesHero['RolesHero']['id']), array('class'=>'btn btn-success btn-xs')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rolesHero['RolesHero']['id']), array('class'=>'btn btn-warning btn-xs')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rolesHero['RolesHero']['id']), array('class'=>'btn btn-danger btn-xs'), array(), __('Are you sure you want to delete # %s?', $rolesHero['RolesHero']['id'])); ?>
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
