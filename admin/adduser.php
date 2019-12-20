<?php 
    include 'header.php'; 
    include 'sidebar.php';
    
    if(isset($_POST['savebtn']))
     {
     
      $_POST['image'] = uploadFile('uploads/userimage',$_FILES['file']);
      if(insertUser($conn,$_POST))
      {
        redirection('user.php');
      }
      
    }
?>
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                   <div class="btn-group pull-right m-t-15">
                                     <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" ><a href="user.php">View User </a><i class="fa fa-plus"></i></button>
                                </div>
                                <h4 class="page-title">Add User</h4>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="adduser.php">Add User</a></li>
                                    <li class="active">Add User</li>
                                </ol>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add User</b></h4><br>                             
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" method="POST" enctype="multipart/form-data"  >                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">FirstName </label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="f_name" class="form-control" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">LastName </label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="l_name" class="form-control" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" for="example-email">Email</label>
                                                    <div class="col-md-10">
                                                        <input type="email" id="example-email" name="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Password</label>
                                                    <div class="col-md-10">
                                                        <input type="password" name="password" class="form-control" placeholder="password">
                                                    </div>
                                                </div>
                                                                         
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Address</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="address" class="form-control" placeholder="Address">
                                                    </div>
                                                </div> 

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Contact</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="contact" class="form-control" placeholder="Contact No.">
                                                    </div>
                                                </div> 

                                              <div class="form-group">
                                                    <label class="col-md-2 control-label">Display Image</label>
                                                    <div class="col-md-10">
                                                        <img class="img-thumbnail" src="uploads/image.jpg" alt="img" width="100">
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Image</label>
                                                    <div class="col-md-10">
                                                        <input type="file" accept="uploads/*" name="file" id="file" class="filestyle" onchange="previewFile()" />
                                                     <!--  <input class="form-control" name="file" type="file" onchange="previewFile()" > -->
                                                    </div>
                                                </div> 


                                               <div class="form-group">
                                                    <label class="col-md-2 control-label">Role</label>
                                                    <div class="col-md-10">
                                                        <select name="role" class="form-control">
                                                            <option value="admin">Admin</option>
                                                            <option value="publisher">publisher</option>
                                                        </select>
                                                    </div>
                                                </div> 

                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Status</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="status">
                                                            <option value="active" > Active</option>
                                                            <option value="inactive">In Active</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                                        <button type="submit" class="btn btn-primary" name="savebtn" >
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-default m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>                    
                               
                                            </form>
                                        </div>                                  
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
                    © 2016. All rights reserved.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->


        <script type="text/javascript">
        var resizefunc = [];
        function previewFile()
        {
            var preview = document.querySelector("img.img-thumbnail");

            var file = document.querySelector('input[type=file]').files[0];

            var reader = new FileReader();

            reader.addEventListener("load", function () {

            preview.src = reader.result;

            }, false);

            if (file)

            {

            reader.readAsDataURL(file);

            }
        }
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/autocomplete.js"></script>

        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>



        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    
    </body>
</html>