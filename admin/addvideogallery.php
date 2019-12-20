<?php include 'header.php';?>
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
                                     <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" ><a href="videogallery.php">view Video Gallery</a><i class="fa fa-plus"></i></button>
                                </div>

                                <h4 class="page-title">Add video Gallery</h4>
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
                                            <form class="form-horizontal" role="form">                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Video Title</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="Name" class="form-control"name="title">
                                                    </div>
                                                </div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Youtube link</label>
										<div class="col-sm-9">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/PMGY8fLwess" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Video Category <span>*</span></label>
											<div class="col-sm-4">
												<select class="form-control" name="v_category_id">
													<option value="">Select a video category</option>
													<option value="1">Video Category 1</option>
													<option value="2">Video Category 2</option>								
												</select>
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
                                               <div class="input-group m-t-10">
                                                        <button type="submit" name="savebtn" class="btn waves-effect waves-light btn-primary">Submit</button>
                                                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                                Reset
                                            </button></div>
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


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    
    </body>
</html>