<!doctype html>
<html lang="en" dir="ltr">
    
<head>
				
		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Zanex – PHP Bootstrap5  Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, dashboard, admin dashboard, admin template, crypto, crypto dashboard, sales dashboard, bootstrap 5 admin template, ecommerce template, ecommerce dashboard, responsive dashboard, admin panel, bootstrap 5 admin dashboard, cryptocurrency dashboard, bootstrap dashboard, multi dashboard, html, responsive, responsive admin, bootstrap admin template, dashboard template, bootstrap">
        
		<?php include('layout/head.php') ?>

		<!-- TITLE -->
		<title>Admin-Team</title>

	</head>

	<body class="app sidebar-mini ltr light-mode">
  
    <?php
include("layout/config.php");
error_reporting(0);
$result = mysqli_query($conn,"SELECT * FROM team");
?>
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
									<h1 class="page-title">Team</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">APPS</a></li>
										<li class="breadcrumb-item active" aria-current="page">Team</li>
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
                            <!-- start page title -->
                            <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col md-10">
                                            <h4 class="card-title">Team Details</h4>
                                        </div>
                                        <div class="col md-2" style="display:flex; justify-content:right;">
                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding: 2px;">
                                                Add Team Member
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Team Member</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="POST" enctype="multipart/form-data">

                                                        <label for="exampleFormControlInput1" class="form-label">Image</label><br>

                                                        <div class="input-group mb-3">
                                                            <input type="file" class="form-control" id="inputGroupFile02" name="img" required>
                                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="name" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Position</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="position" name="position" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="facebook" name="facebook" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="twitter" name="twitter" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="instagram" name="instagram" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="linkedin" name="linkedin" required>
                                                        </div>

                                                        <!-- <div class="mb-3">
                                                            <input type="submit" value="Submit" name="submit" class="btn btn-outline-success">
                                                        </div> -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                            if (mysqli_num_rows($result) > 0) {
                            ?>
                            <div style="overflow-x:auto;">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100" style="text-align: center;">

                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Facebook</th>
                                                <th>Twitter</th>
                                                <th>Instagram</th>
                                                <th>Linkedin</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $i = 1;
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>


                                                <tr>
                                                    <td><?php echo $i++; ?></td>

                                                    <td> <img src="team_img/<?php echo $row["img"]; ?>" height="100px" width="100px"><br></td>
                                                    <td><?php echo $row["name"]; ?></td>
                                                    <td><?php echo $row["position"]; ?></td>
                                                    <td><?php echo $row["facebook"]; ?></td>
                                                    <td><?php echo $row["twitter"]; ?></td>
                                                    <td><?php echo $row["instagram"]; ?></td>
                                                    <td ><?php echo $row["linkedin"]; ?></td>
                                                    <td>
                                                    <a href="team_update.php?id=<?php echo $row["id"]; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="text-danger" href="delete_team.php?id=<?php echo $row["id"]; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete">
                                                                <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                                                <line x1="18" y1="9" x2="12" y2="15"></line>
                                                                <line x1="12" y1="9" x2="18" y2="15"></line>
                                                            </svg>
                                                        </a>

                                                     
                                                    </td>
                                                </tr>
                                            <?php
                                                // $i++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>

                                <?php
                            } else {
                                echo "No result found";
                            }

                                ?>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->


                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // if (isset($_POST["submit"])) {

                    move_uploaded_file($_FILES["img"]["tmp_name"], "team_img/" . $_FILES["img"]["name"]);
                    $img = $_FILES["img"]["name"];
                    $name = $_POST["name"];
                    $position = $_POST["position"];
                    $facebook = $_POST["facebook"];
                    $twitter = $_POST["twitter"];
                    $instagram = $_POST["instagram"];
                    $linkedin = $_POST["linkedin"];


                    $sql = "INSERT INTO team (img,name,position,facebook,twitter,instagram,linkedin) VALUES('$img','$name','$position','$facebook','$twitter','$instagram','$linkedin')";


                    $data = mysqli_query($conn, $sql);
                    if ($data) {
                        echo "<script>alert('Team Member Added Successfully.'); window.location.href='team.php';</script>";
                    } else {
                        echo "<script>alert('Failed.')</script>";
                    }
                }

                ?>

                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- APP-CONTENT CLOSED -->
    </div>
			<?php include('layout/footer.php') ?>

	</div>

				
		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<?php include('layout/script.php') ?>

	</body>
</html>