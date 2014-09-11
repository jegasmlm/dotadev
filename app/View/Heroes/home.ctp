<div class="row">
    <div class="col-lg-2 table-bordered">
        <div>Generate Random Team</div>
        <div>Generate Random Team from Strategy</div>
    </div>
    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div>
                        <h2>Strength</h2>
                    </div>
                    <div>
                    <?php foreach($RadiantStr as $Hero):?>
                        <div class="borderThumnail col-xs-2">
                            <?php echo $this->Html->image(str_replace(' ', '_', strtolower($Hero['Hero']['name'])).'_full.png', array('class' => 'heroeThumbnail'));?>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <?php foreach($DireStr as $Hero):?>
                        <div class="borderThumnail col-xs-3">
                            <?php echo $this->Html->image(str_replace(' ', '_', strtolower($Hero['Hero']['name'])).'_full.png', array('class' => 'heroeThumbnail'));?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div>
                        <h2>Agility</h2>
                    </div>
                    <div><h1>Radiant</h1></div>
                    <div>
                        <?php foreach($RadiantAgi as $Hero):
                            echo $this->Html->image(str_replace(' ', '_', strtolower($Hero['Hero']['name'])).'_full.png', array('class' => 'heroeThumbnail'));
                        endforeach; ?>
                    </div>
                    <div><h1>Dire</h1></div>
                    <div>
                        <?php foreach($DireAgi as $Hero):
                            echo $this->Html->image(str_replace(' ', '_', strtolower($Hero['Hero']['name'])).'_full.png', array('class' => 'heroeThumbnail'));
                        endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div>
                        <h2>Intelillence</h2>
                    </div>
                    <div><h1>Radiant</h1></div>
                    <div>
                        <?php foreach($RadiantInt as $Hero):
                            echo $this->Html->image(str_replace(' ', '_', strtolower($Hero['Hero']['name'])).'_full.png', array('class' => 'heroeThumbnail'));
                        endforeach; ?>
                    </div>
                    <div><h1>Dire</h1></div>
                    <div>
                        <?php foreach($DireInt as $Hero):
                            echo $this->Html->image(str_replace(' ', '_', strtolower($Hero['Hero']['name'])).'_full.png', array('class' => 'heroeThumbnail'));
                        endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>