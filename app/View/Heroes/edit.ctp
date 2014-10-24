<div class="col-lg-8">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h1>Hero Edition</h1>
		</div>
		<?php echo $this->Form->create('Hero'); ?>
		<?php echo $this->Form->input('Hero.id'); ?>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">
					<?php echo $this->Html->image(str_replace(' ', '_', strtolower($this->request->data['Hero']['name'])).'_full.png'); ?>
				</div>
				<div class="col-md-8">
					<div class="col-md-8">
						<h2><?php echo $this->Form->input('Hero.name', array('class'=>'form-control')); ?></h2>
					</div>
				</div>
				<div class="col-md-8">
					<div class="col-md-4">
						<?php echo $this->Form->input('side_id', array('class'=>'form-control')); ?>
					</div>
					<div class="col-md-4">
						<?php echo $this->Form->input('group_id', array('class'=>'form-control')); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="well-sm"><h3>Main Attributes</h3></div>
						<!-- Stats Principales STR, AGI, INT -->
						<div class="col-md-6">
							<?php echo $this->Form->input('Hero.base_strength', array('class'=>'form-control')); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('Hero.lvl_strength', array('class'=>'form-control')); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('Hero.base_agility', array('class'=>'form-control')); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('Hero.lvl_agility', array('class'=>'form-control')); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('Hero.base_intelligence', array('class'=>'form-control')); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('Hero.lvl_intelligence', array('class'=>'form-control')); ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="well-sm"><h3>Other Attributes</h3></div>
						<!-- Resto de los atributos -->
						<div class="col-md-6">
							<?php echo $this->Form->input('Hero.attack_min', array('class'=>'form-control')); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('Hero.attack_max', array('class'=>'form-control')); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('Hero.speed', array('class'=>'form-control')); ?>
						</div>
						<div class="col-md-6">
							<?php echo $this->Form->input('Hero.shield', array('class'=>'form-control')); ?>
						</div>
					</div>
				</div>
			</div>
			<?php echo $this->Form->button('Save Changes',array('type'=>'submit', 'class'=>'btn btn-primary pull-right')); ?>
		</div>
	</div>
</div>