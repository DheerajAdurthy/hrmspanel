<?php include_once "/xampp2/htdocs/hrmshome/headers/footers/header.php" ?>
<?php include_once "/xampp2/htdocs/hrmshome/URL/urls.php" ?>

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light justify-content-between p-2">
        <div>
        <a class="navbar-brand" href="#">
        <img src="../images/download.png" width="30" height="30" class="d-inline-block align-top" alt="">
           Team
        </a>
        <a href="<?php echo "$BASE_URL" ?>" class="text-dark"><button class="border-0 p-2 bg-light rounded">Home</button></a>
        </div>
        <div>
            <p class="h4 text-centerp-4 text-secondary text-uppercase">Employee Dashboard</p>
        </div>
        <div class="d-flex flex-column justify-content-around">
          <div class="d-flex flex-row">
          <img src="./images/pict--employee-female-business-people-vector-stencils-library.png" width="40" height="40" class="d-inline-block align-top mr-2 border rounded shadow" alt="">
          <div class="dropdown">
            <button class="btn text-dark text-bold dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Employee
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="">Role</a>
                <a class="dropdown-item" href="">Sign Out</a>
            </div>
            </div>
            </div>
          </div>
        </div>
    </nav>   
   <div class="container-fluid mt-2 ">
     <div class="row p-4">
        <div class="col-md-12 col-12 m-auto d-flex flex-row justify-content-between">
            <div class="col-md-2 d-flex flex-column justify-content-top shadow p-4 w-100 ">
                <div class="w-100 text-center border-bottom d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-danger">My Profile</p>
                    <a href="../pages/profile.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100 text-center  border-bottom d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-primary">Projects</p>
                    <a href="../pages/projets.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100 text-center  border-bottom  d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-primary">Deadlines</p>
                    <a href="../pages/deadlines.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100 text-center  border-bottom  d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-primary">Checkin</p>
                    <a href="../pages/checkin&checkout.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100 text-center  border-bottom  d-flex flex-row justify-content-between mb-1">
                    <p class="h5 text-primary">Checkout</p>
                    <a href="../pages/checkin&checkout.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
                <div class="w-100  text-center d-flex flex-row justify-content-between">
                    <p class="h5 text-primary">Salary</p>
                    <a href="../pages/salary.php"><button class="btn border-0"><i class="bi bi-caret-right"></i></button></a>
                </div>
            </div>
            <?php include_once "/xampp2/htdocs/hrmshome/headers/footers/footer.php" ?>
