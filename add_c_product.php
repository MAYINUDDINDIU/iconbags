
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add Category Product</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">

                  <?php 
                        if(isset($_POST['submit'])){

                            include './data/database.php';

                            $Cat_id = $_POST['Cat_id'];
                            $Product_title = $_POST['Product_title'];
                            $image = $_FILES['image'];
                            $image_name = $image['name'];
                            $image_tmp_name = $image['tmp_name'];

                            if(!empty($image)){
                                $loc="./img/cat_product/";
                               if( move_uploaded_file($image_tmp_name,$loc.$image_name)){
                                header('location: index.html');
                               }
                            }else{
                                echo 'File empty';
                            }


                            $selectUser = "SELECT Cat_id FROM Cat_prodcut WHERE Cat_id='$Cat_id'";
                            $findUser = mysqli_query($conn,$selectUser) or die("Query faild.");

                            $count = mysqli_num_rows($findUser);
                            if($count > 0){
                            echo "Product Already Uploaded.";
                            }{
                            $insertUser = "INSERT INTO cat_product (Cat_id,Product_title,Image) 
                            VALUE ('$Cat_id','$Product_title','$image_name')";
                            $createUser = mysqli_query($conn,$insertUser) or die("Query Failed.");

                            if($createUser){
                                header("location: cat_product.php");
                            }

                            }

                        }
                   ?>
                    <!-- form start -->
                  <form  action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label>Cat ID</label>
                          <input type="number" name="Cat_id" class="form-control" placeholder="Cat_id" required>
                      </div>
                          <div class="form-group">
                          <label>Product Title</label>
                          <input type="text" name="Product_title" class="form-control" placeholder="Product_title " required>
                      </div>
                 
                      <div class="form-group">
                          <label>Image URL</label>
                          <input type="file" name="image" class="form-control" >
                      </div>
                   
                      <input type="submit"  name="submit" class="btn btn-primary" value="Add" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>

