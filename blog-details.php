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
$record = mysqli_query($conn, "SELECT * FROM blog WHERE id='$id'");
$row = mysqli_fetch_array($record);
$oldimg = $row["img"];
?>
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>Blog Details</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>
                                    Blog Details
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Blog Details -->
        <div class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog-details-item">
                            <div class="blog-details-name">
                                <div class="details-user">
                                    <ul>
                                        <li>
                                            <span>by</span> 
                                            <a href="#">sunflowee</a>
                                        </li>
                                        <li>
                                            <span><?php $date=$row["create_at"]; echo date("d-M-y",strtotime($date)); ?></span>
                                        </li>
                                        <li>
                                            <span>by</span> 
                                            <a href="#">sunflowee</a>
                                        </li>
                                    </ul>
                                </div>

                                <h2><?php echo $row["title"]; ?></h2>
                                <p><?php echo $row["des1"]; ?></p>
                                <div class="row align-items-center">
                                    <div class="col-sm-6 col-lg-6">
                                        <img src="admin/blog_img/<?php echo $row["img"]; ?>" alt="Blog Details">
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="details-item">
                                        <p><?php echo $row["des2"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $row["des3"]; ?></p>
                            </div>
                            <div class="blog-details-quote">
                                <blockquote>
                                    <i class='bx bxs-quote-alt-left'></i>
                                    <?php echo $row["quoate"]; ?>
                                </blockquote>
                            </div>
                            <div class="blog-area blog-area-two blog-area-three">
                            <?php
        include("contact_form/config.php");
        error_reporting(0);
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM blog WHERE id !='$id'");
        if (mysqli_num_rows($result) > 0) {
             ?>
                                <div class="section-title">
                                    <h2>Related Post</h2>
                                </div>
                                <div class="row">
                                <?php
                            $i =1;
                            while($row = mysqli_fetch_array($result)) {
                            ?>
                                    <div class=" col-lg-6">
                                        <div class="blog-item">
                                            <a href="blog-details.php?id=<?php echo $row["id"]; ?>">
                                                <img src="admin/blog_img/<?php echo $row["img"]; ?>" alt="Blog">
                                            </a>
                                            <span><?php $date=$row["create_at"]; echo date("d-M-y",strtotime($date)); ?></span>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="blog-details-item">
                            <div class="blog-details-post details-head">
                            <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM blog");
        if (mysqli_num_rows($result) > 0) {
             ?>
                                <h3>Recent Blog</h3>
                                <ul> <?php
                            $i =1;
                            while($row = mysqli_fetch_array($result)) {
                            ?>
                                    <li>
                                        <img src="admin/blog_img/<?php echo $row["img"]; ?>" alt="Blog Details"> 
                                        <div class="post-inner">
                                            <span><?php $date=$row["create_at"]; echo date("d-M-y",strtotime($date)); ?></span>
                                            <a href="blog-details.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a>
                                        </div>
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
        <!-- End Blog Details -->
        <?php include('layout/footer.php')?>
        
        <?php include('layout/script.php')?>
      
    </body>

</html>