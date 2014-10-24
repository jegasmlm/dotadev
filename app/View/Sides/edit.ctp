<?php echo $this->Form->create('Side'); ?>
	<fieldset>
		<legend><?php echo __('Edit Side'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
