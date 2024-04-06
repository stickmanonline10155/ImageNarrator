<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMAGE NARRATOR</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Jan 29 2024 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
    <!-- Custom CSS for DataTables container -->
    <style>
        div.dt-container {
            width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/imageNarrator logo.png" alt="">
                <span class="d-none d-lg-block">IMAGE NARRATOR</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li>
                    <a class="nav-link nav-icon" href="https://chrome.google.com/webstore/detail/summary-for-google-with-c/cmnlolelipjlhfkhpohphpedmkfbobjc" aria-label="add our Google Chrome extension on Chrome Web Store">
                        <i class="bx bxl-google"></i>
                    </a><!-- End chrome Icon -->
                </li>


                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" aria-label="notification">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">1</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 1 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!--
                        <li class="dropdown-footer">
                          <a href="#">Show all notifications</a>
                        </li>
                        -->
                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" aria-label="total reading hours for today">
                        <i class="bi bi-clock"></i>
                        <span class="badge bg-success badge-number">3.5</span>
                    </a><!-- End Messages Icon -->


                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-label="account image and name">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Image Narrator</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Image Narrator</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="welcome.html">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    
  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Members</h1>
      </div>
      <section class="section">
          <div class="card">
              <div class="dt-container">
                  <!-- DataTable HTML -->
                  <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Full Name</th>                                      
                            <th>Email</th>
                            <th>Gender</th>                                      
                            <th>Education</th>
                            <th>Level Of Visual Impairment</th>
                            <th>Country</th>
                            <th>Assistive Devices</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                    $link = mysqli_connect('localhost', 'root', '', 'narratordb_test1');

                    // 檢查連接
                    if(!$link) {
                        die("Database connection failed: " . mysqli_connect_error());
                    }

                    $sql = "select * from profile";

                    $result =mysqli_query($link,$sql);

                    if (!$result) {
                        die("Error executing query: " . mysqli_error($link));
                    }                    

                    While($row=mysqli_fetch_assoc($result))
                    {
                            echo 
                            "<tr>" .
                            "<td>" . htmlspecialchars($row['nickname']) . "</td>" .
                            "<td>" . htmlspecialchars($row['email']) . "</td>" .
                            "<td>" . htmlspecialchars($row['gender']) . "</td>" .
                            "<td>" . htmlspecialchars($row['education']) . "</td>" .
                            "<td>" . htmlspecialchars($row['visualImp_LV']) . "</td>" .
                            "<td>" . htmlspecialchars($row['country']) . "</td>" .
                            "<td>" . htmlspecialchars($row['assistiveDevice']) . "</td>" .
                            "<td><a href='pages-profile.html?email=" . urlencode($row['email']) . "'>[修改]</a> " .
                            "<a href='members_delete.php?email=" . urlencode($row['email']) . "' onclick='return confirm(\"Are you sure?\");'>[刪除]</a></td>" .
                            "</tr>"; 
                    }
                ?>
                    </tbody>
                  </table>
              </div>
          </div>




      </section>
  </main>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <!-- Initialize DataTables -->
    <script>
        $(document).ready(function () {
            $('#example').DataTable({ // Use '#' for ID selectors with jQuery
                scrollX: true
            });
        });

    </script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html>