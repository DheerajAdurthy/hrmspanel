<?php require "headers/footers/header.php" ?>
<?php require "URL/urls.php" ?>
<!-- Image and text -->
<nav class="navbar sticky-top navbar-light justify-content-between p-2 bg-dark">
    <div class="d-flex flex-row justify-content-around">
        <a class="navbar-brand text-light" href="#">
            <img src="./images/download.png" width="30" height="30" class="d-inline-block align-top mr-1" alt="">
            Team
        </a>
        <ul class="nav nav-tabs mt-2">
            <li role="presentation" class="active mr-2 ml-2 border-right p-1"><a href="./index.php">Home</a></li>
            <li role="presentation" class="mr-2 border-right p-1"><a href="pages/profile.php">Profile</a></li>
            <li role="presentation" class="p-1"><a href="pages/projets.php">Projects</a></li>
        </ul>
    </div>
    <div>
        <p class="h4 text-centerp-4 text-light text-uppercase">Employee Dashboard</p>
    </div>
    <div class="d-flex flex-column justify-content-around">
        <div class="d-flex flex-row">
            <img src="./images/pict--employee-female-business-people-vector-stencils-library.png" width="40" height="40" class="d-inline-block align-top mr-1 border rounded shadow" alt="">
            <div class="dropdown drop">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Employee
                    </a>

                    <div class="dropdown-menu" style="position:absolute;left:-40px">
                        <a class="dropdown-item" href="pages/profile.php">Profile</a>
                        <a class="dropdown-item" href="pages/projets.php">Projects</a>
                        <a class="dropdown-item" href="#">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>
<div class="container-fluid mt-2">
    <div class="row p-4">
        <div class="col-md-12 col-12 m-auto d-flex flex-row justify-content-between">
            <div class="col-md-2 d-flex flex-column justify-content-top shadow p-4 w-100">
                <div class="w-100 text-center border-bottom d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-danger">My Profile</p>
                    <a href="pages/profile.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100 text-center  border-bottom d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-primary">Projects</p>
                    <a href="pages/projets.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100 text-center  border-bottom  d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-primary">Deadlines</p>
                    <a href="pages/deadlines.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100 text-center  border-bottom d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-primary">Checkin/Out</p>
                    <a href="pages/checkin&checkout.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>


                <div class="w-100  text-center d-flex flex-row justify-content-between">
                    <p class="h5 text-primary">Salary</p>
                    <a href="pages/salary.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="mt-2 border-bottom rounded p-2 text-left">
                    <p class="h4 text-dark">Others</p>
                </div>
                <div class="w-100  text-center d-flex flex-row justify-content-between border-bottom mt-2 mb-1">
                    <p class="h5 text-primary">Chat</p>
                    <a href="pages/chats.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100  text-center d-flex flex-row justify-content-between">
                    <p class="h5 text-primary">Services</p>
                    <a href="pages/services.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
            </div>

            <div class="col-md-10 bg-light shadow text-center p-2 m-auto">
                <div class="border-bottom border-secondary text-left p-2 rounded text-center mb-3">
                    <p class="h3 text-bold text-dark">TEAM</p>
                </div>
                <div class="border-bottom border-success text-left p-2 shadow rounded mb-3">
                    <p class="h5 text-bold text-success">Leaves</p>
                </div>
                <div class="m-auto col-md-10 d-flex flex-row justify-content-between text-center p-2 mb-3">
                    <div class="col-md-4 d-flex flex-column justify-content-around  shadow rounded  p-2">
                        <div class="d-flex flex-row justify-content-around p-2 ">
                            <div class="text-center text-bold mr-2 p-3 border-top shadow rounded border-success ">
                                <p class="text-bold text-success h6">Remaining Leaves</p>
                                <p class="text-bold text-success h6">1</p>
                            </div>
                            <div class="text-center border-top border-success rounded shadow p-3">
                                <p class="text-bold text-success h6">Remaining Leaves</p>
                                <p class="text-bold text-success h6">1</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-around p-2">
                            <div class="text-center mr-2 p-2 border-top border-success rounded shadow p-3">
                                <p class="text-bold text-success h6">Restricted Leaves</p>
                                <p class="text-bold text-success h6">1</p>
                            </div>
                            <div class="text-center  border-top  border-success rounded shadow p-3">
                                <p class="text-bold text-success h6">Remaining Leaves</p>
                                <p class="text-bold text-success h6">1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex flex-row justify-content-around  border-top border-success  rounded shadow p-3">
                        <div class="d-flex flex-column justify-content-around p-2 text-center">
                            <div class="border-bottom border-success mb-2">
                                <p class="h5 text-success">Applied Leaves</p>
                            </div>
                            <div>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>

                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-around p-2  text-center">
                            <div class="border-bottom border-success mb-2">
                                <p class="h5 text-success">Type</p>
                            </div>
                            <div>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>

                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-around p-2  text-center">
                            <div class="border-bottom border-success mb-2">
                                <p class="h5 text-success">Status</p>
                            </div>
                            <div>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-row justify-content-around border-top border-success  rounded shadow p-3">
                        <div class="d-flex flex-column justify-content-around p-2  text-center">
                            <div class="border-bottom border-success mb-2">
                                <p class="h5 text-success">Type</p>
                            </div>
                            <div>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>

                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-around p-2  text-center">
                            <div class="border-bottom border-success mb-2">
                                <p class="h5 text-success">Status</p>
                            </div>
                            <div>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>
                                <p>12/03/2002</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-primary text-left shadow p-2 rounded mb-3">
                    <p class="h5 text-bold text-primary">Salary</p>
                </div>
                <div class="m-auto d-flex flex-row justify-content-around text-center p-2 mb-3">
                    <div class="shadow p-3 m-auto border-top border-primary rounded">
                        <div>
                            <p class="h6 text-bold text-secondary">Hourly Salary</p>
                        </div>
                        <div>
                            <p class="text-danger text-bold">42$</p>
                        </div>
                    </div>
                    <div class="shadow p-3 m-auto border-top border-primary rounded">
                        <div>
                            <p class="h6 text-bold text-secondary">Monthly Salary</p>
                        </div>
                        <div>
                            <p class="text-danger text-bold">42$</p>
                        </div>
                    </div>
                    <div class="shadow p-3 m-auto border-top border-primary rounded">
                        <div>
                            <p class="h6 text-bold text-secondary">Project Avg Salary</p>
                        </div>
                        <div>
                            <p class="text-danger text-bold">42$</p>
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-danger text-left shadow p-2 rounded mb-3">
                    <p class="h5 text-bold text-danger">Tasks</p>
                </div>
                <div class="m-auto col-md-10 d-flex flex-row justify-content-between p-2 mb-3">
                    <div class="col-md-4 d-flex flex-column justify-content-around text-left shadow p-3 border rounded">
                        <div class="border-bottom border-secondary mb-3 text-center">
                            <p class="text-secondary">Recent Activities</p>
                        </div>
                        <div>
                            <p class="h6 text-dark"><span><i class="bi bi-caret-right-fill text-dark"></i></span>Developing Hrms Backend</p>
                            <p class="h6 text-secondary"><span><i class="bi bi-caret-right-fill text-secondary"></i></span>Developing Hrms Backend</p>
                            <p class="h6 text-secondary"><span><i class="bi bi-caret-right-fill text-secondary"></i></span>Developing Hrms Backend</p>
                            <p class="h6 text-secondary"><span><i class="bi bi-caret-right-fill text-secondary"></i></span>Developing Hrms Backend</p>
                            <p class="h6 text-secondary"><span><i class="bi bi-caret-right-fill text-secondary"></i></span>Developing Hrms Backend</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-around text-left shadow p-3 border rounded">
                        <div class="border-bottom border-secondary mb-3 text-center">
                            <p class="text-secondary">Performance Chart</p>
                        </div>
                        <div class="text-center">
                            <div>
                                <img src="/images/pict--vertical-bar-chart-bar-charts-vector-stencils-library.png" width="100" height="100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-around text-left shadow p-3 border rounded">
                        <div class="border-bottom border-secondary mb-3 text-center">
                            <p class="text-secondary">Performance Chart</p>
                        </div>
                        <div class="text-center">
                            <div>
                                <img src="/images/pict--vertical-bar-chart-bar-charts-vector-stencils-library.png" width="100" height="100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-warning text-left shadow p-2 rounded mb-3">
                    <p class="h5 text-bold text-warning">Chats</p>
                </div>
                <div class="m-auto col-md-10 d-flex flex-row justify-content-between p-2 mb-3">
                    <div class="col-md-5 d-flex flex-column justify-content-around text-left shadow p-3 border rounded">
                        <div class="border-bottom border-success mb-3 text-left">
                            <p class="text-success"><span><i class="bi bi-play-circle-fill text-success"></i> </span>Active</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between text-left">
                            <div>
                                <p class="h6  text-dark"><span class="text-success"><i class="bi bi-dot"></i></span> Vmasi Adurthi</p>
                                <p class="ml-4">Full stack developer</p>
                            </div>
                            <img src="./images/vamsi.jpeg" width="40" height="40" class="border rounded">
                        </div>
                        <div class="d-flex flex-row justify-content-between text-left">
                            <div>
                                <p class="h6  text-dark"><span class="text-success"><i class="bi bi-dot"></i></span> Vamsi Adurthi</p>
                                <p class="ml-4">Full stack developer</p>
                            </div>
                            <img src="./images/vamsi.jpeg" width="40" height="40" class="border rounded">
                        </div>
                        <div class="d-flex flex-row justify-content-between text-left">
                            <div>
                                <p class="h6  text-dark"><span class="text-success"><i class="bi bi-dot"></i></span> Vamsi Adurthi</p>
                                <p class="ml-4">Full stack developer</p>
                            </div>
                            <img src="./images/vamsi.jpeg" width="40" height="40" class="border rounded">
                        </div>
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-around text-left shadow p-3 border rounded">
                        <div class="border-bottom border-dark mb-3 text-left">
                            <p class="text-dark"><span><i class="bi bi-play-circle-fill text-dark"></i> </span>Last Chated</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between text-left">
                            <div>
                                <p class="h6  text-dark"><span class="text-dark"><i class="bi bi-dot"></i></span> Vamsi Adurthi</p>
                                <p class="ml-4">Full stack developer</p>
                            </div>
                            <img src="./images/vamsi.jpeg" width="40" height="40" class="border rounded">
                        </div>
                        <div class="d-flex flex-row justify-content-between text-left">
                            <div>
                                <p class="h6  text-dark"><span class="text-dark"><i class="bi bi-dot"></i></span> Vamsi Adurthi</p>
                                <p class="ml-4">Full stack developer</p>
                            </div>
                            <img src="./images/vamsi.jpeg" width="40" height="40" class="border rounded">
                        </div>
                        <div class="d-flex flex-row justify-content-between text-left">
                            <div>
                                <p class="h6  text-dark"><span class="text-dark"><i class="bi bi-dot"></i></span> Vamsi Adurthi</p>
                                <p class="ml-4">Full stack developer</p>
                            </div>
                            <img src="./images/vamsi.jpeg" width="40" height="40" class="border rounded">
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-secondary text-left shadow p-2 rounded mb-3">
                    <p class="h5 text-bold text-secondary">Working Hours and Hours Worked</p>
                </div>
                <div class="m-auto col-md-10 d-flex flex-column justify-content-between p-2 mb-3">
                    <div class="col-md-10 d-flex flex-column justify-content-around text-left shadow p-3 border rounded mb-2">
                        <div class="p-2">
                            <p class="h6 border-bottom border-secondary mb-2 text-left"> Working Hours</p>
                        </div>
                        <div class="p-2">
                            <p><span><i class="bi bi-alarm text-dark"></i></span> 2 hours a day</p>
                        </div>
                    </div>
                    <div class="col-md-10 d-flex flex-column justify-content-around text-left shadow p-3 border rounded">
                        <div class="p-2">
                            <p class="h6 border-bottom border-secondary mb-2 text-left">Hours worked</p>
                        </div>
                        <div class="p-2">
                            <p><span><i class="bi bi-alarm text-dark"></i></span> 2 hours a day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "headers/footers/footer.php" ?>