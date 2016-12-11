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
                    <div class="form-group is-empty dropdown">
                        <input type="text" class="form-control dropdown-toggle" id="search" data-toggle="dropdown"
                               placeholder="Search">
                        <span class="material-input"></span>
                        <div class="card-content">
                            <ul id="finalResults" class="dropdown-menu"></ul>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>

                    </button>


                </form>
            </div>
        </div>
    </nav>

    <div class="content">


        <div class="container-fluid">
            <div>
                <!--                <a rel="" class="btn btn-primary" href="www.google.com">click</a>-->
                <!--                <button id="btn_click">click this</button>-->
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card card-profile" style="display: none;" id="profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" id="proPic" src=""/>
                            </a>
                        </div>

                        <div class="content">


                            <h4 class="card-title" id="studentName"></h4>
                            <h6 class="category text-gray" id="indexNo"></h6>
                            <p class="">
                                <label id="gradeLable"></label>
                            </p>

                            <a href="#pablo" class="btn btn-sm btn-primary btn-round">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="green">
                            <!--                            <div class="ct-chart" id="dailySalesChart"></div>-->
                            <div id="rank_in_class"></div>
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
                            <!--                            <h4 class="title">Completed Tasks</h4>-->
                            <!--                            <p class="category">Last Campaign Performance</p>-->
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
                            <div id="cmpfirstchart"></div>
                        </div>
                        <div class="card-content">
                            <!--                            <h4 class="title">Completed Tasks</h4>-->
                            <!--                            <p class="category">Last Campaign Performance</p>-->
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
                        <!--                        <h4 class="title">Completed Tasks</h4>-->
                        <!--                        <p class="category">Last Campaign Performance</p>-->
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-nav-tabs">
                        <div class="card-header" data-background-color="purple">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">More</span>
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <!--                                        <li class="active">-->
                                        <!--                                            <a href="#profile" data-toggle="tab">-->
                                        <!--                                                <i class="material-icons">bug_report</i>-->
                                        <!--                                                Bugs-->
                                        <!--                                                <div class="ripple-container"></div>-->
                                        <!--                                            </a>-->
                                        <!--                                        </li>-->
                                        <li class="">
                                            <a href="#messages" data-toggle="tab">
                                                <i class="material-icons">code</i>
                                                Compare with
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <!--                                        <li class="">-->
                                        <!--                                            <a href="#settings" data-toggle="tab">-->
                                        <!--                                                <i class="material-icons">cloud</i>-->
                                        <!--                                                Server-->
                                        <!--                                                <div class="ripple-container"></div>-->
                                        <!--                                            </a>-->
                                        <!--                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="tab-content">
                                <div class="tab-pane" id="profile">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <!--                                                <div class="checkbox">-->
                                                <!--                                                    <label>-->
                                                <!--                                                        <input type="checkbox" name="optionsCheckboxes" checked>-->
                                                <!--                                                    </label>-->
                                                <!--                                                </div>-->


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
                                <div class="tab-pane active" id="messages">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <!--                                                        <input type="checkbox" name="optionsCheckboxes" checked>-->
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <select class="dropdown-header dropdown col-md-3">
                                                        <option>Select student</option>
                                                    </select>
                                                    <div class="col-md-1"></div>
                                                    <select class="dropdown-header dropdown col-md-3">
                                                        <option>Select subject</option>
                                                    </select>
                                                    <div class="col-md-1"></div>
                                                    <button class=" btn btn-success btn-sm col-md-3">View</button>
                                                </div>
                                            </td>
                                            <!--                                            <td class="td-actions text-right">-->
                                            <!--                                                <button type="button" rel="tooltip" title="Edit Task"-->
                                            <!--                                                        class="btn btn-primary btn-simple btn-xs">-->
                                            <!--                                                    <i class="material-icons">edit</i>-->
                                            <!--                                                </button>-->
                                            <!--                                                <button type="button" rel="tooltip" title="Remove"-->
                                            <!--                                                        class="btn btn-danger btn-simple btn-xs">-->
                                            <!--                                                    <i class="material-icons">close</i>-->
                                            <!--                                                </button>-->
                                            <!--                                            </td>-->
                                        </tr>
                                        <!--                                        <tr>-->
                                        <!--                                            <td>-->
                                        <!--                                                <div class="checkbox">-->
                                        <!--                                                    <label>-->
                                        <!--                                                        <input type="checkbox" name="optionsCheckboxes">-->
                                        <!--                                                    </label>-->
                                        <!--                                                </div>-->
                                        <!--                                            </td>-->
                                        <!--                                            <td></td>-->
                                        <!--                                            <td class="td-actions text-right">-->
                                        <!--                                                <button type="button" rel="tooltip" title="Edit Task"-->
                                        <!--                                                        class="btn btn-primary btn-simple btn-xs">-->
                                        <!--                                                    <i class="material-icons">edit</i>-->
                                        <!--                                                </button>-->
                                        <!--                                                <button type="button" rel="tooltip" title="Remove"-->
                                        <!--                                                        class="btn btn-danger btn-simple btn-xs">-->
                                        <!--                                                    <i class="material-icons">close</i>-->
                                        <!--                                                </button>-->
                                        <!--                                            </td>-->
                                        <!--                                        </tr>-->
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
                                                        <!--                                                        <input type="checkbox" name="optionsCheckboxes" checked>-->
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
                            <h4 class="title">Compare Alec with <i>John</i> on Mathematics</h4>
                            <p class="category">3<sup>rd</sup> term test: September, 2016</p>
                        </div>
                        <div class="card-content table-responsive">

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
                <a href="">SGM System</a>, made with love for a better monitoring
            </p>
        </div>
    </footer>
</div>

<script src="<?php echo base_url() ?>assets/js/highchart/exporting.js"></script>
<script src="<?php echo base_url() ?>assets/js/highchart/highcharts.js"></script>

<script src="<?php echo base_url() ?>assets/js/dashboard_charts.js" type="text/javascript">


</script>


<script type="text/javascript">
    //    $("#btnu").click(function () {
    //        var x = $('input[type=file]')[0].files[0].path;
    //        $("#txt").val(x);
    //
    //    })

    $('document').ready(function () {
//
        // I have to create
//        $('#finalResults').click(function (event){
//            event.preventDefault();
//
//            console.log('clicked');
//
//            $("#finalResults li").click(function (event){
//                event.preventDefault();
//                var x = $(this).attr('value');
//                alert('clicked ' + x);
//                return true;
//            });
//
//
//            return false; //for good measure
//        });
//


        $("#search").keyup(function () {
            if ($("#search").val().length >= 1) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url('student/search'); ?>",
                    cache: false,
                    data: 'search=' + $("#search").val(),
                    success: function (response) {
                        $('#finalResults').html("");
                        // alert('ok');
                        var obj = JSON.parse(response);
                        if (obj.length > 0) {
                            try {
                                var items = [];
                                // var i = 0;
                                $.each(obj, function (i, val) {
                                    console.log(val.index + " " + val.fname + " " + val.lname);

                                    items.push($("<li/>").html("<a id='" + val.index + "' href='#'" +
                                        " onclick='studentSelect(" + val.index + ")' >" + val.fname + " " + val.lname + "</a>"));

                                    //   i++;
                                });
                                $('#finalResults').append.apply($('#finalResults'), items);
                            } catch (e) {
                                alert('Exception while request..');
                            }
                        } else {
                            $('#finalResult').html($('<li/>').text("No Data Found"));
                        }

                        //   $("#finalResult").show();

                    },
                    error: function ($error) {
                        console.log($error);
                        alert($error);
                    }

                });
            }
            $('#finalResults').html("");
            return false;
        });

    });

    function studentSelect(index) {
        //alert(no);


        $.ajax({
            type: 'post',
            url: "<?php echo site_url('student/marks')?>",
            data: 'index=' + index,
            success: function (response) {
                // alert(response);

                drawRankInClassGraph(response);

                drawGraphs(response);


                $("#proPic").attr("src", "<?php echo base_url() ?>assets/img/faces/" + index + ".jpg");

                $("#studentName").text($("#" + index).text());
                $("#indexNo").text("--- " + index + " ---");
                $("#profile").show();

                $("#search").val("");

                // Get the grade and class for specific student
                $.ajax({
                    type: 'post',
                    url: "<?php echo site_url('student/getGrade')?>",
                    data: 'index=' + index,
                    success: function (response) {

                        var obj = JSON.parse(response);
                        $.each(obj, function (i, val) {
                            $("#gradeLable").text("Grade " + val.grade + " - " + val.name);
                        });

                    },
                    error: function (error) {
                        console.log(error);
                    }
                });

                //Get the ranks for student
                $.ajax({
                    type: 'post',
                    url: "<?php echo site_url('student/getRanks')?>",
                    data: 'index=' + index,
                    success: function (response) {

                        var obj = JSON.parse(response);
                        $.each(obj, function (i, val) {
                            $("#gradeLable").text("Grade " + val.grade + " - " + val.name);
                        });

                    },
                    error: function (error) {
                        console.log(error);
                    }
                });


            },
            error: function (error) {
                console.log(error);
            }
        });


    }


</script>
