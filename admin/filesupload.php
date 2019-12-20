<?php include 'header.php';?>
<?php include 'sidebar.php';?>


            

            <!-- ========== Left Sidebar Start ========== -->

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
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" ><a href="addfileupload.php">Add &nbsp;</a><i class="fa fa-plus"></i></button>
                                </div>

                <h1 class="page-title"><b>View file upload</b></h1>
                <ol class="breadcrumb">
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
                        <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">ID</th>
                        <th data-field="name" data-sortable="true">File Title</th>
                        <th data-field="date" data-sortable="true" data-formatter="dateFormatter">File Name</th>
                        <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Action</th> 
                      </tr>
                    </thead>
                    
                    
                    <tbody>
                      <tr>
                        <td>UB-1609</td>
                        <td>Boudreaux</td>
                        <td>22 Jun 2015</td>
                        <td>Unpaid</td>
                      </tr>
                      <tr>
                        <td>UB-1610</td>
                        <td>Woldt</td>
                        <td>24 Jun 2015</td>
                        <td>Paid</td>
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