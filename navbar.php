<header>
            <!-- navbar  -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light py-0 sticky-top">
                <div class="container-fluid align-items-center">
                    <a class="navbar-brand" href="#">
                        <img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png" alt=""
                            width="70" height="auto">
                        <h3 class="d-inline ms-2 c-black">Inviqa</h3>
                    </a>
                    <div class="sidebar-collapse d-flex align-items-center">
                        <i class="fas fa-bars pe-2 btn" id="sidebar-collapse"></i>
                       <h4 class="d-inline my-auto">Dashboard</h4> 
                    </div>
                    <div>
                        <form class=" position-relative" role="search">
                            <div class="position-relative">
                            <i class="far fa-search global-search"></i>
                                <input class="form-control search-bar me-2 " type="search" placeholder="Search here... " aria-label="Search">
                            </div>
                            <!-- <i class="far fa-search position-absolute  top-50 start-0 translate-middle-y ps-2"></i> -->
                        </form>
                    </div>
                    <div class="nav-icons d-flex">
                        <div class="pe-4">
                            <i class="fas fa-envelope position-relative c-green ">
                                <span class="position-absolute top-0 start-100 translate-middle badge bg-blue">
                                    6
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </i>
                        </div>
                        <div>
                            <i class="fas fa-bell position-relative c-red">
                                
                                <span class="position-absolute top-0 start-100 translate-middle badge bg-blue">
                                    4
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </i>
                        </div>
                    </div>

                    <div class="profile-settings">
                        <div class="d-flex align-items-center">
                            <div class="profile-img me-2">
                                <img src="./assets/images/ava-1.png"
                                    class="img-fluid bg-dark rounded-pill" width="40" height="auto" alt="">
                            </div>

                            <div class="user-name me-2 text-center">
                                <span class="mt-1 d-block admin-name">User Name <span class="s-admin d-block">Super Admin</span></span>
                                
                            </div>

                            <div class="me-2 dropdown-center">
                                <i class="fas fa-caret-down " data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">notification</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                            </ul>

                            </div>

                        </div>

                        <div class="dropdown">

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>