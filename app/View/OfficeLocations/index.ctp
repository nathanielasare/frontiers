<div class="officeLocations index">
	<h2><?php echo __('Office Locations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('Creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($officeLocations as $officeLocation): ?>
	<tr>
		<td><?php echo h($officeLocation['OfficeLocation']['id']); ?>&nbsp;</td>
		<td><?php echo h($officeLocation['OfficeLocation']['name']); ?>&nbsp;</td>
		<td><?php echo h($officeLocation['OfficeLocation']['Creation_date']); ?>&nbsp;</td>
		<td><?php echo h($officeLocation['OfficeLocation']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $officeLocation['OfficeLocation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $officeLocation['OfficeLocation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $officeLocation['OfficeLocation']['id']), null, __('Are you sure you want to delete # %s?', $officeLocation['OfficeLocation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Office Location'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Idf Submissions'), array('controller' => 'idf_submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Idf Submission'), array('controller' => 'idf_submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
