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
                            <h2>Blog</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>
                                    Blog
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Blog -->
        <section class="blog-area blog-area-two pt-100 pb-70">
            <div class="container">
            <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM blog");
        if (mysqli_num_rows($result) > 0) {
             ?>
                <div class="row">
                <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <a href="blog-details.php?id=<?php echo $row["id"]; ?>">
                                <img src="admin/blog_img/<?php echo $row["img"]; ?>" alt="Blog">
                            </a>
                            <span>20 Aug 2020</span>
                            <div class="blog-inner">
                                <h3>
                                    <a href="blog-details.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a>
                                </h3>
                                <a class="blog-link" href="blog-details.php?id=<?php echo $row["id"]; ?>">
                                    Read More
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        } else {
                            echo "No result found";
                        }

                        ?>

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
                </div>
            </div>
        </section>
        <!-- End Blog -->

        <?php include('layout/footer.php')?>
        
        <?php include('layout/script.php')?>
    </body>

</html>