<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Contact
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manage Contact</a></li>
            <li class="active">Manage Contact</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Contact</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
					    <th>Contact Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Messages</th>
                        <th>Delete</th>
                        <th>Reply</th>
						
                      </tr>
                    </thead>
                    <tbody>
					<?php
					foreach($contact_arr as $d)
					{
					?>
                      <tr>
						<td><?php echo $d->contact_id?></td>
						<td><?php echo $d->name?></td>
						<td><?php echo $d->email?></td>
						<td><?php echo $d->msg?></td>
						<td><a href="delete?btn_contact_id=<?php echo $d->contact_id?>">Delete</a></td>
						<td><a href="reply_contact?reply_contact_id=<?php echo $d->contact_id?>">Reply</a></td>
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