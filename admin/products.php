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
		<title>Admin-Products</title>

	</head>

	<body class="app sidebar-mini ltr light-mode">
  
    <?php
include("layout/config.php");
error_reporting(0);
$result = mysqli_query($conn,"SELECT * FROM products");
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
									<h1 class="page-title">Products</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">APPS</a></li>
										<li class="breadcrumb-item active" aria-current="page">Products</li>
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
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                    </div>
                    <?php
if (mysqli_num_rows($result) > 0) {
?>

                </div>
            </div>
        </div>
        <!-- end page title -->
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col md-10">
                                            <h4 class="card-title">Products Details</h4>
                                        </div>
                                        <div class="col md-2" style="display:flex; justify-content-between">
                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding: 2px;">
                                                Create New Product
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Create New Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="POST" enctype="multipart/form-data">

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="title" required>
                                                        </div>

                                                        <label for="exampleFormControlInput1" class="form-label">Image</label><br>

                                                        <div class="input-group mb-3">

                                                            <input type="file" class="form-control" id="inputGroupFile02" name="img">
                                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label"> Short Description</label>
                                                            <textarea class="form-control" id="editor" rows="3" name="sort_des" required></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea2" class="form-label">Description 1</label>
                                                            <textarea class="form-control" id="editor2" rows="3" name="des1" required></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea3" class="form-label"> Description 2</label>
                                                            <textarea class="form-control" id="editor3" rows="3" name="des2" required></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea4" class="form-label"> Description 3</label>
                                                            <textarea class="form-control" id="editor4" rows="3" name="des3" required></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea5" class="form-label"> Description 4</label>
                                                            <textarea class="form-control" id="editor5" rows="3" name="des4" required></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput2" class="form-label">Description Title1</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Title" name="des_title1" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea6" class="form-label"> Description containt1</label>
                                                            <textarea class="form-control" id="editor6" rows="3" name="des_containt1" required></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput3" class="form-label">Description Title2</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Title" name="des_title2" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea7" class="form-label">Description containt2</label>
                                                            <textarea class="form-control" id="editor7" rows="3" name="des_containt2" required></textarea>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <input type="submit"  name="submit" class="btn btn-primary" value="Save changes">
                                                            <!-- <button type="submit" name="submit" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div style="overflow-x:auto;">
                                    <table id="datatable" class="table table-bordered dt-responsive overflow-auto" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Short Description</th>
                                                <th>Description 1</th>
                                                <th>Description 2</th>
                                                <th>Description 3</th>
                                                <th>Description 4</th>
                                                <th>Description Title1</th>
                                                <th>Description containt1</th>
                                                <th>Description Title2</th>
                                                <th>Description containt2</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                            <?php

                                            $i = 1;
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                        <tbody>

                                                <tr>
                                                    <td style="width: 10px;"><?php echo $i++; ?></td>
                                                    <td><?php echo $row["title"]; ?></td>

                                                    <td style="width: 100px;"> <img src="products_img/<?php echo $row["img"]; ?>" height="100px" width="100px"><br>
                                                    </td>
                                                    <td><?php echo $row["sort_des"]; ?></td>
                                                    <td><?php echo $row["des1"]; ?></td>
                                                    <td><?php echo $row["des2"]; ?></td>
                                                    <td><?php echo $row["des3"]; ?></td>
                                                    <td><?php echo $row["des4"]; ?></td>
                                                    <td><?php echo $row["des_title1"]; ?></td>
                                                    <td><?php echo $row["des_containt1"]; ?></td>
                                                    <td><?php echo $row["des_title2"]; ?></td>
                                                    <td><?php echo $row["des_containt2"]; ?></td>

                                                    <td>

                                                    <a href="products_update.php?id=<?php echo $row["id"]; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="text-danger" href="products_delete.php?id=<?php echo $row["id"]; ?>">
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
                        // if($_POST["update"]){
                        move_uploaded_file($_FILES["img"]["tmp_name"], "products_img/" . $_FILES["img"]["name"]);
                        $title = $_POST["title"];
                        $img = $_FILES["img"]["name"];
                        $sort_des = $_POST["sort_des"];
                        $des1 = $_POST["des1"];
                        $des2 = $_POST["des2"];
                        $des3 = $_POST["des3"];
                        $des4 = $_POST["des4"];
                        $des_title1 = $_POST["des_title1"];
                        $des_containt1 = $_POST["des_containt1"];
                        $des_title2 = $_POST["des_title2"];
                        $des_containt2 = $_POST["des_containt2"];


                        // if($title !="" && $des !="" && $img !=""){


                        $sql =  "INSERT INTO products (title,img,sort_des,des1,des2,des3,des4,des_title1,des_containt1,des_title2,des_containt2) values ('$title','$img','$sort_des','$des1','$des2','$des3','$des4','$des_title1','$des_containt1','$des_title2','$des_containt2')";
                        // echo $sql;
                        // die;

                        $data = mysqli_query($conn, $sql);
                        if ($data) {
                            echo "<script>alert('New product Created'); window.location.href='';</script>";
                        } else {
                            echo "<script>alert('Failed');</script>";
                        }
                        // }
                    }

                    ?>




                    <div class="row">
                        <?php
                            include("layout/config.php");
                            error_reporting(0);
                            $result = mysqli_query($conn,"SELECT * FROM products_reviews");
                        ?>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body ">
                                    <?php
                                        if (mysqli_num_rows($result) > 0) {
                                    ?>

                                    <h4 class="card-title ">Products Reviews Details</h4>

                                    <table id="file-datatable" class="table table-bordered dt-responsive  nowrap w-100" style="text-align: center;">

                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <?php
                                            $i=1;
                                            while($row = mysqli_fetch_array($result)) {
                                        ?>

                                        <tbody>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $row["name"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td><?php echo $row["message"]; ?></td>
                                                <td>
                                                    <a class="text-danger" href="delete_products_reviews.php?id=<?php echo $row["id"]; ?>">
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
                                                <?php
                                                }
                                                else{
                                                echo "<script>alert('No result found');</script>";
                                                }

                                                ?>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
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
        <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
		<script src="assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
		<script src="assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
		<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
		<script src="assets/js/table-data.js"></script>	
        <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
        <script>
            $(document).ready(function() {
                var note = document.querySelector('#editor')
                CKEDITOR.replace(editor);
            });
            $(document).ready(function() {
                var note = document.querySelector('#editor2')
                CKEDITOR.replace(editor2);
            });$(document).ready(function() {
                var note = document.querySelector('#editor3')
                CKEDITOR.replace(editor3);
            });$(document).ready(function() {
                var note = document.querySelector('#editor4')
                CKEDITOR.replace(editor4);
            });$(document).ready(function() {
                var note = document.querySelector('#editor5')
                CKEDITOR.replace(editor5);
            });

            $(document).ready(function() {
                var note = document.querySelector('#editor6')
                CKEDITOR.replace(editor6);
            });$(document).ready(function() {
                var note = document.querySelector('#editor7')
                CKEDITOR.replace(editor7);
            });
        </script>

	</body>
</html>