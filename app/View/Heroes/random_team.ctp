<div class="col-lg-10">
    <div class="panel panel-success">
        <div class="panel-heading"><h1>Random Team</h1></div>
        <div class="panel-body" style="padding-left: 100px">
            <?php for($i=0;$i<10; $i++)
                $roles[$i]['level'] = 0;
                foreach($randomTeam as $hero):?>
                <div class="col-md-2">
                    <?php echo  $this->Html->image(str_replace(' ', '_', strtolower($hero['Hero']['name'])).'_full.png', array('class'=>'randomTeamThumbnail'));?>
                    <div class="centerText">
                    <?php echo $hero['Hero']['name']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="col-lg-10" style="padding-bottom: 20px">
    <?php echo $this->Html->link('Generate Random Team', array('controller'=>'Heroes','action'=>'randomTeam'), array('class'=>'btn btn-primary btn-md')); ?>
</div>
<div class="col-lg-10">
    <div class="panel panel-warning">
        <div class="panel-heading"><h1>Roles Clasification</h1></div>
        <div class="panel-body" style="padding-left: 100px">
            <?php foreach ($rolesAvg as $role):
            $level = $role['Role']['avgLevel'];
            if($level <= 10)
                $bar = "progress-bar-danger";
            elseif($level >10 && $level <50)
                $bar = "progress-bar-warning";
            else
                $bar = "progress-bar-success";
            ?>
            <div class="row">
                <div class="col-md-3"><?php echo $role['Role']['name']; ?></div>
                <div class="col-md-7">
                    <div class="progress">
                        <div class="active progress-bar-striped progress-bar <?php echo $bar; ?> role="progressbar" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $level; ?>%">
                            <?php echo $level; ?>%
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>