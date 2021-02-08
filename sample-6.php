<?php
   ob_start();
   session_start();
   //php login codiction 
   if(!isset($_SESSION['valid']) && $_SESSION['valid'] != true){
   	header('Refresh: 1; URL = login.php');
        die();
   } 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jerosoler/Drawflow/dist/drawflow.min.css">
    <link rel="stylesheet" href="css/beautiful.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <link rel="stylesheet" href="css/vendor/quill.snow.css" />
    <link rel="stylesheet" href="css/vendor/quill.bubble.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>

<body id="app-container" class="menu-default show-spinner sample-6">
    <div class="menu">
        <!-- sitebart -->
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li>
                        <a href="#dashboard">
                            <img src="img/dashboards.svg">

                        </a>
                    </li>

                    <li>

                        <img src="img/student.svg">

                    </li>
                    <li>

                        <img src="img/notification.svg">

                    </li>
                    <li>

                        <img src="img/video.svg">

                    </li>
                    <li>

                        <img src="img/timer.svg">

                    </li>
                    <li>
                        <a href="#">
                            <img src="img/calendericon.svg">
                        </a>
                    </li>
                    <!--<li>
                        <a href="https://cerapoda.com/zuzu/sample-6.php" target="">
                            <img src="img/star.svg">
                        </a>
                    </li>-->
                </ul>
                <ul class="list-unstyled bottom-menu">
                    <li>
                        <a href="https://cerapoda.com/zuzu/sample-4_new.php" target="_blank">
                            <img src="img/graph.svg">
                        </a>
                    </li>
                    <li>
                        <a href="https://cerapoda.com/zuzu/sample-6.php" target="_blank">
                            <img src="img/setting.svg">
                        </a>
                    </li>
                    <li>

                        <img src="img/questionmark.svg">

                    </li>

                </ul>
            </div>
        </div>
        <!-- sidebar submenu -->
        <div class="sub-menu menu-right-open">
            <div class="scroll menu-list-select">
                <ul class="list-unstyled" data-link="dashboard">
                    <li class="first-dropdown">
                        <a href="#" data-toggle="collapse" data-target="#cources" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon">
                            <span class="d-inline-block">Your List Of Cources</span> <i
                                class="simple-icon-arrow-down"></i>
                        </a>
                        <div id="cources" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="https://cerapoda.com/zuzu/index.php">
                                        <span class="d-inline-block">Home </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://cerapoda.com/zuzu/sample-1.php">
                                        <span class="d-inline-block">Intro to Cocktails (Linear)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://cerapoda.com/zuzu/sample-2.php">
                                        <span class="d-inline-block">Intro to Cocktails</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://cerapoda.com/zuzu/sample-3.php">
                                        <span class="d-inline-block">Intro to Cocktails (Deep)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://cerapoda.com/zuzu/sample-4.php">
                                        <span class="d-inline-block">What is alcohol?</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://cerapoda.com/zuzu/sample-5.php">
                                        <span class="d-inline-block">Bartendering Main</span>
                                    </a>
                                </li>
                                <?php /*
								<li>
                                    <a href="https://cerapoda.com/zuzu/sample-6.php">
                                       <span class="d-inline-block">Traffic Report</span>
                                    </a>
                                </li>*/?>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled first-menus" data-link="dashboard">
                    <li class="active-menus">
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization">
                            <span class="d-inline-block">All</span>
                        </a>

                    </li>

                    <li>
                        <a href="#" data-toggle="" data-target="#collapseAuthorization1" aria-expanded="true"
                            id="Conversation" aria-controls="collapseAuthorization1">
                            <span class="d-inline-block">Conversation</span>
                        </a>
                        <div id="collapseAuthorization1" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-following"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-follow"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="" data-target="#collapseAuthorization3" aria-expanded="true"
                            aria-controls="collapseAuthorization3">
                            <span class="d-inline-block">Activities</span>
                        </a>
                        <div id="collapseAuthorization3" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-following"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-follow"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="" data-target="#collapseAuthorization4" aria-expanded="true"
                            aria-controls="collapseAuthorization4">
                            <span class="d-inline-block">Assignments</span>
                        </a>
                        <div id="collapseAuthorization4" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-following"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-follow"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="" data-target="#collapseAuthorization5" aria-expanded="true"
                            aria-controls="collapseAuthorization5">
                            <span class="d-inline-block">Insights</span>
                        </a>
                        <div id="collapseAuthorization5" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-following"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-follow"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Joe
                                            Smith</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


            </div>
        </div>
    </div>
    <!-- end sidebar -->
    <!--- main head -->
    <main style="margin-top: 175px">
        <nav class="navbar fixed-top" style="padding: 1.5rem 0 10rem 5rem;">
            <div class="d-flex align-items-center navbar-left">
                <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                        <rect x="0.5" y="0.5" width="25" height="1" />
                        <rect x="0.5" y="7.5" width="25" height="1" />
                        <rect x="0.5" y="15.5" width="25" height="1" />
                    </svg>
                </a>

                <div class="left-portion-header">
                    <h3>Bartending Course: Cocktails</h3>
                    <p>Current Lesson</p>


                </div>

                <div class="chapter-slider">
                    <div class="slider">
                        <span>Lesson<output id="rangevalue"> 5</output></span>
                        <input type="range" min="0" max="10" onchange="rangevalue.value=value" />

                    </div>
                </div>
                <div class="sessions">
                    <div class="form-group row mb-1">

                        <div class="">
                            <ul class="list-inline">
                                <li><label>Current lesson</label></li>
                                <li>
                                    <div class="custom-switch custom-switch-secondary mb-2 custom-switch-small">
                                        <input class="custom-switch-input" id="switchS2" type="checkbox" checked>
                                        <label class="custom-switch-btn" for="switchS2"></label>
                                    </div>
                                </li>

                                <li class="active-range">lesson range</li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>




            <div class="navbar-right">
                <div class="header-icons d-inline-block align-middle">
                    <div class="search d-none d-md-inline-block align-text-bottom">
                        <input placeholder="Search Anything">
                        <span class="search-icon">
                            <!-- <i class="simple-icon-magnifier"></i> -->
                        </span>
                    </div>

                </div>

                <div class="user d-inline-block">
                    <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <!--  <span class="name">Hello Dan</span> -->
                        <span>
                            <img alt="Profile Picture" src="img/usertop.svg" />

                        </span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right mt-3">
                        <a class="dropdown-item" href="#">Account</a>
                        <a class="dropdown-item" href="#">Features</a>
                        <a class="dropdown-item" href="#">History</a>
                        <a class="dropdown-item" href="#">Support</a>
                        <a class="dropdown-item" href="#">Sign out</a>
                    </div>
                </div>
                <div class="user-tamin user" id="hideme" style="display:block;">
                    <div class="blue-status">
                        <a class="close" href="#popup1">×</a>
                        <div class="popup-msg" id="popup1"><img src="img/danger.svg"> Welcome Back, Yotam!<br>
                            Looks like Joe may need your help!
                        </div>
                    </div>
                    <a href="#" class="mb-1 msg-profile" data-from="top" data-align="center"> <span>
                            <img alt="Profile Picture" src="img/user-lady.svg" />
                            <div class="setting-icon"><img src="img/user-settings.svg"></div>
                        </span>
                    </a>
                </div>


            </div>

        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="col-right right_box">
                            <!-- added new claa -->
                            <div id="drawflow" ondrop="drop(event)" ondragover="allowDrop(event)">
                                <div class="hand-lock">
                                    <img src="img/hand.svg">

                                </div>
                                <div class="bar-zoom" style="top:65px;bottom:auto;left: auto;">
                                    <i onclick="editor.zoom_in()"><img src="img/plus-icon.svg"> </i>
                                    <i class="simple-icon-close" style="display:none;"
                                        onclick="editor.zoom_reset()"></i>
                                    <i onclick="editor.zoom_out()"><img src="img/minus.svg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- end header -->
    <script src="js/drawflow.min.js"></script>
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/bootstrap-notify.min.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/quill.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>

    <div class="modal fade modal-right sidebarpopup" id="exampleModalRight" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalRight" aria-hidden="false" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h5 class="modal-title"></h5>
                    <div class="unit-color-section w-100">
                        <div class="icon-n-circles d-flex align-items-center justify-content-between">
                            <div class="unit-icon glyph">
                                <img src="img/clapperboard.png" alt="clapperboard">
								<!-- <div class="class-name">Video</div> -->
                            </div>
                                                        <div class="unit-circle-wrapper color-line">
                                <span class="d-block">Choose the Unit color</span>
                                <ul class="list-unstyled d-flex">
                                    <li><a href="#" data-color="orange"><img src="img/ORANGE.png"></a> </li>
                                    <li><a href="#" data-color="red"><img src="img/red.png"></a> </li>
                                    <li><a href="#" data-color="green"><img src="img/GREEN.png"></a> </li>
                                    <li><a href="#" class="bluecolors" data-color="#009BF2"><img src="img/BLUE.png"></a> </li>
                                    <li><a href="#" data-color="black"><img src="img/BLACK.png"></a> </li>
                                </ul>
                            </div>
                            <div class="unit-icon">
                                <div class="for-edit-option">
                                <select class="vodiapicker">
                                    <option value="en" class="test"
                                        data-green="https://cerapoda.com/zuzu/img/034-reward - GREE.png"
                                        data-#009BF2="https://cerapoda.com/zuzu/img/034-reward - BL.png"
                                        data-red="https://cerapoda.com/zuzu/img/034-reward - RED.png"
                                        data-orange="https://cerapoda.com/zuzu/img/034-reward - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/034-reward.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/reward.png"></option>
                                    <option value="uk"
                                        data-green="https://cerapoda.com/zuzu/img/040-open-book - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/040-open-book - RED.png"
                                        data-#009BF2="https://cerapoda.com/zuzu/img/040-open-book - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/040-open-book - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/040-open-book.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/open-book.png"
                                        class="rounded-circle"></option>
                                    <option value="si" data-green="https://cerapoda.com/zuzu/img/060-signing - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/060-signing - RED.png"
                                        data-#009BF2="https://cerapoda.com/zuzu/img/060-signing - BLU.png"
                                        data-orange="https://cerapoda.com/zuzu/img/060-signing - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/signing-black.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/signing.png"
                                        class="rounded-circle"></option>
                                    <option value="cn"
                                        data-green="https://cerapoda.com/zuzu/img/013-microphone - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/013-microphone - RED.png"
                                        data-#009BF2="https://cerapoda.com/zuzu/img/013-microphone - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/013-microphone - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/013-microphone - black.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/microphone.png"
                                        class="rounded-circle"></option>
                                    <option value="ide" data-green="https://cerapoda.com/zuzu/img/018-idea - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/018-idea - RED.png"
                                        data-#009BF2="https://cerapoda.com/zuzu/img/018-idea - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/018-idea - or.png"
                                        data-black="https://cerapoda.com/zuzu/img/018-idea - black.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/idea.png" class="rounded-circle">
                                    </option>
                                    <option value="re" data-green="https://cerapoda.com/zuzu/img/034-reward - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/034-reward - RED.png"
                                        data-#009BF2="https://cerapoda.com/zuzu/img/034-reward - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/034-reward - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/034-reward.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/reward.png"
                                        class="rounded-circle"></option>
                                    <option value="com"
                                        data-green="https://cerapoda.com/zuzu/img/092-cloud-computing - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/092-cloud-computing - RED.png"
                                        data-#009BF2="https://cerapoda.com/zuzu/img/092-cloud-computing - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/092-cloud-computing - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/cloud-computing-black.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/cloud-computing.png"
                                        class="rounded-circle"></option>
                                    <option value="cla"
                                        data-green="https://cerapoda.com/zuzu/img/021-clapperboard -GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/021-clapperboard - RED.png"
                                        data-#009BF2="https://cerapoda.com/zuzu/img/021-clapperboard BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/021-clapperboard - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/021-clapperboard.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/clapperboard.png"
                                        class="rounded-circle"></option>
                                    <option value="cha"
                                        data-green="https://cerapoda.com/zuzu/img/062-chatting-1 - GRE.png"
                                        data-red="https://cerapoda.com/zuzu/img/062-chatting-1 - RED.png"
                                        data-#009BF2="https://cerapoda.com/zuzu/img/062-chatting-1 - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/062-chatting-1 - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/062-chatting-1.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/chatting.png"
                                        class="rounded-circle"></option>
                                    <option value="ch" data-green="https://cerapoda.com/zuzu/img/080-chains - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/080-chains - RED.png"
                                        data-#009BF2="https://cerapoda.com/zuzu/img/080-chains - BLU.png"
                                        data-orange="https://cerapoda.com/zuzu/img/080-chains - ORANG.png"
                                        data-black="https://cerapoda.com/zuzu/img/080-chains.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/chains.png"
                                        class="rounded-circle"></option>
                                </select>
								</div>
                                <div class="lang-select">
                                    <button class="btn-select" value=""></button>
                                    <div class="b" style="display: none;">
                                        <ul id="a"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="unit-label-section d-flex align-items-center justify-content-between">
                            <span class="left"></span>
                            <span class="class-name static-title right" contentEditable="true" onkeypress="return (this.innerText.length <= 40);">No text</span>
                            <!-- <div class="class-name static-title" contentEditable="true"
                                    style="font-weight:600;max-width:90px; max-height:50px;overflow:hidden;"
                                    onkeypress="return (this.innerText.length <= 30);">Choose Unit</div> -->
                        </div>
                    </div>
                    <!-- <div class="main-icons">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <div class="glyph">
                                    <img src="https://cerapoda.com/zuzu/img/clapperboard.png"
                                        style="padding-right: 0px;width:40px;height:40px">
                                    <div class="class-name" style="font-weight:600">Video</div>

                                </div>
                                <div class="right-arrow"><img src="img/download.png"></div>
                                <div class="color-line">
                                    <ul class="list-inline list-unstyled">
                                        <li><a href="#" data-color="orange"><img src="img/ORANGE.png"></a> </li>
                                        <li><a href="#" data-color="red"><img src="img/red.png"></a> </li>
                                        <li><a href="#" data-color="green"><img src="img/GREEN.png"></a> </li>
                                        <li><a href="#" data-color="blue"><img src="img/BLUE.png"></a> </li>
                                        <li><a href="#" data-color="black"><img src="img/BLACK.png"></a> </li>

                                    </ul>
                                    <div class="color-title-choose">choose the unit color</div>
                                </div>
                            </li>
                            <li class="for-edit-option">
                                <div class="class-name static-title" contentEditable="true"
                                    style="font-weight:600;max-width:90px; max-height:50px;overflow:hidden;"
                                    onkeypress="return (this.innerText.length <= 30);">Choose Unit</div>
                                <select class="vodiapicker">
                                    <option value="en" class="test"
                                        data-green="https://cerapoda.com/zuzu/img/034-reward - GREE.png"
                                        data-blue="https://cerapoda.com/zuzu/img/034-reward - BL.png"
                                        data-red="https://cerapoda.com/zuzu/img/034-reward - RED.png"
                                        data-orange="https://cerapoda.com/zuzu/img/034-reward - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/reward.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/reward.png"></option>
                                    <option value="uk"
                                        data-green="https://cerapoda.com/zuzu/img/040-open-book - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/040-open-book - RED.png"
                                        data-blue="https://cerapoda.com/zuzu/img/040-open-book - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/040-open-book - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/open-book.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/open-book.png"
                                        class="rounded-circle"></option>
                                    <option value="si" data-green="https://cerapoda.com/zuzu/img/060-signing - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/060-signing - RED.png"
                                        data-blue="https://cerapoda.com/zuzu/img/060-signing - BLU.png"
                                        data-orange="https://cerapoda.com/zuzu/img/060-signing - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/signing.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/signing.png"
                                        class="rounded-circle"></option>
                                    <option value="cn"
                                        data-green="https://cerapoda.com/zuzu/img/013-microphone - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/013-microphone - RED.png"
                                        data-blue="https://cerapoda.com/zuzu/img/013-microphone - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/013-microphone - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/microphone.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/microphone.png"
                                        class="rounded-circle"></option>
                                    <option value="ide" data-green="https://cerapoda.com/zuzu/img/018-idea - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/018-idea - RED.png"
                                        data-blue="https://cerapoda.com/zuzu/img/018-idea - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/018-idea - or.png"
                                        data-black="https://cerapoda.com/zuzu/img/idea.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/idea.png" class="rounded-circle">
                                    </option>
                                    <option value="re" data-green="https://cerapoda.com/zuzu/img/034-reward - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/034-reward - RED.png"
                                        data-blue="https://cerapoda.com/zuzu/img/034-reward - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/034-reward - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/reward.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/reward.png"
                                        class="rounded-circle"></option>
                                    <option value="com"
                                        data-green="https://cerapoda.com/zuzu/img/092-cloud-computing - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/092-cloud-computing - RED.png"
                                        data-blue="https://cerapoda.com/zuzu/img/092-cloud-computing - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/092-cloud-computing - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/cloud-computing.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/cloud-computing.png"
                                        class="rounded-circle"></option>
                                    <option value="cla"
                                        data-green="https://cerapoda.com/zuzu/img/021-clapperboard -GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/021-clapperboard - RED.png"
                                        data-blue="https://cerapoda.com/zuzu/img/021-clapperboard BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/021-clapperboard - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/clapperboard.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/clapperboard.png"
                                        class="rounded-circle"></option>
                                    <option value="cha"
                                        data-green="https://cerapoda.com/zuzu/img/062-chatting-1 - GRE.png"
                                        data-red="https://cerapoda.com/zuzu/img/062-chatting-1 - RED.png"
                                        data-blue="https://cerapoda.com/zuzu/img/062-chatting-1 - BL.png"
                                        data-orange="https://cerapoda.com/zuzu/img/062-chatting-1 - OR.png"
                                        data-black="https://cerapoda.com/zuzu/img/chatting.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/chatting.png"
                                        class="rounded-circle"></option>
                                    <option value="ch" data-green="https://cerapoda.com/zuzu/img/080-chains - GREE.png"
                                        data-red="https://cerapoda.com/zuzu/img/080-chains - RED.png"
                                        data-blue="https://cerapoda.com/zuzu/img/080-chains - BLU.png"
                                        data-orange="https://cerapoda.com/zuzu/img/080-chains - ORANG.png"
                                        data-black="https://cerapoda.com/zuzu/img/chains.png"
                                        data-thumbnail="https://cerapoda.com/zuzu/img/chains.png"
                                        class="rounded-circle"></option>
                                </select>

                                <div class="lang-select">
                                    <button class="btn-select" value=""></button>
                                    <div class="b" style="display: none;">
                                        <ul id="a"></ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                     
                    </div> -->
					   <select class="colorpicker" style="display:none;">
                            <option value="">Line Color</option>
                            <option value="orange">Orange</option>
                            <option value="#009BF2">Blue</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="black">Black</option>
                        </select>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:none;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="">
                            <ul class="nav nav-tabs " role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                                        aria-controls="first" aria-selected="true">Parameters</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab"
                                        aria-controls="second" aria-selected="false">Advanced</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab"
                                        aria-controls="third" aria-selected="false">Code</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="first" role="tabpanel"
                                    aria-labelledby="first-tab">
                                    <div class="mb-4"></div>
                                    <div class="sessions">
                                        <div class="form-group row mb-1">

                                            <div class="parameters">
                                                <ul class="list-inline">
                                                    <li><label>Performed / Not Performed</label></li>
                                                    <li>
                                                        <div
                                                            class="custom-switch custom-switch-secondary mb-2 custom-switch-small">
                                                            <input class="custom-switch-input" id="switchS4"
                                                                type="checkbox" checked>
                                                            <label class="custom-switch-btn" for="switchS4"></label>
                                                        </div>
                                                    </li>
                                                    <li class="radio-btns">
                                                        <label>Consideration of Previous Record</label>
                                                        <div class="">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio18"
                                                                    name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                    for="customRadio18">On</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio27"
                                                                    name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                    for="customRadio27">Off</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="minratings"><label>Viewing Time</label></li>
                                                    <li>
                                                        <div class="chapter-slider1">
                                                            <div class="slider">
                                                                <!-- <span><output id="rangevalue">5</output></span> -->
                                                                <input type="range" id="rangeslide" min="0" max="10"
                                                                    onchange="rangevalue.value=value" />

                                                            </div>
                                                            <div class="range-per-text" contentEditable="true"
                                                                onkeypress="return (this.innerText.length <= 3);">50%
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <textarea id="divtext">How is image created?</textarea>

                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                                    <h6 class="mb-4">Advanced Coding Concepts. App & Web Coding. This course prepares
                                        students to have a logical mindset for future programming.</h6>


                                </div>
                                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                                    <h6 class="mb-4">Insert your code</h6>

                                    <div class="html-editor-bubble" id="quillEditorBubble">

                                        var sessionLang = localStorage.getItem('lang');
                                        if (sessionLang){
                                        var langIndex = langArray.indexOf(sessionLang);
                                        $('.btn-select').html(langArray[langIndex]);
                                        $('.btn-select').attr('value', sessionLang);
                                        } else {
                                        var langIndex = langArray.indexOf('ch');
                                        console.log(langIndex);
                                        $('.btn-select').html(langArray[langIndex]);
                                        }

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary editupdate">Save</button>
                    <input type="hidden" id="edittestid">
                    <button type="button" class="btn btn-outline-primary discard" data-dismiss="modal">Discard</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/sample-6.js"></script>
</body>

</html>