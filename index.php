<!doctype html>
<html lang="en">

<?php  include 'css.php'?>

<body>

    <div class="wrapper">
        <!-- navbar  -->
        <?php include 'navbar.php' ?>

        <section class="panel-container" id="panelConttainer">
            <!-- sidebar  -->
            <?php include 'sidebar.php' ?>

            <!-- main container  -->
            <div class="admin-main">
                <div class="row m-0">
                    <div class="col-md-6 ps-0">
                        <div class="row m-0">
                            <div class="col-md-6">
                                <div class="adm-com">
                                    <div class="adm-box d-flex align-items-center justify-content-between">
                                        <div class="adm-heading">
                                            <h3 class="">78 </h3>
                                            <p class="adm-para">Total Project Handled</p>
                                        </div>
                                        <div>
                                            <i class="fas fa-star adm-icon c-aqua"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adm-com">
                                    <div class="adm-box d-flex align-items-center justify-content-between">
                                        <div class="adm-heading">
                                            <h3 class="">214 </h3>
                                            <p class="adm-para">Contacts you have</p>
                                        </div>
                                        <div>
                                            <i class="fas fa-user adm-icon c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adm-com">
                                    <div class="adm-box d-flex align-items-center justify-content-between">
                                        <div class="adm-heading">
                                            <h3 class="">93 </h3>
                                            <p class="adm-para">Total Unfinished Task</p>
                                        </div>
                                        <div>
                                            <i class="fad fa-th-large adm-icon c-red"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adm-com">
                                    <div class="adm-box d-flex align-items-center justify-content-between">
                                        <div class="adm-heading">
                                            <h3 class="">12 </h3>
                                            <p class="adm-para">Unread Messages</p>
                                        </div>
                                        <div>
                                            <i class="fas fa-comment-alt-lines adm-icon c-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="adm-com">
                                    <!-- <h3>Project Created</h3> -->
                                    <div class="bar-chart-header border-bottom py-2 d-flex justify-content-between align-items-center">
                                        <div class="adm-heading ">
                                            <h6>Project created</h6>
                                        </div>
                                        <div class="toggle-btn">
                                            <button class="c-btn">Daily</button>
                                            <button class="c-btn">Weekly</button>
                                            <button class="c-btn active">Monthly</button>
                                        </div>
                                    </div>
                                    <div id="chartdiv"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adm-com">
                                    <div class="d-flex justify-content-between align-items-center border-bottom py-3">
                                        <h6 class="my-auto">Monthly Target</h6>
                                        <div class="dropdown">
                                            <i class="fas fa-ellipsis-v c-black" data-bs-toggle="dropdown" arial-expanded="false"></i>
                                            <ul class="dropdown-menu">
                                                <li><a href="" class="dropdown-item">Monthly Target</a></li>
                                                <li><a href="" class="dropdown-item">Monthly Target</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="piechart"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adm-com">
                                    <div class="d-flex justify-content-between align-items-center border-bottom py-3">
                                        <h6 class="my-auto">New Clients</h6>
                                        
                                        <div class="dropdown">
                                            <i class="fas fa-ellipsis-v c-black" data-bs-toggle="dropdown" arial-expanded="false"></i>
                                            <ul class="dropdown-menu">
                                                <li><a href="" class="dropdown-item">New Clients</a></li>
                                                <li><a href="" class="dropdown-item">New Clients</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="linechart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ps-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="adm-com">
                                    <div
                                        class="top-header d-flex align-items-center border-bottom justify-content-around">
                                        <div class="adm-heading">
                                            <h5>Quick To-Do List</h5>
                                            <p class="adm-para">Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <div class="icon-bg">
                                        <i class="fal fa-file-plus c-blue todo-icon"></i>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <ul class="p-0">
                                            <li class="d-flex-inline border-bottom pb-3">
                                                <div class="adm-heading">
                                                    <button class=" bg-yellow c-button">Graphic Designer</button>
                                                    <p class="adm-para">Visual Graphics for Presentation to Client
                                                    </p>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="multi-img">
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-3.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-5.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-1.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-2.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                        </div>
                                                      
                                                        
                                                        <!-- <img class=" position-absolute top-0 left-0" src="./assets/images/ava-1.png" height="30px" width="auto" alt="" srcset=""> -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="d-flex adm-heading">
                                                            <p>Progress</p>
                                                            <p class="ms-3 c-blue">45%</p>
                                                        </div>
                                                        <div>
                                                            <div class="progress pg-bar">
                                                                <div class="progress-bar bg-blue" role="progressbar"
                                                                    style="width: 45%;" aria-valuenow="45"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="d-flex-inline border-bottom pb-3">
                                                <div class="adm-heading">
                                                    <button class=" bg-aqua c-button">Digital
                                                        Marketing</button>
                                                    <p class="adm-para">Build Database Design for Fasto Admin v2</p>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                    <div class="multi-img">
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-5.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-4.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-2.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-1.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="d-flex adm-heading">
                                                            <p>Progress</p>
                                                            <p class="ms-3 c-blue">79%</p>
                                                        </div>
                                                        <div>
                                                            <div class="progress pg-bar">
                                                                <div class="progress-bar bg-blue" role="progressbar"
                                                                    style="width: 79%;" aria-valuenow="79"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="d-flex-inline border-bottom pb-3">
                                                <div class="adm-heading">
                                                    <button class="bg-pink c-button">Programmer</button>
                                                    <p class="adm-para">Make Promotional Ads for Instagram Fasto's
                                                    </p>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                    <div class="multi-img">
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-1.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-4.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-5.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                            <div class="profiles">
                                                                <img class="" src="./assets/images/ava-2.png" height="25px" width="auto" alt="" srcset="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="d-flex adm-heading align-items-center">
                                                            <p>Progress</p>
                                                            <p class="ms-3 c-blue">36%</p>
                                                        </div>
                                                        <div>
                                                            <div class="progress pg-bar">
                                                                <div class="progress-bar bg-blue" role="progressbar"
                                                                    style="width: 36%;" aria-valuenow="36"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="list-bottom text-center">
                                            <button class="c-button more-btn replay-btn px-3">26 Tasks
                                                more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adm-com">
                                    <div class="top-header d-flex align-items-center border-bottom justify-content-around pb-4">
                                        <div class="adm-heading">
                                            <h5>Upcoming Projects</h5>
                                            <!-- <p class="adm-para">Lorem ipsum dolor sit amet</p> -->
                                        </div>
                                        <div class="icon-bg">
                                            <i class="fal fa-files-medical c-blue todo-icon"></i>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <ul class="p-0">
                                            <li class="d-flex flex-column border-bottom pb-3">
                                                <div class="adm-heading">
                                                    <p class="c-aqua">Booklym Simmons</p>
                                                </div>
                                                <div class="">
                                                    <div class=" adm-heading d-flex">
                                                        <div>
                                                            <h6 class="adm-para">Redesign Kripton Mobile App</h6>
                                                            <p class=""><i class="fas fa-calendar me-2"></i> Created on Sep 8th, 2020</p>
                                                        </div>
                                                        <div>
                                                            <div class="dropdown">

                                                                <i class="fas fa-ellipsis-v" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="" class="dropdown-item">Heading</a></li>
                                                                    <li><a href="" class="dropdown-item">Title</a></li>
                                                                    <li><a href="" class="dropdown-item">Date</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="d-flex adm-heading align-items-center">
                                                            <!-- <div class=" icon-border ">
                                                                <i class="fas fa-bolt p-3"></i>
                                                            </div> -->
                                                            <div class="radialProgressBar progress-10">
                                                                <div class="overlay">
                                                                    <i class="fas fa-bolt p-3"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3">
                                                                <p>Deadliine</p>
                                                                <h6>Tuesday, Sep 29th 2020</h6>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="d-flex flex-column border-bottom pb-3">
                                                <div class="adm-heading">
                                                    <p class="c-blue">Jenny Wilson</p>
                                                </div>
                                                <div class="">
                                                    <div class=" adm-heading d-flex">
                                                        <div>
                                                            <h6 class="adm-para">Build Branding Persona for Etza.id</h6>
                                                            <p class=""><i class="fas fa-calendar me-2"></i> Created on Sep 8th, 2020</p>
                                                        </div>
                                                        <div class="">
                                                            <div class="dropdown">
                                                                <i class="fas fa-ellipsis-v" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="" class="dropdown-item">Title</a></li>
                                                                    <li><a href="" class="dropdown-item">Date</a></li>
                                                                    <li><a href="" class="dropdown-item">Settings</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="d-flex adm-heading align-items-center">
                                                            <div class="border rounded-pill bg-blue">
                                                                <!-- <p>circle</p> -->
                                                                <i class="fas fa-bolt p-3"></i>
                                                            </div>
                                                            <div class="ms-3">
                                                                <p>Deadliine</p>
                                                                <h6>Tuesday, Sep 29th 2020</h6>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="d-flex flex-column ">
                                                <div class="adm-heading">
                                                    <p class="c-yellow">Robert Fox</p>
                                                </div>
                                                <div class="">
                                                    <div class=" adm-heading d-flex">
                                                        <div>
                                                            <h6 class="adm-para">Manage SEO for Eclan Company Profile</h6>
                                                            <p class=""><i class="fas fa-calendar me-2"></i> Created
                                                                on Sep 8th, 2020</p>
                                                        </div>
                                                        <div>
                                                            <div class="dropdown">

                                                                <i class="fas fa-ellipsis-v " data-bs-toggle="dropdown" arial-expanded="false"></i>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="" class="dropdown-item">Manage</a></li>
                                                                    <li><a href="" class="dropdown-item">Manage</a></li>
                                                                    <li><a href="" class="dropdown-item">Manage</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="d-flex adm-heading align-items-center">
                                                            <div class="border rounded-pill bg-yellow">
                                                                <!-- <p>circle</p> -->
                                                                <i class="fas fa-bolt p-3 "></i>
                                                            </div>
                                                            <div class="ms-3">
                                                                <p>Deadliine</p>
                                                                <h6>Tuesday, Sep 29th 2020</h6>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="adm-com">
                                    <div class="adm-heading py-3 border-bottom d-flex align-items-center justify-content-between">
                                        <h6>Recent Messages</h6>
                                        <button class="btn btn-primary rounded-pill">+ New Message</button>
                                    </div>
                                    <div class="message-box">

                                        <ul class="adm-heading m-0 p-0">
                                            <li class="mt-3">
                                                <a href="#" class="d-flex justify-content-between">
                                                    <div class="me-3">
                                                        <img src="./assets/images/ava-2.png" height="50px" alt="">
                                                    </div>
                                                    <div class="me-3">
                                                        <h6>Chandara Kiv</h6>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eaque explicabo dolorum modi sequi.</p>
                                                        <p>5m ago</p>
                                                    </div>
                                                    <div class="my-auto">
                                                        <button class="replay-btn ">Replay</button>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="mt-3">
                                                <a href="#" class="d-flex justify-content-between">
                                                    <div class="me-3">
                                                        <img src="./assets/images/ava-4.png" height="50px" alt="">
                                                    </div>
                                                    <div class="me-3">
                                                        <h6>Laurenz Jumava</h6>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eaque explicabo dolorum modi sequi.</p>
                                                        <p>25m ago</p>
                                                    </div>
                                                    <div class="my-auto"><button class="replay-btn">Replay</button></div>
                                                </a>
                                            </li>

                                            <li class="mt-3">
                                                <a href="#" class="d-flex justify-content-between">
                                                    <div class="me-3">
                                                        <img src="./assets/images/ava-5.png" height="50px" alt="">
                                                    </div>
                                                    <div class="me-3">
                                                        <h6>Chandara Kiv</h6>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eaque explicabo dolorum modi sequi.</p>
                                                        <p>5m ago</p>
                                                    </div>
                                                    <div class="my-auto"><button class="replay-btn">Replay</button></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

   <?php include 'js.php' ?>

</body>

</html>