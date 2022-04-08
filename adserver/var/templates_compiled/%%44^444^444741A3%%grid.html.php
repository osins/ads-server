<?php /* Smarty version 2.6.18, created on 2022-04-06 21:13:37
         compiled from dashboard/grid.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'dashboard/grid.html', 37, false),)), $this); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['cssURL']; ?>
/dashboard-home.css"></link>

      <!--[if IE]>
          <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['cssURL']; ?>
/dashboard-home-ie.css"></link>

      <![endif]-->
      <!--[if IE 6]>
          <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['cssURL']; ?>
/dashboard-home-ie6.css"></link>

      <![endif]-->
    </head>

    <body>
        <div id="wrapper">
           <div id="main">
               <div id="header">
                   <div class="widgetToolbar">
                       <div class="widgetToolbarBody hide">
                          <div class="widgetToolbarBodyLeft">&nbsp;</div>
                          <div class="widgetToolbarBodyContent">
	                           <div class="widgetToolbarTitle"><?php echo OA_Admin_Template::_function_t(array('str' => 'WidgetsMemo'), $this);?>
</div>
	                           <div class="widgetToolbarLeftArrow"></div>
	                           <div class="widgetToolbarWidgets widgetToolbarCarousel">
	                             <ul>

	                                 <li id="cw1tw"><div class="toolbarWidget groupItem hide" id="w3tw"><img src="<?php echo $this->_tpl_vars['imageURL']; ?>
/dashboard/grid/thumbs/Statistics.gif" /><div><?php echo OA_Admin_Template::_function_t(array('str' => 'DashboardYourStatisticsLabel'), $this);?>
</div></div></li>

	                                 <li id="cw2tw"><div class="toolbarWidget groupItem hide" id="w6tw"><img src="<?php echo $this->_tpl_vars['imageURL']; ?>
/dashboard/grid/thumbs/Audit.png" /><div><?php echo OA_Admin_Template::_function_t(array('str' => 'DashboardAuditTrailLabel'), $this);?>
</div></div></li>

	                                 <li id="cw3tw"><div class="toolbarWidget groupItem hide" id="w7tw"><img src="<?php echo $this->_tpl_vars['imageURL']; ?>
/dashboard/grid/thumbs/Campaign.png" /><div><?php echo OA_Admin_Template::_function_t(array('str' => 'DashboardCampaignOverviewLabel'), $this);?>
</div></div></li>

	                             </ul>
                           </div>

                           <div class="widgetToolbarRightArrow"></div>
                           </div>
                           <div class="widgetToolbarBodyRight">&nbsp;</div>

                       </div>

                      <div class="widgetToolbarButton widgetToolbarButtonOpen">
	                       <div class="widgetToolbarButtonContainer">
                                <span class="open"><a href="#"><?php echo OA_Admin_Template::_function_t(array('str' => 'MoreWidgetsLabel'), $this);?>
</a></span>
	                           <span class="close"><a href="#"><?php echo OA_Admin_Template::_function_t(array('str' => 'CloseWidgetsLabel'), $this);?>
</a></span>
	                       </div>
                      </div>

                   </div>
               </div>

               <div id="3-col">

                   <!-- leftCol -->
                   <div id="leftCol" class="groupWrapper toolbarWrapper">

                      <div id="w1" class="widget groupItem  ">
                        <div class="widgetFrame">
                          <div class="widgetLeft">
                            <div class="widgetRight">
                              <div class="widgetCenter">
                                <div class="widgetBody">
                                  <div class="widgetHandle">
                                    <div class="widgetTitle">
                                        <?php echo OA_Admin_Template::_function_t(array('str' => 'DashboardYourStatisticsLabel'), $this);?>

                                    </div>
                                    <div class="widgetButtons">
                                      <div class="widgetButtonContainer widgetButtonClose">
                                        <div class="close widgetIcon"></div>
                                        <div class="lock widgetIcon"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="widgetContent">
                                   <iframe src="<?php echo $this->_tpl_vars['dashboardURL']; ?>
?widget=GraphOAP" name="f_w3" id="f_w3" frameborder="0" allowTransparency="true"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                   </div>

                   <!-- middleCol -->
                   <div id="middleCol" class="groupWrapper toolbarWrapper">

                      <div id="w2" class="widget groupItem  ">
                        <div class="widgetFrame">
                          <div class="widgetLeft">
                            <div class="widgetRight">
                              <div class="widgetCenter">
                                <div class="widgetBody">
                                  <div class="widgetHandle">
                                    <div class="widgetTitle">
                                        <?php echo OA_Admin_Template::_function_t(array('str' => 'DashboardCampaignOverviewLabel'), $this);?>

                                    </div>
                                    <div class="widgetButtons">
                                      <div class="widgetButtonContainer widgetButtonClose">
                                        <div class="close widgetIcon"></div>
                                        <div class="lock widgetIcon"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="widgetContent">
                                   <iframe src="<?php echo $this->_tpl_vars['dashboardURL']; ?>
?widget=CampaignOverview" name="f_w7" id="f_w7" frameborder="0" allowTransparency="true"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                   </div>

                   <!-- rightCol -->
                   <div id="rightCol" class="groupWrapper toolbarWrapper">

                      <div id="w3" class="widget groupItem  ">
                        <div class="widgetFrame">
                          <div class="widgetLeft">
                            <div class="widgetRight">
                              <div class="widgetCenter">
                                <div class="widgetBody">
                                  <div class="widgetHandle">
                                    <div class="widgetTitle">
                                        <?php echo OA_Admin_Template::_function_t(array('str' => 'DashboardAuditTrailLabel'), $this);?>

                                    </div>
                                    <div class="widgetButtons">
                                      <div class="widgetButtonContainer widgetButtonClose">
                                        <div class="close widgetIcon"></div>
                                        <div class="lock widgetIcon"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="widgetContent">
                                   <iframe src="<?php echo $this->_tpl_vars['dashboardURL']; ?>
?widget=Audit" name="f_w6" id="f_w6" frameborder="0" allowTransparency="true"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                   </div>

               <!-- 3-col end -->
               </div>

           <!-- main end -->
           </div>

        <!-- wrapper end -->
        </div>

      <script type="text/javascript" src="<?php echo $this->_tpl_vars['jsURL']; ?>
/dashboard.js" ></script>

      <script type="text/javascript">
        <!--
        var DASHBOARD_SETTINGS_COOKIE_NAME = "openx.dashboard.settings";
        var dashboard = new Dashboard(false);
        <?php echo '
        $(document).ready(function() {
          initDashboard();
        });
        '; ?>

        //-->
      </script>

    </body>
</html>