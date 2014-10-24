<div class="col-lg-8">
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
                    <div class="col-md-3">
                        <h4><?php echo $this->Html->link($hero['Side']['name'], array('controller' => 'sides', 'action' => 'view', $hero['Side']['id'])); ?></h4>
                    </div>
                    <div class="col-md-3">
                        <h4><?php echo $this->Html->link($hero['Group']['name'], array('controller' => 'groups', 'action' => 'view', $hero['Group']['id'])); ?></h4>
                    </div>
                    <div class="col-md-6">
                        <div class="bestRol">
                            <h4>
                            <?php
                                echo $topHeroRoles[0]['Role']['name']." - ".$topHeroRoles[1]['Role']['name'];
                            ?>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-push-1">
                    <form role="form" name="form_Stats" id="form_Stats">
                        <div class="col-md-2">Intelligence:</div>
                        <div class="col-md-4">
                            <input size="1" maxlength="2" id="base_intelligence" type="text" value="15"> + <input size="1" maxlength="3" id="lvl_intelligence" type="text" value="1.8">
                        </div>
                        <div class="col-md-2">Attack</div>
                        <div class="col-md-4">
                            <input size="1" maxlength="2" id="attack_min" type="text" value="27"> - <input size="1" maxlength="2" id="attack_max" type="text" value="33">
                        </div>
                        <div class="col-md-2">Agility:</div>
                        <div class="col-md-4">
                            <input size="1" maxlength="2" id="base_agility" type="text" value="22"> + <input size="1" maxlength="3" id="lvl_agility" type="text" value="2.8">
                        </div>
                        <div class="col-md-2">Speed:</div>
                        <div class="col-md-4">
                            <input size="1" maxlength="3" id="speed" type="text" value="320">
                        </div>
                        <div class="col-md-2">Strength:</div>
                        <div class="col-md-4">
                            <input size="1" maxlength="2" id="base_strength" type="text" value="20"> + <input size="1" maxlength="3" id="lvl_strength" type="text" value="1.2">
                        </div>
                        <div class="col-md-2">Shield:</div>
                        <div class="col-md-4">
                            <input size="1" maxlength="4" id="shield" type="text" value="2.08">
                        </div>
                    </form>
                </div>
            </div>
            <a href="#" class="btn btn-primary btn-sm pull-right">Save Changes</a>
        </div>
    </div>
</div>
<div class="col-lg-8">
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
