<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Categories
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manage Categories</a></li>
            <li class="active">Manage Categories</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Categories</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
					    <th>Categories Id</th>
						<th>Images</th>
                        <th>Name</th>
                        <th>Delete</th>
                        <th>Edit</th>
						
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($cat_arr as $d)
					{
					?>
                      <tr>
					    <td><img src="upload/categories/<?php echo $d->cate_img?>" width="50px"></td>
						<td><?php echo $d->cate_id?></td>
						<td><?php echo $d->cate_name?></td>
						<td><a href="#">Delete</a></td>
						<td><a href="edit?btn_cate_id=<?php echo $d->cate_id?>">Edit</a></td>
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