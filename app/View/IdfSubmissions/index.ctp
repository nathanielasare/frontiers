<div class="idfSubmissions index">
	<h2><?php echo __('Idf Submissions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('idf_Received_date'); ?></th>
			<th><?php echo $this->Paginator->sort('idf_number'); ?></th>
			<th><?php echo $this->Paginator->sort('document_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('submit_Location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('no_of_partials'); ?></th>
			<th><?php echo $this->Paginator->sort('importer'); ?></th>
			<th><?php echo $this->Paginator->sort('InvoiceNo'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($idfSubmissions as $idfSubmission): ?>
	<tr>
		<td><?php echo h($idfSubmission['IdfSubmission']['id']); ?>&nbsp;</td>
		<td><?php echo h($idfSubmission['IdfSubmission']['Creation_date']); ?>&nbsp;</td>
		<td><?php echo h($idfSubmission['IdfSubmission']['idf_Received_date']); ?>&nbsp;</td>
		<td><?php echo h($idfSubmission['IdfSubmission']['idf_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($idfSubmission['DocumentType']['name'], array('controller' => 'document_types', 'action' => 'view', $idfSubmission['DocumentType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($idfSubmission['SubmitLocation']['name'], array('controller' => 'submit_locations', 'action' => 'view', $idfSubmission['SubmitLocation']['id'])); ?>
		</td>
		<td><?php echo h($idfSubmission['IdfSubmission']['no_of_partials']); ?>&nbsp;</td>
		<td><?php echo h($idfSubmission['IdfSubmission']['importer']); ?>&nbsp;</td>
		<td><?php echo h($idfSubmission['IdfSubmission']['InvoiceNo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($idfSubmission['User']['name'], array('controller' => 'users', 'action' => 'view', $idfSubmission['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($idfSubmission['Site']['name'], array('controller' => 'sites', 'action' => 'view', $idfSubmission['Site']['id'])); ?>
		</td>
		<td><?php echo h($idfSubmission['IdfSubmission']['remarks']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $idfSubmission['IdfSubmission']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $idfSubmission['IdfSubmission']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $idfSubmission['IdfSubmission']['id']), null, __('Are you sure you want to delete # %s?', $idfSubmission['IdfSubmission']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Idf Submission'), array('action' => 'add')); ?></li>
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