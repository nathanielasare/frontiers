<div class="submitLocations view">
<h2><?php echo __('Submit Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submitLocation['SubmitLocation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($submitLocation['SubmitLocation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($submitLocation['SubmitLocation']['Creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($submitLocation['SubmitLocation']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submit Location'), array('action' => 'edit', $submitLocation['SubmitLocation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submit Location'), array('action' => 'delete', $submitLocation['SubmitLocation']['id']), null, __('Are you sure you want to delete # %s?', $submitLocation['SubmitLocation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submit Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submit Location'), array('action' => 'add')); ?> </li>
	</ul>
</div>
