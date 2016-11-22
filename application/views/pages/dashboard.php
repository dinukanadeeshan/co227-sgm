<div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Student Overview</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">dashboard</i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                            <p class="hidden-lg hidden-md">Notifications</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mike John responded to your email</a></li>
                            <li><a href="#">You have 5 new tasks</a></li>
                            <li><a href="#">You're now friend with Andrew</a></li>
                            <li><a href="#">Another Notification</a></li>
                            <li><a href="#">Another One</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">person</i>
                            <p class="hidden-lg hidden-md">Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="#pablo" id="log_in_btn" class="btn btn-twitter">
                            Log in
                            <!--									<p class="hidden-lg hidden-md">Profile</p>-->
                        </a>
                    </li>
                </ul>

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group  is-empty">
                        <input type="text" class="form-control" id="search" placeholder="Search">
                        <span class="material-input"></span>
                    </div>
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="<?php echo base_url() ?>assets/img/faces/marc.jpg"/>
                            </a>
                        </div>

                        <div class="content">


                            <h4 class="card-title">Alec Thompson</h4>
                            <h6 class="category text-gray">--- Grade 10 ---</h6>
                            <p class="card-content">
                                Don't be scared of the truth because we need to restart the human foundation in
                                truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the
                                back is...
                            </p>
                            <a href="#pablo" class="btn btn-primary btn-round">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <!--                <div class="col-lg-4 col-md-6 col-sm-6">-->
                <!--                    <div class="card card-stats">-->
                <!--                        <div class="card-header" data-background-color="orange">-->
                <!--                            <i class="material-icons"></i>-->
                <!--                        </div>-->
                <!--                        <div class="card-content">-->
                <!--                            <p class="category">Used Space</p>-->
                <!--                            <h3 class="title">49/50-->
                <!--                                <small>GB</small>-->
                <!--                            </h3>-->
                <!--                        </div>-->
                <!--                        <div class="card-footer">-->
                <!--                            <div class="stats">-->
                <!--                                <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-lg-4 col-md-6 col-sm-6">-->
                <!--                    <div class="card card-stats">-->
                <!--                        <div class="card-header" data-background-color="green">-->
                <!--                            <i class="material-icons">store</i>-->
                <!--                        </div>-->
                <!--                        <div class="card-content">-->
                <!--                            <p class="category">Revenue</p>-->
                <!--                            <h3 class="title">$34,245</h3>-->
                <!--                        </div>-->
                <!--                        <div class="card-footer">-->
                <!--                            <div class="stats">-->
                <!--                                <i class="material-icons">date_range</i> Last 24 Hours-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-lg-4 col-md-6 col-sm-6">-->
                <!--                    <div class="card card-stats">-->
                <!--                        <div class="card-header" data-background-color="red">-->
                <!--                            <i class="material-icons">info_outline</i>-->
                <!--                        </div>-->
                <!--                        <div class="card-content">-->
                <!--                            <p class="category">Fixed Issues</p>-->
                <!--                            <h3 class="title">75</h3>-->
                <!--                        </div>-->
                <!--                        <div class="card-footer">-->
                <!--                            <div class="stats">-->
                <!--                                <i class="material-icons">local_offer</i> Tracked from Github-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--						<div class="col-lg-3 col-md-6 col-sm-6">-->
                <!--							<div class="card card-stats">-->
                <!--								<div class="card-header" data-background-color="blue">-->
                <!--									<i class="fa fa-twitter"></i>-->
                <!--								</div>-->
                <!--								<div class="card-content">-->
                <!--									<p class="category">Followers</p>-->
                <!--									<h3 class="title">+245</h3>-->
                <!--								</div>-->
                <!--								<div class="card-footer">-->
                <!--									<div class="stats">-->
                <!--										<i class="material-icons">update</i> Just Updated-->
                <!--									</div>-->
                <!--								</div>-->
                <!--							</div>-->
                <!--						</div>-->
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="green">
                            <!--                            <div class="ct-chart" id="dailySalesChart"></div>-->
                            <div id="testchart"></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title"></h4>
                            <!--                            <p class="category">  <span class="text-success"> 50 </span> students </p>-->
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> updated 4 minutes ago
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="orange">
                            <div id="allmarkschart"></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title"></h4>
                            <p class="category"></p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="red">
                            <div id="classavgchart"></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title">Completed Tasks</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="purple">
                            <div class="ct-chart" id="completedTasksChart"></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title">Completed Tasks</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-chart" data-background-color="blue">
                        <div id="marksChart"></div>
                    </div>
                    <div class="card-content">
                        <h4 class="title">Completed Tasks</h4>
                        <p class="category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card card-nav-tabs">
                        <div class="card-header" data-background-color="purple">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">Tasks:</span>
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="active">
                                            <a href="#profile" data-toggle="tab">
                                                <i class="material-icons">bug_report</i>
                                                Bugs
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#messages" data-toggle="tab">
                                                <i class="material-icons">code</i>
                                                Website
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#settings" data-toggle="tab">
                                                <i class="material-icons">cloud</i>
                                                Server
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when
                                                a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="messages">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when
                                                a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when
                                                a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-simple btn-xs">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-simple btn-xs">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title">Last Semester Results</h4>
                            <p class="category">3<sup>rd</sup> term test: September, 2016</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Marks</th>
                                <th>Grade</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mathematics</td>
                                    <td>80</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>IT</td>
                                    <td>20</td>
                                    <td>F</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sinhala</td>
                                    <td>70</td>
                                    <td>B</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>English</td>
                                    <td>50</td>
                                    <td>C</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Company
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                        </a>
                    </li>
                </ul>
            </nav>
            <p class="copyright pull-right">
                &copy;
                <script>document.write(new Date().getFullYear())</script>
                <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
            </p>
        </div>
    </footer>
</div>

<script src="<?php echo base_url() ?>assets/js/highchart/exporting.js"></script>
<script src="<?php echo base_url() ?>assets/js/highchart/highcharts.js"></script>

<script>


    $(function () {

        //autocomplete
//        $("#search").autocomplete({
//            source: "<?php //echo base_url(); ?>//index.php/student/auto_search",
//            minLength: 1
//        });

        Highcharts.chart('testchart', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Rank in the class'
            },
            subtitle: {
                text: 'out of 40 students'
            },
            xAxis: {
                categories: ['Grade-6', 'Grade-7', 'Grade-8', 'Grade-9', 'Grade-10', 'Grade-11']
            },
            yAxis: {
                reversed: true,
                min: 1,

                title: {
                    text: 'Place '
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: false
                    },
                    enableMouseTracking: true
                }
            },
            series: [{
                name: ' ',
                data: [23, 19, 15, 14, 10]
            },]
        });

        Highcharts.chart('marksChart', {
            title: {
                text: 'Average marks for each subject',
                x: -20 //center
            },
            subtitle: {
                text: null,
                x: -20
            },
            xAxis: {
                title: {
                    text: 'Grades'
                },
                categories: ['Grade-6', 'Grade-7', 'Grade-8', 'Grade-9', 'Grade-10', 'Grade-11']
            },
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Marks (%)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            // tooltip: {
            //     valueSuffix: '°C'
            // },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Sinhala',
                data: [25, 30, 95, 45, 82, 25]
            }, {
                name: 'Maths',
                data: [52, 65, 33, 83, 39, 96]
            }, {
                name: 'Buddhism',
                data: [91, 62, 35, 84, 75, 70]
            }, {
                name: 'History',
                data: [86, 79, 43, 90, 59, 78]
            }, {
                name: 'Science',
                data: [86, 79, 43, 90, 39, 99]
            }, {
                name: 'English',
                data: [92, 64, 35, 54, 35, 70]
            }, {
                name: 'Art',
                data: [23, 13, 24, 45, 34, 23]
            }, {
                name: 'Health',
                data: [78, 89, 79, 80, 90, 100]
            }, {
                name: 'Tech. Skills',
                data: [null, null, null, null, 56, 70]
            }]
        });


        Highcharts.chart('allmarkschart', {
            chart: {
                type: 'bar',
                inverted: true,
                polar: false
            },
            title: {
                text: 'All marks in Grade 10'
            },
            subtitle: {
                text: ''
            },
            xAxis: {

                categories: ['sinhala', 'Maths', 'Buddhism', 'History', 'English', 'Science', 'Art', 'Health', 'Tech.Skills'],
                title: {
                    text: 'Subjects'
                }
            },
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Marks (%) ',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' %'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: false
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'First Term',
                data: [17, 31, 63, 63, 68, 80, 56, 78, 67]
            }, {
                name: 'Second term',
                data: [33, 56, 97, 48, 69, 84, 45, 79, 98]
            }, {
                name: 'Third term',
                data: [52, 54, 50, 74, 38, 88, 34, 56, 23]
            }]
        });


        Highcharts.chart('classavgchart', {
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Marks of student with class average'
            },
            subtitle: {
                text: ''
            },
            xAxis: [{
                categories: ['sinhala', 'Maths', 'Buddhism', 'History', 'English', 'Science', 'Art', 'Health', 'Tech.Skills'],
                crosshair: true
            }],
            yAxis: [{ // Primary yAxis
                min: 0,
                max: 100,
                labels: {
                    format: '{value}',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                title: {
                    text: 'Class Average',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                min: 0,
                max: 100,
                title: {
                    text: 'Marks of student',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                labels: {
                    format: '{value}',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 120,
                verticalAlign: 'middle',
                y: 100,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
            },
            series: [{
                name: 'Marks of student',
                type: 'column',
                yAxis: 1,
                data: [46, 71, 64, 92, 44, 76, 56, 85, 64],


            }, {
                name: 'Class Average',
                type: 'spline',
                data: [50, 69.5, 53.2, 45.3, 42.6, 67.6, 52, 65, 39.9],
                tooltip: {
                    valueSuffix: null
                }
            }]
        });
    });
</script>
