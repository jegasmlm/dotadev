<?php
$maxlvl = 0;
$BestRol="";
foreach ($rolesAvg as $role):
    if($role['Role']['avgLevel'] > $maxlvl) {
        $BestRol = $role['Role']['name'];
        $maxlvl = $role['Role']['avgLevel'];
    }
endforeach;?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>
                Random Team <strong>(<?php echo $BestRol ?> Strategy)</strong>
                <?php echo $this->Html->link('Generate', array('controller'=>'Heroes','action'=>'randomTeam'), array('class'=>'btn btn-primary btn-md pull-right')); ?>
            </h3>
        </div>
        <div class="panel-body" style="width: 70%; margin:0 auto" >
            <div class="col-lg-12">
            <?php for($i=0;$i<10; $i++)
                $roles[$i]['level'] = 0;
                foreach($randomTeam as $hero):?>
                <div class="col-md-2">
                    <?php echo $this->Html->image(str_replace(' ', '_', strtolower($hero['Hero']['name'])).'_full.png',
                                                    array('class'=>'randomTeamThumbnail',
                                                            'url'=> array('controller'=>'Heroes','action'=>'view', $hero['Hero']['id']),
                                                                            'data-toggle'=>'tooltip',
                                                                            'title'=>$hero['Hero']['name'])
                                                    );?>
                    <div class="centerText">
                        <?php echo $hero['Hero']['name']; ?>
                    </div>
                </div>
                    <!-- Tooltip Message-->
                    <div class="tooltip top" role="tooltip">
                        <div class="tooltip-arrow"></div>
                        <div class="tooltip-inner">
                            Some tooltip text!
                        </div>
                    </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Roles Influences</h3></div>
        <div class="panel-body" style="padding-left: 25px">
            <div class="row" style="padding-bottom: 5px">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-5 centerText">Team Average</div>
                <?php foreach($randomTeam as $hero): ?>
                    <div class="col-md-1 centerText"><?php echo $hero['Hero']['name']; ?></div>
                <?php endforeach;?>
            </div>
            <?php for($i=0; $i<count($rolesAvg); $i++){
            $level = $rolesAvg[$i]['Role']['avgLevel'];
            if($level <= 30)
                $bar = "progress-bar-danger";
            elseif($level >30 && $level <80)
                $bar = "progress-bar-warning";
            else
                $bar = "progress-bar-success";
            ?>
            <div class="row">
                <div class="col-md-2"><?php echo $rolesAvg[$i]['Role']['name']; ?></div>
                <div class="col-md-5">
                    <div class="progress">
                        <div class="active progress-bar-striped progress-bar <?php echo $bar; ?>" role="progressbar" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $level
                        ; ?>%"><?php echo $level; ?>%
                        </div>
                    </div>
                </div>
                <?php for($j=0; $j<5; $j++){
                        $level = $randomTeam[$j]['Roles'][$i]['RolesHero']['level']*10;
                        if($level <= 30)
                            $bar = "progress-bar-danger";
                        elseif($level >30 && $level <80)
                            $bar = "progress-bar-warning";
                        else
                            $bar = "progress-bar-success";
                ?>
                    <div class="col-md-1">
                        <div class="progress">
                            <div class="active progress-bar-striped progress-bar <?php echo $bar; ?>" role="progressbar" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $level
                            ; ?>%"><?php echo $level; ?>%
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        <?php } ?>
    </div>
</div>