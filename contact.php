
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
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>
                                    Contact
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact -->
        <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM contact_details");
        if (mysqli_num_rows($result) > 0) {
             ?>
        <section class="contact-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                    <?php
                            $i =1;
                            while($row = mysqli_fetch_array($result)) {
                            ?>
                        <div class="contact-item contact-left">
                            <h3>Our Located Place</h3>
                            <p><?php echo $row["des"]; ?></p>
                            <ul>
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    <?php echo $row["adr"]; ?>
                                </li>
                                <li>
                                    <i class='bx bx-mail-send'></i>
                                    <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#8ce5e2eae3ccfee3eef8e5efa2efe3e1">
                                        <span class="__cf_email__" data-cfemail="5b32353d341b2934392f323875383436"><?php echo $row["email"]; ?></span>
                                    </a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="<?php echo $row["phone"]; ?>">
                                    <?php echo $row["phone"]; ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-item contact-right">
                            <h3>Get In Touch</h3>
                            <?php include('contact_form/create.php')?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Map -->
        <div class="map-area">
            <iframe id="map" src="<?php echo $row["map"]; ?>" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <?php
                            }
                        } else {
                            echo "No result found";
                        }

                        ?>
        <!-- End Map -->

        <?php include('layout/footer.php')?>
        
        <?php include('layout/script.php')?>
    </body>
</html>