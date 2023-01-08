        <!-- Footer -->
        <footer class="pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                        <?php  include("contact_form/config.php");
                    error_reporting(0);
                    $result = mysqli_query($conn, "SELECT * FROM links");
                    if (mysqli_num_rows($result) > 0) {
                        ?>
                            <div class="footer-logo">
                                <a class="logo-link" href="index.php">
                                    <img src="assets/img/perfetto_logo.png" alt="Logo">
                                </a>
                                <p>Inspired by the simplistic style of traditional Scandinavian design, this cone shaped ceiling pendant adds an understated elegance.</p>
                                <ul> 
                                    <?php   $i = 1;
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
                    <div class="col-sm-6 col-lg-3">
                  <?php  include("contact_form/config.php");
                    error_reporting(0);
                    $result = mysqli_query($conn, "SELECT * FROM products");
                    if (mysqli_num_rows($result) > 0) {
                        ?>
                        <div class="footer-item">
                            <div class="footer-service">
                                <h3>Products</h3>
                                <ul>
                             <?php   $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                    <li>
                                        <a href="product-details.php?id=<?php echo $row["id"]; ?>" target="_blank"><?php echo $row["title"]; ?></a>
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
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-service">
                                <h3>Useful Links</h3>
                                <ul>
                                    <li>
                                        <a href="index.php" target="_blank">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.php" target="_blank">About</a>
                                    </li>
                                    <li>
                                        <a href="product.php" target="_blank">Products</a>
                                    </li>
                                    <li>
                                        <a href="blog.php" target="_blank">Blog</a>
                                    </li>
                                    <li>
                                        <a href="contact.php" target="_blank">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                    <?php  include("contact_form/config.php");
                    error_reporting(0);
                    $result = mysqli_query($conn, "SELECT * FROM contact_details");
                    if (mysqli_num_rows($result) > 0) {
                        ?>
                        <div class="footer-item">
                            <div class="footer-touch">
                                <h3>Get In Touch</h3>
                                <?php   $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <ul>
                                    <li>
                                        <i class='bx bxs-phone-call'></i>
                                        <h4>Phone</h4>
                                        <a href="tel:<?php echo $row["phone"]; ?>"><?php echo $row["phone"]; ?></a>
                                    </li>
                                    <li>
                                        <i class='bx bx-mail-send'></i>
                                        <h4>Email</h4>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#6b02050d042b1904091f020845080406"><span class="__cf_email__" data-cfemail="ed84838b82ad9f828f99848ec38e8280"><?php echo $row["email"]; ?></span></a>
                                    </li>
                                    <li>
                                        <i class='bx bx-location-plus'></i>
                                        <h4>Address</h4>
                                        <span><?php echo $row["adr"]; ?></span>
                                    </li>
                                </ul>
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
        </footer>
        <!-- End Footer -->

        <!-- Copyright -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-item">
                    <p>Copyright ©2022 Perfettopackaging. Designed By <a href="https://sunfloweebiztech.com/" target="_blank">Sunflowee Biztech</a></p>
                </div>
            </div>
        </div>
        <!-- End Copyright -->