
  <!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ICON BAGS LIMITED</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="favicon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="css/all.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="fonts/flaticon.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Select 2 CSS -->
        <link rel="stylesheet" href="css/select2.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
    
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
        <!-- Modernize js -->
        <script src="js/modernizr-3.6.0.min.js"></script>
    </head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo justify-content-center">
                    <a href="index.html">
                        <img class="ml-5" src="logo.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
                <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse"
                    data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <h2 class="text-center">ICON BAGS LIMITED</h2>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                    </div>
                </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link"><i class="fas fa-home"></i><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="cat_product.php" class="nav-link"><i class="fas fa-pencil-ruler"></i><span>
                               Add Category Products</span></a>

                        </li>
                        <li class="nav-item">
                            <a href="product.html" class="nav-link"><i
                                    class="far fa-address-card"></i><span> Add Products</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="teacher_profile.html" class="nav-link"><i class="fas fa-user"></i><span>Add Slider</span></a>
                        </li>
             

                        <li class="nav-item">
                            <a href="notice.html" class="nav-link"><i
                                    class="fas fa-exclamation-circle"></i><span>Notice</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="contact.html" class="nav-link"><i
                                    class="fas fa-diagnoses"></i><span>Contact</span></a>

                        </li>

                        <li class="nav-item ">
                            <a href="about.html" class="nav-link"><i class="fas fa-diagnoses"></i><span>About
                                    us</span></a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i
                                    class="fas fa-envelope-open-text"></i><span>Messeage</span></a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">

                <div class="row mt-4">
                    <!-- Add Notice Area Start Here -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="shadow-lg p-2 mb-3 bg-body rounded">
                                <h3 class="text-center mb-4 mt-3 h"
                                    style="font-style: bold; text-shadow: 0px 1px 1px #000000; ">
                                    <i style="margin-right: 8px;" class="far fa-address-card text-success"></i>ADD
                                    <span style="color: rgb(77, 129, 24);">PRODUCT</span> 
                                </h3>
                            </div>
                            <div class="card-body">
                            <div id="admin-content">
      <div class="container">
          <div class="row">
          <?php 

if(isset($_POST['submit'])){

    include './data/database.php';

    $Cat_id = $_POST['Cat_id'];
	$Product_title = $_POST['Product_title'];

    $output_dir = "./img/cat_product";/* Path for file upload */
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
 
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;
	
	/* Try to create the directory if it does not exist */
	if (!file_exists($output_dir))
	{
		@mkdir($output_dir, 0777);
	}               
	move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );

    $updateUser = "UPDATE cat_product SET 
    Cat_id = '$Cat_id', 
    Product_title = '$Product_title',
    Image='$NewImageName'
    WHERE Cat_id = '$Cat_id'";

    $update = mysqli_query($conn,$updateUser) or die("Query faild.");
    if($update){
  
      echo "<script> location.href='./cat_product.php'; </script>";
    }
}

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
          
              <div class="col-md-offset-4 col-md-4">

            <?php 
                $Cat_id = $_GET['id'];

                include "./data/database.php";
                $findUser = "SELECT * FROM Cat_product WHERE Cat_id = {$Cat_id}";
                $result = mysqli_query($conn,$findUser) or die("Failed");
                $count = mysqli_num_rows($result);

                if($count > 0){ // if start backet
                while($row = mysqli_fetch_assoc($result)){ // while start backet

            ?>
                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST" enctype="multipart/form-data">
                 
                          <div class="form-group">
                          <label>Product Title</label>
                          <input type="text" name="Product_title" class="form-control" value="<?php echo $row['Product_title'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="Cat_id" class="form-control" value="<?php echo $row['Cat_id'] ?>" placeholder="" required>
                      </div>
               
                      <div class="col-md-12 form-group">
                                            <label>Select Image</label>
                                            <input type="file" name="image[]" placeholder="" class="form-control"
                                                required>
                                        </div>
                      
               
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->

                    <?php 
                          } // while end backet

                    } // if end backet

                    ?>
              </div>
          </div>
      </div>
  </div>


      </div>
  </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Notice Area End Here -->
                    <!-- All Notice Area Start Here -->

                    <!-- All Notice Area End Here -->
                </div>


            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html>





