<div class="row">
    <div class="col-lg-2 table-bordered menu">
        <div>
            <h2>Options</h2>
        </div>
        <div class="list-group">
            <?php echo $this->Html->link('Random Team', array('controller'=>'Heroes', 'action'=>'randomTeam'), array('class'=>'list-group-item')); ?>
            <?php echo $this->Html->link('Random Team by Strategy', array('controller'=>'Heroes', 'action'=>'randomTeamByStrategy'), array('class'=>'list-group-item')); ?>
            <a href="#" class="list-group-item">Compare Heroes</a>
        </div>
    </div>
    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-4">
                <div class="strongTittle centerText">Strength</div>
            </div>
            <div class="col-lg-4">
                <div class="strongTittle centerText">Agility</div>
            </div>
            <div class="col-lg-4">
                <div class="strongTittle centerText">Inteligence</div>
            </div>
        </div>
    </div>
    <?php foreach($heroes as $side):?>
    <div class="col-lg-10" style="padding-top: 25px">
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