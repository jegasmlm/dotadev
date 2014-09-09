<div class="heroes view">
    <div>
        <div class="row">
            <div class="col-md-4">
                <?php echo $this->Html->image('http://cdn.dota2.com/apps/dota2/images/heroes/'.str_replace(' ', '_', strtolower($hero['Hero']['name'])).'_full.png'); ?>
            </div>
            <div class="col-md-4">
                <div>
                    <h1><?php echo h($hero['Hero']['name']); ?></h1>
                </div>
                <div>
                    <?php echo $this->Html->link($hero['Side']['name'], array('controller' => 'sides', 'action' => 'view', $hero['Side']['id'])); ?>
                </div>
                <div>
                    <?php echo $this->Html->link($hero['Group']['name'], array('controller' => 'groups', 'action' => 'view', $hero['Group']['id'])); ?>
                </div>
                <div>
                    <div class="bestRol">
                        <h3>
                        <?php for($i=0;$i<3;$i++)
                            echo $topHeroRoles[$i]['Role']['name']." ";
                        ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="page-header">
            <h3>Roles</h3>
        </div>
        <?php foreach ($hero['RolesHero'] as $rolesHero):
            $level = $rolesHero['level'];
            if($level < 4)
                $bar = "progress-bar-danger";
            elseif($level >4 && $level <8)
                $bar = "progress-bar-warning";
            else
                $bar = "progress-bar-success";
            ?>
        <div class="row">
            <div class="col-md-2"><?php echo $rolesHero['Role']['name']; ?></div>
            <div class="col-md-3">
                <div class="progress">
                    <div class="progress-bar <?php echo $bar; ?> role="progressbar" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="10" style="width:<?php echo $level*10; ?>%">
                        <span class="sr-only"><?php echo $level; ?>% Complete (success)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-xs btn-default"><?php echo $this->Html->link(__('Edit'), array('controller' => 'roles_heros', 'action' => 'edit', $rolesHero['id'])); ?></button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hero'), array('action' => 'edit', $hero['Hero']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hero'), array('action' => 'delete', $hero['Hero']['id']), array(), __('Are you sure you want to delete # %s?', $hero['Hero']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Heroes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hero'), array('action' => 'add')); ?> </li>
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
