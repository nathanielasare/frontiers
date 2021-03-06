<!-- Page heading -->
<div class="page-head">
    <h2 class="pull-left">Performance Summary</h2>
    <div class="pull-right">
        <div id="reportrange" class="pull-right">
            <i class="fa fa-calendar"></i>
            <span></span> <b class="caret"></b>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Breadcrumb
    <div class="bread-crumb">
        <a href="index.html"><i class="fa fa-home"></i> Home</a>
        <!-- Divider --
        <span class="divider">/</span>
        <a href="#" class="bread-current">Dashboard</a>
    </div>-->

    <div class="clearfix"></div>

</div>
<!-- Page heading ends -->



<!-- Matter -->

<div class="matter">
<div class="container">

<!-- Today status. jQuery Sparkline plugin used. -->

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="row">
                <div class="col-sm-3">

                    <div class="tile-stats tile-red">
                        <div class="icon"><i class="entypo-users"></i></div>
                        <div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>

                        <h3>Registered users</h3>
                        <p>so far in our blog, and our website.</p>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="tile-stats tile-green">
                        <div class="icon"><i class="entypo-chart-bar"></i></div>
                        <div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>

                        <h3>Daily Visitors</h3>
                        <p>this is the average value.</p>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="tile-stats tile-aqua">
                        <div class="icon"><i class="entypo-mail"></i></div>
                        <div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>

                        <h3>New Messages</h3>
                        <p>messages per day.</p>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="tile-stats tile-blue">
                        <div class="icon"><i class="entypo-rss"></i></div>
                        <div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>

                        <h3>Subscribers</h3>
                        <p>on our site right now.</p>
                    </div>

                </div>
            </div>
            <!--<div class="col-md-8">
                 List starts --
                <ul class="today-datas">
                    <!-- List #1 --
                    <li>
                        <!-- Graph --
                        <div><span id="todayspark1" class="spark"></span></div>
                        <!-- Text --
                        <div class="datas-text">12,000 visitors/day</div>
                    </li>
                    <li>
                        <div><span id="todayspark2" class="spark"></span></div>
                        <div class="datas-text">30,000 Pageviews</div>
                    </li>
                    <li>
                        <div><span id="todayspark3" class="spark"></span></div>
                        <div class="datas-text">15.66% Bounce Rate</div>
                    </li>
                    <li>
                        <div><span id="todayspark4" class="spark"></span></div>
                        <div class="datas-text">$12,000 Revenue/Day</div>
                    </li>
                    <li>
                        <div><span id="todayspark5" class="spark"></span></div>
                        <div class="datas-text">15,000000 visitors till date</div>
                    </li>
                </ul>
            </div>-->
            <!--<div class="col-md-4 pill-container">
                <div class="header-data">

                    <!-- Traffic data --
                    <div class="hdata">
                        <div class="mcol-left">
                            <div id="pie-chart4"></div>
                        </div>
                        <div class="mcol-right">
                            <!-- Number of visitors --
                            <p><a href="#">7000</a> <em>visits</em></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <!-- Members data --
                    <div class="hdata">
                        <div class="mcol-left">
                            <div id="pie-chart5"></div>
                        </div>
                        <div class="mcol-right">
                            <!-- Number of visitors --
                            <p><a href="#">3000</a> <em>users</em></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <!-- revenue data --
                    <div class="hdata">
                        <div class="mcol-left">
                            <div id="pie-chart6"></div>
                        </div>
                        <div class="mcol-right">
                            <!-- Number of visitors --
                            <p><a href="#">5000</a><em>orders</em></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div> -->
        </div>
    </div>
</div>

<!-- Today status ends -->

<!-- Dashboard Graph starts -->
<div class="row">
    <div class="col-md-8 portlets">

        <!-- Widget -->
        <div class="widget white headless footless">
            <!-- Widget head -->
            <div class="widget-head">
                <div class="pull-left">Dashboard Chart</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- Widget content -->
            <div class="widget-content">
                <div class="padd">
                    <div class="btn-group">
                        <button class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-th-large"></i>
                            <span class="fa fa-caret-down fa fa-on-right"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Action</a>
                            </li>

                            <li>
                                <a href="#">Another action</a>
                            </li>

                            <li>
                                <a href="#">Something else here</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">Separated link</a>
                            </li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <div data-toggle="buttons" class="btn-group">
                            <label class="btn btn-sm btn-default">
                                <input type="radio" id="option1" name="options"> Daily
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" id="option2" name="options"> Weekly
                            </label>
                            <label class="btn btn-sm btn-default active">
                                <input type="radio" id="option3" name="options"> Monthly
                            </label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="graph1"></div>
                </div>
            </div>
            <!-- Widget ends -->

        </div>
    </div>
    <div class="col-md-4 portlets">

        <!-- Widget -->
        <div class="widget">
            <!-- Widget content -->
            <div class="widget-content">
                <div id="graph2"></div>
            </div>
            <!-- Widget ends -->

        </div>
        <!-- Widget -->
        <div class="widget">
            <!-- Widget content -->
            <div class="widget-content">
                <div class="padd">
                    <div data-toggle="buttons" class="btn-group">
                        <label class="btn btn-default">
                            Print
                        </label>
                        <label class="btn btn-default">
                            Export
                        </label>
                        <label class="btn btn-default">
                            E-mail
                        </label>
                    </div>

                    <div class="btn-group pull-right">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cog"></i> Settings
                            <span class="fa fa-caret-down fa fa-on-right"></span>
                        </button>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Action</a>
                            </li>

                            <li>
                                <a href="#">Another action</a>
                            </li>

                            <li>
                                <a href="#">Something else here</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Widget ends -->

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 portlets">

        <!-- Widget -->
        <div class="widget">
            <!-- Widget head -->
            <div class="widget-head">
                <div class="pull-left"><i class="fa fa-bar-chart"></i> Graph Chart</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- Widget content -->
            <div class="widget-content">
                <div class="padd">

                    <div id="bar-chart2"></div>

                </div>
            </div>
            <!-- Widget ends -->

        </div>

    </div>

    <div class="col-md-4 portlets">

        <div class="widget">

            <div class="widget-head">
                <div class="pull-left">Today Status</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <div class="padd">

                    <!-- Visitors, pageview, bounce rate, etc., Sparklines plugin used -->
                    <ul class="current-status">
                        <li>
                            <span id="status1"></span> <span class="bold">Visits : 411,231</span>
                        </li>
                        <li>
                            <span id="status2"></span> <span class="bold">Unique Visitors : 1,345</span>
                        </li>
                        <li>
                            <span id="status3"></span> <span class="bold">Pageviews : 21,312</span>
                        </li>
                        <li>
                            <span id="status4"></span> <span class="bold">Pages / Visit : 6,523</span>
                        </li>
                        <li>
                            <span id="status5"></span> <span class="bold">Avg. Visit Duration : 12:17</span>
                        </li>
                        <li>
                            <span id="status6"></span> <span class="bold">Bounce Rate : 32%</span>
                        </li>
                        <li>
                            <span id="status7"></span> <span class="bold">% New Visits : 76%</span>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- Dashboard graph ends -->

<!-- Chats, File upload and Recent Comments -->
<div class="row">

<div class="col-md-4 portlets">
    <!-- Widget -->
    <div class="widget">
        <!-- Widget title -->
        <div class="widget-head">
            <div class="pull-left">Chats</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content">
            <!-- Widget content -->
            <div class="padd sscroll">

                <ul class="chats">

                    <!-- Chat by us. Use the class "by-me". -->
                    <li class="by-me">
                        <!-- Use the class "pull-left" in avatar -->
                        <div class="avatar pull-left">
                            <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                            <!-- In meta area, first include "name" and then "time" -->
                            <div class="chat-meta">Jane Doe <span class="pull-right">3 hours ago</span></div>
                            Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                            <div class="clearfix"></div>
                        </div>
                    </li>

                    <!-- Chat by other. Use the class "by-other". -->
                    <li class="by-other">
                        <!-- Use the class "pull-right" in avatar -->
                        <div class="avatar pull-right">
                            <img src="img/user22.png" alt=""/>
                        </div>

                        <div class="chat-content">
                            <!-- In the chat meta, first include "time" then "name" -->
                            <div class="chat-meta">3 hours ago <span class="pull-right">John Doe</span></div>
                            Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                            <div class="clearfix"></div>
                        </div>
                    </li>

                    <li class="by-me">
                        <div class="avatar pull-left">
                            <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                            <div class="chat-meta">Jane Doe <span class="pull-right">4 hours ago</span></div>
                            Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                            <div class="clearfix"></div>
                        </div>
                    </li>

                    <li class="by-other">
                        <!-- Use the class "pull-right" in avatar -->
                        <div class="avatar pull-right">
                            <img src="img/user22.png" alt=""/>
                        </div>

                        <div class="chat-content">
                            <!-- In the chat meta, first include "time" then "name" -->
                            <div class="chat-meta">3 hours ago <span class="pull-right">John Doe</span></div>
                            Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                            <div class="clearfix"></div>
                        </div>
                    </li>

                </ul>

            </div>
            <!-- Widget footer -->
            <div class="widget-foot">

                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Type your message here...">
                    </div>
                    <button type="submit" class="btn btn-info">Send</button>
                </form>


            </div>
        </div>


    </div>
</div>


<!-- File Upload widget -->
<div class="col-md-4 portlets">
    <div class="widget">
        <!-- Widget title -->
        <div class="widget-head">
            <div class="pull-left">File Upload</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content">
            <!-- Widget content -->
            <ul class="file-upload">

                <li>
                    <strong><i class="fa fa-upload-alt"></i> File_Name_Here.Mp3</strong>
                    <div class="file-meta">3.3 of 5MB - 5 mins - 1MB/Sec</div>

                    <div class="progress progress-animated progress-striped">
                        <div class="progress-bar progress-bar-success" data-percentage="100">
                            <span class="sr-only">100 % completed</span>
                        </div>
                    </div>
                </li>

                <li>
                    <strong><i class="fa fa-check"></i> Third_File_Here.Mp3</strong>
                    <div class="file-meta">5MB - 5 mins - Stopped</div>
                </li>

                <li>
                    <strong><i class="fa fa-check"></i> Third_File_Here.Mp3</strong>
                    <div class="file-meta">5MB - 5 mins - Stopped</div>
                </li>
            </ul>
        </div>
    </div>

    <div class="widget">
        <!-- Widget title -->
        <div class="widget-head">
            <div class="pull-left">Browsers</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content referrer">
            <!-- Widget content -->

            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th><center>#</center></th>
                    <th>Browsers</th>
                    <th>Visits</th>
                </tr>
                <tr>
                    <td><img src="img/icons/chrome.png" alt="" />
                    <td>Google Chrome</td>
                    <td>3,005</td>
                </tr>
                <tr>
                    <td><img src="img/icons/firefox.png" alt="" />
                    <td>Mozilla Firefox</td>
                    <td>2,505</td>
                </tr>
                <tr>
                    <td><img src="img/icons/ie.png" alt="" />
                    <td>Internet Explorer</td>
                    <td>1,405</td>
                </tr>
                <tr>
                    <td><img src="img/icons/opera.png" alt="" />
                    <td>Opera</td>
                    <td>4,005</td>
                </tr>
                <tr>
                    <td><img src="img/icons/safari.png" alt="" />
                    <td>Safari</td>
                    <td>505</td>
                </tr>
            </table>
        </div>
    </div>

</div>


<div class="col-md-4 portlets">
    <!-- Widget -->
    <div class="widget">
        <!-- Widget title -->
        <div class="widget-head">
            <div class="pull-left">Recent Comments</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <!-- Widget content -->
            <div class="padd">

                <ul class="recent">


                    <li>

                        <div class="recent-content">
                            <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                            <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                                <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                                <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                            </div>

                            <button class="btn btn-xs btn-danger pull-right">Spam</button>

                            <div class="clearfix"></div>
                        </div>
                    </li>



                    <li>

                        <div class="recent-content">
                            <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                            <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                                <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                                <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                            </div>

                            <button class="btn btn-xs btn-danger pull-right">Spam</button>

                            <div class="clearfix"></div>
                        </div>
                    </li>



                    <li>

                        <div class="recent-content">
                            <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                            <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                                <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                                <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                            </div>

                            <button class="btn btn-xs btn-danger pull-right">Spam</button>

                            <div class="clearfix"></div>
                        </div>
                    </li>


                </ul>

            </div>
            <!-- Widget footer -->
            <div class="widget-foot">


                <ul class="pagination pull-right">
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>

                <div class="clearfix"></div>

            </div>
        </div>

    </div>

</div>
</div>


<div class="row">
    <div class="col-md-6 portlets">
        <div class="widget">
            <!-- Widget title -->
            <div class="widget-head">
                <div class="pull-left">Calendar</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <!-- Widget content -->
                <div class="padd">
                    <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                    <div id="calendar"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6 portlets">
        <div class="widget">
            <div class="widget-head">
                <div class="pull-left">Quick Post</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
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
                <div class="widget-foot">
                    <!-- Footer goes here -->
                </div>
            </div>
        </div>
        <div class="widget wblack">
            <div class="widget-head">
                <div class="pull-left">Black Chart</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <div class="padd">

                    <div id="bar-chart"></div>

                </div>
                <div class="widget-foot">
                    <!-- Footer goes here -->
                </div>
            </div>
        </div>
    </div>

</div>


</div>
</div>

<!-- Matter ends -->