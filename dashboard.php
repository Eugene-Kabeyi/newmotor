<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>


    


    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet " href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/jquery.min.js "></script>
    <script src="bootstrap/js/bootstrap.min.js "></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-3 bg-primary">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fa fa-codepen text-white fa-3x"></i>
                            <span class="h4 text-white">Admin Panel</span>
                        </a>
                    </li>
                    <hr class="bg-white">


                    <li class="nav-item navsep">
                        <a class="nav-link " href="dashboard.php">
                            <i class="fa fa-dashboard text-white fa-2x p-2"></i>
                            <span class="text-white h5">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item navsep">
                        <a class="nav-link " href="students.php">
                            <i class="fa fa-users text-white fa-2x p-2"></i>
                            <span class="text-white h5">Users</span>
                        </a>
                    </li>

                    <li class="nav-item navsep">
                        <a class="nav-link " href="#">
                            <i class="fa fa-cogs text-white fa-2x p-2"></i>
                            <span class="text-white h5">Components</span>
                        </a>
                    </li>


                    <li class="nav-item navsep">
                        <a class="nav-link " href="documents.php">
                            <i class="fa fa-file text-white fa-2x p-2"></i>
                            <span class="text-white h5">Documents</span>
                        </a>
                    </li>

                    <li class="nav-item navsep">
                        <a class="nav-link " href="#">
                            <i class="fa fa-line-chart text-white fa-2x p-2"></i>
                            <span class="text-white h5">Charts</span>
                        </a>
                    </li>


                    <li class="nav-item navsep">
                        <a class="nav-link " href="#">
                            <i class="fa fa-wrench text-white fa-2x p-2"></i>
                            <span class="text-white h5">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-lg-9 bg-light">
                <div class=" row bg-white">
                    <div class="col-md-7 cl-lg-7 ">
                        <nav class="navbar navbar-light">
                            <div class="container-fluid ">
                                <form class="d-flex ">
                                    <input class="form-control me-2 " type="search " placeholder="Search " aria-label="Search ">
                                    <button class="btn btn-outline-primary " type="submit ">Search</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-5 cl-lg-5">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                                <div class="collapse navbar-collapse" id="navbarText">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">

                                                <i class="fa fa-bell fa-lg text-secondary"></i>
                                                <span class="badge bg-danger rounded-pill">8+</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">

                                                <i class="fa fa-envelope fa-lg text-secondary"></i>
                                                <span class="badge bg-danger rounded-pill">8+</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dan Kuro</a>
                                        </li>

                                        <li class="nav-item">
                                            <img src="images/chicken.jpg" alt="Loading..." class="rounded-circle " height="50" width="50">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-7">
                        <h3 class="text-secondary">Dashboard</h3>
                    </div>
                    <div class="col-sm-5 ">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                         </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Welcome to Admin Panel</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        This is a system developed by motor class in E-mobilis
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2">

                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body border-primary border-left-primary">
                                <span>EARNINGS</span>
                                <span class="float-end">
                                    <i class="fa fa-dollar fa-2x fa-lg "></i>
                                   </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body border-primary border-left-warning">
                                <span>TASKS</span>
                                <span class="float-end">
                                    <i class="fa fa-bars fa-2x fa-lg "></i>
                                   </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body border-primary border-left-success">
                                <span>REQUESTS</span>
                                <span class="float-end">
                                 <i class="fa fa-comments fa-2x fa-lg "></i>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row m-2">

                    <div class="col-sm-6 col-lg-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                  Accordion Item #1
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                  Accordion Item #2
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                  Accordion Item #3
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but
                                        just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="bg-white">
                            <div class="m-2 p-2">
                                <span>Software Installation</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                            </div>

                            <div class="m-2 p-2">
                                <span>Website Development</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                            </div>

                            <div class="m-2 p-2">
                                <span>Database Migration</span>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                            </div>

                            <div class="m-2 p-2">
                                <span>Dashboard Design</span>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-6">
                        <div class="bg-white">
                            <img src="images/undraw_data_trends_re_2cdy.svg" alt="Loading..."> </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

</html>