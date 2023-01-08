<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin-Social Media Links</title>
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

$record = mysqli_query($conn, "SELECT * FROM links WHERE id='1'");
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
									<h1 class="page-title">Social Media Links</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
										<li class="breadcrumb-item active" aria-current="page">Social Media Links</li>
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
                                        <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Facebook link" name="facebook" required value="<?php echo $row["facebook"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Twitter link" name="twitter" required value="<?php echo $row["twitter"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Instagram link" name="instagram" required value="<?php echo $row["instagram"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Linkedin link" name="linkedin" required value="<?php echo $row["linkedin"]; ?>">
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
        $facebook = $_POST["facebook"];
        $twitter = $_POST["twitter"];
        $instagram = $_POST["instagram"];
        $linkedin = $_POST["linkedin"];

        $sql =  "UPDATE links SET facebook='$facebook',twitter='$twitter',instagram='$instagram',linkedin='$linkedin' WHERE id='1'";
        // echo $sql;
        // die;

        $data = mysqli_query($conn, $sql);
        if ($data) {
            echo "<script>alert('Data Updated Into Database'); window.location.href='links.php';</script>";
        } else {
            echo "<script>alert('Failed');</script>";
        }
        // }
    }

    ?>



    <?php include("layout/script.php"); ?>
				
		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
		

	</body>

</html>