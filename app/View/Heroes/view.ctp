<div class="col-lg-2">
    <div class="menu">
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
</div>
<div class="col-lg-8">
    <div class="panel panel-default">
        <div class="panel-heading"><h1><?php echo h($hero['Hero']['name']); ?></h1></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <?php echo $this->Html->image(str_replace(' ', '_', strtolower($hero['Hero']['name'])).'_full.png'); ?>
                </div>
                <div class="col-md-4">
                    <div>
                        <h3><?php echo $this->Html->link($hero['Side']['name'], array('controller' => 'sides', 'action' => 'view', $hero['Side']['id'])); ?></h3>
                    </div>
                    <div>
                        <h3><?php echo $this->Html->link($hero['Group']['name'], array('controller' => 'groups', 'action' => 'view', $hero['Group']['id'])); ?></h3>
                    </div>
                    <div>
                        <div class="bestRol">
                            <h5>
                            <?php for($i=0;$i<3;$i++)
                                echo $topHeroRoles[$i]['Role']['name']." ";
                            ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="panel panel-default">
        <div class="panel-heading"><h2>Roles Clasification</h2></div>
        <div class="panel-body">
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
                <div class="col-md-4"><?php echo $rolesHero['Role']['name']; ?></div>
                <div class="col-md-6">
                    <div class="progress">
                        <div class="active progress-bar-striped progress-bar <?php echo $bar; ?> role="progressbar" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="10" style="width:<?php echo $level*10; ?>%">
                            <?php echo $level*10; ?>%</span>
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
</div>
<div class="col-lg-4">
    <div class="panel panel-default">
        <div class="panel-heading"><h2>Stats and Atributes</h2></div>
        <div class="panel-body">
    </div>
</div>
