<?php include 'header.php';
$userId = $_GET['ref'];
$user =  getvideoById($conn,$userId);

 if(isset($_POST['savebtn']))
 {
  /*if(isset($_FILES['file']))
  {
    $_POST['image'] = uploadFile('uploads/userimage',$_FILES['file']);
    @unlink('uploads/userimage/'.$user['image']);

  }*/

  if(updatevideo($conn,$_POST,$userId))
  {
    showMsg('Video Category Updated Successfully.','success');
    redirection('videocategory.php');
  }

 }
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
                                     <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" ><a href="videocategory.php">view Video Category</a><i class="fa fa-plus"></i></button>
                                </div>

                                <h4 class="page-title">Update video Category</h4>
                                <ol class="breadcrumb">

                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b></b></h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" role="form" method="POST">                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Category Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="Name" class="form-control"name="name" value="<?php echo $user['name']; ?>" required>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" value="<?php  echo $user['id']; ?>">
                                                    <div class="input-group m-t-10">
                                                        <button type="submit" name="savebtn" class="btn waves-effect waves-light btn-primary">Submit</button>
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


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    
    </body>
</html>