<?php
include "php/acs/reroute.php";
include "php/style/header.php";
include "php/style/alexstyle.php";
include "php/style/iestuff.php";
include "php/menubars/navbar.php";
include "php/home/button.php";
?>

<!-- Main Content -->
<div class="space"></div>

         <!-- Two Column Layout -->
<div class="center-margin container-fluid">
<div class="row">
    <div>
    <div class="panel-background panel panel-default col-md-6 margin-fix">
       

            <!--row 1-->
            <br>
        
            <div class="row ">
                <!--AddCard-->
                 <div class="col-md-4 col-ex-2">
                     
                    <?php if(CheckForCookie()){ buttonDisplay("addcard.php", "fa fa-pencil-square-o  fa-3x", "New&nbsp;Card"); } 
                    else { buttonDisplay("login.php", "fa fa-pencil-square-o  fa-3x", "New&nbsp;Card");}?>

                </div>
                    <!--ReviewCard-->
                  <div class="col-md-4 col-ex-2">
                    <?php 
                    if(CheckForCookie()){ buttonDisplay("reviewcard.php", "fa fa-list-alt fa-3x", "Review&nbsp;Card"); } 
                    else { buttonDisplay("login.php", "fa fa-list-alt fa-3x", "Review&nbsp;Card");}?>

                </div>
                <!--HelpCard-->
                  <div class="col-md-4 col-ex-2">
                      <?php
                    buttonDisplay("resources.php", "fa fa-question-circle fa-3x", "Get&nbsp;Help");?>

                </div>
                
            </div>
        <!--Information box-->
        <div class="centergray">
            <div class="row margin margin-center">
                <div class="panel panel-default col-md-5">
                    <br>
                    <p>Instructor:&nbsp;John&nbsp;Avery</p>
                    <p>Class:&nbsp;ESOL&nbsp;101</p>
                    <p>Office hours:&nbsp;10:00-11:00am</p>
                    <br>
                </div>
                <div class="panel panel-default col-md-5">
                    <br>
                    <p>Welcome&nbsp;to&nbsp;the&nbsp;ESOL&nbsp;website!</p>
                    <p>Click&nbsp;Get&nbsp;Help&nbsp;to&nbsp;learn&nbsp;more.</p>
                    <p><br></p>
                    <br>
                </div>
                
                
            </div>
        </div>
         
        </div>                        
            
    
            <!--notifications-->
            <div class="col-md-6">
                <div class="panel-background panel panel-default">
                    <div class="panel-heading graytext">
                        <i class="fa fa-bell fa-fw"></i> Notifications
                    </div>
                        <!-- /.panel-heading -->
                        
                         <div class="panel-body graytext">
                            <div class="list-group">
                                <?php
                                    include("php/home/announcments.php");
                                ?>
                            </div>
                            <!-- /.list-group -->
                            <!--<a href="#" class="btn btn-default btn-block">View All Alerts</a>-->
                        </div>
                    
                        <!-- /.panel-body -->
                
                    </div>
                

                <!-- Column 2-->

                

            

        </div><!-- End Two Column Layout -->
     </div>
</div>
</div>
                


<div class="space"></div>
<?php
    include "php/menubars/footer.php";
?>