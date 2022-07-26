<?php
include_once('header.php');
?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
            </div>
        </div>
        <!-- contact -->
        <div class="contact">
            <div class="container">
                <h3>Manage Profile</h3>
                
				<div class="contact-content">
					
				   <h1>Edit and Manage Your Account</h1>
				   <br><br>
					<div class="row">
						
						<div class="col-md-4">
							<img src="../admin/upload/user/<?php echo $fetch->img?>" width="100%" height="200px">
						</div>
						<div class="col-md-8">
							<table >
								<tr>
									<td width="30%"><h2>ID  : </h2></td>
									<td width="30%"><h2><?php echo $fetch->user_id;?></h2></td>
								</tr>
								<tr>
									<td width="30%"><h2>Name  : </h2></td>
									<td width="30%"><h2><?php echo $fetch->name;?></h2></td>
								</tr>
								<tr>
									<td><h2>User Name  : </h2></td>
									<td><h2><?php echo $fetch->unm;?></h2></td>
								</tr>
								<tr>
									<td><h2>Laungages  : </h2></td>
									<td><h2><?php echo $fetch->languages;?></h2></td>
								</tr>
								<tr>
									<td><h2>Name  : </h2></td>
									<td><h2><?php echo $fetch->name;?></h2></td>
								</tr>
								<tr>
									<td><h2>Country  : </h2></td>
									<td><h2><?php echo $fetch->cid;?></h2></td>
								</tr>
								<tr>
									<td><a href="edit_user?btn_user_id=<?php echo $fetch->user_id;?>" class="btn btn-primary">Edit</a></td>
								</tr>
							</table>
						</div>
					</div> 	
					 <br><br>
                </div>
            </div>
        </div>
	   <?php
include_once('footer.php');
?>  