<?php
include('scripts.php');



if ($_SESSION['con'] == 'success') {

	

} else {
	header("Location: sign_in.php");
	die("error");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>library MGS</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

	
	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><i class="fa-solid fa-book m-10px"></i> <b
						class="me-1">Library</b> MGS</a>


				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
			<div class="navbar-nav d-flex justify-content-between">
				<div class="navbar-item navbar-text ms-auto me-auto d-none d-md-block ">
					<b class="me-1 fs-1 ">DASHBOARD</b>
				</div>


				<div class="navbar-item navbar-form">
					<form action="" method="POST" name="search" id="form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>

				<div class="navbar-item navbar-user ">

					<a data-bs-target="#form-profile" class="navbar-link  " data-bs-toggle="modal">
						<img src="assets/img/users/user1.jpeg" alt="" />

						<span class="d-none d-md-inline">
							<?php echo $_SESSION["userfrnam"] . ' ' . $_SESSION["userlsnam"] ?>
						</span>


					</a>


				</div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->

		<!-- profile -->
		<div class="modal fade" id="form-profile">
			<div class="modal-dialog">
				<div class="modal-content">
				<form action="scripts.php" method="POST"  data-parsley-validate="">
                        <div class="modal-header">
                            <h5 class="modal-title"> PROFILE </h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>

                        <div class="modal-body mx-auto">

                            <img src="assets/img/users/user1.jpeg" alt="photo de profile" srcset="">

                            <h2 class="border-bottom m-2">informations personnels</h2>

                        <div class="row  w-75 m-1">
                            <p class="  col-4 fw-700">nom:</p> <input class="col-8" name="userfrnam" type="text"
                                value="<?php echo $_SESSION["userfrnam"]?> re" data-parsley-pattern="[^0-9]{3,}"
                                required>
                        </div>

                        <div class="row  w-75 m-1">
                            <p class=" col-4 fw-700">prenom:</p> <input class="col-8" name="userlsnam" type="text"
                                value="<?php echo $_SESSION["userlsnam"]?>" data-parsley-pattern="^[^0-9]{3,}$"
                                required><br>
                        </div>

                        <div class="row  w-75 m-1">
                            <p class=" col-4 fw-700">email address:</p> <input class="col-8" name="useremail"
                                type="text" value="<?php echo $_SESSION["useremail"] ?>" data-parsley-type="email"
                                required>

                        </div>

                        <div>
                            <hr>

                            <button value="validate" type="submit" name="sauvegarde"
                                class="btn btn-warning task-action-btn mx-2">sauvegarde</button>


                        </div>
                        </div >
                       
                    </form>
				</div>
			</div>
		</div>

		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">


						<div class="d-flex ">
							<div class="">
								<?php echo $_SESSION["userfrnam"] . ' ' . $_SESSION["userlsnam"] ?>
							</div>

						</div>
						<small>Admin</small>


					</div>

				</div>
				<!-- BEGIN minify-button -->
				<div class="menu-item d-flex">
					<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i
							class="fa fa-angle-double-left"></i></a>
				</div>

				<!-- END minify-button -->

				<a href="dashboard.php"> <button class=" w-150px m-2 btn btn-gray-400"> <span
							class=" text-black-600">DASHBOARD</span> </button></a>
				<a href="index.php"> <button href="index.php" class="w-150px m-2 btn btn-gray-400"> <span
							class=" text-black-600">TABLEAU DES LIVRES</span> </button></a>

				<form action="scripts.php" method="POST">
					<div class="form-group">

						<button type="submit" class="btn mx-8px w-150px h-30px btn-danger" name="sign_out"
							value="sign_out"><i class="fa-solid fa-right-from-bracket text-black-600"></i></button>
					</div>
				</form>


				<!-- END menu -->
			</div>
			<!-- END scrollbar -->

		</div>

		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile"
				class="stretched-link"></a></div>
		<!-- END #sidebar -->
		<!-- BEGIN #content -->


		<div id="content" class="app-content"
			style="min-height: 100vh; background: url(assets/img/cover/cover3.jpg) no-repeat fixed; background-size: cover;">
			

			<!-- alert returned messages -->

			<?php if (isset($_SESSION['message'])): ?>
			<div class="alert alert-green alert-dismissible fade show">
				<strong>Success!</strong>
				<?php
	            echo $_SESSION['message'];
	            unset($_SESSION['message']);


                ?>

				<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
			</div>
			<?php endif ?>
			<div class=" m-2 d-flex justify-content-around  ">
				<span class=" w-200px h-100px bg-success-200 d-flex flex-column rounded">
					<span class="fw-800 fs-20px m-auto ">
						<?php added_book() ?>
					</span>
					<span class="fw-200 fs-20px m-auto  p-1 ">
					Nombre de livres ajoutés
					</span>
				</span>
				<span class=" w-200px h-100px bg-success-200 d-flex flex-column rounded">
					<span class="fw-800 fs-20px m-auto ">
					<?php amended_book() ?>
					</span>
					<span class="fw-200 fs-20px m-auto p-1 ">
					Nmobre de  livres modifiés
					</span>
				</span>
				



			</div>
			<div class="d-inline-block my-2 rounded">
				<span class=" p-2 bg-light-100  rounded text-black fw-bold ">Trois derniers livres ajoutés </span>
			</div>
			

<div class="  table-responsive "> 
				
					<table class=" my-2 table  ">
						<thead>
							<tr class=" bg-light-500 ">
								<th class="rounded-start" scope="col">ISBN</th>
								<th scope="col">Titre</th>
								<th scope="col">Auteur</th>
								<th scope="col">Année</th>
								<th class="rounded-end" scope="col">Langue</th>
	
	
	
							</tr>
	
	
						</thead>
	
						<tbody class="bg-light-600">
							<?php get_last_three_books() ?>
	
	
						</tbody>
					</table>
				
	
	
</div>
			<!-- END #content -->


			<!-- BEGIN scroll-top-btn -->
			<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top"
				data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
			<!-- END scroll-top-btn -->
		</div>

		
		<!-- END #app -->
		<!-- TASK MODAL -->

		<!-- ================== BEGIN core-js ================== -->
		<script src="assets/js/vendor.min.js"></script>
		<script src="assets/js/app.min.js"></script>
		<script src="assets/js/main.js"></script>

		<!-- ================== END core-js ================== -->

		<script>
		</script>
</body>

</html>