<?php
include_once('header.php');
?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index">HOME</a></li>
                    <li class="active">LOGIN</li>
                </ol>
            </div>
        </div>
        <!--signup-->
        <!-- login-page -->
        <div class="login">
            <div class="container">
                <div class="login-grids">
                    <div class="col-md-6 log">
                             <h3>Login</h3>
                           
                             <form method="post" action="">
                                 <h5>User Name:</h5>	
                                 <input type="text" name="unm" value="">
                                 <h5>Password:</h5>
                                 <input type="password" name="pass" value=""><br>					
                                 <input type="submit" name="submit" value="Login">
                             </form>
                            <a href="#">Forgot Password ?</a>
                    </div>
                    <div class="col-md-6 login-right">
                            <h3>New Registration</h3>
                            <div class="strip"></div>
                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                            <a href="register" class="button">Create An Account</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
<!-- //login-page -->
      <?php
include_once('footer.php');
?>  