<?php
include_once('header.php');
?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li class="active">Feedback</li>
                </ol>
            </div>
        </div>
        <!-- contact -->
        <div class="contact">
            <div class="container">
                <h3>Feedback us</h3>
                <div class="contact-content">
                    <form>
                        <input type="text" class="textbox" value=" Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}"><br>
                        <input type="text" class="textbox" value="Your E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your E-Mail';}"><br>
                            <div class="clear"> </div>
                        <div>
                            <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Message ';}">Your Message</textarea><br>
                        </div>	
                       <div class="submit"> 
                            <input class="btn btn-default cont-btn" type="submit" value="SEND " />
                      </div>
                    </form>
                   
                </div>
            </div>
        </div>
	   <?php
include_once('footer.php');
?>  