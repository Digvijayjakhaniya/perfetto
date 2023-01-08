<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include('layout/head.php') ?>


        <title>Robtic - Manufacturing Factory HTML Template</title>
    </head>
    <body>
    <?php include('layout/nav.php') ?>
    <?php
include("layout/config.php");
error_reporting(0);
$id = $_GET['id'];
$record = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");
$row = mysqli_fetch_array($record);
$oldimg = $row["img"];
?>

        <!-- Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>Project Details</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>
                                    Product Details
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->
    
        <!-- Project Details -->
        <div class="project-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="project-details-item">
                            <h2><?php echo $row["title"]; ?></h2>
                            <p><?php echo $row["des1"]; ?></p>
                            <div class="project-details-img">
                                <div class="fdiv">
                                    <img src="admin/products_img/<?php echo $row["img"]; ?> " alt="Project">
                                    <p><?php echo $row["des2"]; ?></p>
                                </div>
                            </div>
                            <div class="project-details-content">
                                <p><?php echo $row["des2"]; ?></p>
                                <div class="video-wrap">
                                    <img src="assets/img/project-details4.jpg" alt="Video">
                                    <a href="https://www.youtube.com/watch?v=QcBeDbs8n9k" class="popup-youtube">
                                        <i class='bx bx-play'></i>
                                    </a>
                                </div>
                                <p><?php echo $row["des4"]; ?></p>
                            </div>
                            <div class="map-container">
            <div class="inner-basic division-map div-toggle" data-target=".division-details" id="divisiondetail">
                <button class="map-point-sm selected" data-show=".discription">
                    <div class="content">
                        <div class="centered-y">
                            <p>Discription</p>
                        </div>
                    </div>
                </button>
                <button class="map-point-sm" data-show=".reviews">
                    <div class="content">
                        <div class="centered-y">
                            <p>Reviews</p>
                        </div>
                    </div>
                </button>
            </div><!-- end inner basic -->
        </div>


        <div class="map-container">
            <div class="inner-basic division-details">
                <div class="discription">
                    <h4><?php echo $row["des_title1"]; ?></h4>
                <p><?php echo $row["des_containt1"]; ?></p>
                    <h4><?php echo $row["des_title2"]; ?></h4>
                    <p><?php echo $row["des_containt2"]; ?></p>
                </div> 
                <div class="reviews hide">
                        <div class="col-lg-12">
                            <div class="project-details-item">
                                <div class="project-details-form">
                                    <!-- <h3>Ask Here</h3> -->
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>
                                                <i class='bx bx-user'></i>
                                            </label>
                                            <input type="text" name="name" class="form-control" placeholder="Ente your name">
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class='bx bx-mail-send'></i>
                                            </label>
                                            <input type="text" name="email" class="form-control" placeholder="Ente your email">
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <i class='bx bx-notepad'></i>
                                            </label>
                                            <textarea id="your_message" name="message" rows="8" class="form-control" placeholder="Enter your message"></textarea>
                                        </div>
                                        <button type="submit" name="submit" style="width:20%;" class="btn project-form-btn">Submit Message</button>
                                    </form>
                                    <?php
                                        if (isset($_POST["submit"])) {
                                            
                                            $name = $_POST["name"];
                                            $email = $_POST["email"];
                                            $message = $_POST["message"];


                                            // if ($nameErr == '' && $emailErr == '' && $numberErr == '' && $subjectErr == '') {
                                                $sql = "INSERT INTO products_reviews(name,email,message) VALUES ('$name','$email','$message')";

                                                $data = mysqli_query($conn, $sql);
                                                if ($data) {
                                                    echo "<script>alert('Data Inserted Into Database'); window.location.href='product-details.php';</script>";
                                                } else {
                                                    echo "Failed";
                                                }
                                            }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM products");
        if (mysqli_num_rows($result) > 0) {
             ?>
                        <div class="project-details-item">
                            <div class="project-details-mec">
                                <h3>Products</h3>
                                <ul>    <?php
                            $i =1;
                            while($row = mysqli_fetch_array($result)) {
                            ?>
                                    <li>
                                        <a href="product-details.php?id=<?php echo $row["id"]; ?>">
                                        <?php echo $row["title"]; ?>
                                            <i class='bx bx-chevron-right'></i>
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
                          
        <section class="partner-area pb-10 mt-5">
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
                        <div class="col-lg-10 pt-5">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Project Details -->


        
        </div>
        </div>
        </div>

        <section class="offer-area offer-area-three pb-100 pt-5">
        <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM products");
        if (mysqli_num_rows($result) > 0) {
             ?>
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Related Products</span>
                    <h2>Products For You From Our Company</h2>
                </div>
                <div class="offer-slider owl-theme owl-carousel">
                <?php
                            $i =1;
                            while($row = mysqli_fetch_array($result)) {
                            ?>
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
                    <?php
                            }
                        } else {
                            echo "No result found";
                        }

                        ?>
                </div>
            </div>
        </section>

        


        <?php include('layout/footer.php')?>
        
        <?php include('layout/script.php')?>
    </body>
</html>