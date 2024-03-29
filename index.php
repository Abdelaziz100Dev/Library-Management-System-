<?php
include('scripts.php');



	if($_SESSION['con'] == 'success' ){
		 
	echo'	hello';

	}else {
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
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/parsley.min.js"></script>



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
            <div class="navbar-nav d-flex ">
                <div class="navbar-item navbar-text ms-auto me-auto d-none d-md-block ">
                    <b id="hommm" class="me-1 fs-1 ">Home</b>
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

                        <span
                            class="d-none d-md-inline"><?php echo $_SESSION["userfrnam"].' '.$_SESSION["userlsnam"] ?></span>


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
                    <form action="scripts.php" method="POST" data-parsley-validate="">
                        <div class="modal-header">
                            <h5 class="modal-title">profile </h5>
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
                        </div>

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
                                <?php echo $_SESSION["userfrnam"]. ' '.$_SESSION["userlsnam"] ?>
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
                            class=" text-black-600"> TABLEAU DES LIVRES </span> </button></a>


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
            <?php endif ?> <div class=" d-inline-block  ">
                <a href="#modal-book" onclick="resit();showBtn('ajouter')" data-bs-toggle="modal"
                    class="btn bg-light-600 btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 "></i>
                    Ajouter livre</a>
            </div>

            <div class="  table-responsive ">
                <table class=" my-2 table  ">
                    <thead>
                        <tr class=" bg-light-500 ">
                            <th class="rounded-start" scope="col">isbn</th>
                            <th scope="col">image</th>

                            <th scope="col">Titre</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Année</th>
                            <th scope="col">langage</th>
                            <th class="rounded-end" scope="col"></th>
                        </tr>


                    </thead>

                    <tbody class="bg-light-600">
                        <?php get_all_books() ?>


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
        <div class="modal fade" id="modal-book">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="scripts.php" data-parsley-validate="" enctype="multipart/form-data" method="POST"
                        id="form-task">
                        <div class="modal-header">
                            <h5 class="modal-title"> Ajouter livre </h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <?php if (isset($_SESSION['form_vide_message'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <strong>wrong!</strong>
                            <?php 
						echo $_SESSION['form_vide_message']; 
						unset($_SESSION['form_vide_message']);
					        ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
                        </div>
                        <?php endif ?>

                        <div class="modal-body">
             
                            <input name="input_hidden" type="hidden" id="book_id" value="">
                            <div class="mb-3">
                                <label class="form-label">isbn de livre </label>
                                <input type="text" name="isbn" class="form-control" id="book_isbn"
                                    data-parsley-maxlength="10" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">auteur </label>
                                <input type="text" name="author" class="form-control" id="book_author"
                                    data-parsley-pattern="^[^0-9]{3,15}$" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">titre </label>
                                <input type="text" name="title" class="form-control" id="book_title"
                                    data-parsley-maxlength="30" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">langue</label>
                                <select name='lang' class="form-select" id="book_lang" required="">
                                    <option selected value=""> </option>
                                    <option id="book_english" value="1">english</option>
                                    <option id="book_frensch" value="2">spanish</option>
                                    <option id="book_espagnol" value="3">french</option>
                                    <option id="book_arabic" value="4">arabic</option>
                                </select>
                            </div>
                         
                            <div class="mb-3">
                                <label class="form-label"> date de publication </label>
                                <input type="date" class="form-control" name="date" id="book_date" required />
                            </div>
                        
                            <div class="mb-3">
                                <label class="form-label"> ajouter une photo </label>
                                <input type="file" class="form-control" name="photo" id="book_photo" />
                            </div>

                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>

                            <button type="submit" name="update" class="btn btn-warning task-action-btn"
                                id="task-update-btn">modifier</a>
                                <button type="submit" name="save" value="validate"
                                    class=" btn btn-primary task-action-btn" id="task-save-btn">ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ================== BEGIN core-js ================== -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/js/main.js"></script>

        <!-- ================== END core-js ================== -->

       
</body>

</html>