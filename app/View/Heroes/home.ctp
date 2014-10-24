<?php echo $this->Session->flash('auth'); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-4 col-md-push-1">
                <div class="strongTittle centerText">Strength</div>
            </div>
            <div class="col-lg-4 col-md-push-1">
                <div class="strongTittle centerText">Agility</div>
            </div>
            <div class="col-lg-4 col-md-push-1">
                <div class="strongTittle centerText">Inteligence</div>
            </div>
        </div>
    </div>
    <?php foreach($heroes as $side):?>
    <div class="col-lg-8 col-md-push-1" style="padding-top: 25px">
        <div class="row">
            <?php foreach ($side as $HeroGRP):?>
            <div class="col-lg-4">
                <div>
                <?php foreach ($HeroGRP as $Hero):?>
                    <div class="borderThumnail col-md-2">
                        <?php echo $this->Html->image(str_replace(' ', '_', strtolower($Hero['Hero']['name'])).'_full.png', array('class' => 'heroeThumbnail', 'url' => array('controller'=>'Heroes','action'=>'view', $Hero['Hero']['id'])));?>
                    </div>
                <?php endforeach;?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php endforeach; ?>
</div>