<?php include 'header.php';
$userId = $_GET['ref'];
$user = getgalleryById($conn,$userId);

 if(isset($_POST['savebtn']))
 {
    if(isset($_FILES['file']))
    {
        $_POST['image'] = uploadFile('photouploads',$_FILES['file']);
        @unlink('photouploads'.$user['image']);
    }

    if(updategallery($conn,$_POST))
    {
        showMsg('Photo Updated Successfully.','success');
        redirection('photogallery.php');
    }

 }
?>    
<?php include 'sidebar.php';?>


<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="btn-group pull-right m-t-15">
                                     <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" ><a href="photogallery.php">View Photo
                                     </a><i class="fa fa-plus"></i></button>
                                </div>

                                <h4 class="page-title">Update Photo</h4>
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
                                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Photo Caption</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="file" class="form-control" name="Caption" value="<?php echo $user['Caption']; ?>" required>
                                                    </div>
                                                </div><br>
                                                
                                                  <?php dd($user['image']); if(!empty($user['image'])): ?>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Existing Image</label>
                                                    <div class="col-md-10">
                                                        <img class="img-thumbnail" src="photouploads/<?php echo $user['image']; ?>" alt="image" width="100">
                                                    </div>
                                                </div>  
                                                <?php endif; ?>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Image</label>
                                                    <div class="col-md-10">
                                                        <input type="file" name="file" id="file" class="filestyle" >
                                                    </div>
                                                </div> 
                                                 <label>Categories</label>
                                                 <select class="form-control input-sm" name="category">
                                                <?php $news=categoryphotogallery($conn);
                                                    if($news):/*
                                                        dd($news);
                                                        exit;*/

                                                    foreach ($news as $key => $new) :
                                                        ?>
                                                         
                                                             <option value="<?php echo $new['name']; ?>"> <?php echo $new['name']; ?></option>
                                                       
                                                       
                                            
                                                <?php endforeach ;
                                                      endif;  
                                                    ?>
                                                     </select>
                                                <br> 
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

         <script type="text/javascript">
       
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


        <!-- App core js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script src="assets/pages/jquery.form-pickers.init.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>



        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    
    </body>
</html>