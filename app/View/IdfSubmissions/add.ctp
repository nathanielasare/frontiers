<div class="idfSubmissions form">
<?php echo $this->Form->create('IdfSubmission'); ?>
	<fieldset>
		<legend><?php echo __('Add Idf Submission'); ?></legend>
	<?php
		echo $this->Form->input('Creation_date');
		echo $this->Form->input('idf_Received_date');
		echo $this->Form->input('idf_number');
		echo $this->Form->input('document_type_id');
		echo $this->Form->input('office_location_id');
		echo $this->Form->input('no_of_partials');
		echo $this->Form->input('importer');
		echo $this->Form->input('InvoiceNo');
		echo $this->Form->input('user_id');
		echo $this->Form->input('site_id');
		echo $this->Form->input('remarks');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Idf Submissions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Document Types'), array('controller' => 'document_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Type'), array('controller' => 'document_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Office Locations'), array('controller' => 'office_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office Location'), array('controller' => 'office_locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
	</ul>
</div>
