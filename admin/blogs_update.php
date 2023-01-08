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
		<title>Zanex – PHP Bootstrap5 Admin & Dashboard Template</title>

	</head>
    <?php
include("layout/config.php");
error_reporting(0);
$id = $_GET['id'];
$record = mysqli_query($conn, "SELECT * FROM blog WHERE id='$id'");
$row = mysqli_fetch_array($record);
$oldimg = $row["img"];
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
									<h1 class="page-title">Update Blog</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">APPS</a></li>
										<li class="breadcrumb-item active" aria-current="page">Update Blog</li>
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
                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li> -->
                            <!-- <li class="breadcrumb-item active">Contact Details</li> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Modal -->
                                    <div id="exampleModal" aria-labelledby="exampleModalLabel">
                                        <!-- <div class="modal-dialog"> -->
                                            <!-- <div class="modal-content"> -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update blog</h5>
                                                </div>
                                                    <form action="" method="POST" enctype="multipart/form-data">

                                                        <label for="exampleFormControlInput1" class="form-label">Image</label><br>
                                                        <img class="img-fluid" style="height: 100px; width: 100px;" src="blog_img/<?php echo $row["img"]; ?>">
                                                        <div class="input-group mb-3">
                                                            <input type="file" class="form-control" id="inputGroupFile02" name="img" value="<?php echo $row["img"]; ?>">
                                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="title" required value="<?php echo $row["title"]; ?>">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea2" class="form-label">Description 1</label>
                                                            <textarea class="form-control" id="editor2" rows="3" name="des1" required><?php echo $row["des1"]; ?></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea3" class="form-label"> Description 2</label>
                                                            <textarea class="form-control" id="editor3" rows="3" name="des2" required><?php echo $row["des2"]; ?></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea4" class="form-label"> Description 3</label>
                                                            <textarea class="form-control" id="editor4" rows="3" name="des3" required><?php echo $row["des3"]; ?></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea5" class="form-label">Quoate</label>
                                                            <textarea class="form-control" id="editor5" rows="3" name="quoate" required><?php echo $row["quoate"]; ?></textarea>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <input type="submit"  name="submit" class="btn btn-primary" value="Save changes">
                                                            <!-- <button type="submit" name="submit" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
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

    if (strlen($img) > 0) {
        $oldimg = $img;
    }


    $sql = "UPDATE blog SET img='$oldimg',title='$title',des1='$des1',des2='$des2',des3='$des3',quoate='$quoate' WHERE id='$id'";


    $data = mysqli_query($conn, $sql);
    if ($data) {
        echo "<script>alert('product Updated'); window.location.href='blogs.php';</script>";
    } else {
        echo "<script>alert('Failed');</script>";
    }
}

?>
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
        </script>

	</body>
</html>