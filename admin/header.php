<?php error_reporting(0);
	  session_start();
	  $username=$_SESSION['username'];
	  $q1="select * from vendor_login where username = '$username'";
	$r1=mysql_query($q1);
	$row=mysql_fetch_array($r1);
    $name=$row['vname'];
	$logo=$row['logo'];
	  ?>
 <header class="navbar navbar-fixed-top ">
        <ul class="nav navbar-nav navbar-left">
            
            <li class="hidden-xs">
                <div class="navbar-btn btn-group">
                    <button class="btn-hover-effects navbar-fullscreen toggle-active btn si-icons si-icons-default">
                        <span class="si-icon si-icon-maximize-rotate default h3" data-icon-name="maximizeRotate">F</span>
                    </button>
                </div>
            </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs">
                <div class="navbar-btn btn-group phn">
                    <button class="btn-hover-effects topbar-dropmenu-toggle btn">
                        <span class="fa fa-magic fs20 text-dark"></span>
                    </button>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button class="dropdown-toggle btn btn-hover-effects" data-toggle="dropdown">
                        <span class="fa fa-envelope fs20 text-danger"></span>
                        <span class="fs14 visible-xl">
                            6
                        </span>
                    </button>
                    <div class="navbar-activity dropdown-menu keep-dropdown w375" role="menu">
                        <div class="panel mbn">
                            <div class="panel-menu">
                                <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                    <a href="#nav-tab1" data-toggle="tab"
                                       class="btn btn-sm active">Customers Feedback</a>
                                    <a href="#nav-tab2" data-toggle="tab"
                                       class="btn btn-sm br-l-n br-r-n">PlanHere Feedback</a>
                                   </div>
                            </div>
                            <div class="panel-body pn">
                                <div class="tab-content br-n pn">
                                    <div id="nav-tab1" class="tab-pane active" role="tabpanel">
                                        <ul class="media-list" role="menu">
                                            <li class="media">
                                                <a class="media-left" href="#"> 
                                                    <img src="assets/img/avatars/1.png" class="br3" alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <span class="text-muted">- 09/01/16</span>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> Anna Smith </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> 
                                                    <img src="assets/img/avatars/2.png" class="br3" alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <span class="text-muted">- 09/01/16</span>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> 
                                                    <img src="assets/img/avatars/3.png" class="br3" alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <span class="text-muted">- 09/01/16</span>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64" src="assets/img/avatars/1.png">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Anna Smith
                                                    <span> - 3:16 am</span>
                                                </h5>
                                                Sed egestas ligula eget dictum posuere. Maecenas feugiat in enim.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <span class="media-status offline"></span>
                                                <h5 class="media-heading">Mike Adams
                                                    <span> - 3:36 am</span>
                                                </h5>
                                                Etiam facilisis ultrices fringilla. Vivamus sit amet elementum ipsum
                                            </div>
                                            <div class="media-right">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64" src="assets/img/avatars/3.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64" src="assets/img/avatars/1.png">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Anna Smith
                                                    <span> - 4:27 am</span>
                                                </h5>
                                                Sed egestas ligula eget dictum posuere. Maecenas feugiat in enim.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="#" class="btn btn-warning"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button class="dropdown-toggle btn btn-hover-effects" data-toggle="dropdown">
                        <span class="fa fa-bell fs20 text-info-darker"></span>
                        <span class="fs14 visible-xl">
                            8
                        </span>
                    </button>
                    <div class="navbar-activity dropdown-menu keep-dropdown w375" role="menu">
                        <div class="panel mbn">
                            <div class="panel-menu">
                                <div class="btn-group btn-group-nav" role="tablist">
                                    <a href="#nav-tab4" data-toggle="tab"
                                       class="btn btn-primary btn-sm active">New Orders</a>
                                </div>
                                <button class="btn btn-xs" type="button"><i
                                        class="fa fa-refresh"></i>
                                </button>
                            </div>
                            <div class="panel-body pn">
                                <div class="tab-content br-n pn">
                                    <div id="nav-tab4" class="tab-pane active" role="tabpanel">
                                        <ol class="timeline-list">
                                            <li class="timeline-item">
                                                <div class="timeline-icon light">
                                                    <span class="fa fa-envelope"></span>
                                                </div>
                                                <div class="timeline-desc">
                                                    <b>John Doe <span>-</span> <span class="timeline-date">3:16 am</span></b>
                                                    Sent you a message.
                                                    <a href="#">View now</a>
                                                </div>
                                            </li>
                                            <li class="timeline-item">
                                                <div class="timeline-icon">
                                                    <span class="fa fa-info-circle"></span>
                                                </div>
                                                <div class="timeline-desc">
                                                    <b>Admin <span>-</span> <span class="timeline-date">6:26 pm</span></b> 
                                                    Сreated invoice for:
                                                    <a href="#">iPad Air</a>
                                                </div>
                                            </li>
                                            <li class="timeline-item">
                                                <div class="timeline-icon">
                                                    <span class="fa fa-info-circle"></span>
                                                </div>
                                                <div class="timeline-desc">
                                                    <b>Admin <span>-</span> <span class="timeline-date">11:45 am</span></b> 
                                                    Сreated invoice for:
                                                    <a href="#">iPhone 5s</a>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-footer text-center">
                                <a href="#" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            
            <li class="dropdown dropdown-fuse navbar-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img class="btn-hover-effects" src="../<?=$logo?>" alt="avatar">
                    <span class="hidden-xs">
                        <span class="name"><?php echo $name;?></span>
                    </span>
                    <span class="fa fa-caret-down hidden-xs"></span>
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w230" role="menu">
                    <li class="dropdown-header clearfix">
                        <div class="pull-left">
                            <select id="user-status">
                                <optgroup label="Current Status:">
                                    <option value="1-1">Away</option>
                                    <option value="1-2">Busy</option>
                                    <option value="1-3" selected="selected">Online</option>
                                    <option value="1-4">Offline</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="pull-right">
                            <select id="user-role">
                                <optgroup label="Logged in As:">
                                    <option value="1-1" selected="selected">Admin</option>
                                    <option value="1-2">Editor</option>
                                    <option value="1-3">User</option>
                                </optgroup>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <span class="fa fa-envelope"></span>
                        <a href="#" class="">
                            Messages
                            <span class="label label-info">3</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <span class="fa fa-user"></span>
                        <a href="#" class="">
                            Friends
                            <span class="label label-info">6</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <span class="fa fa-cog"></span>
                        <a href="#" class="">
                            Account Settings 
                        </a>
                    </li>
                    <li class="list-group-item">
                        <span class="fa fa-bell"></span>
                        <a href="#" class="">
                             Activity
                        </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="./logout.php" class="btn btn-warning">
                            logout 
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>