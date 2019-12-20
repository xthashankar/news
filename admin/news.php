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
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" ><a href="addnews.php" >Add &nbsp</a><i class="fa fa-plus"></i></button>
                                </div>

                <h1 class="page-title"><b>View News</b></h1>
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
                        <th data-field="name" data-sortable="true">Title</th>
                        <th data-field="description" data-sortable="true" data-formatter="dateFormatter">Details</th>
                        <th data-field="image" data-sortable="true" >Photo</th>
                       <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Date & Time</th>
                        <th data-field="amount" data-align="center" data-sortable="true" data-sorter="Category">Category</th>
                         <th data-field="sorce" data-align="center" data-sortable="true" data-formatter="statusFormatter">Source</th>
                        <th data-field="publisher" data-align="center" data-sortable="true" data-formatter="statusFormatter">Publisher</th>
                         <th data-field="status" data-align="center" data-sortable="true" >Status</th>
                        <th data-field="actions" data-align="center" data-sortable="true">Action</th>
                        
                      </tr>
                    </thead> 
                   <tbody>
                      <tr>
                         <?php $users=getAllNews($conn);
                                if($users):
                                  foreach ($users as $key => $user) : 
                                    ?>
                                    <tr>
                                        <td>
                                          <?php  echo ++$key; ?>
                                        </td>
                        <td><?php echo $user['title']; ?></td>
                        <td><?php echo $user['description']; ?></td>
                        <td><img src="newsuploads/userimage/<?php echo $user['image']; ?>" alt="image" class="img-responsive img-rounded" width="80" height="50" ></td>
                        <td><?php echo $user['date']; ?></td>
                        <td><?php echo $user['categories']; ?></td>
                        <td><?php echo $user['source']; ?></td>
                        <td><?php echo $user['publisher']; ?></td>
                        <td>
                            <?php if($user['status']=='published'): ?>
                                       <span class="label label-table label-success">published</span>
                                       <?php else: ?>
                                        <span class="label label-table label-inverse">Unpublished</span>
                                        <?php endif; ?> 
                       
                        <td class="actions">
                                 <a href="updatenews.php?ref=<?php echo $user['id'];?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>&nbsp&nbsp;
                                 <a  class="on-default remove-row" href="deletenews.php?ref=<?php echo $user['id']; ?>" onclick="return confirm('Are You Sure to Delete ?');"><i class="fa fa-trash-o"></i></a>
                         </td>
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