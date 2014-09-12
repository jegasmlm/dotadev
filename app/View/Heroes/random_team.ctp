<table>
    <tr>
        <?php
            for($i=0;$i<10; $i++)
                $roles[$i]['level'] = 0;
            foreach($randomTeam as $hero):
            ?>
        <td>
            <?php echo  $this->Html->image(str_replace(' ', '_', strtolower($hero['Hero']['name'])).'_full.png');
            for($i=0; $i<10;$i++){
                $roles[$i]['name'] = $hero['RolesHero'][$i]['Role']['name'];
                $roles[$i]['level'] += $hero['RolesHero'][$i]['level'];
            }
            ?>&nbsp;
        </td>
            <?php endforeach;?>
    </tr>
</table>
<div>
    <div class="page-header">
        <h3>Roles</h3>
    </div>
    <?php foreach ($roles as $role):
    $level = $role['level'];
    if($level < 4)
        $bar = "progress-bar-danger";
    elseif($level >4 && $level <8)
        $bar = "progress-bar-warning";
    else
        $bar = "progress-bar-success";
    ?>
    <div class="row">
        <div class="col-md-2"><?php echo $role['name']; ?></div>
        <div class="col-md-3">
            <div class="progress">
                <div class="progress-bar <?php echo $bar; ?> role="progressbar" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="10" style="width:<?php echo $level*10; ?>%">
                    <span class="sr-only"><?php echo $level; ?>% Complete (success)</span>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>