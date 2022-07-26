<?php
include_once('header.php');
?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li><a href="">Edit User</a></li>
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
                      <input type="text" name="name" value="<?php echo $fetch->name;?>" class="form-control" placeholder="Enter Name"/>
                    </div>
                   
					<div class="form-group">
                      <label>User Name</label>
                      <input type="text" name="unm" value="<?php echo $fetch->unm;?>" class="form-control" placeholder="Enter User Name"/>
                    </div>
                    
                    
					<!-- radio -->
                    <div class="form-group">
					<label>Gender</label>
					<?php
					$gen=$fetch->gen;
					if($gen=="Male")
					{
					?>
                      <div class="radio">
                        <label>
                          <input type="radio" name="gen" id="optionsRadios1" value="Male" checked/>Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="gen" id="optionsRadios2" value="Female"/>Female
                        </label>
                      </div>
                    <?php
					}
					else
					{
					?>
                      <div class="radio">
                        <label>
                          <input type="radio" name="gen" id="optionsRadios1" value="Male" />Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="gen" id="optionsRadios2" value="Female" checked/>Female
                        </label>
                      </div>
                    <?php
					}
					?>
                      </div>
					
					
                    <!-- checkbox -->
                    <div class="form-group">
					  <label>Languages</label>
					
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="languages[]" value="Hindi" <?php
						$languages=$fetch->languages;
						$languages_arr=explode(",",$languages);
						if(in_array("Hindi",$languages_arr))
						{
							echo "checked";
						}
					?>		/>
                          Hindi
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="languages[]" value="English" 
						  <?php
							$languages=$fetch->languages;
							$languages_arr=explode(",",$languages);
							if(in_array("English",$languages_arr))
							{
								echo "checked";
							}
							?>/>
                          English
                        </label>
                      </div>
					  
					  <div class="checkbox">
                        <label>
                          <input type="checkbox" name="languages[]" value="Gujarati" <?php
						$languages=$fetch->languages;
						$languages_arr=explode(",",$languages);
						if(in_array("Gujarati",$languages_arr))
						{
							echo "checked";
						}
					?>/>
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
							if($d->cid==$fetch->cid)
							{
						?>
							<option value="<?php echo $d->cid;?>" selected>
								<?php echo $d->cnm;?>
							</option>
						<?php
							}
							else
							{
							?>
							<option value="<?php echo $d->cid;?>">
								<?php echo $d->cnm;?>
							</option>
							<?php
							}
						}
							
						?>
					  </select>
                    </div>
                    

                    <div class="form-group">
                      <label>Images</label>
                      <input type="file" name="img" value="<?php echo $fetch->img;?>" class="form-control" />
					  <img src="../admin/upload/user/<?php echo $fetch->img?>" width="50px" height="50px">
                    </div>
                    

					<div class="form-group">
                      <input type="submit" name="update" value="Save" class="btn btn-primary">
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