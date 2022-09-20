<?php require "../headers/footers/header.php" ?>
<?php require "../URL/urls.php" ?>
<!-- Image and text -->
<nav class="navbar sticky-top navbar-light justify-content-between p-2 bg-dark">
    <div class="d-flex flex-row justify-content-around">
        <a class="navbar-brand text-light" href="#">
            <img src="../images/download.png" width="30" height="30" class="d-inline-block align-top mr-1" alt="">
            Team
        </a>
        <ul class="nav nav-tabs mt-2">
            <li role="presentation" class="active mr-2 ml-2 border-right p-1"><a href="../index.php">Home</a></li>
            <li role="presentation" class="mr-2 border-right p-1"><a href="./profile.php">Profile</a></li>
            <li role="presentation" class="p-1"><a href="./projets.php">Projects</a></li>
        </ul>
    </div>
    <div>
        <p class="h4 text-centerp-4 text-light text-uppercase">Employee Dashboard</p>
    </div>
    <div class="d-flex flex-column justify-content-around">
        <div class="d-flex flex-row">
            <img src="../images/pict--employee-female-business-people-vector-stencils-library.png" width="40" height="40" class="d-inline-block align-top mr-1 border rounded shadow" alt="">
            <div class="dropdown drop">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Employee
                    </a>

                    <div class="dropdown-menu" style="position:absolute;left:-40px">
                        <a class="dropdown-item" href="./profile.php">Profile</a>
                        <a class="dropdown-item" href="./projets.php">Projects</a>
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
                    <a href="./profile.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100 text-center  border-bottom d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-primary">Projects</p>
                    <a href="./projets.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100 text-center  border-bottom  d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-primary">Deadlines</p>
                    <a href="./deadlines.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100 text-center  border-bottom d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-primary">Checkin/Out</p>
                    <a href="./checkin&checkout.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>


                <div class="w-100  text-center d-flex flex-row justify-content-between">
                    <p class="h5 text-primary">Salary</p>
                    <a href="./salary.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="mt-2 border-bottom rounded p-2 text-left">
                    <p class="h4 text-dark">Others</p>
                </div>
                <div class="w-100  text-center d-flex flex-row justify-content-between border-bottom mt-2 mb-1">
                    <p class="h5 text-primary">Chat</p>
                    <a href="./chats.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100  text-center d-flex flex-row justify-content-between">
                    <p class="h5 text-primary">Services</p>
                    <a href="./services.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
            </div>

<div class="col-md-10 bg-light shadow">
    <div class="d-flex flex-row justify-content-between border-bottom  rounded bg-light mb-4">
        <div class="d-flex flex-row justify-content-left pt-1  text-center  rounded mb-2">
            <p class="h5 text-bold mr-2">Projects</p>
            <i class="bi bi-chevron-compact-down"></i>
        </div>
        <div class="text-center pt-1 mb-2">
            <button class="bg-primary rounded text-light mr-2"><span><i class="bi bi-plus"></i></span>Add Project</button>
            <span class="text-dark" onclick="dropdown"><i class="bi bi-three-dots"></i></span>
        </div>
    </div>
    <div class="d-flex flex-row justify-content-between">
        <div class="d-flex flex-column justify-content-center border-bottom  rounded bg-light">
            <div class="d-flex flex-row  pt-1  text-center  rounded mb-2 ">
                <p class="h6 mr-2">Project Name</p>
                <i class="bi bi-chevron-expand"></i>
            </div>
            <div class="d-flex flex-row  pt-1  text-center  rounded  mb-2">
                <p class="h6 mr-2">Project Drith</p>
            </div>
            <div class="d-flex flex-row  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2">Project StudyComrade</p>
            </div>
            <div class="d-flex flex-row  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2">Project Ashok It</p>
            </div>
            <div class="d-flex flex-row  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2">Project New</p>
            </div>
            <div class="d-flex flex-row j pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2">Project Upcoming</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center border-bottom  rounded bg-light">
            <div class="  pt-1  text-center  rounded mb-2 ">
                <p class="h6 mr-2"> Estimated Hours</p>
            </div>
            <div class="  pt-1  text-center  rounded  mb-2 ">
                <p class="h6 mr-2">03:00</p>
            </div>
            <div class="  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2">04:11</p>
            </div>
            <div class=" pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2"> 05:30</p>
            </div>
            <div class="  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2"> 03:20</p>
            </div>
            <div class="  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2"> 06:40</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center border-bottom  rounded bg-light">
            <div class="  pt-1  text-center  rounded mb-2 ">
                <p class="h6 mr-2">Logged Hours</p>
            </div>
            <div class="  pt-1  text-center  rounded  mb-2">
                <p class="h6 mr-2">03:00</p>
            </div>
            <div class="  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2">04:11</p>
            </div>
            <div class=" pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2"> 05:30</p>
            </div>
            <div class="  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2"> 03:20</p>
            </div>
            <div class="  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2"> 06:40</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center border-bottom  rounded bg-light">
            <div class="  pt-1  text-center  rounded mb-2 ">
                <p class="h6 mr-2">Status</p>
            </div>
            <div class="  pt-1  text-center  rounded  mb-2">
            <i class="bi bi-check2-circle"></i>
            </div>
            <div class="  pt-1  text-center  rounded mb-2">
            <i class="bi bi-check2-circle"></i>
            </div>
            <div class="  pt-1  text-center  rounded mb-2">
            <i class="bi bi-check2-circle"></i>
            </div>
            <div class=" pt-1  text-center  rounded mb-2">
            <i class="bi bi-check2-circle"></i>
            </div>
            <div class=" pt-1  text-center  rounded mb-2">
            <i class="bi bi-check2-circle"></i>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center border-bottom  rounded bg-light">
            <div class="  pt-1  text-center  rounded mb-2 ">
                <p class="h6 mr-2">Alter Status</p>
            </div>
            <div class="  pt-1  text-center  rounded  mb-2">
                <p class="h6 mr-2 text-success">Resume</p>
            </div>
            <div class=" pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2 text-danger"> Pause</p>
            </div>
            <div class="  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2 text-success">Resume</p>
            </div>
            <div class=" pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2 text-success">Resume</p>
            </div>
            <div class="  pt-1  text-center  rounded mb-2">
                <p class="h6 mr-2 text-danger">Pause</p>
            </div>
        </div>

    </div>


</div>
<?php require "../headers/footers/footer.php" ?>