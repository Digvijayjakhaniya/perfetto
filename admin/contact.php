<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin-Contact</title>
    <?php include("layout/head.php"); ?>
    <style>
        .form {
            margin: 90px;
            padding: 20px;
        }
    </style>
</head>
<?php
include("layout/config.php");

$record = mysqli_query($conn, "SELECT * FROM contact_details WHERE id='1'");
$row = mysqli_fetch_array($record);


?>

<body class="app sidebar-mini ltr light-mode">

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

			<?php include('layout/nav.php') ?>


				<!-- APP-CONTENT OPEN -->
				<div class="main-content app-content mt-0">
					<div class="side-app">

						<!-- CONTAINER -->
						<div class="main-container container-fluid">

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Contact</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
										<li class="breadcrumb-item active" aria-current="page">Contact</li>
									</ol>
								</div>
								<div class="ms-auto pageheader-btn">
									<a href="javascript:void(0);" class="btn btn-primary btn-icon text-white me-2">
										<span>
											<i class="fe fe-plus"></i>
										</span> Add Account
									</a>
									<a href="javascript:void(0);" class="btn btn-success btn-icon text-white">
										<span>
											<i class="fe fe-log-in"></i>
										</span> Export
									</a>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW OPEN -->
							<form action="" method="POST" enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea class="form-control" id="editor" rows="3" name="des" required><?php echo $row["des"]; ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea2" class="form-label">Address</label>
                                        <textarea class="form-control" id="editor1" rows="3" name="adr" required><?php echo $row["adr"]; ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email" required value="<?php echo $row["email"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone" name="phone" required value="<?php echo $row["phone"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Map</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Map" name="map" required value="<?php echo $row["map"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <input type="submit" value="update" name="update" class="btn btn-outline-success">
                                    </div>
                                    </form>
							<!-- ROW CLOSED -->	
						</div>
						<!-- CONTAINER CLOSED -->
					</div>
				</div>
				<!-- APP-CONTENT CLOSED -->
			</div>

			<?php include('layout/footer.php') ?>


		</div>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $des = $_POST["des"];
        $adr = $_POST["adr"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $map = $_POST["map"];

        $sql =  "UPDATE contact_details SET des='$des',adr='$adr',email='$email',phone='$phone',map='$map' WHERE id='1'";
        // echo $sql;
        // die;

        $data = mysqli_query($conn, $sql);
        if ($data) {
            echo "<script>alert('Data Updated Into Database'); window.location.href='contact.php';</script>";
        } else {
            echo "<script>alert('Failed');</script>";
        }
        // }
    }

    ?>



    <?php include("layout/script.php"); ?>
    <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            var note = document.querySelector('#editor')
            CKEDITOR.replace(editor);
        });
    </script>
     <script>
        $(document).ready(function() {
            var note = document.querySelector('#editor1')
            CKEDITOR.replace(editor1);
        });
    </script>

				
		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
		

	</body>

</html>