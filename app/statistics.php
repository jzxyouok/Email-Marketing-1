<?php
ob_start();
session_start();

include 'include/dbconnect.php';

?>
<!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->     
                  <h3 class="page-title">
                     Campaign Statistics
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
					   <li>
                           <a href="#">Campaigns</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Statistics</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
               
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-bar-chart"></i> Campaign: Architectural Office Sent on: December 12, 2015 10 AM PST</h4>
                           
                        </div>
                        <div class="widget-body">
                            <div class="portlet-body">
                                
                                <div id="timeframe-container"></div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>
            <!-- END ADVANCED TABLE widget-->
            
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
               
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-envelope"></i> Email Breakdown</h4>
                           
                        </div>
                        <div class="widget-body">
                            <div class="portlet-body">
                                
                                <div id="breakdown-container" style="width:50%;border:1px solid red;"></div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>
            <!-- END ADVANCED TABLE widget-->
            
             <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
               
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-envelope"></i> Tabs</h4>
                           
                        </div>
                        <div class="widget-body">
                            <div class="portlet-body">
                                
                                
                                
                                
                                
                               <!--BEGIN TABS-->
                                 <div class="tabbable tabbable-custom">
                                    <ul class="nav nav-tabs">
                                       <li class="active"><a href="#tab_1_1" data-toggle="tab">Unique Opens</a></li>
                                       <li><a href="#tab_1_2" data-toggle="tab">Link Clicks</a></li>
                                       <li><a href="#tab_1_3" data-toggle="tab">Unsubscribes</a></li>
                                       <li><a href="#tab_1_4" data-toggle="tab">Bounces</a></li>
                                       <li><a href="#tab_1_5" data-toggle="tab">Not Opened</a></li>
                                    </ul>
                                    <div class="tab-content">
                                       <div class="tab-pane active" id="tab_1_1">
                                          <p>Section 1.</p>
                                          <p>
                                              Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                          </p>
                                       </div>
                                       <div class="tab-pane" id="tab_1_2">
                                          <p>Section 2.</p>
                                          <p>
                                             Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                                          </p>
                                       </div>
                                       <div class="tab-pane" id="tab_1_3">
                                          <p>Section 3.</p>
                                          <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate.
                                             Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                          </p>
                                       </div>
                                        <div class="tab-pane" id="tab_1_4">
                                          <p>Section 3.</p>
                                          <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate.
                                             Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                          </p>
                                       </div>
                                        <div class="tab-pane" id="tab_1_5">
                                          <p>Section 3.</p>
                                          <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate.
                                             Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--END TABS-->
                                       
                                       
                                       
                                       
                                
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>
            <!-- END ADVANCED TABLE widget-->

            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->

      </div>
      <!-- END PAGE -->

<?php
$content = ob_get_contents();
ob_end_clean();
include 'include/header.php';
print $content;
include 'include/footer.php'; 
?>
<script>App.setChartPage(true);</script>