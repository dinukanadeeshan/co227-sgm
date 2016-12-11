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
                <a class="navbar-brand" href="#">CSV file upload</a>
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
                            <p class="hidden-lg hidden-md">Profile</p>
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


        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" align="center">
                <div class="card card-nav-tabs">
                    <div class="card-header" data-background-color="purple">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <span class="nav-tabs-title">CSV</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">

                                    <li class="active">
                                        <a href="#messages" data-toggle="tab">
                                            <i class="material-icons">list</i>
                                            Marks for each subject
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#settings" data-toggle="tab">
                                            <i class="material-icons">class</i>
                                            Class marks
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#profile" data-toggle="tab">

                                            <i class="material-icons">supervisor_account</i>
                                            Student List
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="tab-content">

                            <div class="tab-pane active" id="messages">
                                <table class="table ">
                                    <tbody>
                                    <tr>

                                        <td class="form-rose">

                                            <form class="form-inline" action="upload/subject_marks" method="POST"
                                                  enctype="multipart/form-data">
                                                <label class="form-group">Select Subject marks CSV file to
                                                    upload:</label>

                                                <br>
                                                <div class="form-group">
                                                    <select
                                                        class="dropdown-header dropdown" name="grade">
                                                        <option value=null disabled selected hidden>Select Grade
                                                        </option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select
                                                        class="dropdown-header dropdown" name="class">
                                                        <option value=null disabled selected hidden>Select Class
                                                        </option>

                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select
                                                        class="dropdown-header dropdown" name="subject">
                                                        <option value=null disabled selected hidden>Select Subject
                                                        </option>

                                                        <option value="Sinhala">Sinhala</option>
                                                        <option value="English">English</option>
                                                        <option value="Mathematics">Mathematics</option>
                                                        <option value="Science">Science</option>
                                                    </select>
                                                </div>


                                                <input class="form-group btn btn-block" type="file" name="fileToUpload"
                                                >
                                                <input class="form-group btn btn-twitter" type="submit"
                                                       value="Upload CSV" name="submit">
                                            </form>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td></td>
                                        <td class="td-actions text-right">

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="settings">
                                <table class="table ">
                                    <tbody>
                                    <tr>

                                        <td class="form-rose">

                                            <form class="form-inline" action="upload/class_marks" method="post"
                                                  enctype="multipart/form-data">
                                                <label class="form-group">Select Class marks CSV file to upload:</label>

                                                <br>
                                                <div class="form-group">
                                                    <select
                                                        class="dropdown-header dropdown" name="grade">
                                                        <option value=null disabled selected hidden>Select Grade
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select
                                                        class="dropdown-header dropdown" name="class">
                                                        <option value=null disabled selected hidden>Select Class
                                                        </option>
                                                    </select>
                                                </div>

                                                <input class="form-group btn btn-block" type="file" name="fileToUpload"
                                                       id="fileToUpload">
                                                <input class="form-group btn btn-instagram" type="submit"
                                                       value="Upload CSV" name="submit">
                                            </form>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td></td>
                                        <td class="td-actions text-right">

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane" id="profile">
                                <table class="table ">
                                    <tbody>
                                    <tr>

                                        <td class="form-rose">

                                            <form class="form-inline" action="upload/student_list" method="post"
                                                  enctype="multipart/form-data">
                                                <label class="form-group">Select Student list CSV file to
                                                    upload:</label> <br>
                                                <div class="form-group">
                                                    <select
                                                        class="dropdown-header dropdown" name="grade">
                                                        <option value=null disabled selected hidden>Select Grade
                                                        </option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select
                                                        class="dropdown-header dropdown" name="class">
                                                        <option value=null disabled selected hidden>Select Class
                                                        </option>
                                                    </select>
                                                </div>


                                                <input class="form-group btn btn-block" type="file" name="fileToUpload"
                                                       id="fileToUpload">
                                                <input class="form-group btn btn-success" type="submit"
                                                       value="Upload CSV" name="submit">
                                            </form>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td></td>
                                        <td class="td-actions text-right">

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2"></div>
        </div>

        <!--        <div><button id="btnu">click</button><input type="text" id="txt"/> </div>-->
    </div>
    <!--    --><?php
    //    $target_dir = "uploads/";
    //    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    //    $uploadOk = 1;
    //    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    //    // Check if image file is a actual image or fake image
    //    if(isset($_POST["submit"])) {
    //        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //        if($check !== false) {
    //            echo "File is an image - " . $check["mime"] . ".";
    //            $uploadOk = 1;
    //        } else {
    //            echo "File is not an image.";
    //            $uploadOk = 0;
    //        }
    //    }
    //    ?>
</div>

