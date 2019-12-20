<!-- Header Here -->
<?php include 'header.php';
/*$userId = $_GET['ref'];
$user = getUserById($conn,$userId);

 if(isset($_POST['savebtn']))
 {
 	if(isset($_FILES['file']))
 	{
 		$_POST['image'] = uploadFile('uploads/userimage',$_FILES['file']);
 		@unlink('uploads/userimage/'.$user['image']);

 	}

 	if(updateUser($conn,$_POST))
 	{
 		showMsg('User Updated Successfully.','success');
 		redirection('user.php');
 	}

 }*/
?>
<?php include 'sidebar.php';?>



   
            <!-- ============================================================== -->
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

                                <h4 class="page-title">Update User Information</h4>
                               
                                <ol class="breadcrumb">

                                </ol>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"></h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">First Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="fname" class="form-control" name="f_name" value="<?php echo $user['f_name']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">last Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="lname" class="form-control" name="l_name" value="<?php echo $user['l_name']; ?>"required>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Email</label>
                                                    <div class="col-md-10">
                                                        <input type="email" id="email" class="form-control" name="email" value="<?php echo $user['email']; ?>" required>
                                                    </div></div>
                                                  <div>
												<?php dd($user['image']); if(!empty($user['image'])): ?>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Existing image</label>
                                                    <div class="col-md-10">
                                                       <img width="300" src="uploads/userimage/<?php echo $user['image']; ?>" alt="image" class="img-responsive img-rounded">
                                                    </div>
                                                  </div>
                                              </div>
                                                  <?php endif; ?>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Photo</label>
                                                    <div class="col-md-10">
                                                        <input type="file" class="filestyle" name='file' data-buttonname="btn-default">
                                                    </div>
                                                  </div>

                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Address</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="Phone" class="form-control" name="address" value="<?php echo $user['address']; ?>" required>
                                                    </div>
                                                </div>
                                                
                                                    <div class="form-group">
                                                    <label class="col-md-2 control-label">Contact</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="Phone" class="form-control" name="contact" value="<?php echo $user['contact']; ?>"required>
                                                    </div>
                                                </div>
                                                 
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Role</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="role">
                                                            <option value="admin" <?php if($user['role']=='admin') echo 'selected="selected"';  ?> > Admin</option>
                                                            <option value="publisher" <?php if($user['role']=='publisher') echo 'selected="selected"';  ?> > Publisher</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Status</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="status">
                                                            <option value="active" <?php if($user['status']=='active') echo 'selected="selected"';  ?>> Active</option>
                                                            <option value="inactive"<?php if($user['status']=='inactive') echo 'selected="selected"';  ?>>In Active</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" value="<?php  echo $user['id']; ?>">
                                                    <div class="input-group m-t-10">
                                                        <button type="submit" name="savebtn" class="btn waves-effect waves-light btn-primary">Save</button>
                                                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                                Reset
                                            </button>
                                                    </div>
                                               
                                            </form>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>  
                      </div>
                    </div>
                  </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
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