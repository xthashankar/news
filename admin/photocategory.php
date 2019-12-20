<?php 
  include 'header.php'; 
    include 'sidebar.php';

    
    if(isset($_POST['savebtn']))
     {
       
        if(insertphoto($conn,$_POST))
      {
        redirection('photocategory.php');
      }
      
    }
?>

            
            <!-- ========== Left Sidebar Start ========== -->

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="content-page">
        <!-- Start content -->
        <div class="content">
          <div class="container">




             <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b></b></h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Category Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="Name" class="form-control"name="name">
                                                    </div>
                                                </div>
                                                 
                                            
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

            <!-- Page-Title -->
            <div class="row">
              <div class="col-sm-12">
                <h1 class="page-title"><b>View Photo Category</b></h1>
                <ol class="breadcrumb"></ol>
                  <?php displayMsg();  ?>
              </div>
            </div>

           
            
            <!--Basic Toolbar-->
            <!--===================================================-->
            <div class="row">
              
                  
                  <table data-toggle="table"
                       data-search="true"
                       data-show-refresh="true"
                       data-show-toggle="true"
                       data-show-columns="true"
                       data-sort-name="id"
                       data-page-list="[5, 10, 20]"
                       data-page-size="5"
                       data-pagination="true" data-show-pagination-switch="true" class="table-bordered ">
                    <thead>
                      <tr>
                        <th data-field="id" data-sortable="true">ID</th>
                        <th data-field="name" data-sortable="true">Category Name</th>
                        <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                         <?php $users=getAllphoto($conn);        
                                if($users):
                                  foreach ($users as $key => $user) : 
                                    ?>
                                    <tr>
                                        <td>
                                          <?php  echo ++$key; ?>
                                        </td>
                        <td><?php echo $user['name']; ?></td>
                        <td class="actions">
                                 <a href="updatephotocat.php?ref=<?php echo $user['id'];?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>&nbsp&nbsp;
                                 <a  class="on-default remove-row" href="deletephotocat.php?ref=<?php echo $user['id']; ?>" onclick="return confirm('Are You Sure to Delete ?');"><i class="fa fa-trash-o"></i></a>
                         </td>
                         <?php endforeach; else: ?>
                                          <tr>
                                            <td colspan="9">No Data Found</td>
                                          </tr>
                                  <?php endif;?>
                                   <tfoot>
                                    <tr>
                                        <td colspan="5">
                                            <div class="text-right">
                                                <ul class="pagination pagination-split m-t-30"></ul>
                                            </div>
                                        </td>
                                    </tr>
                             </tfoot>
                           </tr>
                         </tr>
                       </tbody>
                  </table>
                </div>
              </div>
            </div>
            
    
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

        <script src="assets/plugins/bootstrap-table/js/bootstrap-table.min.js"></script>

        <script src="assets/pages/jquery.bs-table.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        

  
  </body>
</html>