<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Employee
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add Employee</a></li>
            <li class="active">Add Employee</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Add Employee</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form" enctype="multipart/form-data">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter Name"/>
                    </div>
                   
					<div class="form-group">
                      <label>User Name</label>
                      <input type="text" name="unm" class="form-control" placeholder="Enter User Name"/>
                    </div>
                    
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="pass" class="form-control" placeholder="Enter Password"/>
                    </div>
					
					<!-- radio -->
                    <div class="form-group">
						<label>Gender</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="gen" id="optionsRadios1" value="Male" checked>
                          Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="gen" id="optionsRadios2" value="Female">
						  Female
                        </label>
                      </div>
                      
                    </div>
					
					
                    <!-- checkbox -->
                    <div class="form-group">
					  <label>Languages</label>	
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="languages[]" value="Hindi"/>
                          Hindi
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="languages[]" value="English"/>
                          English
                        </label>
                      </div>
					  
					  <div class="checkbox">
                        <label>
                          <input type="checkbox" name="languages[]" value="Gujarati"/>
                          Gujarati
                        </label>
                      </div>
                    </div>

                    

                    <div class="form-group">
                      <label>Images</label>
                      <input type="file" name="img" class="form-control" />
                    </div>
                    

					<div class="form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php
include_once('footer.php');
?>
