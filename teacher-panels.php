<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jerosoler/Drawflow/dist/drawflow.min.css">
    <link rel="stylesheet" href="css/beautiful.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
  <link rel="stylesheet" href="css/vendor/quill.snow.css" />
    <link rel="stylesheet" href="css/vendor/quill.bubble.css" />
    <style type="text/css">
        .menu .main-menu{
            background: green;
        }
        .menu{
            background: green;
        }
    </style>
</head>
<body id="app-container" class="menu-default show-spinner">
<div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="dashboardclick">
                        <a href="#dashboard">
                            <img src="img/dashboards.svg">
                         
                        </a>
                    </li>
                  
                    <li class="dashboardclick">
                        <a href="#layouts">
                             <img src="img/student.svg"> 
                        </a>
                    </li>
                    <li class="dashboardclick">
                        <a href="#chapters">
                            <img src="img/notification.svg">
                        </a>
                    </li>
                    <li class="dashboardclick">
                        <a href="#books">
                            <img src="img/video.svg">
                        </a>
                    </li>
                     <li class="dashboardclick timer-set">
                      
                            <img src="img/timer.svg">
                       
                    </li>
                   <!--   <li class="dashboardclick">
                        <a href="#">
                            <img src="img/calendericon.svg">
                        </a>
                    </li> -->
                    <li class="dashboardclick ">
                       
                            <img src="img/star.svg">
                       
                    </li>
                </ul>
               <ul class="list-unstyled bottom-menu">
                    <li class="dashboardclick">
                         <a href="https://cerapoda.com/zuzu/teacher-panels.html" target="_blank">
                            <img src="img/graph.svg">
                        </a>
                    </li>
                     <li class="dashboardclick">
                         <a href="https://cerapoda.com/zuzu/" target="_blank">
                            <img src="img/setting.svg">
                        </a>
                    </li>
                     <li class="dashboardclick timer-set">
                       
                            <img src="img/questionmark.svg">
                        
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
                                    <a href="#">
                                     <span class="d-inline-block">History of drinking </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <span class="d-inline-block">What is alcohol</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <span class="d-inline-block">Knowledge Cloud</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="dashboard">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" >
                           <span class="d-inline-block">All</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <img src="img/alert.svg" style="width:35px" class="alert-icon-set"><img src="img/user2.svg">  <span
                                            class="d-inline-block" style="height:40px;">Conversation with Dora Lin <p>Hello Professor, I wanted to ask about....</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                      <img src="img/alert.svg" style="width:35px" class="alert-icon-set"><img src="img/user4.svg">  <span
                                            class="d-inline-block" style="height:40px;">Conversation with joe  Smith <p>Hello Professor, I wanted to ask about....</p></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/aler-none.png" class="alert-icon-set">
                                        <img src="img/discuss.svg"> <span
                                            class="d-inline-block" style="height:28px;">Discussion: Exposure</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/aler-none.png" class="alert-icon-set">
                                        <img src="img/question.svg">  <span class="d-inline-block" style="height:28px;">Lesson 5 quizzes are in!</span>
                                    </a>
                                </li>
                                   <li>
                                    <a href="#"><img src="img/aler-none.png" class="alert-icon-set">
                                        <img src="img/presentation.svg"> <span class="d-inline-block" style="height:28px;">Presentation submitted</span>
                                    </a>
                                </li>
                                  <li>
                                    <a href="#"><img src="img/aler-none.png" class="alert-icon-set">
                                        <img src="img/help.svg"> <span class="d-inline-block" style="height:28px;">Joe Smith may need your help</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
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
                   
                </ul>
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Headline Text</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user1.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Maya noor <p>Hello Professor, I want To ask about...</p></span>
                                            
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/alert.svg" class="alert-icon-set"><img src="img/user2.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Dora Lin<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user3.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Miki sony<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/alert.svg" class="alert-icon-set"><img src="img/user4.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Joe Smith<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user2.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Ema Taylor<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user1.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">David cut<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user4.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Ron cool<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user3.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Rob Bann<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user2.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">David Fine<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user4.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px"  >Thomas Verdi<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user1.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Peggy Williams<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user2.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Kelly McCain<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user2.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Lora Troop<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user2.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Kennedy Tom<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user2.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Tina royal<p>Hello Professor, I want To ask about...</p></span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
                                        <i><img src="img/aler-none.png" class="alert-icon-set"><img src="img/user2.svg" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 40px;font-size: 16px">Will dahn<p>Hello Professor, I want To ask about...</p></span>
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
                                        <i><img src="https://cerapoda.com/zuzu/img/clapperboard.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Intro to Spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/clapperboard.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Mixing Juices</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/signing.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Exercise: Tequila Sunrise</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/open-book.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">How are spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/signing.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">What is Tequila</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/open-book.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Mixing Methods</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/clapperboard.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Video intro to Spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/clapperboard.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Video intro to Spirits</span>
                                    </a>
                                </li>
                              
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/clapperboard.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">What is alcohol</span>
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
                                        <i><img src="https://cerapoda.com/zuzu/img/clapperboard.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Intro to Spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/clapperboard.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Mixing Juices</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/signing.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Exercise: Tequila Sunrise</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/open-book.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">How are spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/signing.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">What is Tequila</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/open-book.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Mixing Methods</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/clapperboard.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Video intro to Spirits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/clapperboard.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">Video intro to Spirits</span>
                                    </a>
                                </li>
                              
                                <li>
                                    <a href="#">
                                        <i><img src="https://cerapoda.com/zuzu/img/clapperboard.png" style="padding-right: 0px;"></i> <span
                                            class="d-inline-block" style="height: 22px;font-size: 16px">What is alcohol</span>
                                    </a>
                                </li>

                                 
                                
                            </ul>
                        </div>
                    </li>
                 
                </ul>


                <ul class="list-unstyled" data-link="applications">
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

    <main style="margin-top: 187px">
         <nav class="navbar fixed-top" style="padding: 1.5rem 0 11rem 5rem;">
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
       <!--  <div class="slider">
            <span><output id="rangevalue">5</output></span>
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
    
  </div> -->
   <div class="slider">
                                    <div class="form-group mb-4">
                                   
                                        <div>
                                            <div class="slider" id="singleSlider"></div>
                                        </div>
                                    </div>
                                </div> 
</div>

        </div>


      

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                  <div class="search d-none d-md-inline-block align-text-bottom mr-3">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
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
                                            
                                            <li class="active-range">Lesson range</li>
                                            
                                        </ul>
                                        </div>
                                    </div>
                                    
              </div>
           
        </div>

    </nav>
    <div class="container-fluid middle-teacher-section">

    <div class="container">
        <div class="bottom-section">

             <div class="collapse" id="collapseExample">
                
                                <div class="col-md-12">
                                   <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <div class="left-side-top">
                                        <h3> Introduction to Distilled Spirits <span class="glyph-icon iconsminds-sound"></span></h3>
                                        <div class="video">
                           <iframe src="https://player.vimeo.com/video/468320258" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

                        </div>
                    </div>

                                    </div>
                                    <div class="col-md-8 col-lg-8">
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
                                    <div class="class-name">Module Settings</div>
                                </div>
                            </li>
                             <!-- <li class="user-img"><img src="img/user.svg"></li> -->
            </ul>
        </div>
                                      <!--   <h4>Explanation </h4> -->
                                        <p>A liquor, or distilled spirit, is an alcoholic beverage that is distilled rather than fermented like beer and wine. Distilled spirits include brandy, gin, rum, tequila, whiskey, and vodka, as well as a variety of flavored liqueurs.</p>
                                        <p>The type of alcohol in the alcoholic drinks we drink is a chemical called ethanol. To make alcohol, you need to put grains, fruits or vegetables through a process called fermentation. During this process yeast or bacteria is added, which then reacts with the sugars in food. The by-products are ethanol and carbon dioxide.</p>
                                        <p>Once fermented, the liquid is distilled through either a column still or a pot still. The still's heat forces the alcohol in the fermented liquid to evaporate—alcohol has a lower boiling point than water. The water is left behind, but the alcohol vapor is forced into the next stage of the still, such as a series of coils or another pot, depending on the setup. When the vapor is cooled, it condenses and creates a concentrated alcohol liquid that is so strong—high alcohol by volume (ABV), or proof—that it is undrinkable.</p>
                                       <!--  <p>At the end of distillation, the strong alcohol is collected. It may then be filtered, aged, or flavored (or a combination of any or all three) and diluted with water to the bottling strength. The exact process depends on the type of liquor being made—for instance, gin is flavored within the still—and each distiller's preferred method for any of the distillation steps.</p> -->

                                    </div>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="col-right">
                          <div id="drawflow" ondrop="drop(event)" ondragover="allowDrop(event)">
                           <!--  <div class="btn-export" onclick="Swal.fire({ title: 'Export',
                            html: '<pre><code>'+JSON.stringify(editor.export(), null,4)+'</code></pre>'
                            })">Export</div>
                            <div class="btn-clear" onclick="editor.clearModuleSelected()">Clear</div> -->
                            <div class="btn-lock">
                              <i id="lock" class="fas fa-lock" onclick="editor.editor_mode='fixed'; changeMode('lock');"></i>
                              <i id="unlock" class="fas fa-lock-open" onclick="editor.editor_mode='edit'; changeMode('unlock');" style="display:none;"></i>
                            </div>
                            <div class="bar-zoom" style="top:10px;bottom:auto;left: auto;">
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
           </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="col-right">
                            <div id="drawflow" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="btn-export" onclick="Swal.fire({ title: 'Export',
                            html: '<code>'+JSON.stringify(editor.export(), null,4)+'</code>'
                            })">Export</div>
                            <div class="btn-clear" onclick="editor.clearModuleSelected()">Clear</div>
                            <div class="btn-lock">
                              <i id="lock" class="fas fa-lock" onclick="editor.editor_mode='fixed'; changeMode('lock');"></i>
                              <i id="unlock" class="fas fa-lock-open" onclick="editor.editor_mode='edit'; changeMode('unlock');" style="display:none;"></i>
                            </div>
                            <div class="bar-zoom" style="top:100px;bottom:auto;left: auto;">
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
    
//editor.drawflow ={"drawflow":{"Home":{"data":{"1":{"id":1,"name":"welcome","data":{},"class":"help","html":"\n","typenode":false,"inputs":{},"outputs":{},"pos_x":50,"pos_y":50},"2":{"id":2,"name":"dbclick","data":{"name":""},"class":"dbclick","html":"<div class=\"flow-chart-design start-here\"><div class=\"start-round\" >Start</div></div>","typenode":false,"inputs":{"input_1":{"connections":[]}},"outputs":{"output_1":{"connections":[{"node":"3","output":"input_2"}]}},"pos_x":50,"pos_y":100},"3":{"id":3,"name":"dbclick","data":{"name":""},"class":"dbclick","html":"<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">How is image created?</span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class=\"orange\"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class=\"blue\"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>","typenode":false,"inputs":{"input_1":{"connections":[]},"input_2":{"connections":[{"node":"2","input":"output_1"}]}},"outputs":{"output_1":{"connections":[{"node":"4","output":"input_2"}]},"output_2":{"connections":[]}},"pos_x":304,"pos_y":175},"4":{"id":4,"name":"dbclick","data":{"name":""},"class":"dbclick","html":"<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">What is image?</span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class=\"orange\"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class=\"blue\"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>","typenode":false,"inputs":{"input_1":{"connections":[]},"input_2":{"connections":[{"node":"3","input":"output_1"}]}},"outputs":{"output_1":{"connections":[{"node":"5","output":"input_2"}]},"output_2":{"connections":[]}},"pos_x":587,"pos_y":174},"5":{"id":5,"name":"dbclick","data":{"name":""},"class":"dbclick","html":"<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">How is image created?</span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class=\"orange\"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class=\"blue\"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>","typenode":false,"inputs":{"input_1":{"connections":[]},"input_2":{"connections":[{"node":"4","input":"output_1"}]}},"outputs":{"output_1":{"connections":[]},"output_2":{"connections":[]}},"pos_x":852,"pos_y":167}}}}}; //<span class='alertbox'><img src='img/alert.svg'> </span><span class='usericons'><img src='img/profiles/l-2.jpg'> </span><span class='class-numbers'>15</span>
editor.drawflow = { "drawflow": { "Home": { "data": { "1": { "id": 1, "name": "welcome", "data": {}, "class": "help", "html": "\n", "typenode": false, "inputs": {}, "outputs": {}, "pos_x": 50, "pos_y": 50 }, "2": { "id": 2, "name": "dbclick", "data": { "name": "" }, "class": "dbclick", "html": "<div class='start-round'>Start</div></div><span class='blue-plus' onmousedown='return false' style='display: block;height: 25px;width: 25px; text-align: center;padding-top: 1px;top: 32px; left: 113px;' lastn1='50' lastn2='203'><i class='simple-icon-plus'></i></span>", "typenode": false, "inputs": { "input_1": { "connections": [] } }, "outputs": { "output_1": { "connections": [] } }, "pos_x": -301.6666666666667, "pos_y": 442 }, "3": { "id": 3, "name": "dbclick", "data": { "name": "" }, "class": "dbclick", "html": "<div class='work-flow'><ul class='list-unstyled list-inline'> <li class='square-box' style='border-color:#1266ab; color:#1266ab;'><span class='alertbox'><img src='img/alert.svg'> </span><span class='usericons'><img src='img/profiles/l-2.jpg'> </span><span class='class-numbers'>3</span><span class='divimg' val='uk' color-val=''><img src='https://cerapoda.com/zuzu/img/clapperboard.png' alt='' value='uk' style='margin: 3px; max-width: 20px;'></span><span class='divtext'><a href='#' class='link1'> Intro to <br>Spirits</a></span><div class='pop overlay'><span class='close'>&times;</span> <div class='round-circle-per'>90%</div><div class='left-side'><h4 class='text'>Intro to Spirits</h4><ul class='list-inline list-unstyled'><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><div class='danger-icon'><img src='img/alert.svg'></div><img src='img/user2.svg'></a></li></ul></div><div class='right-side'><ul class='list-unstyled'><li><img src='img/popup1.svg'></li><li><img src='img/popup2.svg'></li><li><img src='img/popup3.svg'></li><li><img src='img/popup4.svg'></li></ul></div></div><div class='popup' tabindex='-1'><div class='inner-content'><div class='left-popup'><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class='right-popup'><ul class='list-unstyled list-inline'><li><a href='#' data-toggle='collapse' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample' ><img src='img/black-icon3.svg'></a></li><li><img src='img/black-icon1.svg'></li><li><img src='img/black-icon2.svg'></li></ul></div><div class='clearfix'></div><p><img src='img/alert.svg'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></li></ul></div><a href='javascript:void(0)' data-backdrop='static' class='orange'><span class='orange-plus'><i class='simple-icon-plus'></i></span></a> <a href='javascript:void(0)' class='blue' onmousedown='return false' lastn1='747' lastn2='265' lastid='node-11'><span class='blue-plus' onmousedown='return false' style='background-color:' data-color=''><i class='simple-icon-plus'></i></span></a>", "typenode": false, "inputs": { "input_1": { "connections": [] }, "input_2": { "connections": [] }, "input_3": { "connections": [] } }, "outputs": { "output_1": { "connections": [ { "node": "11", "output": "input_3" } ] } }, "pos_x": -42.666666666666664, "pos_y": 470 }, "4": { "id": 4, "name": "dbclick", "data": { "name": "" }, "class": "dbclick", "html": "<div class='work-flow'><ul class='list-unstyled list-inline'> <li class='square-box'  style='border-color:#1266ab; color:#1266ab;'></span><span class='usericons'><img src='img/profiles/l-2.jpg'> </span><span class='class-numbers'>10</span><span class='divimg' val='uk' color-val=''><img src='https://cerapoda.com/zuzu/img/clapperboard.png' alt='' value='uk' style='margin: 3px; max-width: 20px;'></span><span class='divtext'><a href='#' class='link1'>Mixing<br> Juices</a></span><div class='pop overlay'><span class='close'>&times;</span><div class='round-circle-per'>97%</div><div class='left-side'><h4 class='text'>Mixing Juices</h4><ul class='list-inline list-unstyled'><li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user2.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user4.svg'></a></li>  <li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li></ul></div><div class='right-side'><ul class='list-unstyled'><li><img src='img/popup1.svg'></li><li><img src='img/popup2.svg'></li><li><img src='img/popup3.svg'></li><li><img src='img/popup4.svg'></li></ul></div></div><div class='popup' tabindex='-1'><div class='inner-content'><div class='left-popup'><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class='right-popup'><ul class='list-unstyled list-inline'><li><img src='img/black-icon3.svg'></li><li><img src='img/black-icon1.svg'></li><li><img src='img/black-icon2.svg'></li></ul></div><div class='clearfix'></div><p><img src='img/alert.svg'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></li></ul></div><a href='javascript:void(0);' data-backdrop='static' class='orange'><span class='orange-plus'><i class='simple-icon-plus'></i></span></a> <a href='javascript:void(0);' class='blue' lastn1='832' lastn2='875' lastid='node-13'><span class='blue-plus' onmousedown='return false' data-color='' style='background-color:'><i class='simple-icon-plus'></i></span></a>", "typenode": false, "inputs": { "input_1": { "connections": [ { "node": "6", "input": "output_1" }, { "node": "7", "input": "output_1" } ] }, "input_2": { "connections": [] }, "input_3": { "connections": [] } }, "outputs": { "output_1": { "connections": [] } }, "pos_x": 741, "pos_y": 465.3333333333333 }, "5": { "id": 5, "name": "dbclick", "data": { "name": "" }, "class": "dbclick", "html": "<div class='work-flow'><ul class='list-unstyled list-inline'> <li class='square-box'  style='border-color:#1266ab; color:#1266ab;'><span class='usericons'><img src='img/profiles/l-2.jpg'> </span><span class='class-numbers'>2</span><span class='divimg' val='de' color-val=''><img src='https://cerapoda.com/zuzu/img/signing.png' alt='' value='de' style='margin: 3px; max-width: 20px;'></span><span class='divtext'><a href='#' class='link1'>Exercise: <br><div>Tequila Sunrise</div></a></span><div class='pop overlay'><span class='close'>&times;</span><div class='round-circle-per'>55%</div><div class='left-side'><h4 class='text'>Exercise: Tequila Sunrise</h4><ul class='list-inline list-unstyled'><li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><li><a href='#' class='link'><img src='img/user2.svg'></a></li></ul></div><div class='right-side'><ul class='list-unstyled'><li><img src='img/popup1.svg'></li><li><img src='img/popup2.svg'></li><li><img src='img/popup3.svg'></li><li><img src='img/popup4.svg'></li></ul></div></div><div class='popup' tabindex='-1'><div class='inner-content'><div class='left-popup'><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class='right-popup'><ul class='list-unstyled list-inline'><li><img src='img/black-icon3.svg'></li><li><img src='img/black-icon1.svg'></li><li><img src='img/black-icon2.svg'></li></ul></div><div class='clearfix'></div><p><img src='img/alert.svg'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></li></ul></div><a href='javascript:void(0);' data-backdrop='static' class='orange'><span class='orange-plus'><i class='simple-icon-plus'></i></span></a> <a href='javascript:void(0);' class='blue'><span class='blue-plus' onmousedown='return false' data-color='' style='background-color:'><i class='simple-icon-plus'></i></span></a>", "typenode": false, "inputs": { "input_1": { "connections": [ { "node": "9", "input": "output_1" }, { "node": "13", "input": "output_1" } ] }, "input_2": { "connections": [] }, "input_3": { "connections": [] } }, "outputs": { "output_1": { "connections": [] } }, "pos_x": 1269.3333333333333, "pos_y": 467 }, "6": { "id": 6, "name": "dbclick", "data": { "name": "" }, "class": "dbclick", "html": "<div class='work-flow'><ul class='list-unstyled list-inline'> <li class='square-box' style='border-color:black;color:black;'><span class='divimg' val='cn' color-val='black'><img src='https://cerapoda.com/zuzu/img/open-book.png' alt='' value='de' style='margin: 3px; max-width: 20px;'></span><span class='divtext'>How are spirits<br>Made</span><div class='pop overlay black-box-border'><span class='close'>&times;</span><div class='round-circle-per black-round'>85%</div><div class='left-side black-box-border'><h4 class='text'>How are spirits made</h4><ul class='list-inline list-unstyled'><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#' class='link'><img src='img/user1.svg'></a></li><li><a href='#' class='link'><img src='img/user3.svg'></a></li><li><div class='dangePE+�U  PE+�U                  0"%�U          pm��U  �E+�U          pE+�U   @      pE+�U           href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg'></a></li>  <li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user2.svg'></a></li><li><a href='#' class='link'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg></a></li> <li><img src='img/popup2.svg'></li><li><img src='img/popup3.svg'></li><li><img src='img/popup4.svg'></li></ul></div></div><div class='popup' tabindex='-1'><div class='inner-content'><div class='left-popup'><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class='right-popup'><ul class='list-unstyled list-inline'><li><img src='img/black-icon3.svg'></li><li><img src='img/black-icon1.svg'></li><li><img src='img/black-icon2.svg'></li></ul></div><div class='clearfix'></div><p><img src='img/alert.svg'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></li></ul></div><a href='javascript:void(0);' data-backdrop='static' class='orange'><span class='orange-plus'><i class='simple-icon-plus'></i></span></a> <a href='javascript:void(0);' class='blue' lastn1='204' lastn2='581' lastid='node-7'><span class='blue-plus' onmousedown='return false' data-color='black' style='background-color:black'><i class='simple-icon-plus'></i></span></a>", "typenode": false, "inputs": { "input_1": { "connections": [] }, "input_2": { "connections": [] }, "input_3": { "connections": [ { "node": "3", "input": "output_1" } ] } }, "outputs": { "output_1": { "connections": [ { "node": "4", "output": "input_1" } ] } }, "pos_x": 267.3333333333333, "pos_y": 257 }, "7": { "id": 7, "name": "dbclick", "data": { "name": "" }, "class": "dbclick", "html": "<div class='work-flow'><ul class='list-unstyled list-inline'> <li class='square-box' style='border-color:black; color:black'><span class='divimg' val='de' color-val='black'><img src='https://cerapoda.com/zuzu/img/signing.png' alt='' value='de' style='margin: 3px; max-width: 20px;'></span><span class='divtext'>what is <br>Tequila</span><div class='pop overlay black-box-border'><span class='close'>&times;</span><div class='round-circle-per black-round'>75%</div><div class='left-side black-box-border'><h4 class='text'>What is Tequila</h4><ul class='list-inline list-unstyled'><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user2.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg'></a></li>  <li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user2.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg'></a></li><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg'></a></li></ul></div><div class='right-side'><ul class='list-unstyled'><li><img src='img/popup1.svg'></li><li><img src='img/popup2.svg'></li><li><img src='img/popup3.svg'></li><li><img src='img/popup4.svg'></li></ul></div></div><div class='popup' tabindex='-1'><div class='inner-content'><div class='left-popup'><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class='right-popup'><ul class='list-unstyled list-inline'><li><img src='img/black-icon3.svg'></li><li><img src='img/black-icon1.svg'></li><li><img src='img/black-icon2.svg'></li></ul></div><div class='clearfix'></div><p><img src='img/alert.svg'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></li></ul></div><a href='javascript:void(0);' data-backdrop='static' class='orange'><span class='orange-plus'><i class='simple-icon-plus'></i></span></a> <a href='javascript:void(0);' class='blue'><span class='blue-plus' onmousedown='return false' data-color='black' style='background-color:black'><i class='simple-icon-plus'></i></span></a>", "typenode": false, "inputs": { "input_1": { "connections": [] }, "input_2": { "connections": [ { "node": "11", "input": "output_1" } ] }, "input_3": { "connections": [] } }, "outputs": { "output_1": { "connections": [ { "node": "4", "output": "input_1" } ] } }, "pos_x": 586, "pos_y": 254 }, "9": { "id": 9, "name": "dbclick", "data": { "name": "" }, "class": "dbclick", "html": "<div class='work-flow'><ul class='list-unstyled list-inline'> <li class='square-box' style='border-color:black; color:black'><span class='class-numbers'>5</span><span class='divimg' val='cn' color-val='black'><img src='https://cerapoda.com/zuzu/img/open-book.png' alt='' value='cn' style='margin: 3px; max-width: 20px;'></span><span class='divtext'>Mixing <br>&nbsp;Methods</span><div class='pop overlay black-box-border'><span class='close'>&times;</span><div class='round-circle-per black-round'>90%</div><div class='left-side black-box-border'><h4 class='text'>Mixing Methods</h4><ul class='list-inline list-unstyled'><li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user2.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user4.svg'></a></li>  <li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user2.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#' class='link'><img src='img/user4.svg'></a></li></ul></div><div class='right-side'><ul class='list-unstyled'><li><img src='img/popup1.svg'></li><li><img src='img/popup2.svg'></li><li><img src='img/popup3.svg'></li><li><img src='img/popup4.svg'></li></ul></div></div><div class='popup' tabindex='-1'><div class='inner-content'><div class='left-popup'><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class='right-popup'><ul class='list-unstyled list-inline'><li><img src='img/black-icon3.svg'></li><li><img src='img/black-icon1.svg'></li><li><img src='img/black-icon2.svg'></li></ul></div><div class='clearfix'></div><p><img src='img/alert.svg'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></li></ul></div><a href='javascript:void(0);' data-backdrop='static' class='orange'><span class='orange-plus'><i class='simple-icon-plus'></i></span></a> <a href='javascript:void(0);' class='blue'><span class='blue-plus' onmousedown='return false' data-color='black' style='background-color:black'><i class='simple-icon-plus'></i></span></a>", "typenode": false, "inputs": { "input_1": { "connections": [] }, "input_2": { "connections": [] }, "input_3": { "connections": [] } }, "outputs": { "output_1": { "connections": [ { "node": "5", "output": "input_1" } ] } }, "pos_x": 1004, "pos_y": 274.6666666666667 }, "10": { "id": 10, "name": "dbclick", "data": { "name": "" }, "class": "dbclick", "html": "<div class='work-flow'><ul class='list-unstyled list-inline'> <li class='square-box' style='border-color:red; color:red'><span class='usericons'><img src='img/profiles/l-2.jpg'> </span><span class='class-numbers'>1</span><span class='divimg' val='uk' color-val='red'><img src='https://cerapoda.com/zuzu/img/clapperboard.png' alt='' value='uk' style='margin: 3px; max-width: 20px;'></span><span class='divtext'><a href='#' class='link1'>What is <br>&nbsp;alcohol</a></span> <div class='pop overlay red-box-border'><span class='close'>&times;</span><div class='round-circle-per red-round'>90%</div><div class='left-side orange-box-border'><h4 class='text'>what is alcohol</h4><ul class='list-inline list-unstyled'><li><div class='danger-icon'><img src='img/alert.svg'></div><a href='#' class='link'><img src='img/user4.svg'></a></li></ul></div><div class='right-side'><ul class='list-unstyled'><li><img src='img/popup1.svg'></li><li><img src='img/popup2.svg'></li><li><img src='img/popup3.svg'></li><li><img src='img/popup4.svg'></li></ul></div></div><div class='popup' tabindex='-1'><div class='inner-content'><div class='left-popup'><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class='right-popup'><ul class='list-unstyled list-inline'><li><img src='img/black-icon3.svg'></li><li><img src='img/black-icon1.svg'></li><li><img src='img/black-icon2.svg'></li></ul></div><div class='clearfix'></div><p><img src='img/alert.svg'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></li></ul></div><a href='javascript:void(0);' data-backdrop='static' class='orange'><span class='orange-plus'><i class='simple-icon-plus'></i></span></a> <a href='javascript:void(0);' class='blue'><span class='blue-plus' onmousedown='return false' data-color='red' style='background-color:red'><i class='simple-icon-plus'></i></span></a>", "typenode": false, "inputs": { "input_1": { "connections": [] }, "input_2": { "connections": [] }, "input_3": { "connections": [] } }, "outputs": { "output_1": { "connections": [ { "node": "11", "output": "input_2" } ] } }, "pos_x": -62.666666666666664, "pos_y": -165 }, "11": { "id": 11, "name": "dbclick", "data": { "name": "" }, "class": "dbclick", "html": "<div class='work-flow'><ul class='list-unstyled list-inline'> <li class='square-box' style='border-color:green; color:green'><span class='divimg' val='uk' color-val='green'><img src='https://cerapoda.com/zuzu/img/clapperboard.png' alt='' value='uk' style='margin: 3px; max-width: 20px;'></span><span class='divtext'>Video intro<br>to Spirits</span><div class='pop overlay green-box-border'><span class='close'>&times;</span><div class='round-circle-per green-round'>90%</div><div class='left-side green-box-border'><h4 class='text'>Video intro to Spirits</h4><ul class='list-inline list-unstyled'><li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user2.svg'></a></li><li><a href='#' class='link'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user4.svg'></a></li>  <li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user2.svg'></a></li><li><a href='#' class='link'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#' class='link'><img src='img/user4.svg'></a></li></ul></div><div class='right-side'><ul class='list-unstyled'><li><img src='img/popup1.svg'></li><li><img src='img/popup2.svg'></li><li><img src='img/popup3.svg'></li><li><img src='img/popup4.svg'></li></ul></div></div><div class='popup' tabindex='-1'><div class='inner-content'><div class='left-popup'><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class='right-popup'><ul class='list-unstyled list-inline'><li><img src='img/black-icon3.svg'></li><li><img src='img/black-icon1.svg'></li><li><img src='img/black-icon2.svg'></li></ul></div><div class='clearfix'></div><p><img src='img/alert.svg'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></li></ul></div><a href='javascript:void(0);' data-backdrop='static' class='orange'><span class='orange-plus'><i class='simple-icon-plus'></i></span></a> <a href='javascript:void(0);' class='blue'><span class='blue-plus' onmousedown='return false' data-color='green' style='background-color:green'><i class='simple-icon-plus'></i></span></a>", "typenode": false, "inputs": { "input_1": { "connections": [] }, "input_2": { "connections": [] }, "input_3": { "connections": [ { "node": "3", "input": "output_1" } ] } }, "outputs": { "output_1": { "connections": [ { "node": "7", "output": "input_2" } ] } }, "pos_x": 209, "pos_y": 57.333333333333336 }, "13": { "id": 13, "name": "dbclick", "data": { "name": "" }, "class": "dbclick", "html": "<div class='work-flow'><ul class='list-unstyled list-inline'> <li class='square-box' style='border-color:green; color:green'><span class='class-numbers'>5</span><span class='divimg' val='uk' color-val='green'><img src='https://cerapoda.com/zuzu/img/clapperboard.png' alt='' value='uk' style='margin: 3px; max-width: 20px;'></span><span class='divtext'>Video intro<br>to Spirits</span><div class='pop overlay green-box-border'><span class='close'>&times;</span><div class='round-circle-per green-round'>95%</div><div class='left-side green-box-border'><h4 class='text'>Video intro to Spirits</h4><ul class='list-inline list-unstyled'><li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user2.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user4.svg'></a></li>  <li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#' ><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user2.svg'></a></li><li><a href='#'><img src='img/user1.svg'></a></li><li><a href='#'><img src='img/user3.svg'></a></li><li><a href='#' class='link'><img src='img/user4.svg'></a></li><li><a href='#' class='link'><img src='img/user4.svg'></a></li></ul></div><div class='right-side'><ul class='list-unstyled'><li><img src='img/popup1.svg'></li><li><img src='img/popup2.svg'></li><li><img src='img/popup3.svg'></li><li><img src='img/popup4.svg'></li></ul></div></div><div class='popup' tabindex='-1'><div class='inner-content'><div class='left-popup'><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class='right-popup'><ul class='list-unstyled list-inline'><li><img src='img/black-icon3.svg'></li><li><img src='img/black-icon1.svg'></li><li><img src='img/black-icon2.svg'></li></ul></div><div class='clearfix'></div><p><img src='img/alert.svg'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></li></ul></div><a href='javascript:void(0);' data-backdrop='static' class='orange'><span class='orange-plus'><i class='simple-icon-plus'></i></span></a> <a href='javascript:void(0);' class='blue'><span class='blue-plus' onmousedown='return false' data-color='green' style='background-color:green'><i class='simple-icon-plus'></i></span></a>", "typenode": false, "inputs": { "input_1": { "connections": [] }, "input_2": { "connections": [] }, "input_3": { "connections": [] } }, "outputs": { "output_1": { "connections": [ { "node": "5", "output": "input_1" } ] } }, "pos_x": 996, "pos_y": 68 } } } } };

editor.start();
 //var dbclick = '<div class=\"flow-chart-design start-here\"><div class=\"start-round\" >Start</div></div>';
//editor.addNode('dbclick', 1, 1, 50, 100, 'dbclick', { name: ''}, dbclick );
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
  <!-- <script>
         function myFunction() {
                  var x = document.getElementById("hideme");
                  if (x.style.display == "none") {
                    x.style.display = "block";
                  } else {
                    x.style.display = "none";
                  }
                }
        </script> -->
        <!-- <script src="js/jquery.min.js"></script> -->
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
     <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/bootstrap-notify.min.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/progressbar.min.js"></script>
    <script src="js/vendor/ckeditor5-build-classic/ckeditor.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
<div class="modal fade modal-right sidebarpopup" id="exampleModalRight" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalRight" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"></h5>
                                           <div class="main-icons">
                                       <ul class="list-unstyled list-inline">
                                         <li> <div class="glyph">
                                    <img src="img/video-icon.png" style="padding-right: 0px;width:40px;height:40px">
                                    <div class="class-name" contentEditable="true" style="font-weight:600">Video</div>
                                </div>
                            </li>
                               <li>
                                <div class="class-name static-title" contentEditable="true" style="font-weight:600">Choose Unit</div>
                       <select class="vodiapicker">
                            <option value="en" class="test" data-thumbnail="https://cerapoda.com/zuzu/img/eyeicon.png">
                               <!--  <div class="class-name" style="font-weight:600">Choose Unit</div> -->
                            </option>
                            <option value="uk" data-thumbnail="https://cerapoda.com/zuzu/img/video-icon.png" class="rounded-circle">Video</option>
                            <option value="cn" data-thumbnail="https://cerapoda.com/zuzu/img/text-icon.png" class="rounded-circle">Text</option>
                            <option value="de" data-thumbnail="https://cerapoda.com/zuzu/img/exam-icon.png" class="rounded-circle">Exam</option>
                        </select>
                    <div class="lang-select">
                    <button class="btn-select" value=""></button>
                    <div class="b" style="display: none;">
                    <ul id="a"></ul>
                    </div>
                    </div>
                    </li>     
            </ul>
        </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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


                                              <li class="radio-btns">
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
                                              </li>
                                              <li class="minratings"><label>Min quastion Rating</label></li>
                                              <li>
                                                    <div class="chapter-slider1">
                                                             <div class="slider">
                                                                <span><output id="rangevalue">5</output></span>
                                                      <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
                                                        
                                                      </div>
                                                    </div>
                                              </li>
                                               <li class="minratings"><label>Minimum viewing time</label></li>
                                            
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
                                              </li>

                                               <!-- <li class="minratings"></li> -->
                                               <li class="view-speed">
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
                                              </li>

                                              <li class="view-speed">
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
                                              </li>
                                         
                                            
                                        </ul>
                                        </div>
                                        <textarea id="divtext">How is image created?</textarea>
                                            
                                    </div>
                                    
              </div>
                                         
                                        </div>
                                        <div class="tab-pane fade" id="second" role="tabpanel"
                                            aria-labelledby="second-tab">
                                            <h6 class="mb-4">Wedding Cake with Flowers Macarons and Blueberries</h6>
                                          

                                        </div>
                                        <div class="tab-pane fade" id="third" role="tabpanel"
                                            aria-labelledby="third-tab">
                                            <h6 class="mb-4">Lorem Ipsum Dolor</h6>

                                            <div class="html-editor-bubble" id="quillEditorBubble"> </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" id="btnAddtoList1">Save</button>
                                            <button type="button" class="btn btn-primary" id="btnAddtoList2" style="display:none;">Update</button>
                                            <input type="hidden" id="edittestid">
                                             <button type="button" class="btn btn-outline-primary"
                                                data-dismiss="modal">Discard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- <div class="popup" tabindex="-1">
    <div class="inner-content">
        <div class="left-popup">
            <h3>Joe Smith</h3>
            <h4>BFA Student</h4>
            <p>Last Activity: Sep 8, 2020</p>
        </div>
        <div class="right-popup">
            <ul class="list-unstyled list-inline">
                <li><img src="img/black-icon3.svg"></li>
                <li><img src="img/black-icon1.svg"></li>
                <li><img src="img/black-icon2.svg"></li>
            <li><img src="img/black-icon4.svg"></li>
            </ul>
        </div>
        <div class="clearfix"></div>
       
        <p><img src="img/alert.svg"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p>



    </div> -->
    <!-- <a class="close" href="#">Close</a> -->
  </div>
<script type="text/javascript">
    $(function() {
    rightpop++;
    $('#btnAddtoList1').click(function(){
       var divtext=$('#divtext').val();
        var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">'+divtext+'</span></li></ul></div><a href=\"#\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"#\" class="blue"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>';
        editor.addNode('dbclick', 2, 2, 50, 100, 'dbclick', { name: ''}, dbclick );
          $('#exampleModalRight button.close').trigger('click');
        });
    });
    $('body').on('click','.drawflow .connection .main-path',function(){
        $('#exampleModalRight').modal('show');
    })
    $('body').on('click','.flow-chart-design.start-here .start-round',function(){
        
        topbot=$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('style');
        newtopbot=topbot.split(";");
        n1=parseInt(newtopbot[0].match(/\d+/)[0],10);
        n2=parseInt(newtopbot[1].match(/\d+/)[0],10);
        if(n1>280){
            n1=50;
            n2=n2+170;
        }else{
            n1=n1+90;
        }
        var divtext=$('#divtext').val();
      var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">'+divtext+'</span></li></ul></div><a href=\"javascript:void(0)\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0)\" class="blue"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>';
     //   editor.addNode('dbclick', 2, 2, n2, n1, 'dbclick', { name: ''}, dbclick );
    //  $('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('blue-div');
    })
    $('#btnAddtoList2').click(function(){
        $idv=$('#edittestid').val();
        divtext=$('#divtext').val();
        $('.drawflow').find('#'+$idv+' .divtext').html(divtext);
        $('#edittestid').val('');
        $('#divtext').val('How is image created?');
        $('#exampleModalRight button.close').trigger('click');
        $('#btnAddtoList2').hide();
        $('#btnAddtoList1').show();
    })
    $('body').on('click','.edit-icon',function(){
        $('#exampleModalRight').modal('show');
        $('#divtext').val($(this).closest('.work-flow').find('.divtext').html());
        $('#edittestid').val($(this).closest('.drawflow-node').attr('id'));
        $('#btnAddtoList1').hide();
        $('#btnAddtoList2').show();
    });
    $(document).ready(function(){         
            $('body').on('click',".link1",function(e){
                e.preventDefault();
                $(this).closest('.drawflow-node').find(".pop").fadeIn(300,function(){$(this).focus();});
            });
            $('body').on('click','.close',function() {
               $(this).closest(".pop").fadeOut(300);
            });
            /*$('body').on('blur',".pop",function(){
                $(this).fadeOut(300);
            });*/
            $('body').on('click',".link",function(e){
                e.preventDefault();
               // $(".popup").fadeIn(300,function(){$(this).focus();});
			    $(this).closest('.drawflow-node').find(".popup").fadeIn(300,function(){$(this).focus();});
            });
            $('body').on('click',".link",function(e){
                e.preventDefault();
              //  $(".popup").fadeIn(300,function(){$(this).focus();});
			  $(this).closest('.drawflow-node').find(".popup").fadeIn(300,function(){$(this).focus();});
            });
            $('body').on('blur',".popup",function(){
                $(this).fadeOut(300);
            });     
            $('body').on('click','.blue-div a',function(){
            if($(this).hasClass('orange')){
                var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">No Text</span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class="blue"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>';
                topbot=$(this).closest('.drawflow-node').attr('style');
                newtopbot=topbot.split(";");
                n1=parseInt(newtopbot[0].match(/\d+/)[0],10);
                n2=parseInt(newtopbot[1].match(/\d+/)[0],10);
                n1=n1+110;
                editor.addNode('dbclick', 2, 2, n2, n1, 'dbclick', { name: ''}, dbclick );
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('orange-div');
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('data-con','connection-orange-row');
            }else{
                var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">No Text</span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class="blue"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>';
                topbot=$(this).closest('.drawflow-node').attr('style');
                newtopbot=topbot.split(";");
                n1=parseInt(newtopbot[0].match(/\d+/)[0],10);
                n2=parseInt(newtopbot[1].match(/\d+/)[0],10);
                n2=n2+200;
                editor.addNode('dbclick', 2, 2, n2, n1, 'dbclick', { name: ''}, dbclick );
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('blue-div');
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('data-con','connection-blue-row');
            }
        });
        $('body').on('click','.orange-div a',function(){
            if($(this).hasClass('orange')){
                var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">No Text</span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class="blue"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>';
                topbot=$(this).closest('.drawflow-node').attr('style');
                newtopbot=topbot.split(";");
                n1=parseInt(newtopbot[0].match(/\d+/)[0],10);
                n2=parseInt(newtopbot[1].match(/\d+/)[0],10);
                n1=n1+110;
                editor.addNode('dbclick', 2, 2, n2, n1, 'dbclick', { name: ''}, dbclick );
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('green-div');
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('data-con','connection-green-row');
            }else{
                var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">No Text</span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class="blue"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>';
                topbot=$(this).closest('.drawflow-node').attr('style');
                newtopbot=topbot.split(";");
                n1=parseInt(newtopbot[0].match(/\d+/)[0],10);
                n2=parseInt(newtopbot[1].match(/\d+/)[0],10);
                n2=n2+200;
                editor.addNode('dbclick', 2, 2, n2, n1, 'dbclick', { name: ''}, dbclick );
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('orange-div');
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('data-con','connection-orange-row');
            }
        });
        $('body').on('click','.green-div a',function(){
            if($(this).hasClass('orange')){
                var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">No Text</span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class="blue"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>';
                topbot=$(this).closest('.drawflow-node').attr('style');
                newtopbot=topbot.split(";");
                n1=parseInt(newtopbot[0].match(/\d+/)[0],10);
                n2=parseInt(newtopbot[1].match(/\d+/)[0],10);
                n1=n1+110;
                editor.addNode('dbclick', 2, 2, n2, n1, 'dbclick', { name: ''}, dbclick );
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('red-div');
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('data-con','connection-red-row');
            }else{
                var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><span class=\"divtext\">No Text</span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class="blue"><span class=\"blue-plus\"><i class=\"simple-icon-plus\"></i></span></a>';
                topbot=$(this).closest('.drawflow-node').attr('style');
                newtopbot=topbot.split(";");
                n1=parseInt(newtopbot[0].match(/\d+/)[0],10);
                n2=parseInt(newtopbot[1].match(/\d+/)[0],10);
                n2=n2+200;
                editor.addNode('dbclick', 2, 2, n2, n1, 'dbclick', { name: ''}, dbclick );
                $('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('green-div');
                    $('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('data-con','connection-green-row');
            }
        });
       /* $('.drawflow').bind('mousewheel', function(e){
            if(e.originalEvent.wheelDelta /120 > 0) {
                editor.zoom_out();
            }else{
                editor.zoom_in();
            }
        });*/
        $('#drawflow').find('svg').remove();
        $('#drawflow').find('#node-3').closest('.parent-node').append('<svg class="connection node_in_node-3 node_out_node-2 output_1 input_2 connection-blue-row"><path class="main-path" d=" M -185.6667073567708 509.00006103515614 C -115.41669209798174 509.00006103515614 -115.41669209798175 507.9999999999999 -45.1666768391927  507.9999999999999" style="stroke:"></path></svg>');
        $('#drawflow').find('#node-4').closest('.parent-node').append('<svg class="connection node_in_node-4 node_out_node-3 output_1 input_2 connection-blue-row" data-in="node-4"><path class="main-path" d=" M 105.33330281575519 506.5000406901041 C 423.4166208902994 506.5000406901041 423.41662089029944 505.3333740234374 741.4999389648436  505.3333740234374" style="stroke:"></path></svg>');
        
        $('#drawflow').find('#node-5').closest('.parent-node').append('<svg class="connection node_in_node-5 node_out_node-4 output_1 input_2 connection-blue-row" data-in="node-5"><path class="main-path" d=" M 891.9999694824215 503.8333892822264 C 1081.9166564941402 503.8333892822264 1081.9166564941402 505.000045776367 1271.833343505859  505.000045776367" style="stroke:"></path></svg>');
        
        $('#drawflow').find('#node-6').closest('.parent-node').append('<svg class="connection node_in_node-6 node_out_node-3 output_1 input_3"><path class="main-path" d=" M 105.33330281575519 506.5000406901041 C 224.8332875569661 506.5000406901041 224.8332875569661 334.500020345052 344.333272298177  334.500020345052" style="stroke:black"></path></svg>');
        
        $('#drawflow').find('#node-7').closest('.parent-node').append('<svg class="connection node_in_node-7 node_out_node-6 output_1 input_2 connection-blue-row" data-in="node-7"><path class="main-path" d=" M 420.3333536783853 293.5000610351562 C 503.4166463216145 293.5000610351562 503.4166463216145 292.00004069010413 586.4999389648436  292.00004069010413" style="stroke:black"></path></svg><svg class="connection node_in_node-4 node_out_node-6 output_1 input_1"><path class="main-path" d=" M 420.3333536783853 293.5000610351562 C 618.6666463216145 293.5000610351562 618.6666463216145 465.3333536783853 816.9999389648436  465.3333536783853" style="stroke:black"></path></svg><svg class="connection node_in_node-4 node_out_node-7 output_1 input_1"><path class="main-path" d=" M 737.0000203450519 290.50003051757807 C 776.9999796549478 290.50003051757807 776.9999796549478 465.3333536783853 816.9999389648436  465.3333536783853" style="stroke:black"></path></svg>');
        
        $('#drawflow').find('#node-9').closest('.parent-node').append('<svg class="connection node_in_node-9 node_out_node-4 output_1 input_2 connection-blue-row" data-in="node-9"><path class="main-path" d=" M 892.0000203450519 503.83331298828114 C 948.2500203450519 503.83331298828114 948.2500203450519 310.6667277018229 1004.5000203450519  310.6667277018229" style="stroke:black"></path></svg><svg class="connection node_in_node-5 node_out_node-9 output_1 input_1"><path class="main-path" d=" M 1154.9999999999995 309.16664123535145 C 1251.1666717529292 309.16664123535145 1251.1666717529292 464.99999999999983 1347.333343505859  464.99999999999983" style="stroke:black"></path></svg>');
        
        $('#drawflow').find('#node-10').closest('.parent-node').append('<svg class="connection node_in_node-10 node_out_node-3 output_1 input_2 connection-blue-row" data-in="node-10"><path class="main-path" d=" M 105.33330281575519 506.5000406901041 C 190.58329264322913 506.5000406901041 -150.41666666666663 -126.99997456868485 -65.16667683919269  -126.99997456868485" style="stroke:red"></path></svg>');
        
        $('#drawflow').find('#node-11').closest('.parent-node').append('<svg class="connection node_in_node-11 node_out_node-3 output_1 input_3"><path class="main-path" d=" M 105.33330281575519 506.5000406901041 C 194.6666361490885 506.5000406901041 194.6666361490885 136.83339436848956 283.9999694824218  136.83339436848956" style="stroke:green"></path></svg><svg class="connection node_in_node-11 node_out_node-10 output_1 input_2"><path class="main-path" d=" M 85.33330281575519 -128.49995930989581 C 147.4166361490885 -128.49995930989581 147.4166361490885 97.33339436848956 209.49996948242182  97.33339436848956" style="stroke:red"></path></svg><svg class="connection node_in_node-7 node_out_node-11 output_1 input_2"><path class="main-path" d=" M 359.99999999999994 95.83333333333331 C 473.24996948242176 95.83333333333331 473.24996948242176 292.00004069010413 586.4999389648436  292.00004069010413" style="stroke:green"></path></svg>');
        $('#drawflow').find('#node-13').closest('.parent-node').append('<svg class="connection node_in_node-13 node_out_node-4 output_1 input_2 connection-blue-row" data-in="node-13"><path class="main-path" d=" M 891.9999694824215 503.8333892822264 C 944.2500305175778 503.8333892822264 944.2500305175778 105.99995422363278 996.500091552734  105.99995422363278" style="stroke:green"></path></svg><svg class="connection node_in_node-5 node_out_node-13 output_1 input_1"><path class="main-path" d=" M 1146.9999694824214 104.50004577636716 C 1247.1666564941402 104.50004577636716 1247.1666564941402 464.99999999999983 1347.333343505859  464.99999999999983" style="stroke:green"></path></svg>');
        $('#drawflow').find('#node-10 .output.output_1').attr('style','background-color:red;');
        $('#drawflow').find('#node-11 .output.output_1').attr('style','background-color:green;');
        $('#drawflow').find('#node-13 .output.output_1').attr('style','background-color:green;');
        $('#drawflow').find('#node-6 .output.output_1').attr('style','background-color:black;');
        $('#drawflow').find('#node-7 .output.output_1').attr('style','background-color:black;');
        $('#drawflow').find('#node-9 .output.output_1').attr('style','background-color:black;');
        editor.zoom_out();
        editor.zoom_out();
        editor.zoom_out();
        editor.zoom_out();
        editor.zoom_out();
        
    });
</script>
<style  type="text/css">
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
    height: 76px;
    border-radius: 0;
    position:absolute;
}
.drawflow .drawflow-node .output_1{
    background-color: #009BF2;
    height: 30px;
    width: 30px;
    right: -136px;
    top:10px;
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
    font-size:16px;
    background-color: #009BF2;
    border-radius: 50%;
    padding: 0px 0px 0px 0px;
    width: 18px;
    height: 18px;
    color: #fff;
    top: 3px;
    right: 0;
    left: 143px;
    z-index: 5;
    display:none;
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
    stroke:#939899;
}/*
.edit-icon{
    position: absolute;
    top: 42px;
    left: 120px;
    color: #FF9900;
    font-size: 16px;
}
.drawflow .drawflow-node .output_1:before,.drawflow .drawflow-node .output_2:before{
    content: "\e095";
    color:#FFF;
    font-family: 'simple-line-icons';
    left: 6px;
    font-size: 18px;
    top: 2px;
    position: absolute;
}*/
.sidebarpopup .main-icons ul li:last-child {
  /*  float: right;
    width: 40%;
    margin-top: 7px;*/
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

/*.btn-select{
  margin-top: 10px;
  width: 100%;
  max-width: 350px;
  height: 34px;
  border-radius: 5px;
  background-color: #fff;
  border: 1px solid #ccc;
 
}
.btn-select li{
  list-style: none;
  float: left;
  padding-bottom: 0px;
}

.btn-select:hover li{
  margin-left: 0px;
}

.btn-select:hover{
  background-color: #F4F3F3;
  border: 1px solid transparent;
  box-shadow: inset 0 0px 0px 1px #ccc;
  
  
}

.btn-select:focus{
   outline:none;
}
*/
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
    right: 100px;
    margin-top: -41px;
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
.drawflow-node .inputs, .drawflow .drawflow-node .outputs{
    display:none;
}
.pop.overlay span.close {
    padding: 2px 8px;
}
.square-box a {
    color:#009BF2 !important;
}
span.divimg {
 display: block;
    position: absolute;
    top: 60px;
    right: 0;
    left: 0;
}
span.divimg img {
    max-width: 40px !important;
    width: 40px;
}
.square-box {
    width: 200px;
    height: 120px;
        font-size: 20px;
        cursor: pointer;
}
#drawflow{
        cursor: grab;
}
.side-icons-popup {
    padding-left: 18px;
    position: relative;
    z-index: 999;
    top: 40px;
	width: 80%;
}
.middle-teacher-section {
    height: 850px;
   overflow-x: hidden;
    /* overflow-y: auto;*/
}
.user-tamin.user {
    padding-top: 0;
    margin-top: -26px !important;
}
.user-tamin.user a span img {
    width: 75px;
    position: relative;
    top: 32px;
}
a.link1 {
    color: inherit !important;
}
.right-popup ul li {
    margin-right: 0 !important;
}
.popup {
      height: 260px;
    width: 360px;
    z-index: 999;
    position: relative;
    text-align: left;
    top: 204px;
    left: -129px;
}

.noUi-target {
    width: 100% !important;
    height: 2px !important;
    background-color: #222222;
    border: 1px solid #222222;
    border-radius: 10px;
    transition: all 0.3s ease;
}
.noUi-horizontal .noUi-tooltip {
    top: -290%;
    bottom: unset;
    padding-left: 10px;
    padding-right: 10px;
    right: 0;
    left: 0%;
    z-index: 9999;
    position: absolute;
    background: transparent;
    text-align: center;
    font-size: 18px;
    display: block;
    margin: auto;
    padding: 10px 0px;
    width: 100%;
    color: #4B5BEA;
}
.noUi-handle{
    position: absolute;
}
.noUi-horizontal .noUi-handle {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    top: -10px;
    border-color: blue;
    background: blue;
    border: 1px solid #D9D9D9;
    right: -17px;
    left: auto;
}
.black-color a{
color: black !important;
}
.danger-icon {
    position: relative;
    display: block;
    left: 0px;
    top: 6px;
}
.danger-icon img {
   width: 20px !important;
    height: 20px !important;
    object-fit: contain;
    border-radius: 0 !important;
    position: absolute;
}
li.dashboardclick {
    text-align: center;
}
li.dashboardclick.timer-set {
    padding-top: 12px;
    padding-bottom: 20px;
}
</style>
<script>
  /*  $('body').on('click', function(e) {
  $('body').addClass('changeCursor');
  e.stopPropagation();
});*/

jQuery('.main-menu ul.list-unstyled').on('click','a',function(){
if($( "body" ).hasClass( "sub-show-temporary" )){
jQuery('#app-container').removeClass('sub-show-temporary');
}else{
jQuery('#app-container').addClass('sub-show-temporary');
}
})
</script>
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
    // When the user clicks on <span> (x), close the modal
/*close.onclick = function() {
  pop.style.display = "none";
}*/
</script>
<!-- <script>
    $(function(){
    $(document).click(function (e) {
        if (!$(e.target).hasClass("link1")
            && $(e.target).parents(".pop").length === 0)
        {
            $(".pop").hide();
        }
    });
    });
</script> -->
<!-- <script type="text/javascript">

jQuery(".side-icons-popup").click(function() {
  jQuery(".chapter-slider").toggle();
  jQuery(".blue-status").toggle();
  jQuery(".sessions").toggle(); 
 

});
</script> -->

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
<script>
$('body').on('dragstart','img',function(event) { event.preventDefault(); });
</script>
</body>

</html>