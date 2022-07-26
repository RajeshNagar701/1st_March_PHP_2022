<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Employee
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manage Employee</a></li>
            <li class="active">Manage Employee</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Employee</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
					    <th>Img</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Gender</th>
                        <th>Launguages</th>
						<th>Status</th>
						<th>Delete</th>
						<th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($emp_arr as $d)
					{
					?>
                      <tr>
                        <td><img src="upload/employee/<?php echo $d->img?>" width="50px"></td>
						<td><?php echo $d->emp_id?></td>
						<td><?php echo $d->name?></td>
						<td><?php echo $d->unm?></td>
						<td><?php echo $d->gen?></td>
						<td><?php echo $d->languages?></td>
						<td><?php echo $d->status?></td>
						<td><a href="#">Delete</a></td>
						<td><a href="#">Edit</a></td>
					  </tr>
                    <?php
					}
					?> 
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <?php
	include_once('footer.php');
	?>