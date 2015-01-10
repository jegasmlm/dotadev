<div class="col-lg-8 col-lg-push-2">
    <div class="rolesHeros form">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h1>Edit Role Hero</h1>
            </div>
            <?php echo $this->Form->create('RolesHero'); ?>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <?php echo $this->Html->image(str_replace(' ', '_', strtolower($this->request->data['Hero']['name'])).'_full.png'); ?>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-8">
                            <h2><?php echo $this->request->data['Hero']['name']; ?></h2>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?php
                        echo $this->Form->input('id');
                        echo $this->Form->input('role_id', array('class'=>'form-control', 'disabled'));
                        echo $this->Form->input('hero_id', array('class'=>'form-control', 'disabled'));
                        echo $this->Form->input('level', array('class'=>'form-control'));
                        ?>
                    </div>
                    <div class="col-lg-12">
                        <?php echo $this->Form->button('Save Changes',array('type'=>'submit', 'class'=>'btn btn-primary pull-right')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

