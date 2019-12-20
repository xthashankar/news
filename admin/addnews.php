<?php 
include 'header.php';
include 'sidebar.php';
//require ('../config/newsfunctions.php');
//*/*/include '../config/call.php';

 if(isset($_POST['savebtn']))
     {
 
      $_POST['image'] = uploadFile('newsuploads/userimage',$_FILES['file']);
      if(insertnews($conn,$_POST))
      {
        redirection('news.php');
      }
      
    }
?>
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
                                     <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" ><a href="news.php">View News </a><i class="fa fa-plus"></i></button>
                                </div>

                                <h4 class="page-title">Add News</h4>
                                <ol class="breadcrumb">

                                </ol>
                            </div>
                        </div>

                        
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" role="form"  method="POST" enctype="multipart/form-data"  >                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">News Title</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="tnews" class="form-control"name="title">
                                                    </div>
                                                </div>
                                               <div class="row">
                                             <div class="col-sm-12" style="width:1000px;">
                                                <div class="card-box">
                                                  <h4 class="m-b-30 m-t-0 header-title"><b>News Editior</b></h4>
                                                     <textarea id="description" name="description"></textarea>
                                                 </div>
                                              </div>
                                          </div>

									 
                                           
                                         
                                         <div class="form-group">
                                                    <label class="col-md-2 control-label">Display Image</label>
                                                    <div class="col-md-10">
                                                        <img class="img-thumbnail" src="newsuploads/userimage" alt="img" width="100">
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Image</label>
                                                    <div class="col-md-10">
                                                        <input type="file" accept="newsuploads/userimage/*" name="file" id="file" class="filestyle" onchange="previewFile()" />
                                                    </div>
                                                </div> 
                                                
                                                 <label>Categories</label>
                                                 <select class="form-control input-sm" name="categories">
                                                <?php $news=categorynews($conn);
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
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">News Source</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="newss" class="form-control"name="source">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Publisher </label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="Publisher" class="form-control"name="publisher">
                                                    </div>
                                                </div>
                                            
                                               <div class="form-group">
                                                    <label class="col-md-2 control-label">status</label>
                                                    <div class="col-md-10">
                                                        <select name="status" class="form-control">
                                                            <option value="published">Published</option>
                                                            <option value="Unpublished">Unpublished</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                                    <div class="input-group m-t-10">
                                                        <button id="submitBtn" type="submit" name="savebtn" class="btn waves-effect waves-light btn-primary">Submit</button>
                                                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">Reset</button>
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

        <!-- <script type="text/javascript">
            
            $("#submitBtn").click(function(){
                alert($(".note-editable").val());    
            });
            

        </script>
 -->

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

        <!--form validation init-->
        <script src="assets/plugins/tinymce/tinymce.min.js"></script>

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

        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script src="assets/pages/jquery.form-pickers.init.js"></script>
    
       <!--form validation init-->
        <script src="assets/plugins/tinymce/tinymce.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function () {
                if($("#description").length > 0){
                    tinymce.init({
                        selector: "textarea#description",
                        theme: "modern",
                        height:300,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
                        style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ]
                    });    
                }  
            });
        </script>
        
        
        
           
    
    </body>
</html>