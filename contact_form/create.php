<?php
include('config.php');

?>    
<?php
    // echo $_SERVER['REQUEST_METHOD'];
        $name = $email = $number = $subject = "";
        $nameErr = $emailErr = $numberErr = $subjectErr ="";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if (isset($_POST["submit"])) {
              
                $name =$_POST['name'];
                if(empty($name)){
                    $nameErr = "*this is empty";
                }else{
                    $name;
                    if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr =" *Only letters and white space allowed";
                    }
                }
        
                $email =$_POST['email'];
                if(empty($email)){
                    $emailErr= "*this is empty";
                }else{
                    $email;
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }
                }
            
        
                $number =$_POST['number'];
                if(empty($number)){
                    $numberErr= "*this is empty";
                }else{
                    $number;
                    if (!preg_match("/^[0-9-+' ]*$/",$number)){
                        $numberErr = "Invalid number format";
                    }
                }


                $subject =$_POST['subject'];
                if(empty($subject)){
                    $subjectErr= "*this is empty";
                }else{
                    $subject;
                    if (!preg_match("/^[0-9-+'a-zA-Z ]*$/",$subject)){
                        $subjectErr = "Invalid subject format";
                    }
                }
            }
        }
    ?>

        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        <span class="error"><?php echo $nameErr;?></span>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        <span class="error"><?php echo $emailErr;?></span>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <input type="tel" name="number" id="phone_number" class="form-control" placeholder="Phone">
                        <span class="error"><?php echo $numberErr;?></span>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <input type="text" name="subject" id="msg_subject" class="form-control"  placeholder="Subject">
                        <span class="error"><?php echo $subjectErr;?></span>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                        <textarea name="message" class="form-control" required id="message" cols="30" rows="8" placeholder="Message"></textarea>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="submit ">
                        <input type="submit" class="contact-btn btn" value="SUBMIT" name="submit">
                    </div>
                </div>
            </div>
        </form>


<?php
    if (isset($_POST["submit"])) {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];


        if ($nameErr == '' && $emailErr == '' && $numberErr == '' && $subjectErr == '') {
            $sql = "INSERT INTO contact(name,email,number,subject,message) VALUES ('$name','$email','$number','$subject','$message')";

            $data = mysqli_query($conn, $sql);
            if ($data) {
                echo "<script>alert('Data Inserted Into Database'); window.location.href='contact.php';</script>";
            } else {
                echo "Failed";
            }
        } else {
            echo "Please Fill the form First.";
        }
    }

?>