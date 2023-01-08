<?php include('config.php'); ?>   
                            
                                <div class="formPopup" id="popupForm">
                                    <form class="formContainer" method="POST" action="" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="tel" name="phone" id="phone_number" class="form-control" placeholder="Phone" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Estimated Quantity"required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" name="unit_type" id="unit_type" class="form-control"  placeholder="Unit Type" required >
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                            <?php
        include("contact_form/config.php");
        error_reporting(0);
        $result = mysqli_query($conn, "SELECT * FROM products");
        if (mysqli_num_rows($result) > 0) {
             ?>
                                                <div class="form-group">
                                        
                                                    <select name="product" class="form-control" id="product" >
                                                        <option value="product" selected disabled >Products</option>
                                                        <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                                        <option value="<?php echo $row["title"]; ?>"><?php echo $row["title"]; ?></option>
                                                        <!-- <option value="PP/HDPE Tapes (TAP)">PP/HDPE Tapes (TAP)</option>
                                                        <option value="PP/HDPE Woven Fabrics (Coated/Uncoated)">PP/HDPE Woven Fabrics (Coated/Uncoated)</option>
                                                        <option value="PP/HDPE Woven Bags">PP/HDPE Woven Bags</option>
                                                        <option value="BOPP Laminated PP Woven Bags">BOPP Laminated PP Woven Bags</option>
                                                        <option value="PP Woven Courier bags">PP Woven Courier bags</option>
                                                        <option value="BOPP Laminated PP Woven Bags">BOPP Laminated PP Woven Bags</option>
                                                        <option value="PP Woven Cement bags">PP Woven Cement bags</option>
                                                        <option value="Pp Woven box bags">Pp Woven box bags</option> -->
                                                    <?php
                            }
                        } else {
                            echo "No result found";
                        }

                        ?>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8"  placeholder="Message" required ></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12">
                                                <div class="submit ">
                                                    <input type="submit" class="contact-btn btn" value="SUBMIT" name="submit">
                                                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                                if (isset($_POST["submit"])) {
                                                    
                                                    $name = $_POST["name"];
                                                    $email = $_POST["email"];
                                                    $phone = $_POST["phone"];
                                                    $quantity = $_POST["quantity"];
                                                    $unit_type = $_POST["unit_type"];
                                                    $product = $_POST["product"];
                                                    $message = $_POST["message"];


                                                   
                                                        $sql = "INSERT INTO inquiry_form(name,email,phone,quantity,unit_type,product,message) VALUES ('$name','$email','$phone','$quantity','$unit_type','$product','$message')";

                                                        $data = mysqli_query($conn, $sql);
                                                        if ($data) {
                                                            echo "<script>alert('Data Inserted Into Database'); window.location.href='index.php';</script>";
                                                        } else {
                                                            echo "Failed";
                                                        }
                                                    }

                                            ?>
                                </div>