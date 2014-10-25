<div class="col-lg-8 col-lg-push-2">
    <div class="panel panel-default">
        <!-- Default Panel Contents -->
        <div class="panel-heading">
            <h2>
                <?php echo __('Heroes'); ?>
                <?php echo $this->Html->link('New Hero', array('action'=>'add'), array('class'=>'btn btn-info btn-md pull-right')); ?>
            </h2>
        </div>
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
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $hero['Hero']['id']), array('class'=>'btn btn-success btn-xs')); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hero['Hero']['id']), array('class'=>'btn btn-warning btn-xs')); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hero['Hero']['id']), array('class'=>'btn btn-danger btn-xs'), array(), __('Are you sure you want to delete # %s?', $hero['Hero']['id'])); ?>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
        <ul class="pagination">
            <li><?php echo $this->Paginator->prev('< ' . __('previous'), array('tag'=>'li'), null, array('class' => 'prev disabled'));?></li>
            <li><?php echo $this->Paginator->numbers(array('separator' => ''));?></li>
            <li><?php echo $this->Paginator->next(__('next') . ' >', array('tag'=>'li'), null, array('class' => 'next disabled'));?></li>
        </ul>
    </div>
</div>
