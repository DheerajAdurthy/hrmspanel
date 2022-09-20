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
    <div class="bg-light border-bottom border-primary text-center p-2 rounded">
        <p class="h3 text-bold">My Profile</p>
    </div>
    <div class=" d-flex flex-row justify-content-right p-2">
        <div class=" col-md-3 d-flex flex-column justify-content-around p-2">
            <img src="../images/vamsi.jpeg" class="border rounded" width="250" height="250" alt="">
        </div>
        <div class="col-md-7 d-flex flex-column justify-content-around p-4">
            <div class="bg-secondary border rounded shadow p-2">
                <p class="h4 text-bold text-light">Vamsi Adurthi</p>
                <p class="h6 text-dark">Full Stack Developer</p>
            </div>
            <div class="d-flex flex-row justify-content-around p-2">
                <div class="d-flex flex-column justify-content-around p-2 mr-1">
                    <div class="mb-2">
                        <p class="h6">Name</p>
                        <div class="bg-light border-0 shadow rounded p-2">
                            Vamsi Adurthi
                        </div>
                    </div>
                    <div>
                        <p class="h6">Role</p>
                        <div class="bg-light border-0 shadow rounded p-2">
                            Full Stack Developer
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-around p-2">
                    <div class="mb-2">
                        <p class="h6">Status</p>
                        <div class="bg-light border-0 shadow rounded p-2">
                            Active-working
                        </div>
                    </div>
                    <div>
                        <p class="h6">Category</p>
                        <div class="bg-light border-0 shadow rounded p-2">
                            Backend Development
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-left mb-2 p-2">
        <div class="p-2">
            <div class="p-2 mb-2 rounded bg-secondary">
                <p class="h4 text-light">Achievements</p>
            </div>
            <div class="shadow p-3">
                <p class="h6"><span><img src="/images/construction-project-manager-icon-images-vector-34189992.jpg" width="30" height="30"></span> Project Head</p>
                <p class="h6"><span><img src="/images/developer-activity-concept-illustration_114360-1981.webp" width="30" height="30"></span> Worked as Front End Engineer</p>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-left mb-1 p-2">
        <div class="p-2">
            <div class="p-2 mb-1 rounded bg-secondary">
                <p class="h4 text-light">Skills And Tools</p>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row justify-content-around p-2 m-auto text-center">
        <div class="col-md-5 d-flex flex-column justify-content-left p-3 shadow ">
            <div class="p-2 border-bottom border-primary mb-3 ">
                <p class="h5 text-bold ">Skills</p>
            </div>
            <div class="d-flex flex-row justify-content-around p-2">
                <div class="p-2">
                    <div>
                        <p class="h6 text-bold ">FrontEnd</p>
                    </div>
                    <p class="text-secondary text-italic">Html,Css,Javascript</p>
                </div>
                <div class="p-2">
                    <div>
                        <p class="h6 text-bold ">FrontEnd</p>
                    </div>
                    <p class="text-secondary text-italic">Html,Css,Javascript</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around p-2">
                <div class="p-2">
                    <div>
                        <p class="h6 text-bold ">FrontEnd</p>
                    </div>
                    <p class="text-secondary text-italic">Html,Css,Javascript</p>
                </div>
                <div class="p-2">
                    <div>
                        <p class="h6 text-bold ">FrontEnd</p>
                    </div>
                    <p class="text-secondary text-italic">Html,Css,Javascript</p>
                </div>
            </div>
        </div>
        <div class="col-md-5 d-flex flex-column justify-content-left p-3 shadow">
            <div class="p-2 border-bottom border-primary mb-3">
                <p class="h5 text-bold ">Tools</p>
            </div>
            <div class="p-3 shadow">
                <p>Git</p>
                <p>Postman</p>
                <p>Euthereum</p>
                <p>VsCode</p>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-left mb-1 p-2">
        <div class="p-2">
            <div class="p-2 mb-1 rounded bg-secondary">
                <p class="h4 text-light">Working Experience</p>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row justify-content-around p-2 m-auto">
        <div class="col-md-4 d-flex flex-column justify-content-left p-3 shadow ">
            <div class="p-2 border-bottom border-primary mb-3 text-center">
                <p class="h5 text-bold ">Frims</p>
            </div>
            <div class="d-flex flex-column justify-content-around p-2">
                <div class="p-2">
                    <div>
                        <p class="h6 text-bold ">Innomic Technologies</p>
                    </div>
                    <p class="text-secondary text-italic">Software Company</p>
                </div>
                <div class="p-2">
                    <div>
                        <p class="h6 text-bold ">TCS PVt Ltd</p>
                    </div>
                    <p class="text-secondary text-italic">Software Company</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex flex-column justify-content-left p-3 shadow ">
            <div class="p-2 border-bottom border-primary mb-3 text-center">
                <p class="h5 text-bold ">Jobs</p>
            </div>
            <div class="d-flex flex-column justify-content-around p-2">
                <div class="p-2">
                    <div>
                        <p class="h6 text-bold ">Full Stack Developer</p>
                    </div>
                    <p class="text-secondary text-italic">intermediate</p>
                </div>
                <div class="p-2">
                    <div>
                        <p class="h6 text-bold ">QA Engineer</p>
                    </div>
                    <p class="text-secondary text-italic">Expert</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex flex-column justify-content-left p-3 shadow">
            <div class="p-2 border-bottom border-primary mb-3 text-center">
                <p class="h5 text-bold ">FreeLancing</p>
            </div>
            <div class="p-3 shadow">
                <p>Androird App Development</p>
                <p>Web development</p>
                <p>.NET Developer</p>
                <p>Aws Developer</p>
            </div>
        </div>
    </div>
    <?php require "../headers/footers/footer.php" ?>