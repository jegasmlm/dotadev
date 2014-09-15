<div class="col-lg-2">
    <div class="menu">
        <div class="actions">
            <?php
                echo $this->Form->create('Heroes');
                echo $this->Form->input('Search');
                echo $this->Form->end('Search');
            ?>
            <h3><?php echo __('Actions'); ?></h3>
            <ul>
                <li><?php echo $this->Html->link(__('New Hero'), array('action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('List Sides'), array('controller' => 'sides', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Side'), array('controller' => 'sides', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Roles Heros'), array('controller' => 'roles_heros', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Roles Hero'), array('controller' => 'roles_heros', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Users Heros'), array('controller' => 'users_heros', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Users Hero'), array('controller' => 'users_heros', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-lg-8">
<div class="panel panel-default">
    <!-- Default Panel Contents -->
    <div class="panel-heading"><h2><?php echo __('Heroes'); ?></h2></div>
    <table class="table">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('side_id'); ?></th>
                <th><?php echo $this->Paginator->sort('group_id'); ?></th>
                <th><?php echo $this->Paginator->sort('image'); ?></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($heroes as $hero): ?>
            <tr>
                <td><?php echo h($hero['Hero']['id']); ?></td>
                <td><?php echo $this->Html->link(h($hero['Hero']['name']), array('action' => 'view', $hero['Hero']['id'])); ?></td>
                <td><?php echo $this->Html->link($hero['Side']['name'], array('controller' => 'sides', 'action' => 'view', $hero['Side']['id'])); ?></td>
                <td><?php echo $this->Html->link($hero['Group']['name'], array('controller' => 'groups', 'action' => 'view', $hero['Group']['id'])); ?></td>
                <td><?php echo $this->Html->image(str_replace(' ', '_', strtolower($hero['Hero']['name'])).'_full.png',array('class' => 'heroeThumbnail')); ?></td>
                <td>
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $hero['Hero']['id']), array('class'=>'btn btn-default btn-xs')); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hero['Hero']['id']), array('class'=>'btn btn-default btn-xs')); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hero['Hero']['id']), array('class'=>'btn btn-default btn-xs'), array(), __('Are you sure you want to delete # %s?', $hero['Hero']['id'])); ?>
                </td>
            </tr>
        </tbody>
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
