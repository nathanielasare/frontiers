<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($user['User']['Creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Idf Submissions'), array('controller' => 'idf_submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Idf Submission'), array('controller' => 'idf_submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Idf Submissions'); ?></h3>
	<?php if (!empty($user['IdfSubmission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Creation Date'); ?></th>
		<th><?php echo __('Idf Received Date'); ?></th>
		<th><?php echo __('Idf Number'); ?></th>
		<th><?php echo __('Document Type Id'); ?></th>
		<th><?php echo __('Submit Location Id'); ?></th>
		<th><?php echo __('No Of Partials'); ?></th>
		<th><?php echo __('Importer'); ?></th>
		<th><?php echo __('InvoiceNo'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['IdfSubmission'] as $idfSubmission): ?>
		<tr>
			<td><?php echo $idfSubmission['id']; ?></td>
			<td><?php echo $idfSubmission['Creation_date']; ?></td>
			<td><?php echo $idfSubmission['idf_Received_date']; ?></td>
			<td><?php echo $idfSubmission['idf_number']; ?></td>
			<td><?php echo $idfSubmission['document_type_id']; ?></td>
			<td><?php echo $idfSubmission['submit_Location_id']; ?></td>
			<td><?php echo $idfSubmission['no_of_partials']; ?></td>
			<td><?php echo $idfSubmission['importer']; ?></td>
			<td><?php echo $idfSubmission['InvoiceNo']; ?></td>
			<td><?php echo $idfSubmission['user_id']; ?></td>
			<td><?php echo $idfSubmission['site_id']; ?></td>
			<td><?php echo $idfSubmission['remarks']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'idf_submissions', 'action' => 'view', $idfSubmission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'idf_submissions', 'action' => 'edit', $idfSubmission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'idf_submissions', 'action' => 'delete', $idfSubmission['id']), null, __('Are you sure you want to delete # %s?', $idfSubmission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Idf Submission'), array('controller' => 'idf_submissions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
