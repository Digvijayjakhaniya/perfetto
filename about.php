<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include('layout/head.php') ?>

        <title>Perfetto packaging</title>
    </head>
    <body>

        <?php include('layout/nav.php') ?>
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>About</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>
                                    About
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- About -->
        <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM about");
        if (mysqli_num_rows($result) > 0) {
             ?>
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row align-iems-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                        <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <span class="sub-title">About Us</span>
                            <h2><?php echo $row["title"]; ?></h2>
                        </div>
                        <div class="about-content">
                            <p><?php echo $row["des"]; ?></p>
                            <ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    <?php echo $row["list1"]; ?>
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    <?php echo $row["list2"]; ?>
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    <?php echo $row["list3"]; ?>
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    <?php echo $row["list4"]; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <div class="about-img-slider owl-theme owl-carousel">
                                <div class="about-img-item">
                                    <img src="admin/about_img/<?php echo $row["img1"]; ?> " alt="About">
                                </div>
                                <div class="about-img-item">
                                    <img src="admin/about_img/<?php echo $row["img2"]; ?> " alt="About">
                                </div>
                                <div class="about-img-item">
                                    <img src="admin/about_img/<?php echo $row["img3"]; ?> " alt="About">
                                </div>
                                <div class="about-img-item">
                                    <img src="admin/about_img/<?php echo $row["img4"]; ?> " alt="About">
                                </div>
                            </div>
                            <div class="about-shape">
                                <img src="assets/img/home-one/about2.png" alt="About">
                                <img src="assets/img/home-one/about3.jpg" alt="About">
                                <img src="assets/img/home-one/about4.png" alt="About">
                                <img src="assets/img/home-one/about5.png" alt="About">
                            </div>
                            <div class="about-year">
                                <h2><?php echo $row["year"]; ?> <span>Years</span></h2>
            <?php
                            }
                        } else {
                            echo "No result found";
                        }

                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- Counter -->
        <section class="counter-area pt-100 pb-5">
            <div class="container">
                <div class="row align-iems-center">
                    <div class="col-lg-5">
                        <div class="counter-text">
                            <h2>We have Completed Some Foreign Clients Project</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-sm-4 col-lg-4">
                                <div class="counter-item">
                                    <h3>
                                        <span class="odometer" data-count="1226">00</span> 
                                    </h3>
                                    <p>Production Monthly</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                                <div class="counter-item">
                                    <h3>
                                        <span class="odometer" data-count="3000">00</span> 
                                    </h3>
                                    <p>Customers</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                                <div class="counter-item">
                                    <h3>
                                        <span class="odometer" data-count="1000">00</span> 
                                    </h3>
                                    <p>Exports</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter -->

    <!-- Partner -->
    <section class="partner-area pb-100 mt-5">
            <div class="container">
                <div class="partner-wrap">
                    <div class="partner-shape">
                        <img src="assets/img/home-one/partner-shape.png" alt="Partner">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="partner-content">
                                <div class="section-title">
                                    <h2>Looking for a Reliable & Stable partner</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="partner-btn">
                                <a class="cmn-btn" href="contact.php">
                                    Contact Us
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partner -->

        <!-- Team -->
        <section class="team-area" style="margin-bottom:100px;">
        <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM team");
        if (mysqli_num_rows($result) > 0) {
             ?>
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Team</span>
                    <h2>Our Expert Team</h2>
                </div>
                <div class="row">
                <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <img src="admin/team_img/<?php echo $row["img"]; ?> " alt="Team">
                            <h3><?php echo $row["name"]; ?></h3>
                            <span><?php echo $row["position"]; ?></span>
                            <ul>
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
                            </ul>
                        </div>
                    </div>
                            <?php
                            }
                        } else {
                            echo "No result found";
                        }

                        ?>
                </div>
            </div>
        </section>
        <!-- End Team -->

        <?php include('layout/footer.php')?>
        <?php include('layout/script.php')?>
    </body>
</html>