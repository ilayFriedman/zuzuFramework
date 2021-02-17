<?php
   ob_start();
   session_start();
   
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
</head>
<body id="app-container" class="menu-default show-spinner menu-sub-hidden">
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
                         <a href="#" target="_blank">
                            <img src="img/setting.svg">
                        </a>
                    </li>
                     <li>
                         <a href="#" target="_blank">
                            <img src="img/questionmark_t.svg">
                        </a>
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
                           <span class="d-inline-block">Your List Of Cources</span>  <i class="simple-icon-arrow-down"></i> 
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
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" >
                           <span class="d-inline-block">All</span>
                        </a>
                        
                    </li>
                   
                      <li>
                        <a href="#" data-toggle="" data-target="#collapseAuthorization1" aria-expanded="true" id="Conversation"
                            aria-controls="collapseAuthorization1">
                           <span class="d-inline-block">Conversation</span>
                        </a>
                        <div id="collapseAuthorization1" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-following"></i> <span
                                            class="d-inline-block">Joe Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-follow"></i> <span
                                            class="d-inline-block">Joe Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Joe Smith</span>
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
                                        <i class="simple-icon-user-following"></i> <span
                                            class="d-inline-block">Joe Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-follow"></i> <span
                                            class="d-inline-block">Joe Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Joe Smith</span>
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
                                        <i class="simple-icon-user-following"></i> <span
                                            class="d-inline-block">Joe Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-follow"></i> <span
                                            class="d-inline-block">Joe Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Joe Smith</span>
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
                                        <i class="simple-icon-user-following"></i> <span
                                            class="d-inline-block">Joe Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-follow"></i> <span
                                            class="d-inline-block">Joe Smith</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Joe Smith</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                   <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <img src="img/alert.svg" style="width:35px" class="alert-icon-set"><img src="img/user-icon7.png">  <span
                                            class="d-inline-block" style="height:40px;">Conversation - Joe Smith <p>Hello Professor....</p></span>
                                    </a>
                                </li>
                              
                                <li>
                                    <a href="#"><img src="img/aler-none.png" class="alert-icon-set">
                                        <img src="img/discuss.svg"> <span
                                            class="d-inline-block" style="height:28px;">Discussion: Exposure <p>12 students replied so far</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/aler-none.png" class="alert-icon-set">
                                        <img src="img/question.svg">  <span class="d-inline-block" style="height:28px;">Lesson 5 quizzes are in! <p>2 students need your attention</p></span>
                                    </a>
                                </li>
                                   <li>
                                    <a href="#"><img src="img/aler-none.png" class="alert-icon-set">
                                        <img src="img/presentation.svg"> <span class="d-inline-block" style="height:28px;">Presentation submitted <p>Donna Kirk submitted...</p></span>
                                    </a>
                                </li>
                                  <li>
                                    <a href="#"><img src="img/aler-none.png" class="alert-icon-set">
                                        <img src="img/help.svg"> <span class="d-inline-block" style="height:28px;">Presentation submitted <p>Looks like Joe is taking...</p></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                </ul>
                <ul class="list-unstyled student-list-icons" data-link="layouts" id="layouts">

                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <!-- <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Headline Text</span> -->
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                             <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i><img src="img/alert.svg" class="alert-icon-set"><img src="img/user-icon7.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">ArkYale</p></span>
                                            
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/alert.svg" class="alert-icon-set"><img src="img/user-icon2.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Kandace Blessing</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/alert.svg" class="alert-icon-set"><img src="img/user-icon3.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Evia Winnett</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user-icon4.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Prudence Watkin</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user-icon5.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Hiram Sexton</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user-icon6.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Todd Toomey</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user-icon1.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">David Cruzan</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user-icon8.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Jerry Ruiz</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user-icon9.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Annie Heisler</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/alert.svg" class="alert-icon-set"><img src="img/user-icon10.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Dora Lin</p></span>
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
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Unit -1 - Video</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Unit -2 - Video</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/text-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Unit -3 - Text</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/exam-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Unit -4 - Exam</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Unit -5 - Video</span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Unit -6 - Video</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Unit -7 - Video</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/text-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Unit -8 - Text</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/exam-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Unit -9 - Exam</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Unit -10 - Video</span>
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
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px; width:30px;height:30px"></i> <span
                                            class="d-inline-block" style="height: 30px;font-size: 16px">Unit -1 - Video</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;width:30px;height:30px"></i> <span
                                            class="d-inline-block" style="height: 30px;font-size: 16px">Unit -2 - Video</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/text-icon.png" style="padding-right: 0px;width:30px;height:30px"></i> <span
                                            class="d-inline-block" style="height:  30px;font-size: 16px">Unit -3 - Text</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/exam-icon.png" style="padding-right: 0px;width:30px;height:30px"></i> <span
                                            class="d-inline-block" style="height:  30px;font-size: 16px">Unit -4 - Exam</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;width:30px;height:30px"></i> <span
                                            class="d-inline-block" style="height:  30px;font-size: 16px">Unit -5 - Video</span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;width:30px;height:30px"></i> <span
                                            class="d-inline-block" style="height: 30px;font-size: 16px">Unit -6 - Video</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;width:30px;height:30px"></i> <span
                                            class="d-inline-block" style="height: 30px;font-size: 16px">Unit -7 - Video</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/text-icon.png" style="padding-right: 0px;width:30px;height:30px"></i> <span
                                            class="d-inline-block" style="height: 30px;font-size: 16px">Unit -8 - Text</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/exam-icon.png" style="padding-right: 0px;width:30px;height:30px"></i> <span
                                            class="d-inline-block" style="height: 30px;font-size: 16px">Unit -9 - Exam</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/video-icon.png" style="padding-right: 0px;width:30px;height:30px"></i> <span
                                            class="d-inline-block" style="height: 30px;font-size: 16px">Unit -10 - Video</span>
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
            <span>Lesson<output id="rangevalue"> 5</output></span>
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
    
  </div>
</div>
  <div class="sessions">
                  <div class="form-group row mb-1">
                                        
                                        <div class="">
                                            <ul class="list-inline">
                                            <li><label>Current lesson</label></li>
                                           <li> <div class="custom-switch custom-switch-secondary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS2" type="checkbox"
                                                    checked>
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
                                   <div class="row">
                                    <div class="col-md-3 col-lg-3">
                                        <div class="left-side-top">
                                        <h3>How is image created? <span class="glyph-icon iconsminds-sound"></span></h3>
                                        <div class="video">
                           <iframe src="https://player.vimeo.com/video/468320258" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

                        </div>
                    </div>

                                    </div>
                                    <div class="col-md-9 col-lg-9">
                                         <div class="main-icons">
            <ul class="list-unstyled list-inline">
              
               
                  
                           
                            <li>
                                <div class="glyph" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="img/eye-icon.svg">  
                                    <!-- <div class="glyph-icon simple-icon-eye"></div> -->
                                    <div class="class-name">student view</div>
                                </div>
                                 <div class="dropdown-menu position-absolute eywviewdropdown" id="notificationDropdown">
                        <div class="scroll">
                            <div class="d-flex flex-row">
                                <a href="#">
                                    <img src="img/user4.svg" alt="Notification Image"
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
                                    <img src="img/user3.svg" alt="Notification Image"
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
                                    <img src="img/user2.svg" alt="Notification Image"
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
                             
                               <li> <div class="icon-menu-item">
                                <img src="img/user-graph.svg">
                            <!-- <i class="iconsminds-equalizer"></i> -->
                            <div class="class-name">Module Stats</div>
                        </div>
                    </li>
                      <li> <div class="glyph">
                                    <img src="img/user-comment.svg">
                                    <!-- <div class="glyph-icon iconsminds-speach-bubble-dialog"></div> -->
                                    <div class="class-name">Discussion</div>
                                </div>
                            </li>
                             <li> <div class="glyph">
                                    <img src="img/setting-user.svg">
                                    <div class="class-name">Settings</div>
                                </div>
                            </li>
                             <!-- <li class="user-img"><img src="img/user.svg"></li> -->
            </ul>
        </div>
                                      <!--   <h4>Explanation </h4> -->
                                        <p>Lorem ipsum A liquor, or distilled spirit, is an alcoholic beverage that is distilled rather than fermented like beer 
and wine. Distilled spirits include brandy, gin, rum, tequila, whiskey, and vodka, as well as a variety of flavored liqueurs.The type of alcohol in the alcoholic drinks we drink is a chemical called ethanol.To make alcohol, you need to put grains, fruits or vegetables through a process called fermentation. During this process yeast or bacteria is added, which then reacts with the sugars in food. The by-products are ethanol and carbon dioxide.</p>
                                        <p>Once fermented, the liquid is distilled through either a column still or a pot still. The still's heat forces the alcohol in the fermented liquid to evaporate—alcohol has a lower boiling point than water. The water is left behind, but the alcohol vapor is forced into the next stage of the still, such as a series of coils or another pot, depending on the setup.</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                    <div class="col-md-7">
                                    <div class="below-video-content">
                                        <h4>Describe the difference between fermentation and distillation?</h4>
                                        <p class="content-bg">Answer here</p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="result-title">
                                        
                                        <h3>How confindent are you with the answer above? <span> <select class="rating" data-current-rating="-1">
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
          <div class=""><a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ><img src="img/linebar.svg" ></a></div>
      </div>
      <div class="clearfix"></div>
 
           </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="col-right">
                          <div id="drawflow" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <!-- <div class="btn-export" onclick="Swal.fire({ title: 'Export',
                            html: '<pre><code>'+JSON.stringify(editor.export(), null,4)+'</code></pre>'
                            })">Export</div>
                            <div class="btn-clear" onclick="editor.clearModuleSelected()">Clear</div> -->
                            <div class="hand-lock">
                              <i id="lock" class="fas fa-lock" onclick="editor.editor_mode='fixed'; changeMode('lock');"></i>

                            </div>
                            <div class="bar-zoom" style="top:65px;bottom:auto;left: auto;">
                              <i class="simple-icon-minus" onclick="editor.zoom_out()"></i>
                              <i class="simple-icon-close" style="display:none;" onclick="editor.zoom_reset()"></i>
                              <i class="simple-icon-plus" onclick="editor.zoom_in()"></i>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script src="js/drawflow.min.js"></script>
<script>

    var id = document.getElementById("drawflow");
    const editor = new Drawflow(id);
    editor.reroute =null;
    var rightpop=100;
    var leftpopup=6;
    var rightpopnext=0;
    editor.editor_mode = 'fixed';
    //editor.drawflow = {"drawflow":{"Home":{"data":{"1":{"id":1,"name":"welcome","data":{},"class":"help","html":"\n    <div class=\"flow-chart-design\"><div class=\"start-round\">Start</div></div>","typenode": false, "inputs":{},"outputs":{},"pos_x":50,"pos_y":50, }, "2":{"id":2,"name":"welcome","data":{},"class":"help","html":"\n    <div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"> How is image created?  <a href=\"#\"  data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#exampleModalRight\">   <span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"#\">   <span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a></li></ul></div>","typenode": false, "inputs":{"input_2":{"connections":[{"node":"2","input":"output_2"}]}},"outputs":{"output_1":{"connections":[{"node":"2","output":"input_1"},{"node":"4","output":"input_1"}]}},"pos_x":280,"pos_y":100, }, "3":{"id":3,"name":"welcome","data":{},"class":"help","html":"\n    <div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"> How is image created?  <a href=\"#\"  data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#exampleModalRight\">   <span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"#\">   <span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a></li></ul></div>","typenode": false, "inputs":{"input_1":{"connections":[{"node":"4","input":"output_1"}]}},"outputs":{"output_1":{"connections":[{"node":"4","output":"input_1"},{"node":"11","output":"input_1"}]}},"pos_x":550,"pos_y":100, },  "4":{"id":4,"name":"welcome","data":{},"class":"help","html":"\n    <div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"> How is image created?  <a href=\"#\"  data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#exampleModalRight\">   <span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"#\">   <span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a></li></ul></div>","typenode": false, "inputs":{"input_1":{"connections":[{"node":"4","input":"output_1"}]}},"outputs":{"output_1":{"connections":[{"node":"2","output":"input_1"},{"node":"1","output":"input_1"}]}},"pos_x":820,"pos_y":100, }}}}}
editor.drawflow ={"drawflow": {"Home": {"data": {"1": {"id": 1,"name": "welcome","data": {},"class": "help","html": "\n","typenode": false,"inputs": {},"outputs": {},"pos_x": 50,"pos_y": 50},"2": {"id": 2,"name": "dbclick","data": {"name": ""},"class": "dbclick","html": '<div class=\"flow-chart-design start-here\"><div class=\"start-round\" >Start</div></div><span class="blue-plus" onmousedown="return false" style="display: block;height: 25px;width: 25px; text-align: center;padding-top: 2px;top: 62px; left: 113px; padding-left:0;" lastn1="160" lastn2="227"><i class="simple-icon-plus"></i></span>',"typenode": false,"inputs": {"input_1": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 128,"pos_y": 243},"3": {"id": 3,"name": "dbclick","data": {"name": ""},"class": "dbclick","html": '<div class="work-flow addclasspop"><ul class="list-unstyled list-inline"><li class="square-box" style="border-color:#1266ab; color:#1266ab;"><span class="alertbox set-danger"><img src="img/alert.svg"> </span><div class="number-icons three-icon"><img src="img/three.png"></div><span class="divtext first-unit" style="color:blue;">Intro to <br>Spirits</span><span class="divimg" val="uk" color-val=""><img src="img/021-clapperboard BL.png" alt="" value="uk" style="margin: 3px; max-width: 20px;"></span><div class="pop"><div class="left-side"><h4 class="text" style="color:blue;">Intro to Spirits <img src="img/021-clapperboard BL.png" alt="" value="uk" style="margin: 3px; max-width: 20px;"></h4><ul class="list-inline list-unstyled"><li><div class="danger-icon popup-danger"><img src="img/alert.svg"></div><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon7.png"></a></li><li><div class="danger-icon"><img src="img/alert.svg"></div><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon2.png"></a></li><li><div class="danger-icon"><img src="img/alert.svg"></div><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon3.png"></a></li><li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor	 incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></li></ul></div><div class="right-side"><ul class="list-unstyled"><li><img src="img/popup1.svg"></li><li><img src="img/popup2.svg"></li><li><img src="img/popup3.svg"></li><li><img src="img/popup4.svg"></li></ul></div></div><div class="popup" tabindex="-1"><div class="inner-content"><div class="left-popup"><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class="right-popup"><ul class="list-unstyled list-inline"><li><a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><img src="img/black-icon3.svg"></a></li><li><img src="img/black-icon1.svg"></li><li><img src="img/black-icon2.svg"></li></ul></div><div class="clearfix"></div><p><img src="img/alert.svg"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></div></li></ul><span class="close">×</span></div><a href="javascript:void(0)" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0)" class="blue" onmousedown="return false" lastn1="747" lastn2="265" lastid="node-11"><span class="blue-plus" onmousedown="return false" style="background-color:" data-color=""><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 303,"pos_y": 303},"4": {"id": 4,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: blue; color: blue; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">Mixing<div>Juices</div></div><span class="divimg" val="cla" color-val="blue"><img src="img/021-clapperboard BL.png" alt="" value="cla" style="margin: 3px; max-height: 20px;"></span><div class="pop"><div class="left-side"><h4 class="text" style="color:blue;">Intro to Spirits <img src="img/021-clapperboard BL.png" alt="" value="uk" style="margin: 3px; max-width: 20px;"></h4><ul class="list-inline list-unstyled"><li><div class="danger-icon popup-danger"><img src="img/alert.svg"></div><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon7.png"></a></li><li><div class="danger-icon"><img src="img/alert.svg"></div><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon2.png"></a></li><li><div class="danger-icon"><img src="img/alert.svg"></div><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon3.png"></a></li><li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor   incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></li></ul></div><div class="right-side"><ul class="list-unstyled"><li><img src="img/popup1.svg"></li><li><img src="img/popup2.svg"></li><li><img src="img/popup3.svg"></li><li><img src="img/popup4.svg"></li></ul></div></div></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="159" lastn2="626" lastid="node-5"><span class="blue-plus" onmousedown="return false" data-color="blue" style="color:blue"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 841,"pos_y": 303},"5": {"id": 5,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow addclasspop"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: blue; color: blue; padding-top: 7px; padding-bottom: 7px;"><div class="number-icons"><img src="img/six.png"></div><div class="divtext">Exercise<div>Tequila Sunrise</div></div><span class="divimg" val="si" color-val="blue"><img src="img/060-signing - BLU.png" alt="" value="si" style="margin: 3px; max-height: 20px;"></span><div class="pop"><div class="left-side"><h4 class="text" style="color:blue;">Exercise Tequila Sunrise <img src="img/060-signing - BLU.png" alt="" value="uk" style="margin: 3px; max-width: 20px;"></h4><ul class="list-inline list-unstyled"><li><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon4.png"></a></li><li><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon5.png"></a></li><li><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon1.png"></a></li><li><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon6.png"></a></li><li><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon9.png"></a></li><li><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon8.png"></a></li></ul></div><div class="right-side"><ul class="list-unstyled"><li><img src="img/popup1.svg"></li><li><img src="img/popup2.svg"></li><li><img src="img/popup3.svg"></li><li><img src="img/popup4.svg"></li></ul></div></div></li></ul><span class="close">×</span></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue"><span class="blue-plus" onmousedown="return false" data-color="blue" style="color:blue"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 1299.11,"pos_y": 299},"6": {"id": 6,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: orange; color: orange; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">How are&nbsp;<div>spirits made</div></div><span class="divimg" val="si" color-val="orange"><img src="img/060-signing - OR.png" alt="" value="si" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="139" lastn2="652" lastid="node-7"><span class="blue-plus" onmousedown="return false" data-color="orange" style="color:orange"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 527,"pos_y": 177},"7": {"id": 7,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: orange; color: orange; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">What is<div>Tequila</div></div><span class="divimg" val="en" color-val="orange"><img src="img/034-reward - OR.png" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="139" lastn2="852" lastid="node-8"><span class="blue-plus" onmousedown="return false" data-color="orange" style="color:orange"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 757,"pos_y": 97},"8": {"id": 8,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: orange; color: orange; padding-top: 7px; padding-bottom: 7px;"><div class="number-icons"><img src="img/nine.png"></div><div class="divtext">What is<div>Tequila</div></div><span class="divimg" val="en" color-val="orange"><img src="img/034-reward - OR.png" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="139" lastn2="852" lastid="node-8"><span class="blue-plus" onmousedown="return false" data-color="orange" style="color:orange"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 1082.56,"pos_y": 90.1111},"10": {"id": 10,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: green; color: green; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">Video intro<div>to spirits</div></div><span class="divimg" val="cla" color-val="green"><img src="img/021-clapperboard -GREE.png" alt="" value="cla" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue"><span class="blue-plus" onmousedown="return false" data-color="green" style="color:green"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 520,"pos_y": 22.89},"11": {"id": 11,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: green; color: green; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">Video intro<div>Mixing</div></div><span class="divimg" val="cla" color-val="green"><img src="img/021-clapperboard -GREE.png" alt="" value="cla" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue"><span class="blue-plus" onmousedown="return false" data-color="green" style="color:green"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 1084.78,"pos_y": -21.2222},"12": {"id": 12,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow addclasspop"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: black; color: black; padding-top: 7px; padding-bottom: 7px;"><span class="alertbox set-danger-new"><img src="img/alert.svg"> </span><div class="number-icons one-icon"><img src="img/one.png"></div><div class="divtext">What is<div>Alcohol</div></div><span class="divimg" val="ch" color-val="black"><img src="img/chains.png" alt="" value="ch" style="margin: 3px; max-height: 30px;"></span><div class="pop"><div class="left-side"><h4 class="text" style="color:black;">What Is Alcohol <img src="img/chains.png" alt="" value="uk" style="margin: 3px; max-width: 20px;"></h4><ul class="list-inline list-unstyled"><li><div class="danger-icon popup-danger"><img src="img/alert.svg"></div><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon10.png"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><h3>Joe Smith</h3></li><li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</li></ul></div><div class="right-side"><ul class="list-unstyled"><li><img src="img/popup1.svg"></li><li><img src="img/popup2.svg"></li><li><img src="img/popup3.svg"></li><li><img src="img/popup4.svg"></li></ul></div></div></li></ul><span class="close">×</span></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="-133" lastn2="435" lastid="node-13"><span class="blue-plus" onmousedown="return false" data-color="black" style="color:black"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 235.778,"pos_y": -133.889}}}}}
editor.start();
// var dbclick = '<div class=\"flow-chart-design start-here\"><div class=\"start-round\" >Start</div></div><span class="blue-plus" onmousedown="return false" style="display: block;height: 25px;width: 25px; text-align: center;padding-top: 2px;top: 62px; left: 113px; padding-left:0;"><i class="simple-icon-plus"></i></span>';
//editor.addNode('dbclick', 1, 1, 50, 100, 'dbclick', { name: ''}, dbclick );//top: -21.2222px; left: 1084.78px;
    var elements = document.getElementsByClassName('drag-drawflow');
    for (var i = 0; i < elements.length; i++) {
      elements[i].addEventListener('touchend', drop, false);
      elements[i].addEventListener('touchmove', positionMobile, false);
      elements[i].addEventListener('touchstart', drag, false );
    }

    var mobile_item_selec = '';
    var mobile_last_move = null;
   function positionMobile(ev) {
     mobile_last_move = event;
   }

   function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      if (ev.type === "touchstart") {
        mobile_item_selec = ev.target.closest(".drag-drawflow").getAttribute('data-node');
      } else {
      ev.dataTransfer.setData("node", ev.target.getAttribute('data-node'));
      }
    }

    function drop(ev) {
      if (ev.type === "touchend") {
        var parentdrawflow = document.elementFromPoint( mobile_last_move.touches[0].clientX, mobile_last_move.touches[0].clientY).closest("#drawflow");
        if(parentdrawflow != null) {
          addNodeToDrawFlow(mobile_item_selec, mobile_last_move.touches[0].clientX, mobile_last_move.touches[0].clientY);
        }
        mobile_item_selec = '';
      } else {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("node");
        addNodeToDrawFlow(data, ev.clientX, ev.clientY);
      }

    }


  var transform = '';
  function showpopup(e) {
    e.target.closest(".drawflow-node").style.zIndex = "9999";
    e.target.children[0].style.display = "block";
    //document.getElementById("modalfix").style.display = "block";

    //e.target.children[0].style.transform = 'translate('+translate.x+'px, '+translate.y+'px)';
    transform = editor.precanvas.style.transform;
    editor.precanvas.style.transform = '';
    editor.precanvas.style.left = editor.canvas_x +'px';
    editor.precanvas.style.top = editor.canvas_y +'px';
    console.log(transform);

    //e.target.children[0].style.top  =  -editor.canvas_y - editor.container.offsetTop +'px';
    //e.target.children[0].style.left  =  -editor.canvas_x  - editor.container.offsetLeft +'px';
    editor.editor_mode = "fixed";

  }

   function closemodal(e) {
     e.target.closest(".drawflow-node").style.zIndex = "2";
     e.target.parentElement.parentElement.style.display  ="none";
     //document.getElementById("modalfix").style.display = "none";
     editor.precanvas.style.transform = transform;
       editor.precanvas.style.left = '0px';
       editor.precanvas.style.top = '0px';
      editor.editor_mode = "edit";
   }

    function changeModule(event) {
      var all = document.querySelectorAll(".menu ul li");
        for (var i = 0; i < all.length; i++) {
          all[i].classList.remove('selected');
        }
      event.target.classList.add('selected');
    }

    function changeMode(option) {

    //console.log(lock.id);
      if(option == 'lock') {
        lock.style.display = 'none';
        unlock.style.display = 'block';
      } else {
        lock.style.display = 'block';
        unlock.style.display = 'none';
      }

    }
  </script>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/bootstrap-notify.min.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
     <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/quill.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
<div class="modal fade modal-right sidebarpopup" id="exampleModalRight" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalRight" aria-hidden="false"  data-backdrop="static" data-keyboard="false">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"></h5>
                                           <div class="main-icons">
												<ul class="list-unstyled list-inline">
													<li> <div class="glyph">
															<img src="img/clapperboard.png" style="padding-right: 0px;width:40px;height:40px">
															<div class="class-name" contentEditable="true" style="font-weight:600">Video</div>

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
                                                        </div>
													</li>
													<li class="for-edit-option">
														<div class="class-name static-title" contentEditable="true" style="font-weight:600">Choose Unit</div>
													   <select class="vodiapicker">
															<option value="en" class="test" data-green="img/034-reward - GREE.png" data-blue="img/034-reward - BL.png" data-red="img/034-reward - RED.png" data-orange="img/034-reward - OR.png" data-black="img/reward.png" data-thumbnail="img/reward.png"></option>
															<option value="uk" data-green="img/040-open-book - GREE.png" data-red="img/040-open-book - RED.png" data-blue="img/040-open-book - BL.png" data-orange="img/040-open-book - OR.png" data-black="img/open-book.png" data-thumbnail="img/open-book.png" class="rounded-circle"></option>
                                                            <option value="si" data-green="img/060-signing - GREE.png" data-red="img/060-signing - RED.png" data-blue="img/060-signing - BLU.png" data-orange="img/060-signing - OR.png" data-black="img/signing.png" data-thumbnail="img/signing.png" class="rounded-circle"></option>
															<option value="cn" data-green="img/013-microphone - GREE.png"                           data-red="img/013-microphone - RED.png" data-blue="img/013-microphone - BL.png" data-orange="img/013-microphone - OR.png" data-black="img/microphone.png" data-thumbnail="img/microphone.png" class="rounded-circle"></option>
															<option value="ide" data-green="img/018-idea - GREE.png" data-red="img/018-idea - RED.png" data-blue="img/018-idea - BL.png" data-orange="img/018-idea - or.png" data-black="img/idea.png" data-thumbnail="img/idea.png" class="rounded-circle"></option>
                                                            <option value="re" data-green="img/034-reward - GREE.png" data-red="img/034-reward - RED.png" data-blue="img/034-reward - BL.png" data-orange="img/034-reward - OR.png" data-black="img/reward.png" data-thumbnail="img/reward.png" class="rounded-circle"></option>
                                                            <option value="com" data-green="img/092-cloud-computing - GREE.png" data-red="img/092-cloud-computing - RED.png" data-blue="img/092-cloud-computing - BL.png" data-orange="img/092-cloud-computing - OR.png" data-black="img/cloud-computing.png" data-thumbnail="img/cloud-computing.png" class="rounded-circle"></option>
                                                            <option value="cla" data-green="img/021-clapperboard -GREE.png" data-red="img/021-clapperboard - RED.png" data-blue="img/021-clapperboard BL.png" data-orange="img/021-clapperboard - OR.png" data-black="img/clapperboard.png" data-thumbnail="img/clapperboard.png" class="rounded-circle"></option>
                                                            <option value="cha" data-green="img/062-chatting-1 - GRE.png" data-red="img/062-chatting-1 - RED.png" data-blue="img/062-chatting-1 - BL.png" data-orange="img/062-chatting-1 - OR.png" data-black="img/chatting.png" data-thumbnail="img/chatting.png" class="rounded-circle"></option>
                                                            <option value="ch" data-green="img/080-chains - GREE.png" data-red="img/080-chains - RED.png" data-blue="img/080-chains - BLU.png" data-orange="img/080-chains - ORANG.png" data-black="img/chains.png" data-thumbnail="img/chains.png" class="rounded-circle"></option>
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
                                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first"
                                                role="tab" aria-controls="first" aria-selected="true">Parameters</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#second"
                                                role="tab" aria-controls="second" aria-selected="false">Advanced</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#third"
                                                role="tab" aria-controls="third" aria-selected="false">Code</a>
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
                                           <li> <div class="custom-switch custom-switch-secondary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS4" type="checkbox"
                                                    checked>
                                                <label class="custom-switch-btn" for="switchS4"></label>
                                            </div>
											</li>
                                            <li class="radio-btns">
                                                  <label>Consideration of Previous Record</label>
                                                  <div class="">
													<div class="custom-control custom-radio">
														<input type="radio" id="customRadio18" name="customRadio" class="custom-control-input">
														<label class="custom-control-label" for="customRadio18">On</label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" id="customRadio27" name="customRadio" class="custom-control-input">
														<label class="custom-control-label" for="customRadio27">Off</label>
													</div>
												</div>
                                            </li>
                                            <!-- <li class="radio-btns">
                                                  <label>Segmentation by gender</label>
                                                  <div class="mb-4">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio16" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio16">On</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio25" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio25">Off</label>
                                </div>
                            </div>
                                              </li> -->
                                              <li class="minratings"><label>Min quastion Rating</label></li>
                                              <li>
                                                    <div class="chapter-slider1">
                                                             <div class="slider">
                                                                <span><output id="rangevalue">5</output></span>
                                                      <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
                                                        
                                                      </div>
                                                    </div>
                                              </li>
                                             <!--   <li class="minratings"><label>Minimum viewing time</label></li>
                                            
                                            <li>
                                                    <div class="chapter-slider1">
                                                             <div class="slider">
                                                                <span><output id="rangevalue">5</output></span>
                                                      <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
                                                        
                                                      </div>
                                                    </div>
                                              </li>
                                              <li class="minratings"><label>Minimum viewing frequency</label></li>
                                               <li>
                                                    <div class="chapter-slider1">
                                                             <div class="slider">
                                                                <span><output id="rangevalue">5</output></span>
                                                      <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
                                                        
                                                      </div>
                                                    </div>
                                              </li>
                                              <li class="minratings"><label>Minimum repetition of viewing</label></li>
                                               <li>
                                                    <div class="chapter-slider1">
                                                             <div class="slider">
                                                                <span><output id="rangevalue">5</output></span>
                                                      <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
                                                        
                                                      </div>
                                                    </div>
                                              </li>

                                               <li class="minratings"><label>Minimum Viewing Speed</label></li>
                                               <li class="mb-4">
                                                    <div class="chapter-slider1">
                                                             <div class="slider">
                                                                <span><output id="rangevalue">5</output></span>
                                                      <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
                                                        
                                                      </div>
                                                    </div>
                                              </li> -->

                                               <!-- <li class="minratings"></li> -->
                                            <!--    <li class="view-speed">
                                                <label>Obligation to Complete Viewing</label>
                                                    <div class="mb-4">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio14" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio14">On</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio23" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio23">Off</label>
                                </div>
                            </div>
                                              </li> -->

                                              <!-- <li class="view-speed">
                                                <label>Device Type</label>
                                                    <div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio12" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio12">Mobile</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio22" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio22">Radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio21" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio21">Tablet</label>
                                </div>
                            </div>
                                              </li> -->
                                         
                                            
                                        </ul>
                                        </div>
                                        <textarea id="divtext">How is image created?</textarea>
                                            
                                    </div>
                                    
              </div>
                                         
                                        </div>
                                        <div class="tab-pane fade" id="second" role="tabpanel"
                                            aria-labelledby="second-tab">
                                            <h6 class="mb-4">Advanced Coding Concepts. App & Web Coding. This course prepares students to have a logical mindset for future programming.</h6>
                                          

                                        </div>
                                        <div class="tab-pane fade" id="third" role="tabpanel"
                                            aria-labelledby="third-tab">
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
                                             <button type="button" class="btn btn-outline-primary"
                                                data-dismiss="modal">Discard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
// <script type="text/javascript">
    // $('body').on('click', function(e) {
  // $('body').addClass('changeCursor');
  
// });
        // jQuery('.main-menu ul.list-unstyled').on('click','a',function(){
// if($( "body" ).hasClass( "sub-show-temporary" )){
// jQuery('#app-container').removeClass('sub-show-temporary');
// }else{
// jQuery('#app-container').addClass('sub-show-temporary');
// }
// })
</script>
<script type="text/javascript">
    $(function() {
    rightpop++;
    });
    $('body').on('click','.drawflow .connection .main-path',function(){
		var conclass=$(this).closest('.connection').attr('class').split('node_in_');
		newids=(conclass[1].split(' ')[0]);
		$('#exampleModalRight .for-edit-option').attr('edit-id',newids);
		$('#exampleModalRight .for-edit-option .static-title').html($('.drawflow').find('#'+newids+' .square-box .divtext').html());
		$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select').attr('value',$('.drawflow').find('#'+newids+' .square-box .divimg').attr('val'));
		$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select img').attr('src',$('.drawflow').find('#'+newids+' .square-box .divimg img').attr('src'));
		$('#exampleModalRight .main-icons .colorpicker').val($('.drawflow').find('#'+newids+' .square-box .divimg').attr('color-val'));
		$('.sidebarpopup .nav-tabs').attr('style','background-color:'+$('.drawflow').find('#'+newids+' .square-box .divimg').attr('color-val'));
        $('#exampleModalRight').modal('show');
    })
	$('body').on('click','.modal-footer .editupdate',function(){
		editids=$(this).closest('.sidebarpopup').find('.static-title').attr('edit-id');
		valtest=$(this).closest('.modal-dialog').find('.static-title').html();
		if(valtest.includes('<div>') || ((valtest.match(/<br>/g) || []).length>1)){
			$('.drawflow').find('#'+newids+' .square-box').css('padding-top','7px');
			$('.drawflow').find('#'+newids+' .square-box').css('padding-bottom','7px');
		}else{
			$('.drawflow').find('#'+newids+' .square-box').css('padding-top','15px');
			$('.drawflow').find('#'+newids+' .square-box').css('padding-bottom','15px');
		}
		$('.drawflow').find('#'+newids+' .divtext').html($(this).closest('.modal-dialog').find('.static-title').html());//option:selected
		colorcode=$(this).closest('.modal-dialog').find('.colorpicker').val();
		if(colorcode){}else{
			colorcode='thumbnail';
		}
		valn=$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select').attr('value');
		$('.drawflow').find('#'+newids+' .divimg').html('<img src="'+$(this).closest('.modal-dialog').find('.vodiapicker [value='+valn+']').attr('data-'+colorcode)+'" alt="" value="'+valn+'" style="margin: 3px; max-height: 30px;">');
		$('.drawflow').find('#'+newids+' .divimg').attr('val',valn);
		$('.drawflow').find('#'+newids+' .divimg').attr('color-val',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('.node_in_'+newids+' .main-path.selected').attr('style','stroke:'+$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' li.square-box').css('border-color',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' li.square-box').css('color',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' .outputs .output_1').attr('style','background-color:'+$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('style','color:'+$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('data-color',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('#exampleModalRight button.close').trigger('click');
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('data-color',$(this).closest('.modal-dialog').find('.colorpicker').val());
	});
	$('.color-line ul li a').click(function(){
		$('.colorpicker').val($(this).attr('data-color'));
		$('.sidebarpopup .nav-tabs').attr('style','background-color:'+$(this).attr('data-color'));
	});
    $('body').on('click','#node-2 .blue-plus1',function(e){
		$nodethis='node-2';
        topbot=$('.drawflow').find('#node-2').attr('style');
        topbot1=$(this).closest('.drawflow-node').attr('style');
		topbot1=topbot1.replace("px","");
		topbot1=topbot1.replace("px","");
		newtopbot2=topbot1.split(";");
		net1=newtopbot2[0].replace("top:","");
		n1=parseInt(net1.replace(" ",""));
		net2=newtopbot2[1].replace("left:","");
		n2=parseInt(net2.replace(" ",""));
		n1=n1+58;
        n2=n2+170;
        $flag=0;
		if($(this).attr('lastn1') && $(this).attr('lastn2')){
			n1=parseInt($(this).attr('lastn1'));
			n2=parseInt($(this).attr('lastn2'));
			n1=n1+90;
			//n2=n2+170;
			// M 164 197 C 192.25 197 192.25 278 220.5  278
			$flag=1;
		}
        var divtext=$('#divtext').val();
		var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><div class=\"divtext\">No Text</div><span class=\"divimg\" val=\"en\"><img src=\"img/reward.png\" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href=\"javascript:void(0)\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0)\" class="blue" onmousedown="return false"><span class=\"blue-plus\" onmousedown="return false"><i class=\"simple-icon-plus\"></i></span></a>';
       $(this).attr('lastn1',n1);
       $(this).attr('lastn2',n2);
		topbot1=$(this).closest('.drawflow-node').attr('style');
		topbot1=topbot1.replace("px","");
		topbot1=topbot1.replace("px","");
		newtopbot2=topbot1.split(";");
		net1=newtopbot2[0].replace("top:","");
		newnet1=parseInt(net1.replace(" ",""));
		net2=newtopbot2[1].replace("left:","");
		newnet2=parseInt(net2.replace(" ",""));
		n2=parseInt(newnet2)+175;
	   editor.addNode('dbclick', 3, 1, n2, n1, 'dbclick', { name: ''}, dbclick );
		$('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('blue-div');
		n3=(27+n1);
		n4=n3-1;
		$nodelast=$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('id');
		//if($flag==1){
				topbot1=$(this).closest('.drawflow-node').attr('style');
				topbot1=topbot1.replace("px","");
				topbot1=topbot1.replace("px","");
				newtopbot2=topbot1.split(";");
				net1=newtopbot2[0].replace("top:","");
				net1=parseInt(net1.replace(" ",""));
				net2=newtopbot2[1].replace("left:","");
				net2=parseInt(net2.replace(" ",""));
				n3=(n1+39);
				n4=n3-1;
				$nodelast=$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('id');
				$(this).attr('lastid',$nodelast);
				$('.drawflow').find('.parent-node').last().append('<svg class=\"connection node_in_'+$nodelast+' node_out_'+$nodethis+' output_1 input_2 connection-blue-row\" data-in=\"'+$nodelast+'\"><path class=\"main-path\" d=\" M '+(n2 - 56)+' '+(net1+97)+' C '+(n2 - 27.25)+' '+(net1+97)+' '+(n2 - 27.25)+' '+n4+' '+(n2)+'  '+n4+'\"></path></svg>');
		$('.drawflow').find('.connection .main-path.selected').removeClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').addClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').click();
		e.preventDefault();
		e.stopPropagation();
		e.returnValue = false;
    })
	$(document).ready(function(){
		$('body').on('dragstart','img',function(event) { event.preventDefault(); });
		/*$('body').on('click','.drawflow-node a',function(e){
		lastidflag=0;
		$nodethis=$(this).closest('.drawflow-node').attr('id');
			if($(this).hasClass('orange')){
				var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><div class=\"divtext\">No Text</div><span class=\"divimg\" val=\"en\"><img src=\"img/reward.png\" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class="blue" onmousedown="return false"><span class=\ onmousedown="return false"><i class=\"simple-icon-plus\"></i></span></a>';
				topbot=$(this).closest('.drawflow-node').attr('style');
				newtopbot=topbot.split(";");
				n1=parseInt(newtopbot[0].match(/\d+/)[0],10);
				n2=parseInt(newtopbot[1].match(/\d+/)[0],10);
				n1=n1+110;
				editor.addNode('dbclick', 3, 1, n2, n1, 'dbclick', { name: ''}, dbclick );
				$('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('orange-div');
				$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('data-con','connection-orange-row');
			}else{
				var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><div class=\"divtext\">No Text</div><span class=\"divimg\" val=\"en\"><img src=\"img/reward.png\" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class="blue"><span class=\"blue-plus\" onmousedown="return false"><i class=\"simple-icon-plus\"></i></span></a>';
				if($(this).attr('lastid') && $(this).attr('lastn1') && $(this).attr('lastn2')){
					lastidflag=1;
					n1=parseInt($(this).attr('lastn1'));
					n2=parseInt($(this).attr('lastn2'));
					n1=n1+90;						
					topbot1=$(this).closest('.drawflow-node').attr('style');
					topbot1=topbot1.replace("px","");
					topbot1=topbot1.replace("px","");
					newtopbot2=topbot1.split(";");
					net1=newtopbot2[0].replace("top:","");
					newnet1=parseInt(net1.replace(" ",""));
					net2=newtopbot2[1].replace("left:","");
					newnet2=parseInt(net2.replace(" ",""));
					n2=parseInt(newnet2)+175;
				}else{
					topbot1=$(this).closest('.drawflow-node').attr('style');
					topbot1=topbot1.replace("px","");
					topbot1=topbot1.replace("px","");
					newtopbot2=topbot1.split(";");
					net1=newtopbot2[0].replace("top:","");
					n1=parseInt(net1.replace(" ",""));
					net2=newtopbot2[1].replace("left:","");
					n2=parseInt(net2.replace(" ",""));	
					n2=n2+200;
				}
				$(this).attr('lastn1',n1);
				$(this).attr('lastn2',n2);
				editor.addNode('dbclick', 3, 1, n2, n1, 'dbclick', { name: ''}, dbclick );
				$('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('blue-div');
				$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('data-con','connection-blue-row');
			}
			if(lastidflag){
				topbot1=$(this).closest('.drawflow-node').attr('style');
				topbot1=topbot1.replace("px","");
				topbot1=topbot1.replace("px","");
				newtopbot2=topbot1.split(";");
				net1=newtopbot2[0].replace("top:","");
				net1=parseInt(net1.replace(" ",""));
				net2=newtopbot2[1].replace("left:","");
				net2=parseInt(net2.replace(" ",""));	
				n3=(n1+40);
				n4=n3 ;
				$nodelast=$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('id');
				$(this).attr('lastid',$nodelast);
				$('.drawflow').find('.parent-node').last().append('<svg class=\"connection node_in_'+$nodelast+' node_out_'+$nodethis+' output_1 input_2 connection-blue-row\" data-in=\"'+$nodelast+'\"><path class=\"main-path\" d=\" M '+(n2 - 22)+' '+(net1 +41)+' C '+(n2 - 11)+' '+(net1 +40.25)+' '+(n2 - 30)+' '+(parseInt(n4)-3)+' '+(parseInt(n2)+1.5 )+'  '+n4+'\"></path></svg>');
			}else{
				n3=(n1+41);
				n4=n3;
				$nodelast=$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('id');
				$(this).attr('lastid',$nodelast);
				$('.drawflow').find('.parent-node').last().append('<svg class=\"connection node_in_'+$nodelast+' node_out_'+$nodethis+' output_1 input_2 connection-blue-row\" data-in=\"'+$nodelast+'\"><path class=\"main-path\" d=\" M '+(n2 - 47)+' '+n3+' C '+(n2 - 21.75)+' '+n3+' '+(n2 - 21.75)+' '+(n4)+' '+(parseInt(n2)+0.5)+'  '+n4+'\"></path></svg>');
				// M 378 199 C 402.5 199 402.5 196 425  199
				// M 378 199 C 401.75 199 401.75 199 425.5  199
			}
		newids=$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('id');
		thiscolor=$('.drawflow').find('#'+$nodethis+' a .blue-plus').attr('data-color');
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('data-color',thiscolor);
		$('.drawflow').find('#'+newids+' .divimg').attr('color-val',thiscolor);
		$('.drawflow').find('.connection.node_in_'+newids+'.node_out_'+$nodethis+' .main-path').attr('style','stroke:'+thiscolor+'; ');
		$('.drawflow').find('#'+newids+' li.square-box').attr('style','border-color:'+thiscolor+'; color:'+thiscolor);
		$('.drawflow').find('#'+newids+' .outputs .output_1').attr('style','background-color:'+thiscolor);
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('style','color:'+thiscolor);
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('data-color',thiscolor);
		$('.drawflow').find('.connection .main-path.selected').removeClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').addClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').click();
			e.preventDefault();
			e.stopPropagation();
			e.returnValue = false;
		});*/
		//
		$('#drawflow').find('#node-3').closest('.parent-node').append('<svg class="connection node_in_node-3 node_out_node-2 output_1 input_2 connection-blue-row" data-in="node-3"><path class="main-path" d=" M 242 340 C 272.75 340 272.75 342 303.5  342" style="stroke:blue"></path></svg>');
		$('#drawflow').find('#node-4').closest('.parent-node').append('<svg class="connection node_in_node-4 node_out_node-3 output_1 input_2 connection-blue-row" data-in="node-4"><path class="main-path" d=" M 456.5 342 C 649 342 649 344 841.5  344" style="stroke:blue"></path></svg>');
		$('#drawflow').find('#node-5').closest('.parent-node').append('<svg class="connection node_in_node-5 node_out_node-4 output_1 input_2 connection-blue-row" data-in="node-5"><path class="main-path" d=" M 994.5001051161024 344.00000678168396 C 1147.0555792914497 344.00000678168396 1147.0555792914497 340.00000678168396 1299.6110534667969  340.00000678168396" style="stroke:blue"></path></svg>');
		$('#drawflow').find('#node-6').closest('.parent-node').append('<svg class="connection node_in_node-4 node_out_node-6 output_1 input_2 strokeblue"><path class="main-path" d=" M 680.5 218 C 761 218 761 344 841.5  344" style="stroke:orange"></path></svg><svg class="connection node_in_node-6 node_out_node-3 output_1 input_2 strokeblue"><path class="main-path" d=" M 456.5 342 C 492 342 492 218 527.5  218" style="stroke:orange"></path></svg><svg class="connection node_in_node-7 node_out_node-6 output_1 input_2 connection-blue-row" data-in="node-7"><path class="main-path" d=" M 680.5 218 C 719 218 719 138 757.5  138" style="stroke:orange"></path></svg>');
		$('#drawflow').find('#node-7').closest('.parent-node').append('<svg class="connection node_in_node-4 node_out_node-7 output_1 input_1 strokeorange"><path class="main-path" d=" M 910.5 138 C 913.75 138 913.75 301 917  301" style="stroke:orange"></path></svg>');
		$('#drawflow').find('#node-8').closest('.parent-node').append('<svg class="connection node_in_node-5 node_out_node-8 output_1 input_2 strokeorange"><path class="main-path" d=" M 1236.0555521647136 131.1111111111111 C 1267.8333028157554 131.1111111111111 1267.8333028157554 340.00000678168396 1299.6110534667969  340.00000678168396" style="stroke:orange"></path></svg><svg class="connection node_in_node-8 node_out_node-4 output_1 input_2 strokeblue"><path class="main-path" d=" M 994.5001051161024 344.00000678168396 C 1038.777855767144 344.00000678168396 1038.777855767144 131.1111178927951 1083.0556064181858  131.1111178927951" style="stroke:orange"></path></svg>');
		$('#drawflow').find('#node-10').closest('.parent-node').append('<svg class="connection node_in_node-10 node_out_node-3 output_1 input_2 connection-blue-row" data-in="node-10"><path class="main-path" d="M 455.5 344 C 488 344 488 63.888885498046875 520.5  63.888885498046875" style="stroke:green"></path></svg><svg class="connection node_in_node-7 node_out_node-10 output_1 input_2 strokegreen"><path class="main-path" d=" M 673.5000101725261 63.88888888888888 C 715.499996609158 63.88888888888888 715.499996609158 138.00002034505206 757.4999830457899  138.00002034505206"></path></svg>');
		$('#drawflow').find('#node-11').closest('.parent-node').append('<svg class="connection node_in_node-11 node_out_node-4 output_1 input_2 connection-blue-row" data-in="node-11"><path class="main-path" d=" M 994.5001051161024 344.00000678168396 C 1039.8889668782551 344.00000678168396 1039.8889668782551 19.777770996093754 1085.277828640408  19.777770996093754" style="stroke:green"></path></svg><svg class="connection node_in_node-5 node_out_node-11 output_1 input_2 strokegreen"><path class="main-path" d=" M 1238.2777743869358 19.777798122829857 C 1268.9444139268662 19.777798122829857 1268.9444139268662 340.00000678168396 1299.6110534667969  340.00000678168396"></path></svg>');
		$('#drawflow').find('#node-12').closest('.parent-node').append('<svg class="connection node_in_node-12 node_out_node-3 output_1 input_2 connection-blue-row" data-in="node-12"><path class="main-path" d=" M 444.3888854980469 343.3334011501736 C 548.4444342719185 343.3334011501736 132.2222391764323 -92.88888888888886 236.27778795030383  -92.88888888888886" style="stroke:black"></path></svg><svg class="connection node_in_node-10 node_out_node-12 output_1 input_2 strokeblack"><path class="main-path" d=" M 389.2778015136719 -92.88886176215276 C 454.8888990614149 -92.88886176215276 454.8888990614149 63.88892957899306 520.499996609158  63.88892957899306"></path></svg>');
		
		$('#drawflow').find('#node-3 .output.output_1').attr('style','background-color:blue;');
		$('#drawflow').find('#node-4 .output.output_1').attr('style','background-color:blue;');
		$('#drawflow').find('#node-5 .output.output_1').attr('style','background-color:blue;');
		$('#drawflow').find('#node-6 .output.output_1').attr('style','background-color:orange;');
		$('#drawflow').find('#node-7 .output.output_1').attr('style','background-color:orange;');
		$('#drawflow').find('#node-8 .output.output_1').attr('style','background-color:orange;');
		$('#drawflow').find('#node-10 .output.output_1').attr('style','background-color:green;');
		$('#drawflow').find('#node-11 .output.output_1').attr('style','background-color:green;');
		$('#drawflow').find('#node-12 .output.output_1').attr('style','background-color:black;');
		
		$('.drawflow').bind('mousewheel', function(e){
			if(e.originalEvent.wheelDelta /120 > 0) {
				editor.zoom_out();
			}else{
				editor.zoom_in();
			}
		});
		 $('#node-4 .addclasspop').click(function(){
            $(this).find('.close').show();
            $(this).closest('.drawflow-node').addClass('bigboxdesign');
            $(this).closest('.drawflow-node').attr('old-style',$(this).closest('.drawflow-node').attr('style'));
            $(this).closest('.drawflow-node').css('top','230px');
            $(this).closest('.drawflow-node').css('left','1299px');
            $(this).closest('.drawflow-node').find('.square-box').attr('old-style',$(this).closest('.drawflow-node').find('.square-box').attr('style'));
            $(this).closest('.drawflow-node').find('.square-box').css('height','230px');
            $(this).closest('.drawflow-node').find('.square-box').css('width','346px');
            //$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('old-p',$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p'));
            //$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p','M 582.2777811686198 -90.38884480794269 C 607.6666768391926 -90.38884480794269 506.11109415690095 63.3333740234375 531.4999898274739  63.3333740234375');
        });
		$('#node-5 .addclasspop').click(function(){
			$(this).find('.close').show();
			$(this).closest('.drawflow-node').addClass('bigboxdesign');
			$(this).closest('.drawflow-node').attr('old-style',$(this).closest('.drawflow-node').attr('style'));
			$(this).closest('.drawflow-node').css('top','230px');
			$(this).closest('.drawflow-node').css('left','1299px');
			$(this).closest('.drawflow-node').find('.square-box').attr('old-style',$(this).closest('.drawflow-node').find('.square-box').attr('style'));
			$(this).closest('.drawflow-node').find('.square-box').css('height','230px');
			$(this).closest('.drawflow-node').find('.square-box').css('width','346px');
			//$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('old-p',$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p'));
			//$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p','M 582.2777811686198 -90.38884480794269 C 607.6666768391926 -90.38884480794269 506.11109415690095 63.3333740234375 531.4999898274739  63.3333740234375');
		});
		$('#node-12 .addclasspop').click(function(){
			$(this).find('.close').show();
			$(this).closest('.drawflow-node').addClass('bigboxdesign');
			$(this).closest('.drawflow-node').attr('old-style',$(this).closest('.drawflow-node').attr('style'));
			$(this).closest('.drawflow-node').css('top','-203.889px');
			$(this).closest('.drawflow-node').css('left','235.778px');
			$(this).closest('.drawflow-node').find('.square-box').attr('old-style',$(this).closest('.drawflow-node').find('.square-box').attr('style'));
			$(this).closest('.drawflow-node').find('.square-box').css('height','230px');
			$(this).closest('.drawflow-node').find('.square-box').css('width','346px');
			$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('old-p',$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p'));
			$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p','M 582.2777811686198 -90.38884480794269 C 607.6666768391926 -90.38884480794269 506.11109415690095 63.3333740234375 531.4999898274739  63.3333740234375');
		});
		$('#node-3 .addclasspop').click(function(){
			$(this).find('.close').show();
			$(this).closest('.drawflow-node').addClass('bigboxdesign');
			$(this).closest('.drawflow-node').attr('old-style',$(this).closest('.drawflow-node').attr('style'));
			$(this).closest('.drawflow-node').find('.square-box').attr('old-style',$(this).closest('.drawflow-node').find('.square-box').attr('style'));
			$('#node-2').attr('old-stype',$('#node-2').attr('style'));
			$('#node-6').attr('old-stype',$('#node-6').attr('style'));
			$(this).closest('.drawflow-node').css('top','231px');
			$(this).closest('.drawflow-node').css('left','303px');
			$(this).closest('.drawflow-node').find('.square-box').css('height','230px');
			$(this).closest('.drawflow-node').find('.square-box').css('width','346px');
			$('#node-2').css('left','80px');
			$('#node-6').css('top','125px');
			$('body').find('.connection.node_in_node-3.node_out_node-2.output_1.input_2 .main-path').attr('old-d',$('body').find('.connection.node_in_node-3.node_out_node-2.output_1.input_2 .main-path').attr('d'));
			$('body').find('.connection.node_in_node-3.node_out_node-2.output_1.input_2 .main-path').attr('d','M 142 340 C 272.75 340 272.75 342 303.5  342');
			$('.connection.node_in_node-4.node_out_node-6.output_1.input_2.strokeblue .main-path').attr('old-d',$('.connection.node_in_node-4.node_out_node-6.output_1.input_2.strokeblue .main-path').attr('d'));
			$('.connection.node_in_node-4.node_out_node-6.output_1.input_2.strokeblue .main-path').attr('d',' M 678.5000174386159 166.00001743861606 C 759.9999999999999 166.00001743861606 759.9999999999999 344.00005231584817 841.4999825613838  344.00005231584817');
			$('body').find('.connection.node_in_node-6.node_out_node-3.output_1.input_2 .main-path').attr('old-d',$('body').find('.connection.node_in_node-6.node_out_node-3.output_1.input_2 .main-path').attr('d'));
			$('body').find('.connection.node_in_node-6.node_out_node-3.output_1.input_2 .main-path').attr('d',' M 649.4999999999999 341.9999389648437 C 710.4999999999999 341.9999389648437 466.4999999999999 165.99999999999997 527.4999999999999  165.99999999999997');
			$('.connection.node_in_node-7.node_out_node-6.output_1.input_2.connection-blue-row .main-path').attr('old-d',$('.connection.node_in_node-7.node_out_node-6.output_1.input_2.connection-blue-row .main-path').attr('d'));
			$('.connection.node_in_node-7.node_out_node-6.output_1.input_2.connection-blue-row .main-path').attr('d',' M 680.5000523158482 166.42857142857142 C 719.000026157924 166.42857142857142 719.000026157924 138.0000348772321 757.4999999999999  138.0000348772321');
			$('.connection.node_in_node-12.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('old-d',$('.connection.node_in_node-12.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d'));
			$('.connection.node_in_node-12.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d',' M 622.4999999999999 340.54765973772317 C 815.6071254185266 340.54765973772317 43.17862374441964 -92.88092041015622 236.2857491629464  -92.88092041015622');
			$('.connection.node_in_node-10.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('old-d',$('.connection.node_in_node-10.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d'));
			$('.connection.node_in_node-10.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d',' M 649.4999999999999 341.9999389648437 C 713.9999999999999 341.9999389648437 455.9999999999999 63.89996337890625 520.4999999999999  63.89996337890625');// 
		});
		
		$('body').on('click','#node-4.bigboxdesign .addclasspop .close',function(){
			$(this).hide();
			$(this).closest('.drawflow-node').removeClass('bigboxdesign');
			$(this).closest('.drawflow-node').css('top','299px');
			$(this).closest('.drawflow-node').css('left','1299.11px');
			$(this).closest('.drawflow-node').find('.square-box').css('height','');
			$(this).closest('.drawflow-node').find('.square-box').css('width','');
		})
		
		$('body').on('click','#node-5.bigboxdesign .addclasspop .close',function(){
			$(this).hide();
			$(this).closest('.drawflow-node').removeClass('bigboxdesign');
			$(this).closest('.drawflow-node').css('top','299px');
			$(this).closest('.drawflow-node').css('left','1299.11px');
			$(this).closest('.drawflow-node').find('.square-box').css('height','');
			$(this).closest('.drawflow-node').find('.square-box').css('width','');
		})
		$('body').on('click','#node-12.bigboxdesign .addclasspop .close',function(){
			$(this).hide();
			$(this).closest('.drawflow-node').removeClass('bigboxdesign');
			$(this).closest('.drawflow-node').css('top','-133.889px');
			$(this).closest('.drawflow-node').css('left','235.778px');
			$(this).closest('.drawflow-node').find('.square-box').css('height','');
			$(this).closest('.drawflow-node').find('.square-box').css('width','');
		})
		$('body').on('click','#node-3.bigboxdesign .addclasspop .close',function(){
			$(this).hide();
			$(this).closest('.drawflow-node').removeClass('bigboxdesign');
			$(this).closest('.drawflow-node').attr('style',$(this).closest('.drawflow-node').attr('old-style'));
			$(this).closest('.drawflow-node').find('.square-box').attr('style',$(this).closest('.drawflow-node').find('.square-box').attr('old-style'));
			$('#node-2').attr('style',$('#node-2').attr('old-style'));
			$('#node-6').attr('style',$('#node-6').attr('old-style'));
			$(this).closest('.drawflow-node').css('top','303px');
			$(this).closest('.drawflow-node').css('left','303px');
			$(this).closest('.drawflow-node').find('.square-box').css('height','');
			$(this).closest('.drawflow-node').find('.square-box').css('width','');
			$('#node-2').css('left','128px');
			$('#node-6').css('top','177px');
			$('body').find('.connection.node_in_node-3.node_out_node-2.output_1.input_2 .main-path').attr('d',' M 242 340 C 272.75 340 272.75 342 303.5  342');
			$('.connection.node_in_node-4.node_out_node-6.output_1.input_2.strokeblue .main-path').attr('d',' M 680.5 218 C 761 218 761 344 841.5  344');
			$('body').find('.connection.node_in_node-6.node_out_node-3.output_1.input_2 .main-path').attr('d','M 456.5 342 C 492 342 492 218 527.5  218');
			$('.connection.node_in_node-7.node_out_node-6.output_1.input_2.connection-blue-row .main-path').attr('d',' M 680.5 218 C 719 218 719 138 757.5  138');
			
			$('.connection.node_in_node-12.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d',' M 444.3888854980469 343.3334011501736 C 548.4444342719185 343.3334011501736 132.2222391764323 -92.88888888888886 236.27778795030383  -92.88888888888886');
			
			$('.connection.node_in_node-10.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d','M 455.5 344 C 488 344 488 63.888885498046875 520.5  63.888885498046875');
			
		});
		setTimeout(function(){
			console.log($('#drawflow .drawflow').attr('style'));
			$('#drawflow .drawflow').attr('style','transform: translate(-206px, 133px) scale(0.8);');
		}, 1000);
	});
</script>
<style  type="text/css">
.divtext.first-unit {
    position: relative;
    display: block;
    width: 100%;
    margin-top: -7px;
}
.addclasspop .close{
	display:none;
}
.bigboxdesign .addclasspop .close{
	display:block;
}
.bigboxdesign .addclasspop .divtext,.bigboxdesign .addclasspop .divimg{
	display:none;
}
.bigboxdesign .pop{
	display:block;
	position:inherit;
	height:270px;
	margin-top:-17px;
}
.bigboxdesign .pop .left-side{
	height:210px;
}
.drawflow .drawflow-node .outputs{
	display:none;
}
.drawflow .connection .main-path{
	stroke:blue;
}
.divtext{
	max-height: 36px;
    overflow: hidden;
    clear: both;
    line-height: 17px;
}
.divtext div {
    max-height: 48px;
    margin: 0;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, 0%);
}
.square-box{
	width: 154px;
	height: 86px;
	font-size:14px;
}
.square-box .divimg{
	display:block;
}
.drawflow .connection.strokered .main-path{
	stroke:red;
}
.drawflow .connection.strokeblack .main-path{
	stroke:black;
}
.drawflow .connection.strokegreen .main-path{
	stroke:green;
}
.drawflow .connection.strokeyellow .main-path{
	stroke:yellow;
}
.drawflow .drawflow-node .drawflow_content_node,#drawflow{
	cursor: grab;
    cursor: -moz-grab;
    cursor: -webkit-grab;
}
.drawflow .drawflow-node .drawflow_content_node:active,#drawflow:active{
	cursor: grabbing;
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
}
.drawflow .drawflow-node .input{
    opacity:0;
}
.drawflow .drawflow-node .input_1 {
    height: 20px;
    width: 166px;
    border-radius: 0;
    top: -12px;
    position: absolute;
	z-index:0;
}
.drawflow .drawflow-node .input_2{
    top: 0px;
    height: 82px;
    border-radius: 0;
	position:absolute;
	z-index:0;
}

.drawflow .drawflow-node .input_3{
    top: 70px;
    width: 164px;
    border-radius: 0;
	position:absolute;
	z-index:0;
}
.drawflow .drawflow-node .output_1{
    background-color: #009BF2;
	height: 15px;
	width: 15px;
	right: -146px;
	top: -7px;
}
.drawflow .drawflow-node .output_2 {
    left: 74px;
    background-color: #FF9900;
    height: 30px;
    width: 30px;
	bottom: auto;
	left: 62px;
	top: 15px;
}
.blue-plus {
	display:none;
	cursor:pointer;
	font-size:16px;
    color: #009BF2;
    border-radius: 50%;
    padding: 0px 0px 0px 3px;
    width: 22px;
    height: 22px;
    top: auto;
    right: 0;
    left: 127px;
    z-index: 5;
	bottom:23px;
	font-weight:bold;
	background-color: transparent;
}
#node-2 .blue-plus{
	color:#fff;
	background-color:#009BF2;
}
.blue-div .square-box{
	border-color:#009BF2;
	color:#009BF2;
}
.green-div .square-box{
	border-color:#018101;
	color:#018101;
}
.red-div .square-box{
	border-color:#ff0101;
	color:#ff0101;
}
.drawflow .blue-div.drawflow-node .output_2,.drawflow .blue-div.drawflow-node .orange-plus{
	background-color:#FF9900;
}
.drawflow .orange-div.drawflow-node .output_1,.drawflow .orange-div.drawflow-node .blue-plus{
	background-color:#FF9900;
}
.drawflow .orange-div.drawflow-node .output_2,.drawflow .orange-div.drawflow-node .orange-plus{
	background-color:#018101;
}
.drawflow .green-div.drawflow-node .output_1,.drawflow .green-div.drawflow-node .blue-plus{
	background-color:#018101;
}
.drawflow .green-div.drawflow-node .output_2,.drawflow .green-div.drawflow-node .orange-plus{
	background-color:#ff0101;
}
.drawflow .red-div.drawflow-node .output_1,.drawflow .red-div.drawflow-node .blue-plus{
	background-color:#ff0101;
}
.drawflow .red-div.drawflow-node .output_2,.drawflow .red-div.drawflow-node .orange-plus{
	background-color:#ff0101;
}
.orange-plus{
	font-size:16px;
    top: auto;
    bottom: 8px;
    padding: 0px 0px 0px 0px;
    width: 18px;
    height: 18px;
    right: auto;
    left: 69px;
    z-index: 5;
}
a.orange{
	display:none;
}
.dropdown-menu.show {
    display: block;
}
.rounded .dropdown-menu {
    border-radius: 0.75rem;
}
.drawflow-node#node-2 .input_1{
    left: 127px;
    top: 66px;
    opacity:1;
    background-color:#4682b4;
    height:20px;
    width:20px;
        border-radius: 30px;
}
.drawflow-node#node-2 .input_1{
    display:none;
}
.drawflow-node#node-2 .output_1{
    left: 99px;
    top: 64px;
    height: 66px;
    opacity: 0;
    width:30px;
}
#drawflow{
    top: -20px !important;
}
.connection.output_2 .main-path{
    stroke:#FF9900;
}
.connection.output_3 .main-path{
	stroke:#E3195A;
}
.connection.output_4 .main-path{
	stroke:#00E676;
}
.drawflow .connection .main-path.selected{
	stroke:#4ea9ff;
}
.sidebarpopup .main-icons ul li:last-child {
      margin-top: 0px;
    padding-left: 12px;
    padding-right: 0;
    padding-top: 0;
}
.lang-select li:first-child {
    width: 200px;
}
.sidebarpopup .main-icons ul li:last-child img {
    height: 35px;
    width: 40px;
    border-radius: 0%;
}
button.btn-select {
    height: 0;
    width: 0;
    border: 0;
    background-color: transparent;
}
.sidebarpopup .main-icons {
    width: 100%;
    text-align: left;
}
.sidebarpopup #notificationDropdown {
    top: 222px !important;
    left: -54px !important;
    width: 200px;
}

/****/
.vodiapicker{
  display: none; 
}
b{
  display: none;
  width: 100%;
  max-width: 350px;
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  border: 1px solid rgba(0,0,0,.15);
  border-radius: 5px;
  
}

.open{
  display: show !important;
}
.lang-select{
  margin-left: 0px;
}
#a {
    padding-left: 0px;
    background-color: #fff;
    box-shadow: 8px 8px 40px rgba(75, 91, 234, 0.1);
    padding: 16px;
}

#a img, .btn-select img{
  width: 30px;
  
}

#a li{
list-style: none;
    padding-top: 5px;
    padding-bottom: 5px;
    display: block;
    text-align: left;
}
.b {
    position: absolute;
    z-index: 999;
    right: 8px !important;
    width: 230px;
}
#a li:hover{
 background-color: #F4F3F3;
}

#a li img{
  margin: 5px;
}

#a li span, .btn-select li span{
  margin-left: 30px;
    color: #000;
    font-size: 15px;
}
.lang-select ul li img {
    border-radius: 50%;
    height: 34px;
    width: 39px;
}
.lang-select li:first-child {
    text-align: right;
}
.lang-select li:first-child img {
    display: block;
    text-align: right;
    float: right;
    position: absolute;
    right: 35px;
    margin-top: -48px;
    width: 40px !important;
    height: 40px !important;
    object-fit: contain;
}
.b ul li:first-child {
    display: none !important;
}
.sessions .parameters ul li {
    text-align: center;
    margin: 0 auto;
    padding-left: 28px;
}
.sessions .parameters ul li label {
    color: #222222;
    font-size: 16px;
}
.modal-dialog .card-body .sessions {
    padding-right: 0;
}
li.radio-btns {
    padding-top: 15px;
}
.radio-btns .custom-control.custom-radio {
    height: 34px;
    margin-top: 10px;
}
li.radio-btns {
    width: 100%;
    text-align: left !important;
}
.chapter-slider1 input {
    width: 300px;
}
li.minratings {
    padding-top: 23px;
}
.view-speed .custom-control.custom-radio {
    text-align: left;
    height: 34px;
    margin-top: 10px;
}
textarea#divtext {
    display: none;
}
.sub-show-temporary main.default-transition {
    margin-left: 475px !important;
}
</style>
<style  type="text/css">
.divtext{
	max-height: 36px;
    overflow: hidden;
    clear: both;
    line-height: 17px;
}
.divtext div {
    max-height: 48px;
    margin: 0;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, 0%);
}
.square-box{
	width: 154px;
	height: 86px;
	font-size:14px;
}

.square-box .divimg{
	display:block;
}
.drawflow .connection.strokered .main-path{
	stroke:red;
}
.drawflow .connection.strokeblack .main-path{
	stroke:black;
}
.drawflow .connection.strokegreen .main-path{
	stroke:green;
}
.drawflow .connection.strokeyellow .main-path{
	stroke:yellow;
}
.drawflow .drawflow-node .drawflow_content_node,#drawflow{
	cursor: grab;
    cursor: -moz-grab;
    cursor: -webkit-grab;
}
.drawflow .drawflow-node .drawflow_content_node:active,#drawflow:active{
	cursor: grabbing;
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
}
.drawflow .drawflow-node .input{
    opacity:0;
}
.drawflow .drawflow-node .input_1 {
    height: 20px;
    width: 166px;
    border-radius: 0;
    top: -12px;
    position: absolute;
}
.drawflow .drawflow-node .input_2{
    top: 0px;
    height: 82px;
    border-radius: 0;
	position:absolute;
}

.drawflow .drawflow-node .input_3{
    top: 70px;
    width: 164px;
    border-radius: 0;
	position:absolute;
}
.drawflow .drawflow-node .output_1{
    background-color: #009BF2;
	height: 15px;
	width: 15px;
	right: -146px;
	top: -7px;
}
.drawflow .drawflow-node .output_2 {
    left: 74px;
    background-color: #FF9900;
    height: 30px;
    width: 30px;
	bottom: auto;
	left: 62px;
	top: 15px;
}
.blue-plus {
	cursor:pointer;
	font-size:16px;
    color: #009BF2;
    border-radius: 50%;
    padding: 0px 0px 0px 3px;
    width: 22px;
    height: 22px;
    top: auto;
    right: 0;
    left: 127px;
    z-index: 5;
	bottom:23px;
	font-weight:bold;
	background-color: transparent;
}
#node-2 .blue-plus{
	color:#fff;
	background-color:#009BF2;
}
.blue-div .square-box{
	border-color:#009BF2;
	color:#009BF2;
}
.green-div .square-box{
	border-color:#018101;
	color:#018101;
}
.red-div .square-box{
	border-color:#ff0101;
	color:#ff0101;
}
.drawflow .blue-div.drawflow-node .output_2,.drawflow .blue-div.drawflow-node .orange-plus{
	background-color:#FF9900;
}
.drawflow .orange-div.drawflow-node .output_1,.drawflow .orange-div.drawflow-node .blue-plus{
	background-color:#FF9900;
}
.drawflow .orange-div.drawflow-node .output_2,.drawflow .orange-div.drawflow-node .orange-plus{
	background-color:#018101;
}
.drawflow .green-div.drawflow-node .output_1,.drawflow .green-div.drawflow-node .blue-plus{
	background-color:#018101;
}
.drawflow .green-div.drawflow-node .output_2,.drawflow .green-div.drawflow-node .orange-plus{
	background-color:#ff0101;
}
.drawflow .red-div.drawflow-node .output_1,.drawflow .red-div.drawflow-node .blue-plus{
	background-color:#ff0101;
}
.drawflow .red-div.drawflow-node .output_2,.drawflow .red-div.drawflow-node .orange-plus{
	background-color:#ff0101;
}
.orange-plus{
	font-size:16px;
    top: auto;
    bottom: 8px;
    padding: 0px 0px 0px 0px;
    width: 18px;
    height: 18px;
    right: auto;
    left: 69px;
    z-index: 5;
}
a.orange{
	display:none;
}
.dropdown-menu.show {
    display: block;
}
.rounded .dropdown-menu {
    border-radius: 0.75rem;
}
.drawflow-node#node-2 .input_1{
    left: 127px;
    top: 66px;
    opacity:1;
    background-color:#4682b4;
    height:20px;
    width:20px;
        border-radius: 30px;
}
.drawflow-node#node-2 .input_1{
    display:none;
}
.drawflow-node#node-2 .output_1{
    left: 99px;
    top: 64px;
    height: 66px;
    opacity: 0;
    width:30px;
}
#drawflow{
    top: -20px !important;
}
.connection.output_2 .main-path{
    stroke:#FF9900;
}
.connection.output_3 .main-path{
	stroke:#E3195A;
}
.connection.output_4 .main-path{
	stroke:#00E676;
}
.drawflow .connection .main-path.selected{
	stroke:#4ea9ff;
}
.sidebarpopup .main-icons ul li:last-child {
      margin-top: 0px;
    padding-left: 12px;
    padding-right: 0;
    padding-top: 0;
}
.lang-select li:first-child {
    width: 200px;
}
.sidebarpopup .main-icons ul li:last-child img {
    height: 35px;
    width: 40px;
    border-radius: 0%;
}
button.btn-select {
    height: 0;
    width: 0;
    border: 0;
    background-color: transparent;
}
.sidebarpopup .main-icons {
    width: 100%;
    text-align: left;
}
.sidebarpopup #notificationDropdown {
    top: 222px !important;
    left: -54px !important;
    width: 200px;
}

/****/
.vodiapicker{
  display: none; 
}
b{
  display: none;
  width: 100%;
  max-width: 350px;
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  border: 1px solid rgba(0,0,0,.15);
  border-radius: 5px;
  
}

.open{
  display: show !important;
}
.lang-select{
  margin-left: 0px;
}
#a {
    padding-left: 0px;
    background-color: #fff;
    box-shadow: 8px 8px 40px rgba(75, 91, 234, 0.1);
    padding: 16px;
}

#a img, .btn-select img{
  width: 30px;
  
}

#a li{
list-style: none;
    padding-top: 5px;
    padding-bottom: 5px;
    display: block;
    text-align: left;
}
.b {
    position: absolute;
    z-index: 999;
    right: 8px !important;
    width: 230px;
}
#a li:hover{
 background-color: #F4F3F3;
}

#a li img{
  margin: 5px;
}

#a li span, .btn-select li span{
  margin-left: 30px;
    color: #000;
    font-size: 15px;
}
.lang-select ul li img {
    border-radius: 50%;
    height: 34px;
    width: 39px;
}
.lang-select li:first-child {
    text-align: right;
}
.lang-select li:first-child img {
    display: block;
    text-align: right;
    float: right;
    position: absolute;
    right: 35px;
    margin-top: -48px;
    width: 40px !important;
    height: 40px !important;
    object-fit: contain;
}
.b ul li:first-child {
    display: none !important;
}
.sessions .parameters ul li {
    text-align: center;
    margin: 0 auto;
    padding-left: 28px;
}
.sessions .parameters ul li label {
    color: #222222;
    font-size: 16px;
}
.modal-dialog .card-body .sessions {
    padding-right: 0;
}
li.radio-btns {
    padding-top: 15px;
}
.radio-btns .custom-control.custom-radio {
    height: 34px;
    margin-top: 10px;
}
li.radio-btns {
    width: 100%;
    text-align: left !important;
}
.chapter-slider1 input {
    width: 300px;
}
li.minratings {
    padding-top: 23px;
}
.view-speed .custom-control.custom-radio {
    text-align: left;
    height: 34px;
    margin-top: 10px;
}
textarea#divtext {
    display: none;
}
.sub-show-temporary main.default-transition {
    margin-left: 475px !important;
}
.left-portion-header {
    padding-left: 45px;
    margin-top: -45px;
}
.chapter-slider{
       position: absolute;
    width: 37.7%;
    margin-top: 0;
    left: 128px;
    height: 0;
    top: 78px;
}
.chapter-slider .slider {
    width: 65%;
    margin: 0;
}
.sessions {
        display: inline-block;
    padding-right: 0;
    top: 126px;
    position: absolute;
    left: 145px;
}
.popup-msg {
        position: absolute;
    left: 58%;
    right: 0;
    top: 10%;
    bottom: 6%;
    background: #4B5BEA;
    border: 1px solid rgba(75, 91, 234, 0.5);
    box-sizing: border-box;
    box-shadow: 8px 8px 40px rgba(75, 91, 234, 0.2);
    border-radius: 8px;
    font-weight: normal;
    font-size: 11px;
    line-height: 15px;
    color: #FFFFFF;
    width: 240px;
    padding: 13px 0px 0 44px;
    text-align: left;
}
.user .close {
    position: absolute;
    top: 8px;
    right: 74px;
    transition: all 200ms;
    font-size: 21px;
    font-weight: 500;
    text-decoration: none;
    color: #fff;
    z-index: 999;
}
.chapter-slider #rangevalue {
    text-align: center;
    font-size: 14px;
    display: contents;
    margin: auto;
    padding: 10px 0px;
    width: 100%;
    color: #4B5BEA;
    left: 40px;
}
.navbar-right {
    margin-top: -14px;
}
.sub-show-temporary .left-portion-header {
    padding-left: 0;
    margin-left: -27px;
    margin-top: -50px;
}
.sub-show-temporary .sessions {
    display: inline-block;
    padding-right: 0;
    padding-top: 11px;
    left: 29%;
}
.sub-show-temporary .popup-msg {
        position: absolute;
    left: 43%;
    right: 0%;
    top: 0%;
    bottom: 0%;
    background: #4B5BEA;
    border: 1px solid rgba(75, 91, 234, 0.5);
    box-sizing: border-box;
    box-shadow: 8px 8px 40px rgba(75, 91, 234, 0.2);
    border-radius: 8px;
    font-weight: normal;
    font-size: 11px;
    line-height: 15px;
    color: #FFFFFF;
    width: 44%;
    padding: 18px 0px 0 47px;
    text-align: left;
    padding-bottom: 0;
}
.sub-show-temporary .user .close {
    position: absolute;
    top: 4px;
    right: 81px;
    transition: all 200ms;
    font-size: 21px;
    font-weight: 500;
    text-decoration: none;
    color: #fff;
    z-index: 999;
}

.user-tamin.user {
    padding-top: 5px;
    margin-top: 16px !important;
    padding-right: 5px;
}
.navbar .user img {
    margin-left: 10px;
    border-radius: 0;
    width: 30px;
}
.navbar {
    background: #fafafe;
    }
.sub-show-temporary .user-tamin.user a span {
    position: relative;
    left: 0px;
}
.sub-show-temporary .user-tamin.user {
    padding-top: 5px;
    margin-top: 16px !important;
    padding-right: 5px;
}
.navbar .navbar-right .user {
    margin-right: 16px;
    margin-top: 12px;
}
.sub-show-temporary .chapter-slider .slider{
    width: 90%
}
div#collapseAuthorization {
    margin-top: 20px;
}
.menu .sub-menu ul li.active-menus {
    border-bottom: 2px solid #3c4de8;
}
li.first-dropdown {
    background-color: #f6f6f6;
}
.menu-list-select .inner-level-menu li a img {
    padding-right: 14px;
    height: auto;
    width: auto;
}
.main-icons ul li img {
    height: 35px;
    width: 32px;
}
.class-name{
    margin-top: 0px;
}

.bottom-section .col-md-9.col-lg-9 {
    padding-right: 0;
}
.progress-bar-stud img {
    height: auto !important;
    width: auto !important;
}
.side-icons-popup {
    padding-top: 0px;
        padding-left: 30px;
}
.bottom-section p {
    text-align: inherit;
        font-size: 14px;
    line-height: 22px;
    margin-top: 15px;
}
.video iframe {
    border: 0px solid #FF9900;
    height: 175px;
    padding: 0;
    width: 100%;
}
.main-icons {
    margin-right: -6px;
}
.sub-show-temporary .side-icons-popup {
    padding-left: 33px;
    margin-left: 30px;
    padding-top: 0px;
}
.below-video-content {
    padding-left: 25px;
}
.result-title h3 span {
    padding-left: 40px;
    display: block;
    padding-top: 0;
}
.left-side-top h3{
    padding-left: 30px;
}
.sub-show-temporary .video {
    padding-left: 32px;
}
.eywviewdropdown {
    background: #FFFFFF;
    box-shadow: 8px 8px 40px rgba(75, 91, 234, 0.1);
    padding: 10px 15px 0;
    margin-top: 12px;
    width: 18%;
}
.side-icons-popup img {
    position: relative;
    top: 24px;
    z-index: 999;
}
.sub-show-temporary .navbar .user img {
    margin-left: 2px;
    border-radius: 0;
   
}
.col-right {
    padding-left: 0;
}
#drawflow {
    width: calc(100vw - 70px);

}
.bigboxdesign .pop .left-side {
    height: 184px;
    overflow-y: hidden;
    width: 70%;
}
.alertbox {
    position: absolute;
    margin-top: -28px;
    margin-left: 17px;
    z-index: 9;
}
.pop .left-side h4 img {
    margin-top: -6px !important;
}

@media(min-width: 1401px) and (max-width: 1600px){
.popup-msg {
    position: absolute;
    left: 46%;
    }
    .menu .main-menu {
    width: 85px;
    height: calc(100% - 0px);
}
.menu-sub-hidden .menu {
    width: 86px;
}
.sub-show-temporary .chapter-slider {
    left: 29%;
    width: 35%;
}
.sub-show-temporary .sessions {
    display: inline-block;
    padding-right: 0;
    padding-top: 11px;
    left: 29%;
}
.sub-show-temporary .popup-msg {
        position: absolute;
    left: 12%;
    right: 0%;
    top: 0%;
    bottom: 0%;
    font-size: 12px;
    line-height: 16px;
    width: 72%;
    padding: 16px 19px 0 60px;
}
.menu-sub-hidden.sub-show-temporary .menu {
    width: 400px;
}
.sub-show-temporary .left-portion-header {
    padding-left: 0;
    margin-left: -55px;
    margin-top: -50px;
}
.sub-show-temporary .chapter-slider {
    left: 28%;
    width: 40%;
}
.sub-show-temporary .side-icons-popup {
    padding-left: 0;
    margin-left: -40px;
    z-index: 0;
}
.sub-show-temporary main.default-transition {
    margin-left: 400px !important;
}
.video iframe {
        border: 0px solid #FF9900;
    height: 206px;
    padding: 0;
    width: 100%;
}
.sub-show-temporary .side-icons-popup {
    padding-left: 0;
    margin-left: 30px;
    z-index: 0;
    padding-top: 19px;
}
}
@media(min-width: 1200px) and (max-width: 1550px){
    .navbar .search {
    position: relative;
    width: auto;
}

.sub-show-temporary .menu .sub-menu {
    width: 315px;
}
.menu-sub-hidden.sub-show-temporary .menu {
    width: 400px;
}
.menu .sub-menu {
    padding: 16px 5px 16px 20px;
}
.bottom-menu {
    position: relative;
    padding-top: 180px;
}
.chapter-slider .slider {
    width: 100%;
    margin: 0;
}
.sub-show-temporary .chapter-slider .slider {
    width: 100%;
    margin: 0% auto 0;
}
.sub-show-temporary .chapter-slider .slider {
    width: 100%;
}
.sub-show-temporary .sessions {
 display: inline-block;
    padding-right: 0;
    padding-top: 11px;
    left: 29%;
}
.menu .sub-menu{
    height: calc(100% - 0px);
}
.menu .main-menu {
    width: 100px;
    height: calc(100% - 0px);
}
.sub-menu ul.inner-level-menu li a span.d-inline-block {
    width: 75%;
}
.sub-show-temporary .chapter-slider {
    left: 28%;
    width: 40%;
}
.first-dropdown span.d-inline-block {
    width: 86% !important;
}
.popup-msg {
       position: absolute;
    left: 46%;
}
.sub-show-temporary .popup-msg {
   position: absolute;
    left: 27%;
    right: 0%;
    top: 0%;
    bottom: 0%;
    font-size: 10px;
    line-height: 16px;
    width: 58%;
    padding: 16px 19px 0 60px;

}
.sub-show-temporary .user .close {
  position: absolute;
    top: 5px;
    right: 78px;
}
.sub-show-temporary .left-portion-header {
    padding-left: 0;
    margin-left: -52px;
    margin-top: -50px;
}
.main-icons {
    margin-right: -6px;
}
.sub-show-temporary .main-icons {
    margin-right: -6px;
}
.video {
    padding: 0 0px;
    margin-top: 0;
    margin-left: 30px;
}
.sub-show-temporary .video {
        padding-left: 0;
    margin-left: 0;
}
.left-side-top h3 {
    padding-left: 30px;
}
.sub-show-temporary .left-side-top h3 {
    padding-left: 0px;
}
.sub-show-temporary  .below-video-content {
    padding-left: 0;
}
}
@media(min-width: 1200px) and (max-width: 1400px){
    .sub-show-temporary .left-portion-header {
    padding-left: 0;
    margin-left: -40px;
    margin-top: -50px;
}
.sub-show-temporary .chapter-slider {
    left: 32%;
    width: 33%;
}
.sub-show-temporary .sessions {
    padding-right: 0;
    padding-top: 11px;
    left: 33%;
}
.sub-show-temporary .side-icons-popup {
    padding-left: 35px;
    margin-left: 0;
    padding-top: 11px;
}
.sub-show-temporary main.default-transition {
    margin-left: 410px !important;
}
main{
    margin-right: 0px;
}
.bottom-section h3 {
    font-size: 16px;
}
.eywviewdropdown {
    background: #FFFFFF;
    box-shadow: 8px 8px 40px rgba(75, 91, 234, 0.1);
    padding: 10px 15px 0;
    margin-top: 12px;
    width: 26%;
}
.popup-msg {
    position: absolute;
    left: 39%;
    font-size: 10px;
}
}
.left-side ul li img {
    width: 40px !important;
    height: 40px !important;
}
.left-side .danger-icon img {
    width: 20px !important;
    height: 20px !important;
    position: relative;
    right: 0;
    left: 24px;
    margin-top: -19px;
    border-radius: 0;

}
.danger-icon {
    position: absolute;
}
.left-side ul li {
    color: blue;
}
.left-side ul li h3 {
    margin-bottom: 0;
    margin-top: 9px;
}

.bigboxdesign .alertbox {
    margin-left: 103px;
}
ul#layouts {
    display: none;
}
ul#chapters {
    display: none;
}
ul#books {
    display: none;
}
ul#applications{
	display: none;
}
.bigboxdesign .pop .left-side {
    height: 184px;
    overflow-y: hidden;
   width: 70%;
}
.video {
    padding-left: 32px;
}
.bar-zoom {
    right: 365px !important;
}
.right-side {
    width: 30%;
    float: right;
    text-align: right;
    padding-right: 21px;
}

.left-side ul li p {
   color: #333;
    line-height: 16px;
    margin-bottom: 0;
    margin-top: 2px;
}
.number-icons.three-icon {
    margin-top: -31px;
}
.number-icons.one-icon {
    margin-top: -28px;
}
.alertbox.set-danger-new {
    padding-top: 6px;
}
.alertbox.set-danger {
    padding-top: 3px;
}
.addclasspop .pop h4 {
    padding-top: 4px;
}
h4.text{
	font-size: 18px;
}
.overlay {
    position: absolute;
    top: 0px;
    bottom: 0;
    left: 0px;
    right: 0;
    height: 40px;
    width: 40px;
    opacity: 0;

    background-color: rgba(0,155,242,0.6);
    border-radius: 50%;
}
.bigboxdesign .pop .left-side ul li a:hover .overlay {
    opacity: 1;
}
.bigboxdesign .pop .left-side li {
    position: relative;
}
</style>
<script type="text/javascript">
 

//test for iterating over child elements
var langArray = [];
$('.vodiapicker option').each(function(){
  var img = $(this).attr("data-thumbnail");
  var text = this.innerText;
  var value = $(this).val();
  var item = '<li><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span></li>';
  langArray.push(item);
})

$('#a').html(langArray);

//Set the button value to the first el of the array
$('.btn-select').html(langArray[0]);
$('.btn-select').attr('value', 'en');

//change button stuff on click
$('#a li').click(function(){
   var img = $(this).find('img').attr("src");
   var value = $(this).find('img').attr('value');
   var text = this.innerText;
   var item = '<li><img src="'+ img +'" alt="" /></li>';
  $('.btn-select').html(item);
  $('.btn-select').attr('value', value);
  $(".b").toggle();
  //console.log(value);
});
$(".btn-select").click(function(){
        $(".b").toggle();
    });
//check local storage for the lang
var sessionLang = localStorage.getItem('lang');
if (sessionLang){
  //find an item with value of sessionLang
  var langIndex = langArray.indexOf(sessionLang);
  $('.btn-select').html(langArray[langIndex]);
  $('.btn-select').attr('value', sessionLang);
} else {
   var langIndex = langArray.indexOf('ch');
  console.log(langIndex);
  $('.btn-select').html(langArray[langIndex]);
  //$('.btn-select').attr('value', 'en');
}

</script>
<script type="text/javascript">
$(".msg-profile").click(function(e){
     e.preventDefault();
    $(".blue-status").fadeIn(300,function(){$(this).focus();});
});

$('.close').click(function() {
   $(".blue-status").fadeOut(300);
});
$(".blue-status").on('blur',function(){
    $(this).fadeOut(300);
});

</script>
<!-- <script type="text/javascript">

jQuery('.main-menu ul.list-unstyled').on('click','a',function(){
if($( "body" ).hasClass( "sub-show-temporary" )){
jQuery('#app-container').removeClass('sub-show-temporary');
}else{
jQuery('#app-container').addClass('sub-show-temporary');
}
})
</script> -->

</body>

</html>