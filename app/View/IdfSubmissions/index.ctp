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

                <div class="widget" id="idfsubwidget">
                    <div class="widget-head">
                        <div class="pull-left">IDF Submission</div>
                        <div class="widget-icons pull-right">
                            <!--<div class="btn-group">
                                <button type="button" class="btn btn-default">View</button>
                                <button type="button" class="btn btn-default">Add</button>
                                <button type="button" class="btn btn-default">Edit</button>
                            </div>-->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">List</a></li>
                                <li><a href="#tab2" data-toggle="tab">Add</a></li>
                                <li><a href="#tab3" data-toggle="tab">Edit</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <div class="tab-content" style="padding: 10px;">

                            <div class="tab-pane active" id="tab1">  <!--Start of View tab--->

                                <div class="widget">

                                    <div class="widget-head">
                                        <div class="pull-left">IDF Submitted</div>
                                        <div class="widget-icons pull-right">
                                            <br />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="widget-content">

                                        <table id="datatable" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
                                                <th><?php echo $this->Paginator->sort('Creation_date'); ?></th>
                                                <th><?php echo $this->Paginator->sort('idf_Received_date'); ?></th>
                                                <th><?php echo $this->Paginator->sort('idf_number'); ?></th>
                                                <th><?php echo $this->Paginator->sort('document_type_id'); ?></th>
                                                <th><?php echo $this->Paginator->sort('office_location_id'); ?></th>
                                                <th><?php echo $this->Paginator->sort('no_of_partials'); ?></th>
                                                <th><?php echo $this->Paginator->sort('importer'); ?></th>
                                                <th><?php echo $this->Paginator->sort('InvoiceNo'); ?></th>
                                                <!--<th><?php echo $this->Paginator->sort('user_id'); ?></th>-->
                                                <!--<th><?php echo $this->Paginator->sort('site_id'); ?></th>-->
                                                <!--<th><?php echo $this->Paginator->sort('remarks'); ?></th>-->
                                                <th class="actions"><?php echo __('Actions'); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php foreach ($idfSubmissions as $idfSubmission): ?>
                                            <tr>
                                                <!--<td><?php echo h($idfSubmission['IdfSubmission']['id']); ?>&nbsp;</td>-->
                                                <td><?php echo h($idfSubmission['IdfSubmission']['Creation_date']); ?>&nbsp;</td>
                                                <td><?php echo h($idfSubmission['IdfSubmission']['idf_Received_date']); ?>&nbsp;</td>
                                                <td><?php echo h($idfSubmission['IdfSubmission']['idf_number']); ?>&nbsp;</td>
                                                <td>
                                                    <?php echo $this->Html->link($idfSubmission['DocumentType']['name'], array('controller' => 'document_types', 'action' => 'view', $idfSubmission['DocumentType']['id'])); ?>
                                                </td>
                                                <td>
                                                    <?php echo $this->Html->link($idfSubmission['OfficeLocation']['name'], array('controller' => 'office_locations', 'action' => 'view', $idfSubmission['OfficeLocation']['id'])); ?>
                                                </td>
                                                <td><?php echo h($idfSubmission['IdfSubmission']['no_of_partials']); ?>&nbsp;</td>
                                                <td><?php echo h($idfSubmission['IdfSubmission']['importer']); ?>&nbsp;</td>
                                                <td><?php echo h($idfSubmission['IdfSubmission']['InvoiceNo']); ?>&nbsp;</td>
                                                <!--<td>
                                                    <?php echo $this->Html->link($idfSubmission['User']['name'], array('controller' => 'users', 'action' => 'view', $idfSubmission['User']['id'])); ?>
                                                </td>
                                                <td>
                                                    <?php echo $this->Html->link($idfSubmission['Site']['name'], array('controller' => 'sites', 'action' => 'view', $idfSubmission['Site']['id'])); ?>
                                                </td>-->
                                                <!--<td><?php echo h($idfSubmission['IdfSubmission']['remarks']); ?>&nbsp;</td>-->
                                                <td class="actions">
                                                    <!--
                                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $idfSubmission['IdfSubmission']['id'])); ?>
                                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $idfSubmission['IdfSubmission']['id'])); ?>
                                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $idfSubmission['IdfSubmission']['id']), null, __('Are you sure you want to delete # %s?', $idfSubmission['IdfSubmission']['id'])); ?>
                                                    -->
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                                                    <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>

                                            </tbody>
                                        </table>

                                        <div class="widget-foot">
                                            <br /><br />
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>

                                </div>

                            </div> <!--End of View--->

                            <div class="tab-pane" id="tab2">  <!--Start of Add Tab--->

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

                            </div> <!--End of Add--->
                            <div class="tab-pane" id="tab3">
                                <p>Coming Soon</p>
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






<!--<div class="idfSubmissions index">

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
		<li><?php echo $this->Html->link(__('List Office Locations'), array('controller' => 'office_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office Location'), array('controller' => 'office_locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
