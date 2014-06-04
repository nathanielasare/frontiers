<div class="col-md-6 portlets">

    <div class="widget">
        <div class="widget-head">
            <div class="pull-left">Setup</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content" style="display: none;">
            <div class="padd">

                <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <div class="bs-example bs-example-tabs">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class=""><a href="#home" data-toggle="tab">View</a></li>
                            <li class="active"><a href="#profile" data-toggle="tab">Add</a></li>
                            <li class="dropdown">
                                <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                                    <li><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
                                    <li><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade" id="home">
                                <p><?php //pr($sites);  ?>
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th style="display:none">#</th>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Remarks</th>
                                            <th>Created Date</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $i = 0; ?>
                                        <?php foreach ($sites as $site): ?>
                                            <?php $i++; ?>
                                            <tr>
                                                <td style="display:none" id="did"><?php echo h($site['Site']['id']); ?></td>
                                                <td><?php echo h($i); ?>&nbsp;</td>
                                                <td><?php echo h($site['Site']['name']); ?>&nbsp;</td>
                                                <td><?php echo h($site['Site']['remarks']); ?>&nbsp;</td>
                                                <td><?php echo h($site['Site']['Creation_date']); ?>&nbsp;</td>
                                                <td><?php echo h($site['Site']['active']) == 0 ? 'No' : 'Yes'; ?>&nbsp;</td>
                                                <td><a href="#">Edit</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody></table>
                                </p>
                            </div>
                            <div class="tab-pane fade active in" id="profile">
                                <p>
                                    <!-- Form -->

                                <form class="form-horizontal" id="add-setup-form" action="#" method="POST" name="add-setup-form">
                                    <!-- Title -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="title">Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="title" name="name">
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="content">Remarks</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="content" name="remarks"></textarea>
                                        </div>
                                    </div>
                                    <!-- Tags -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="tags">Active</label>
                                        <div class="list col-lg-10">
                                            <div class="icheckbox_square-green checked hover"><input tabindex="6" type="checkbox" name="active" value="0" id="minimal-checkbox-2" checked="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
                                        </div>
                                    </div>

                                    <!-- Buttons -->

                                    <div class="form-group">
                                        <!-- Buttons -->
                                        <div class="col-lg-offset-2 col-lg-9">
                                            <button type="button" class="btn btn-primary" id="add-setup-btn">save</button>
                                            <button type="submit" class="btn btn-danger">Save Draft</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End of Form -->
                                </p>
                            </div>
                            <div class="tab-pane fade" id="dropdown1">
                                <p>
                                    <?php pr($sites); ?>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="dropdown2">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="widget-foot">
                <!-- Footer goes here -->
            </div>
        </div>
    </div>




    <div class="bs-example bs-example-tabs" style="display: none;">
        <ul id="myTab" class="nav nav-tabs">
            <li class=""><a href="#home" data-toggle="tab">Home</a></li>
            <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
            <li class="dropdown">
                <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                    <li><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
                    <li><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
                </ul>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade" id="home">
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
            </div>
            <div class="tab-pane fade active in" id="profile">
                <p>


            </div>

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
            </p>
        </div>
        <div class="tab-pane fade" id="dropdown1">
            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div>
        <div class="tab-pane fade" id="dropdown2">
            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
        </div>
    </div>


</div>


</div>

<form class="form-horizontal" style="display: none">
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
            <button type="submit" class="btn btn-primary">save</button>
            <button type="submit" class="btn btn-danger">Save Draft</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </div>
    </div>
</form>


        <!-- Daterangepicker -->
<?php echo $this->Html->script('frontiers/setup'); ?>