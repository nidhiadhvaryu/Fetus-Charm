<?php
include('connection.php');
session_start();
if (isset($_SESSION['aun'])) {
} else {
	header("location:index.php");
}
$blog_id = $_REQUEST['blogID'];
$data = $link->rawQueryOne("select * from blogtb where blogID=?", array($blog_id));
if ($link->count == 0) {
	echo "Data Not Found";
}
if (isset($_POST['submit']) == "submit") {
	$bname = $_POST['blogname'];
    $btitle = $_POST['blogtitle'];
    $bdate = $_POST['blogdate'];
    $bauthor = $_POST['blogauthor'];
    $bsdes = $_POST['blogshortdescription'];
    $bdes = $_POST['blogdescription'];
	$link->where("blogID", $blog_id);
	$sql = $link->update("blogtb", array("blogName" => $bname, "blogTitle" => $btitle, "blogDate" => $bdate, "blogAuthor" => $bauthor, "blogShortdescription" => $bsdes, "blogDescription" => $bdes));
	if ($sql) {
		$img = $_FILES['blogimage']['name'];
		if ($img != null || $img != "") {
			$ext = pathinfo($img, PATHINFO_EXTENSION);
			$filename_without_ext = pathinfo($img, PATHINFO_FILENAME);
			$pimage = $filename_without_ext . $sql . '.' . $ext;
			if (move_uploaded_file($_FILES['blogimage']['tmp_name'], "files/blog/" . $pimage)) {
				$link->where('blogID', $blog_id);
				$a1 = $link->update("blogtb", array("blogImage" => "files/blog/" . $pimage));
			}
		}
	}
	header("location:viewblog.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<script>
        function formvalidation() {
            var check = true;
            document.getElementById("a1").innerHTML = "";
            document.getElementById("a2").innerHTML = "";
            document.getElementById("a3").innerHTML = "";
            document.getElementById("a4").innerHTML = "";
            document.getElementById("a5").innerHTML = "";
            var n = document.blogform.blogname.value;
            if (n == 0) {
                document.getElementById("a1").innerHTML = "Enter Blog Name ";
                check = false;
            }
            var t = document.blogform.blogtitle.value;
            if (t == 0) {
                document.getElementById("a2").innerHTML = "Enter Blog Title ";
                check = false;
            }
            var d = document.blogform.blogdate.value;
            if (d == 0) {
                document.getElementById("a3").innerHTML = "Select Blog date ";
                check = false;
            }
            var au = document.blogform.blogauthor.value;
            if (au == 0) {
                document.getElementById("a4").innerHTML = "Enter Blog Author ";
                check = false;
            }
            var des = document.blogform.blogshortdescription.value;
            if (des == 0) {
                document.getElementById("a5").innerHTML = "Enter Blog Short Description ";
                check = false;
            }
            
            return check;
        }
    </script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/fetus-charm-favicon.png">
	<title>Fetus Charm Admin - Category</title>
	<link rel="stylesheet" href="css/vendors_css.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	<div class="wrapper">
		<div id="loader"></div>
		<header class="main-header">
			<?php
			include("header.php");
			?>
		</header>
		<aside class="main-sidebar">
			<?php
			include("sidebar.php");
			?>
		</aside>
		<div class="content-wrapper">
			<div class="container-full">
				<section class="content">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Blog Form </h4>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col">
									<form novalidate method="post" name="blogform" onSubmit="return formvalidation();" enctype="multipart/form-data">
										<div class="row">
											<div class="col-12">
                                            <div class="form-group">
                                                    <h5>Blog Name <span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" id="blogname" name="blogname" class="form-control"  value="<?php echo $data['blogName']; ?>">
                                                    </div>
                                                    <span id="a1" style="color:red;">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Blog Title <span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" id="blogtitle" name="blogtitle" class="form-control"value="<?php echo $data['blogTitle']; ?>" >
                                                    </div>
                                                    <span id="a2" style="color:red;">
                                                </div>
                                                <div class="form-group">
													<h5>Blog Image<span class="text-danger"></span></h5>
													<div class="controls">
														<input type="file" id="blogimage" name="blogimage" class="form-control">
														<img src="<?php echo $data['blogImage']; ?>" style="height:50px;width:50px">
													</div>
												</div>
                                                <div class="form-group">
                                                    <h5>Blog Date <span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="date" id="blogdate" name="blogdate" class="form-control" value="<?php echo $data['blogDate']; ?>">
                                                    </div>
                                                    <span id="a3" style="color:red;">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Blog Author <span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" id="blogauthor" name="blogauthor" class="form-control" value="<?php echo $data['blogAuthor']; ?>">
                                                    </div>
                                                    <span id="a4" style="color:red;">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Blog Short Description <span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" id="blogshortdescription" name="blogshortdescription" class="form-control" value="<?php echo $data['blogShortdescription']; ?>">
                                                    </div>
                                                    <span id="a5" style="color:red;">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Description<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <textarea id="editor" name="blogdescription" class="form-control"><?php echo $data['blogDescription']; ?></textarea>
                                                    </div>
                                                </div>
												<div class="text-xs-right">
													<button type="submit" value="submit" name="submit" class="btn btn-info">Submit</button>
												</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	</div>
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
	<script src="assets/icons/feather-icons/feather.min.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/validation.js"></script>
	<script src="js/pages/form-validation.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>