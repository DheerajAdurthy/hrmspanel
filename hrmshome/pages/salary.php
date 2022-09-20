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
            <li role="presentation" class="mr-2 border-right p-1"><a href="/profile.php">Profile</a></li>
            <li role="presentation" class="p-1"><a href="projets.php">Projects</a></li>
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

<div class="col-md-10 bg-light shadow">
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
</div>
<?php require "../headers/footers/footer.php" ?>