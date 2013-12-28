<!--<div class="sites index">
	<h2><?php echo __('Sites'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('Creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sites as $site): ?>
	<tr>
		<td><?php echo h($site['Site']['id']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['name']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['Creation_date']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $site['Site']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $site['Site']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $site['Site']['id']), null, __('Are you sure you want to delete # %s?', $site['Site']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Idf Submissions'), array('controller' => 'idf_submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Idf Submission'), array('controller' => 'idf_submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>-->


<!-- Page heading -->
<div class="page-head">
    <h2 class="pull-left">Recieption</h2>

    <div class="pull-right" style="padding-top: 5px;">
        <button type="submit" class="btn btn-daulft">IDF Submission</button>
        <button type="submit" class="btn btn-danger">Query Review</button>
    </div>
    <div class="clearfix"></div>

</div>
<!-- Page heading ends -->



<!-- Matter -->

<div class="matter">
<div class="container">

<div class="row">

    <div class="col-md-12 portlets">
        <div class="widget">
            <div class="widget-head">
                <div class="pull-left">IDF Submission</div>
                <div class="widget-icons pull-right">
                    <!--<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                    <button type="reset" class="btn btn-default">Add</button>
                    <button type="reset" class="btn btn-default">Edit</button>-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Add</button>
                        <button type="button" class="btn btn-default">Edit</button>
                        <button type="button" class="btn btn-default">Delete</button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <div class="padd">

                    <div class="form quick-post">
                        <!-- Edit profile form (not working)-->
                        <form class="form-horizontal">
                            <!-- Title -->
                            <div class="form-group">
                                <label class="control-label col-lg-2" for="title">Title</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title">
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="form-group">
                                <label class="control-label col-lg-2" for="content">Content</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="content"></textarea>
                                </div>
                            </div>
                            <!-- Cateogry -->
                            <div class="form-group">
                                <label class="control-label col-lg-2">Category</label>
                                <div class="col-lg-10">
                                    <select class="form-control">
                                        <option value="">- Choose Cateogry -</option>
                                        <option value="1">General</option>
                                        <option value="2">News</option>
                                        <option value="3">Media</option>
                                        <option value="4">Funny</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Tags -->
                            <div class="form-group">
                                <label class="control-label col-lg-2" for="tags">Tags</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="tags">
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="form-group">
                                <!-- Buttons -->
                                <div class="col-lg-offset-2 col-lg-9">
                                    <button type="submit" class="btn btn-primary">Publish</button>
                                    <button type="submit" class="btn btn-danger">Save Draft</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <!--<div class="widget-foot">
                    <!-- Footer goes here --
                    Breaking
                </div>-->
            </div>
        </div>
    </div>

</div>


</div>
</div>

<!-- Matter ends -->


