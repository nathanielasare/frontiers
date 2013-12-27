<div class="submitLocations form">
<?php echo $this->Form->create('SubmitLocation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Submit Location'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Creation_date');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubmitLocation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SubmitLocation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Submit Locations'), array('action' => 'index')); ?></li>
	</ul>
</div>
