<div class="col-md-6 col-md-push-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Please enter your username and password</h3>
        </div>
        <div class="panel-body">
            <div class="form-horizontal">
                <?php if($this->Session->check('Message.flash')!=null){?>
                    <div class="alert alert-danger">
                        <?php echo $this->Session->read('Message.flash.message');?>
                    </div>
                <?php }else{ ?>
                    <div class="alert alert-danger">
                        <?php echo $this->Session->read('Message.auth.message');?>
                    </div>
                <?php }?>
                <?php echo $this->Form->create('User'); ?>
                <div class="form-group">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('username', array('type'=>'text', 'class'=>'form-control', 'placeholder'=>'username')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('password', array('type'=>'password', 'class'=>'form-control', 'placeholder'=>'password'));?>
                    </div>
                </div>
                <div class="pull-right">
                    <?php echo $this->Form->button('Sign in',array('type'=>'submit', 'class'=>'btn btn-primary')); ?>
                </div>
            </div>
        </div>
    </div>
</div>