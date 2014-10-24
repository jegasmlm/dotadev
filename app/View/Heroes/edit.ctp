<div class="col-lg-8">
	<div class="panel panel-default">
		<?php echo $this->Form->create('Hero'); ?>
		<?php echo $this->Form->input('Hero.id'); ?>
		<div class="panel-heading">
			<h1>
				<?php echo $this->Form->input('Hero.name'); ?>
				<?php echo $this->Html->link('Edit', array('controller'=>'#','action'=>'#'), array('class'=>'btn btn-default btn-md pull-right disabled')); ?>
			</h1>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">
					<?php echo $this->Html->image(str_replace(' ', '_', strtolower($this->request->data['Hero']['name'])).'_full.png'); ?>
				</div>
				<div class="col-md-8">
					<div class="col-md-3">
						<h4><?php echo $this->Form->input('side_id'); ?></h4>
					</div>
					<div class="col-md-3">
						<h4><?php echo $this->Form->input('group_id'); ?></h4>
					</div>
				</div>
				<div class="col-md-7 col-md-push-1">
					<div class="col-md-4">
						<?php echo $this->Form->input('Hero.base_intelligence'); ?> + <?php echo $this->Form->input('Hero.lvl_intelligence'); ?>
					</div>
					<div class="col-md-4">
						<?php echo $this->Form->input('Hero.attack_min'); ?> - <?php echo $this->Form->input('Hero.attack_max'); ?>
					</div>
					<div class="col-md-4">
						<?php echo $this->Form->input('Hero.base_agility'); ?> + <?php echo $this->Form->input('Hero.lvl_agility'); ?>
					</div>
					<div class="col-md-4">
						<?php echo $this->Form->input('Hero.speed'); ?>
					</div>
					<div class="col-md-4">
						<?php echo $this->Form->input('Hero.base_strength'); ?> + <?php echo $this->Form->input('Hero.lvl_strength'); ?>
					</div>
					<div class="col-md-4">
						<?php echo $this->Form->input('Hero.shield'); ?>
					</div>
				</div>
			</div>
			<?php
			$options = array(
				'label' => 'Save Changes',
				'div' => array(
					'class' => 'btn btn-primary btn-sm pull-right'
				)
			);
			echo $this->Form->end($options); ?>
		</div>
	</div>
</div>