<?php
include("include/connect.php");

if(!isset($_SESSION['careeradminid']))
{
	header('location:index.php');
}

?>
<html xmlns="">
   
   <?php include("include/header.php"); ?>
   
    <body>
	      <?php include("include/big-header.php"); ?>

    <div id="wrapper">

        <!--Responsive navigation button-->  
        <div class="resBtn">
            <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
        </div>
        
        <!--Left Sidebar collapse button-->  
        <div class="collapseBtn leftbar">
             <a href="#" class="tipR" title="Hide Left Sidebar"><span class="icon12 minia-icon-layout"></span></a>
        </div>

         <?php include("include/sidebar.php"); ?>
		 
        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading" >

                    <h3>Dashboard</h3>                    

                    <div class="resBtnSearch">
                        <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
                    </div>

                    <div class="search">

                        <form id="searchform" action="search.html">
                            <input type="text" id="tipue_search_input" class="top-search" placeholder="Search here ..." />
                            <input type="submit" id="tipue_search_button" class="search-btn" value=""/>
                        </form>
                
                    </div><!-- End search -->
                    
                    <ul class="breadcrumb">
                        <li>You are here:</li>
                        <li>
                            <a href="#" class="tip" title="back to dashboard">
                                <span class="icon16 icomoon-icon-screen-2"></span>
                            </a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right-3"></span>
                            </span>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul>

                </div><!-- End .heading-->

                <!-- Build page from here: -->
                <div class="row">

                    <div class="col-lg-8">
                        <div class="centerContent">
                  
                           <ul class="bigBtnIcon" style="list-style: none;text-align: left;">
 <?php 
                                $newenq="select count(*) as totalenq from contacts where status='0' and frompage='Varachha' or frompage='New Citylight' ";
											$recordenq=mysqli_query($link,$newenq);
											$recorddata=mysqli_fetch_array($recordenq);

												?>                                
<li>
                                    <a href="view_request.php" title="Paper Requests" class="tipB">
                                        <span class="icon icomoon-icon-file"></span>
                                        <span class="txt">View Paper Requests</span>
                                    </a>
<li>
                                    <a href="view_pending_enquiries.php" title="Pending Enquiries" class="tipB">
                                        <span class="icon icomoon-icon-user"></span>
                                        <span class="txt">View Pending Enquiries</span>
                                        <span class="notification"><?php echo $recorddata['totalenq'];?></span>
                                    </a></li>
<li>
                                    <a href="http://career-first.in/admin-first/add_exam_pattern_docs.php" title="Add Other Exam patterns" class="tipB">
                                        <span class="icon icomoon-icon-file-pdf"></span>
                                        <span class="txt">Other Exam Patters</span>
                                       
                                    </a></li>
</ul>
<h3>Social Media</h3>
  <ul class="bigBtnIcon" style="list-style: none;text-align: left">
<li>
                                    <a target="_blank" href="https://www.facebook.com/careerfirstias" title="Career First's Facebook Account" class="tipB">
                                        <span class="icon icomoon-icon-facebook"></span>
                                        <span class="txt">Facebook</span>
                                     
                                    </a>
<li>
                                    <a target="_blank" href="https://twitter.com/careerfirstias" title="Career First's Twitter Account" class="tipB">
                                        <span class="icon icomoon-icon-file"></span>
                                        <span class="txt">Twitter</span>
                                       
                                    </a>
                                </li>
<li>
                                    <a target="_blank" href="https://www.instagram.com/careerfirstias/" title="Career First's Instagram Account" class="tipB">
                                        <span class="icon icomoon-icon-instagram"></span>
                                        <span class="txt">Instagram</span>
                                       
                                    </a>
<li>
                                    <a target="_blank" href="https://plus.google.com/106526095189618411333" title="Career First's Google Plus Account" class="tipB">
                                        <span class="icon icomoon-icon-google"></span>
                                        <span class="txt">Google Plus</span>
                                        
                                    </a>
<li>

                                    <a  target="_blank" href="https://www.youtube.com/channel/UCU8YN04cRaIc_KrzVnuhOkg" title="Career First's YouTube's Account" class="tipB">
                                        <span class="icon icomoon-icon-YouTube"></span>
                                        <span class="txt">YouTube</span>
                                        
                                    </a>
<li>
                             </ul>
                        </div>
                    </div><!-- End .span8 -->

                    <div class="col-lg-4">
                        <div class="centerContent">
                            <div dir="ltr" class="circle-stats">
                               <?php 
                                $newenq="select count(*) as totalenq from contacts where status='0' and frompage='Varachha' or frompage='New Citylight' ";
											$recordenq=mysqli_query($link,$newenq);
											$recorddata=mysqli_fetch_array($recordenq);

												?>
                                <div class="circular-item tipB" title="New Unattended Enquiries">
                                    <span class="icon icomoon-icon-fire"></span>
                                    <input type="text" value="<?php echo $recorddata['totalenq'];?>" class="redCircle" />
                                </div>


                               
                            </div>
                        </div>

                    </div><!-- End .span4 -->

                </div><!-- End .row -->

               
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->
   <?php include("include/footer.php"); ?>
    </body>
</html>
