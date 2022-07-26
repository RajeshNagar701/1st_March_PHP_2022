<?php
include_once('header.php');
?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li><a href="register">LOGIN</a></li>
                    <li class="active">REGISTER</li>
                </ol>
            </div>
        </div>
        <!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                
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
                      <label>Country</label>
                      <select name="cid" class="form-control" />
						<option value="" >Select Country</option>
						<?php
						foreach($country_arr as $d)
						{
						?>
						<option value="<?php echo $d->cid;?>"><?php echo $d->cnm;?></option>
						<?php
						}
						?>
					  </select>
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

			</div>
		</div>
	</div>
<?php
include_once('footer.php');
?>  