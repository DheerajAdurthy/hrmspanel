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
    <div class="bg-light border-bottom border-primary text-center p-2 rounded mb-2">
        <p class="h3 text-bold">My Projects</p>
    </div>
    <div class="col-md-10 d-flex flex-row justify-content-around p-2 m-auto mb-2">
        <div class="col-md-3 bg-light shadow border border-success">
            <div class="d-flex flex-column justify-content-around p-2 text-center">
                <div class="mb-2 bg-success rounded shadow p-1">
                    <p class="h4 text-dark">Completed</p>
                </div>
                <div class="p-2 mb-2">
                    <img src="../images/project-management-business-process-planning-workflow-organization-colleagues-working-together-teamwork_335657-2469.webp" width="100" height="100" alt="">
                </div>
                <div>
                    <p class="h5 text-dark">Project Examade</p>
                    <p>Alloted at 6 April 2022</p>
                    <p>Completed at 11 June 2022</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 bg-light shadow border border-primary">
            <div class="d-flex flex-column justify-content-around   p-2 text-center">
                <div class="mb-2 bg-primary rounded shadow p-1">
                    <p class="h4 text-dark">Ongoing</p>
                </div>
                <div class="p-2 mb-2">
                    <img src="../images/project-management-business-process-planning-workflow-organization-colleagues-working-together-teamwork_335657-2469.webp" width="100" height="100" alt="">
                </div>
                <div class="">
                    <p class="h5 text-dark">Project Drithi</p>
                    <p>Alloted at 6 April 2022</p>
                    <p>Complete by July 2022</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 bg-light shadow border border-secondary">
            <div class="d-flex flex-column justify-content-around p-2 text-center">
                <div class="mb-2 bg-secondary rounded shadow p-1">
                    <p class="h4 text-dark">Upcoming</p>
                </div>
                <div class="p-2 mb-2">
                    <img src="../images/project-management-business-process-planning-workflow-organization-colleagues-working-together-teamwork_335657-2469.webp" width="100" height="100" alt="">
                </div>
                <div>
                    <p class="h5 text-dark">Project StudyComrade</p>
                    <p>Yet to allot</p>
                </div>
            </div>
        </div>
    </div>
    <div class="border-bottom border-success text-left shadow p-2 rounded mb-3">
        <p class="h5 text-bold text-success">Completed Projects</p>
    </div>
    <div class="col-md-10 d-flex flex-row justify-content-between p-2 m-auto mb-2">
        <div class="d-flex flex-column justify-content-around border rounded shadow p-3">
            <div class="text-center h5 border-bottom border-dark rounded text-bold text-dark  p-1">
                <p>Company Details</p>
            </div>
            <div>
                <p>Examade Learning Corporation</p>
                <p>Leading Online Portal</p>
                <p>Kokapet,Hyderabad,534211</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around border rounded shadow p-3">
            <div class=" text-center h5 border-bottom border-dark text-bold text-dark  p-1 rounded">
                <p>Project Details</p>
            </div>
            <div>
                <p>Alloted at 6 April 2022</p>
                <p>Completed at 11 June 2022</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around border rounded shadow p-3">
            <div class="text-center h5 border-bottom border-dark text-bold text-dark  p-1 rounded">
                <p>Tech Stack Used</p>
            </div>
            <div class="d-flex flex-row justify-content-around p-2">
                    <div class="d-flex flex-column justify-content-around mr-3 text-center">
                        <p class="h6 text-bold text-dark">FrontEnd</p>
                        <p class="text-italic">ReactJs,CSS,Bootstrap</p>
                    </div>
                    <div class="d-flex flex-column justify-content-around text-center">
                        <p class="h6 text-bold text-dark">BackEnd</p>
                        <p class="text-italic">NodeJs,MongoDB</p>
                    </div>
            </div>
        </div>
    </div>
    <div class="border-bottom border-primary text-left shadow p-2 rounded mb-3">
        <p class="h5 text-bold text-primary">Ongoing Projects</p>
    </div>
    <div class="col-md-10 d-flex flex-row justify-content-between p-2 m-auto mb-2">
        <div class="d-flex flex-column justify-content-around border rounded shadow p-3">
            <div class="text-center h5 border-bottom border-dark rounded text-bold text-dark  p-1">
                <p>Company Details</p>
            </div>
            <div>
                <p>Examade Learning Corporation</p>
                <p>Leading Online Portal</p>
                <p>Kokapet,Hyderabad,534211</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around border rounded shadow p-3">
            <div class=" text-center h5 border-bottom border-dark text-bold text-dark  p-1 rounded">
                <p>Project Details</p>
            </div>
            <div>
                <p>Alloted at 6 April 2022</p>
                <p>Completed at 11 June 2022</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around border rounded shadow p-3">
            <div class="text-center h5 border-bottom border-dark text-bold text-dark  p-1 rounded">
                <p>Tech Stack Used</p>
            </div>
            <div class="d-flex flex-row justify-content-around p-2">
                    <div class="d-flex flex-column justify-content-around mr-3 text-center">
                        <p class="h6 text-bold text-dark">FrontEnd</p>
                        <p class="text-italic">ReactJs,CSS,Bootstrap</p>
                    </div>
                    <div class="d-flex flex-column justify-content-around text-center">
                        <p class="h6 text-bold text-dark">BackEnd</p>
                        <p class="text-italic">NodeJs,MongoDB</p>
                    </div>
            </div>
        </div>
    </div>
    <div class="border-bottom border-secondary text-left shadow p-2 rounded mb-3">
        <p class="h5 text-bold text-secondary">Upcoming Projects</p>
    </div>
    <div class="col-md-10 d-flex flex-row justify-content-between p-2 m-auto mb-2">
        <div class="d-flex flex-column justify-content-around border rounded shadow p-3">
            <div class="text-center h5 border-bottom border-dark rounded text-bold text-dark  p-1">
                <p>Company Details</p>
            </div>
            <div>
                <p>Examade Learning Corporation</p>
                <p>Leading Online Portal</p>
                <p>Kokapet,Hyderabad,534211</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around border rounded shadow p-3">
            <div class=" text-center h5 border-bottom border-dark text-bold text-dark  p-1 rounded">
                <p>Project Details</p>
            </div>
            <div>
                <p>Alloted at 6 April 2022</p>
                <p>Completed at 11 June 2022</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around border rounded shadow p-3">
            <div class="text-center h5 border-bottom border-dark text-bold text-dark  p-1 rounded">
                <p>Tech Stack Used</p>
            </div>
            <div class="d-flex flex-row justify-content-around p-2">
                    <div class="d-flex flex-column justify-content-around mr-3 text-center">
                        <p class="h6 text-bold text-dark">FrontEnd</p>
                        <p class="text-italic">ReactJs,CSS,Bootstrap</p>
                    </div>
                    <div class="d-flex flex-column justify-content-around text-center">
                        <p class="h6 text-bold text-dark">BackEnd</p>
                        <p class="text-italic">NodeJs,MongoDB</p>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php require "../headers/footers/footer.php" ?>