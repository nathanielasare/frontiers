<div class="idfSubmissions view">
<h2><?php echo __('Idf Submission'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($idfSubmission['IdfSubmission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($idfSubmission['IdfSubmission']['Creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idf Received Date'); ?></dt>
		<dd>
			<?php echo h($idfSubmission['IdfSubmission']['idf_Received_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idf Number'); ?></dt>
		<dd>
			<?php echo h($idfSubmission['IdfSubmission']['idf_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($idfSubmission['DocumentType']['name'], array('controller' => 'document_types', 'action' => 'view', $idfSubmission['DocumentType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submit Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($idfSubmission['SubmitLocation']['name'], array('controller' => 'submit_locations', 'action' => 'view', $idfSubmission['SubmitLocation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Of Partials'); ?></dt>
		<dd>
			<?php echo h($idfSubmission['IdfSubmission']['no_of_partials']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Importer'); ?></dt>
		<dd>
			<?php echo h($idfSubmission['IdfSubmission']['importer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('InvoiceNo'); ?></dt>
		<dd>
			<?php echo h($idfSubmission['IdfSubmission']['InvoiceNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($idfSubmission['User']['name'], array('controller' => 'users', 'action' => 'view', $idfSubmission['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($idfSubmission['Site']['name'], array('controller' => 'sites', 'action' => 'view', $idfSubmission['Site']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($idfSubmission['IdfSubmission']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Idf Submission'), array('action' => 'edit', $idfSubmission['IdfSubmission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Idf Submission'), array('action' => 'delete', $idfSubmission['IdfSubmission']['id']), null, __('Are you sure you want to delete # %s?', $idfSubmission['IdfSubmission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Idf Submissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Idf Submission'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Types'), array('controller' => 'document_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Type'), array('controller' => 'document_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submit Locations'), array('controller' => 'submit_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submit Location'), array('controller' => 'submit_locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
	</ul>
</div>
