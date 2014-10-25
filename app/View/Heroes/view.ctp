<div class="col-lg-8 col-lg-push-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>
                <?php echo h($hero['Hero']['name']); ?>
                <?php echo $this->Html->link('Edit', array('controller'=>'#','action'=>'#'), array('class'=>'btn btn-default btn-md pull-right disabled')); ?>
            </h1>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <?php echo $this->Html->image(str_replace(' ', '_', strtolower($hero['Hero']['name'])).'_full.png'); ?>
                </div>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <h4><?php echo $this->Html->link($hero['Side']['name'], array('controller' => 'sides', 'action' => 'view', $hero['Side']['id'])); ?></h4>
                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $this->Html->link($hero['Group']['name'], array('controller' => 'groups', 'action' => 'view', $hero['Group']['id'])); ?></h4>
                    </div>
                    <div class="col-md-12">
                        <div class="roleTittle">
                            <h4><?php echo $topHeroRoles[0]['Role']['name']." - ".$topHeroRoles[1]['Role']['name']." - ".$topHeroRoles[2]['Role']['name'];?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <form role="form" name="form_Stats" id="form_Stats">
                        <div class="col-md-6"><strong>Intelligence: </strong><?php echo $hero['Hero']['base_intelligence']; ?> + <?php echo $hero['Hero']['lvl_intelligence']; ?></div>
                        <div class="col-md-6"><strong>Attack: </strong><?php echo $hero['Hero']['attack_min']; ?> - <?php echo $hero['Hero']['attack_max']; ?></div>
                        <div class="col-md-6"><strong>Agility: </strong><?php echo $hero['Hero']['base_agility']; ?> + <?php echo $hero['Hero']['lvl_agility']; ?></div>
                        <div class="col-md-6"><strong>Speed: </strong><?php echo $hero['Hero']['speed']; ?></div>
                        <div class="col-md-6"><strong>Strength: </strong><?php echo $hero['Hero']['base_strength']; ?> + <?php echo $hero['Hero']['lvl_strength']; ?></div>
                        <div class="col-md-6"><strong>Shield: </strong><?php echo $hero['Hero']['shield']; ?></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-8 col-lg-push-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>
                Roles Clasification
                <?php echo $this->Html->link('Edit', array('controller'=>'#','action'=>'#'), array('class'=>'btn btn-default btn-md pull-right disabled')); ?>
            </h2>
        </div>
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
                <div class="col-md-2"><?php echo $rolesHero['Role']['name']; ?></div>
                <div class="col-md-8">
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default btn-xs" onclick="updateBar('<?php echo $rolesHero['Role']['name']; ?>','minus')">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </div>
                    <div class="col-md-10">
                        <div class="progress">
                            <div id="<?php echo $rolesHero['Role']['name']; ?>" class="active progress-bar-striped progress-bar <?php echo $bar; ?>" role="progressbar" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="10" style="width:<?php echo $level*10; ?>%">
                                <?php echo $level*10; ?>%
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default btn-xs" onclick="updateBar('<?php echo $rolesHero['Role']['name']; ?>','plus')">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
                    <a href="#" class="btn btn-primary btn-sm pull-right">Save Changes</a>
        </div>
    </div>
</div>
