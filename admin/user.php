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
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" ><a href="adduser.php">Add </a><i class="fa fa-plus"></i></button>
                                </div>

                <h1 class="page-title"><b>View Users</b></h1>
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
                        <th data-field="id" data-sortable="true">S.N.</th>
                        <th data-field="name" data-sortable="true">Name: </th>
                         <th data-field="email" data-align="center" data-sortable="true" data-sorter="priceSorter">Email :</th>
                        <th data-field="image" data-sortable="true" data-formatter="dateFormatter">Photo : </th>
                        <th data-field="address" data-align="center" data-sortable="true" data-sorter="priceSorter">Address : </th>
                        <th data-field="Contact" data-align="center" data-sortable="true" data-sorter="priceSorter">Contact : </th>
                        <th data-field="Role" data-align="center" data-sortable="true" >Role:</th>
                         <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Status</th>
                                                
                          <th data-field="action" data-align="center" data-sortable="true" >Action</th>
                        
                      </tr>
                    </thead>
                    
                    
                    <tbody>
                      <tr>
                         <?php $users=getAllUsers($conn);
                                
                                if($users):
                                  foreach ($users as $key => $user) : 
                                    ?>
                                    <tr>
                                        <td>
                                          <?php  echo ++$key; ?>
                                        </td>
                        <td> <?php echo ucwords($user['f_name']." ".$user['l_name']); ?> </td>
                        <td><?php echo $user['email']; ?></td>

                        <td><img src="uploads/userimage/<?php echo $user['image']; ?>" alt="image" class="img-responsive img-rounded" width="80" height="50" ></td>
                        <td><?php echo $user['address']; ?></td>
                        <td><?php echo $user['contact']; ?></td>
                        <td><?php echo ucfirst($user['role']); ?></td>
                        <td>
                            <?php if($user['status']=='active'): ?>
                                       <span class="label label-table label-success">Active</span>
                                       <?php else: ?>
                                        <span class="label label-table label-inverse">Inactive</span>
                                        <?php endif; ?> 
                       
                        <td class="actions">
                                 <a href="updateuser.php?ref=<?php echo $user['id'];?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>&nbsp&nbsp;
                                 <a  class="on-default remove-row" href="deleteuser.php?ref=<?php echo $user['id']; ?>" onclick="return confirm('Are You Sure to Delete ?');"><i class="fa fa-trash-o"></i></a>
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