<?php /* Smarty version 2.6.18, created on 2022-04-08 01:59:43
         compiled from video-report.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'video-report.html', 35, false),)), $this); ?>
<link href="css/icons.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/report.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/graph.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/ui.datepicker.css" rel="stylesheet" type="text/css" media="all" />
  
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.datepicker-mod.js"></script>
<script type="text/javascript" src="js/ox.reports.js"></script>
<script type="text/javascript" src="js/json2.js"></script>

<div class="report">

  <div id="date-range" title="Apr 22, 2009 - Apr 28, 2009">
    <label>Date range: </label><span class="iconCalendar inlineIconAfter" title="<?php echo $this->_tpl_vars['selectedDateRangeName']; ?>
"><?php echo $this->_tpl_vars['selectedDateRangeName']; ?>
</span>
  </div>
 
  <div id="date-range-picker">
    <div id="date-range-picker-controls">
      <div id="date-range-picker-start-date">
        Start date
        <div></div>
      </div>
      <div id="date-range-picker-end-date">
        End date
        <div></div>
        <button id="date-range-picker-done" class="save">Done</button>
      </div>
      <ul>
                <?php $_from = $this->_tpl_vars['availableDateRanges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['range']):
?>
        	<li><a title="<?php echo $this->_tpl_vars['range']['0']; ?>
 - <?php echo $this->_tpl_vars['range']['1']; ?>
"
        		<?php if ($this->_tpl_vars['range']['0'] == $this->_tpl_vars['startDate'] && $this->_tpl_vars['range']['1'] == $this->_tpl_vars['endDate']): ?>class="current"<?php endif; ?>
        		href="<?php echo smarty_function_url(array('startDate' => $this->_tpl_vars['range']['0'],'endDate' => $this->_tpl_vars['range']['1']), $this);?>
"><?php echo $this->_tpl_vars['label']; ?>
</a></li>
        <?php endforeach; endif; unset($_from); ?> 
                <li><a href="#" class="range">Specific date range</a></li>
      </ul>
    </div>
  </div>
  
<?php if (! $this->_tpl_vars['isThereAnyData']): ?>
  <div class="video_plugin_header">
	<h2> There is no Video Events data for this <?php echo $this->_tpl_vars['entityName']; ?>
 for the selected date range: <?php echo $this->_tpl_vars['startDate']; ?>
 - <?php echo $this->_tpl_vars['endDate']; ?>
.</h2>
  </div>
<?php else: ?>
     
  <div class="video_plugin_header">
    <div class="export">
      <a class="inlineIcon iconCsv" href="<?php echo smarty_function_url(array('exportCsv' => 1), $this);?>
">Export as CSV</a>
    </div>
    <a name="table"></a><h2>Views events history</h2>
  </div>
  <div class="tableWrapper" style="clear: both">
    <div class='tableHeader'>  
      <ul class='tableFilters'>
        <li>
          <div class='label'>View by</div>  
          <div class='dropDown'>
            <span><span><?php echo $this->_tpl_vars['availableDimensions'][$this->_tpl_vars['selectedDimension']]; ?>
</span></span>  
            <div class='panel'>
              <div>
                <ul>
                	<?php $_from = $this->_tpl_vars['availableDimensions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dimensionId'] => $this->_tpl_vars['dimensionName']):
?>
	                  <li><a href="<?php echo smarty_function_url(array('dimension' => $this->_tpl_vars['dimensionId']), $this);?>
"><?php echo $this->_tpl_vars['dimensionName']; ?>
</a></li>
    	            <?php endforeach; endif; unset($_from); ?>
                </ul>
              </div>
            </div>
            <div class='mask'></div>
          </div>
        </li>
      </ul>
      <div class='clear'></div>
      <div class='corner left'></div>
      <div class='corner right'></div>
    </div>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'table.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
<?php endif; ?>
</div>

<script type="text/javascript">//<![CDATA[
    var urlTemplate = "<?php echo smarty_function_url(array('startDate' => '_start_','endDate' => '_end_'), $this);?>
";
  var startDate = "<?php echo $this->_tpl_vars['thirtyDaysAgo']; ?>
";
  var endDate = "<?php echo $this->_tpl_vars['today']; ?>
";

<?php echo '
  $(document).ready(function() {
    $("#date-range").daterangepicker("#date-range-picker", "#date-range-picker-done", urlTemplate, startDate, endDate);
  });
//]]></script>
'; ?>
