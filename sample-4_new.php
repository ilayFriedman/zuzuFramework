<?php
   ob_start();
   session_start();
   // php login validation 
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
    <link rel="stylesheet" href="css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jerosoler/Drawflow/dist/drawflow.min.css">
    <link rel="stylesheet" href="css/beautiful.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <link rel="stylesheet" href="css/vendor/quill.snow.css" />
    <link rel="stylesheet" href="css/vendor/quill.bubble.css" />
    <link href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/sample-4_new.css" />
</head>

<body id="app-container" class="menu-default show-spinner menu-sub-hidden teacher-page">
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li>
                        <a href="#dashboard">
                            <img src="img/dashboards.svg">

                        </a>
                    </li>

                    <li>
                        <a href="#layouts">
                            <img src="img/student_t.svg">
                        </a>
                    </li>
                    <li>

                        <img src="img/notification.svg">

                    </li>
                    <li>
                        <a href="#books">
                            <img src="img/video.svg">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/timer.svg">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/calendericon_t.svg">
                        </a>
                    </li>
                    <!--   <li>
                        <a href="https://cerapoda.com/zuzu/sample-6.php" target="">
                            <img src="img/star.svg">
                        </a>
                    </li> -->
                </ul>
                <ul class="list-unstyled bottom-menu">
                    <li>
                        <a href="https://cerapoda.com/zuzu/sample-4_new.php" target="_blank">
                            <img src="img/graph.svg">
                        </a>
                    </li>
                    <li>
					<a href="https://cerapoda.com/zuzu/sample-6.php" target="_blank">
                        <img src="img/teacher-settings.svg">
					</a>
                    </li>
                    <li>

                        <img src="img/questionmark_t.svg">

                    </li>

                </ul>
            </div>
        </div>

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
                                <li>
                                    <a href="https://cerapoda.com/zuzu/sample-6.php">
                                        <span class="d-inline-block">Traffic Report</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled first-menus" data-link="dashboard">
                    <li class="active-menus">
                        <?php /*<a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization">
                            <span class="d-inline-block">All</span>
                        </a>*/?>
						 <a href="#" data-target="#collapseAuthorization" class="active" aria-controls="collapseAuthorization">
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
                    <div id="collapseAuthorization" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li data-control-item="collapseAuthorization1">
                                <a href="#" class="disablea">
                                    <img src="img/alert.svg" style="width:35px" class="alert-icon-set"><img
                                        src="img/user-icon7.png"> <span class="d-inline-block"
                                        style="height:40px;">Conversation - Joe Smith <p>Hello Professor... Thank you for your kind reply</p></span>
                                </a>
                            </li>

                            <li data-control-item="collapseAuthorization3">
                                <a href="#" class="disablea"><img src="img/aler-none.png" class="alert-icon-set">
                                    <img src="img/discuss.svg"> <span class="d-inline-block"
                                        style="height:28px;">Discussion: Exposure <p>12 students replied so far</p>
                                    </span>
                                </a>
                            </li>
                            <li data-control-item="collapseAuthorization4">
                                <a href="javascript:void(0);" class="disablea"><img src="img/aler-none.png" class="alert-icon-set">
                                    <img src="img/question.svg"> <span class="d-inline-block"
                                        style="height:28px;">Lesson 5 quizzes are in! <p>2 students need your attention
                                        </p></span>
                                </a>
                            </li>
                            <li data-control-item="collapseAuthorization3">
                                <a href="#" class="disablea"><img src="img/aler-none.png" class="alert-icon-set">
                                    <img src="img/presentation.svg"> <span class="d-inline-block"
                                        style="height:28px;">Presentation submitted <p>Donna Kirk submitted...</p>
                                    </span>
                                </a>
                            </li>
                            <li data-control-item="collapseAuthorization5">
                                <a href="#" class="disablea"><img src="img/aler-none.png" class="alert-icon-set">
                                    <img src="img/help.svg"> <span class="d-inline-block"
                                        style="height:28px;">Presentation submitted <p>Looks like Joe is taking...</p>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </ul>
                <ul class="list-unstyled student-list-icons" data-link="layouts" id="layouts">

                    <li>
                        <!-- <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Headline Text</span> 
                        </a>-->
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i><img src="img/alert.svg" class="alert-icon-set"><img src="img/user-icon7.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 40px;font-size: 16px">ArkYale<p>The Art Institute of NYC
                                                (M.A.)</p></span>

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/alert.svg" class="alert-icon-set"><img src="img/user-icon2.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 40px;font-size: 16px">Kandace Blessing<p>Hartwick College
                                                (M.A.)</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/alert.svg" class="alert-icon-set"><img src="img/user-icon3.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 40px;font-size: 16px">Evia Winnett<p>Roberts Wesleyan College
                                                (M.A.)</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img
                                                src="img/user-icon4.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Prudence Watkin
                                            <p>NY Academy of Art (M.A.)</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img
                                                src="img/user-icon5.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Hiram Sexton<p>
                                                NY Institute of Technology (M.A.)</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img
                                                src="img/user-icon6.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Todd Toomey<p>
                                                The Art Institute of NYC (M.A.)</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img
                                                src="img/user-icon1.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">David Cruzan<p>
                                                Roberts Wesleyan College (M.A.)</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img
                                                src="img/user-icon8.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Jerry Ruiz<p>NY
                                                Academy of Art (M.A.)</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img
                                                src="img/user-icon9.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Annie Heisler<p>
                                                The Art Institute of NYC (M.A.)</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/alert.svg" class="alert-icon-set"><img
                                                src="img/user-icon10.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Dora Lin<p>NY
                                                Academy of Art (M.A.)</p></span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="chapters" id="chapters">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Authorization</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">What is
                                            alcohol</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Intro to
                                            spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/text-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">How are spirits
                                            are Make</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/exam-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Video intro to
                                            spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">What is
                                            tequila</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Mixing
                                            juices</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">What is
                                            tequila</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/text-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Intro to
                                            spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/exam-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Exercise Tequila
                                            sunrise</span>
                                    </a>
                                </li>




                            </ul>
                        </div>
                    </li>

                </ul>

                <ul class="list-unstyled" data-link="books" id="books">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Course Units</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu links-graph">
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/chains.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 22px;font-size: 16px">What is alcohol</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/021-clapperboard -GREE.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 22px;font-size: 16px">Intro to spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/060-signing - OR.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 22px;font-size: 16px">How are spirits are Make</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/021-clapperboard -GREE.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 22px;font-size: 16px">Video intro to spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/060-signing - OR.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 22px;font-size: 16px">What is tequila</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/021-clapperboard BL.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 22px;font-size: 16px">Mixing juices</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/060-signing - OR.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 22px;font-size: 16px">What is tequila</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/021-clapperboard BL.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 22px;font-size: 16px">Intro to spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/060-signing - BLU.png"
                                                style="padding-right: 0px;"></i> <span class="d-inline-block"
                                            style="height: 22px;font-size: 16px">Exercise Tequila sunrise</span>
                                    </a>
                                </li>




                            </ul>
                        </div>
                    </li>

                </ul>


                <ul class="list-unstyled" data-link="applications" id="applications">
                    <li>
                        <a href="#">
                            <i class="simple-icon-picture"></i> <span class="d-inline-block">Library</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-check"></i> <span class="d-inline-block">Todo</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Survey.List.html">
                            <i class="simple-icon-calculator"></i> <span class="d-inline-block">Survey</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-bubbles"></i> <span class="d-inline-block">Chat</span>
                        </a>
                    </li>
                </ul>



            </div>
        </div>
    </div>

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
                        <span>Lesson<output id="rangevalue"> 4</output></span>
                        <input type="range" min="0" max="4" value="4" onchange="rangevalue.value=value" />

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
        <div class="container-fluid middle-teacher-section">

            <div class="col-md-12">
                <div class="bottom-section">

                    <div class="collapse" id="collapseExample">

                        <div class="col-md-12">
                            <!-- <div class="col-md-3 col-lg-3">
                                        <div class="left-side-top">
                                        <h3>Intro to Spirits <span class="glyph-icon iconsminds-sound"></span></h3>
										
                                        <div class="video">
                           <iframe src="https://player.vimeo.com/video/468320258" frameborder="0" allow="autoplay; fullscreen" style="padding: 0px 0px 0px 0px;" allowfullscreen></iframe>

                        </div>
                    </div>

                                    </div> -->
                            <div class="intro-spirits-container">
                                <div class="left-side-top">
                                    <h3>Intro to Spirits <span class="glyph-icon iconsminds-sound"></span></h3>
                                    <iframe src="https://player.vimeo.com/video/468320258" frameborder="0"
                                        allow="autoplay; fullscreen" allowfullscreen=""
                                        style="padding: 0px 0px 0px 0px;"></iframe>
                                </div>
                                <div class="intro-spirits-wrapper">
                                    <div class="main-icons">
                                        <ul class="list-unstyled list-inline">
                                            <li>
                                                <div class="glyph" id="notificationButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/eye-icon.svg">
                                                    <!-- <div class="glyph-icon simple-icon-eye"></div> -->
                                                    <div class="class-name">student view</div>
                                                </div>
                                                <div class="dropdown-menu position-absolute eywviewdropdown"
                                                    id="notificationDropdown">
                                                    <div class="scroll">
                                                        <div class="d-flex flex-row">
                                                            <a href="#">
                                                                <img src="img/user-icon7.png" alt="Notification Image"
                                                                    class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                                            </a>
                                                            <div class="pl-3">
                                                                <div class="progress-bar-stud">
                                                                    <img src="img/progressar.svg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <a href="#">
                                                                <img src="img/user-icon2.png" alt="Notification Image"
                                                                    class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                                            </a>
                                                            <div class="pl-3">
                                                                <div class="progress-bar-stud">
                                                                    <img src="img/progressar.svg">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex flex-row pb-3">
                                                            <a href="#">
                                                                <img src="img/user-icon3.png" alt="Notification Image"
                                                                    class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                                            </a>
                                                            <div class="pl-3">
                                                                <div class="progress-bar-stud">
                                                                    <img src="img/progressar.svg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon-menu-item">
                                                    <img src="img/user-graph.svg">
                                                    <!-- <i class="iconsminds-equalizer"></i> -->
                                                    <div class="class-name">Stats</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="glyph">
                                                    <img src="img/user-comment.svg">
                                                    <!-- <div class="glyph-icon iconsminds-speach-bubble-dialog"></div> -->
                                                    <div class="class-name">Discussion</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="glyph">
                                                    <img src="img/setting-user.svg">
                                                    <div class="class-name">Settings</div>
                                                </div>
                                            </li>
                                            <!-- <li class="user-img"><img src="img/user.svg"></li> -->
                                        </ul>
                                    </div>
                                    <div class="intro-spirits-content">

                                        <!--   <h4>Explanation </h4> -->
                                        <p>Lorem ipsum A liquor, or distilled spirit, is an alcoholic beverage that
                                            is
                                            distilled rather than fermented like beer
                                            and wine. Distilled spirits include brandy, gin, rum, tequila, whiskey,
                                            and
                                            vodka, as well as a variety of flavored liqueurs.The type of alcohol in
                                            the
                                            alcoholic drinks we drink is a chemical called ethanol.To make alcohol,
                                            you
                                            need to put grains, fruits or vegetables through a process called
                                            fermentation. During this process yeast or bacteria is added, which then
                                            reacts with the sugars in food. The by-products are ethanol and carbon
                                            dioxide.</p>
                                        <p>Once fermented<mark>, the liquid is distilled through either a column
                                                still
                                                or a pot still</mark>. The still's heat forces the alcohol in the
                                            fermented liquid to evaporate—alcohol has a lower boiling point than
                                            water.
                                            The water is left behind, but the alcohol vapor is forced into the next
                                            stage of the still, such as a series of coils or another pot, depending
                                            on
                                            the setup.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="below-video-content">
                                                <h4>Describe the difference between fermentation and distillation?</h4>
                                                <p><input type="text" name="" placeholder="Answer here" class="content-bg" style="width:500px"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="result-title">

                                                <h3>How confindent are you with the answer above? <span> <select
                                                            class="rating" data-current-rating="-1">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="handle"></div>
                </div>
            </div>

            <!--   <script>
         function myFunction() {
                  var x = document.getElementById("hideme");
                  if (x.style.display == "none") {
                    x.style.display = "block";
                  } else {
                    x.style.display = "none";
                  }
                }
        </script> -->
            <div class="side-icons-popup">
                <div class="top-bar-toggle"><a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                        aria-controls="collapseExample"><img src="img/linebar.svg"></a></div>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="col-right">
                            <div id="drawflow" ondrop="drop(event)" ondragover="allowDrop(event)" >
                                <!-- <div class="btn-export" onclick="Swal.fire({ title: 'Export',
                            html: '<pre><code>'+JSON.stringify(editor.export(), null,4)+'</code></pre>'
                            })">Export</div>
                            <div class="btn-clear" onclick="editor.clearModuleSelected()">Clear</div> -->
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
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/bootstrap-notify.min.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/quill.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/drawflow.min.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
    <div class="modal fade modal-right sidebarpopup" id="exampleModalRight" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalRight" aria-hidden="false" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <div class="main-icons">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <div class="glyph">
                                    <img src="https://cerapoda.com/zuzu/img/clapperboard.png"
                                        style="padding-right: 0px;width:40px;height:40px">
                                    <div class="class-name" contentEditable="true" style="font-weight:600">Video</div>

                                </div>
                                <div class="right-arrow"><img src="img/download.png"></div>
                                <div class="color-line">
                                    <ul class="list-inline list-unstyled">
                                        <li><a href="#" data-color="orange"><img src="img/ORANGE.png"></a> </li>
                                        <li><a href="#" data-color="red"><img src="img/red.png"></a> </li>
                                        <li><a href="#" data-color="green"><img src="img/GREEN.png"></a> </li>
                                        <li><a href="#" data-color="#009BF2"><img src="img/BLUE.png"></a> </li>
                                        <li><a href="#" data-color="black"><img src="img/BLACK.png"></a> </li>

                                    </ul>
                                    <div class="color-title-choose">choose the unit color</div>
                                </div>
                            </li>
                            <li class="for-edit-option">
                                <div class="class-name static-title" contentEditable="true" onkeypress="return (this.innerText.length <= 30);" style="font-weight:600">
                                    Choose Unit</div>
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
                        <select class="colorpicker" style="display:none;">
                            <option value="">Line Color</option>
                            <option value="orange">Orange</option>
                            <option value="blue">Blue</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="black">Black</option>
                        </select>
                    </div>
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

                                                                <input type="range" min="0" max="10"
                                                                    onchange="rangevalue.value=value" />

                                                            </div>
                                                            <div class="range-per-text">35%</div>
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
                                    <h6 class="mb-4">Lorem Ipsum Dolor</h6>

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
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Discard</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="js/sample-4_new.js"></script>
</body>

</html>