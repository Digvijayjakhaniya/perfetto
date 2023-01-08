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
		<title>Admin-Blog</title>

	</head>

	<body class="app sidebar-mini ltr light-mode">
  
    <?php
include("layout/config.php");
error_reporting(0);
$result = mysqli_query($conn,"SELECT * FROM blog");
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
									<h1 class="page-title">Blogs</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">APPS</a></li>
										<li class="breadcrumb-item active" aria-current="page">Blogs</li>
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
                                            <h4 class="card-title">BLog Details</h4>
                                        </div>
                                        <div class="col md-2" style="display:flex; justify-content:right;">
                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding: 2px;">
                                                Create New Blog
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Create New Blog</h5>
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
                                                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="title" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Description 1</label>
                                                            <textarea class="form-control" id="editor" rows="3" name="des1" required></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea2" class="form-label">Description 2</label>
                                                            <textarea class="form-control" id="editor2" rows="3" name="des2" required></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea3" class="form-label">Description 3</label>
                                                            <textarea class="form-control" id="editor3" rows="3" name="des3" required></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea4" class="form-label">Quoate</label>
                                                            <textarea class="form-control" id="editor4" rows="3" name="quoate" required></textarea>
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
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100" style="text-align: center;">

                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Description 1</th>
                                                <th>Description 2</th>
                                                <th>Description 3</th>
                                                <th>Quoate</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $i = 1;
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>


                                                <tr>
                                                    <td style="width: 10px;"><?php echo $i++; ?></td>

                                                    <td style="width: 100px;"> <img src="blog_img/<?php echo $row["img"]; ?>" height="100px" width="100px"><br></td>
                                                    <td><?php echo $row["title"]; ?></td>
                                                    <td><?php echo $row["des1"]; ?></td>
                                                    <td><?php echo $row["des2"]; ?></td>
                                                    <td><?php echo $row["des3"]; ?></td>
                                                    <td><?php echo $row["quoate"]; ?></td>
                                                    <td ><?php $date=$row["create_at"]; echo date("d-M-y",strtotime($date)); ?></td>
                                                    <td>
                                                    <a href="blogs_update.php?id=<?php echo $row["id"]; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="text-danger" href="delete_blogs.php?id=<?php echo $row["id"]; ?>">
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

                    move_uploaded_file($_FILES["img"]["tmp_name"], "blog_img/" . $_FILES["img"]["name"]);
                    $img = $_FILES["img"]["name"];
                    $title = $_POST["title"];
                    $des1 = $_POST["des1"];
                    $des2 = $_POST["des2"];
                    $des3 = $_POST["des3"];
                    $quoate = $_POST["quoate"];



                    $sql = "INSERT INTO blog (img,title,des1,des2,des3,quoate) VALUES('$img','$title','$des1','$des2','$des3','$quoate')";


                    $data = mysqli_query($conn, $sql);
                    if ($data) {
                        echo "<script>alert('Blog Created Successfully.'); window.location.href='blogs.php';</script>";
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
            $(document).ready(function() {
                var note = document.querySelector('#editor2')
                CKEDITOR.replace(editor2);
            });
            $(document).ready(function() {
                var note = document.querySelector('#editor3')
                CKEDITOR.replace(editor3);
            });
            $(document).ready(function() {
                var note = document.querySelector('#editor4')
                CKEDITOR.replace(editor4);
            });
        </script>

	</body>
</html>