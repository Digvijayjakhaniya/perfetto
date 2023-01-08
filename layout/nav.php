     
        <!-- Pre Loader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- End Pre Loader -->

        <!-- Header top -->
        <div class="header-top-area">
            <div class="container">
            <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM contact_details");
        if (mysqli_num_rows($result) > 0) {
             ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="header-top-item">
                        <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="header-left">
                                <ul>  
                                    <li>
                                        <i class="flaticon-mail"></i>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#fa929f969695ba8895988e9399d4999597">
                                            <span class="__cf_email__" data-cfemail="4028252c2c2f00322f223429236e232f2d"><?php echo $row["email"]; ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="flaticon-phone"></i>
                                        <a href="tel:<?php echo $row["phone"]; ?>">
                                        <?php echo $row["phone"]; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            }
                        } else {
                            echo "No result found";
                        }

                        ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM links");
        if (mysqli_num_rows($result) > 0) {
             ?>
                        <div class="header-top-item">
                            <div class="header-right">
                                <ul>
                                <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                    <li>
                                        <a href="<?php echo $row["facebook"]; ?>" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $row["twitter"]; ?>" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $row["instagram"]; ?>" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $row["linkedin"]; ?>" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <?php
                            }
                        } else {
                            echo "No result found";
                        }

                        ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header top -->
        
        <!-- Start Navbar Area -->
        <div class="navbar-area sticky-top">
            <!-- Mobile Device -->
            <div class="mobile-nav">
                <a href="index.php" class="logo">
                    <img src="assets/img/perfetto_logo.png" alt="Logo">
                </a>
            </div>

            <!-- Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/perfetto_logo.png" class="main-logo" alt="Logo">
                            <img src="assets/img/logo-three.png" class="white-logo" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link dropdown-toggle">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                     <?php
                                    include("contact_form/config.php");
                                    error_reporting(0);
                                    $result = mysqli_query($conn, "SELECT * FROM products");
                                    if (mysqli_num_rows($result) > 0) {
                                        ?>
                                    <a href="product.php" class="nav-link dropdown-toggle">Products <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                    <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                        <li class="nav-item">
                                            <a href="product-details.php?id=<?php echo $row["id"]; ?>" class="nav-link"><?php echo $row["title"]; ?></a>
                                        </li>
                                        <?php
                            }
                        } else {
                            echo "No result found";
                        }

                        ?>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link dropdown-toggle">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            <div class="side-nav">
                                <a  class="openButton" onclick="openForm()" >INQUIRY</a>
                            </div>
    
                            <div class="loginPopup">
                                    <?php include('contact_form/inquiry.php') ?>
                            </div>


                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->