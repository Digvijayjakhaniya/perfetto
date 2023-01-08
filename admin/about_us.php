<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Admin-About</title>
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

$record = mysqli_query($conn, "SELECT * FROM about WHERE id='1'");
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
									<h1 class="page-title">About Us</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
										<li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Title" name="title" required value="<?php echo $row["title"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea class="form-control" id="editor" rows="3" name="des" required><?php echo $row["des"]; ?></textarea>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">list 1</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="list1" name="list1" required value="<?php echo $row["list1"]; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">list 2</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="list2" name="list2" required value="<?php echo $row["list2"]; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">list 3</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="list3" name="list3" required value="<?php echo $row["list3"]; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">list 4</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="list4" name="list4" required value="<?php echo $row["list4"]; ?>">
                                    </div>


                                    <label for="exampleFormControlInput1" class="form-label">Image1</label><br>
                                    <img src="about_img/<?php echo $row["img1"]; ?>" height="200px" width="200px"><br>

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="img1" value="<?php echo $row["img1"]; ?>">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>

                                    <label for="exampleFormControlInput1" class="form-label">Image2</label><br>
                                    <img src="about_img/<?php echo $row["img2"]; ?>" height="200px" width="200px"><br>

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="img2" value="<?php echo $row["img2"]; ?>">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>

                                    <label for="exampleFormControlInput1" class="form-label">Image3</label><br>
                                    <img src="about_img/<?php echo $row["img3"]; ?>" height="200px" width="200px"><br>

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="img3" value="<?php echo $row["img3"]; ?>">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>

                                    <label for="exampleFormControlInput1" class="form-label">Image4</label><br>
                                    <img src="about_img/<?php echo $row["img4"]; ?>" height="200px" width="200px"><br>


                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="img4" value="<?php echo $row["img4"]; ?>">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Year</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="year" name="year" required value="<?php echo $row["year"]; ?>">
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

        move_uploaded_file($_FILES["img1"]["tmp_name"], "about_img/" . $_FILES["img1"]["name"]);
        move_uploaded_file($_FILES["img2"]["tmp_name"], "about_img/" . $_FILES["img2"]["name"]);
        move_uploaded_file($_FILES["img3"]["tmp_name"], "about_img/" . $_FILES["img3"]["name"]);
        move_uploaded_file($_FILES["img4"]["tmp_name"], "about_img/" . $_FILES["img4"]["name"]);

        $title = $_POST["title"];
        $des = $_POST["des"];
        $list1 = $_POST["list1"];
        $list2 = $_POST["list2"];
        $list3 = $_POST["list3"];
        $list4 = $_POST["list4"];
        $img1 = $_FILES["img1"]["name"];
        $img2 = $_FILES["img2"]["name"];
        $img3 = $_FILES["img3"]["name"];
        $img4 = $_FILES["img4"]["name"];
        $year = $_POST["year"];

        if (strlen($img1) > 0) {
            $oldimg1 = $img1;
        }
        if (strlen($img2) > 0) {
            $oldimg2 = $img2;
        }
        if (strlen($img3) > 0) {
            $oldimg3 = $img3;
        }
        if (strlen($img4) > 0) {
            $oldimg4 = $img4;
        }


        $sql =  "UPDATE about SET title='$title',des='$des',list1='$list1',list2='$list2',list3='$list3',list4='$list4',img1='$oldimg1',img2='$oldimg2',img3='$oldimg3',img4='$oldimg4',year='$year' WHERE id='1'";

        // echo $sql;
        // die;

        $data = mysqli_query($conn, $sql);
        if ($data) {
            echo "<script>alert('Data Updated Into Database'); window.location.href='about_us.php';</script>";
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