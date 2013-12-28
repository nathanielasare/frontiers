<div class="officeLocations form">
<?php echo $this->Form->create('OfficeLocation'); ?>
	<fieldset>
		<legend><?php echo __('Add Office Location'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Office Locations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Idf Submissions'), array('controller' => 'idf_submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Idf Submission'), array('controller' => 'idf_submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
