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
                            <h2>Product</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>
                                    Product
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Project -->
        <section class="offer-area offer-area-four pt-100 pb-70">
        <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM products");
        if (mysqli_num_rows($result) > 0) {
             ?>
            <div class="container">
                <div class="row">
                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="offer-item">
                            <div class="offer-top">
                                <img src="admin/products_img/<?php echo $row["img"]; ?> " alt="Foreign">
                                <i class='bx bx-shopping-bag'></i>
                            </div>
                            <div class="offer-bottom">
                                <h3>
                                    <a href="product-details.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a>
                                </h3>
                                <p><?php echo $row["sort_des"]; ?> </p>
                                <a class="offer-link" href="product-details.php?id=<?php echo $row["id"]; ?>">Read More
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
                   
                </div>
            </div>
        </section>
        <!-- End Project -->

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