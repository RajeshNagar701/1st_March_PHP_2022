<?php
include_once('header.php');
?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- contact -->
        <div class="contact">
            <div class="container">
                <h3>Catch us</h3>
                <div class="contact-content">
                    <form action="" method="post">
                        <input type="text" name="name" class="textbox" value=" Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}"><br>
                        <input type="email" name="email" class="textbox" value="Your E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your E-Mail';}"><br>
                            <div class="clear"> </div>
                        <div>
                            <textarea name="msg" value="">Your Message</textarea><br>
                        </div>	
                       <div class="submit"> 
                            <input class="btn btn-default cont-btn" name="submit" type="submit" value="SEND " />
                      </div>
                    </form>
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
                    </div>
                </div>
            </div>
        </div>
	   <?php
include_once('footer.php');
?>  