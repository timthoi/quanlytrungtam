<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.0.10  |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		UPI
* @subpackage	Students
* @copyright	
* @author		 -  - 
* @license		
*
*             .oooO  Oooo.
*             (   )  (   )
* -------------\ (----) /----------------------------------------------------------- +
*               \_)  (_/
*/

// no direct access
defined('_JEXEC') or die('Restricted access');


UpiHelper::headerDeclarations();
//Load the formvalidator scripts requirements.
JDom::_('html.toolbar');
?>

<script language="javascript" type="text/javascript">
	//Secure the user navigation on the page, in order preserve datas.
	var holdForm = true;
	window.onbeforeunload = function closeIt(){	if (holdForm) return false;};
</script>

<form action="<?php echo(JRoute::_("index.php")); ?>" method="post" name="adminForm" id="adminForm" class='form-validate' enctype='multipart/form-data'>
	<div class="row-fluid">
		<div id="contents" class="span12">
			<!-- BRICK : toolbar_sing -->
			<?php echo $this->renderToolbar();?>
			<!-- BRICK : form -->
			<?php echo $this->loadTemplate('form'); ?>
		</div>
	</div>
	
	<!-- Modal -->
	<div id="fee_modal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Đóng Học Phí</h4>
			<h3 class='fee_status'><span class="label">Chưa Đóng</span></h3>
		  </div>
		
		  <div class="modal-body">
				<div class="modal-control-group">
					<div class="modal-control-label">
						<label>Học Phí Đã Đóng</label>
						<input type="text" id="" name="fee_paid" value="" size="32">
					</div>
					
					<div class="modal-control-label">
						<label>Học Phí Còn Lại</label>
						<input type="text" class="fee_remaining" name="fee_remaining" value="" size="32">
					</div>
					
					<div class="modal-control-label">
						<label>Ngày Đóng</label>
						<div class="btn-group"><div class="input-append">
						<input type="text" id="fee_date" name="fee_date" class="input-small" value="" size="32" placeholder="dd/mm/yyyy">
						<a id="fee_date-btn" class="btn" style="cursor:pointer;" type="button"><i class="icon-calendar icomoon "></i></a>
						</div>
						</div>
					</div>
					
					<div class="modal-control-label">
						<label>Note</label>
						<textarea name="fee_note" cols="32" rows="4"></textarea>
					</div>
					
				</div>
		  </div>
		  <div class="modal-footer">
				<button type="submit" onclick="Joomla.submitbutton('student.save_fee');" class="btn button-save btn-success"><span class="icon-apply icon-white" aria-hidden="true"></span>Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon-cancel" aria-hidden="true"></span>Cancel</button>
		  </div>
		<input type="hidden" class='student_id' name="student_id" value="">	
		<input type="hidden" class='classperiod_id' name="classperiod_id" value="">	
			
		</div>
	  </div>
	</div>


	<?php 
		$jinput = JFactory::getApplication()->input;
		echo JDom::_('html.form.footer', array(
		'dataObject' => $this->item,
		'values' => array(
					'id' => $this->state->get('student.id')
				)));
	?>
	
	
</form>





<script>
(function($) {
$(document).ready(function(){
	$( ".add_fee" ).on( "click", function(e) {
		var classperiod_id 	= $(this).parents('.template_class_tr').find("select[name*='classperiod_id']").val();
		var student_id 		= $(this).parents('#adminForm').find("#id").val();
		var fee_status 		= $(this).parents('.template_class_tr').find(".fee_status .label").text();
		
		var current_date 	= '<?php echo  date("d/m/Y")?>';
		
		$('#fee_modal').find("input[name*='cid']").val(student_id);
		$('#fee_modal').find('.student_id').val(student_id);
		$('#fee_modal').find('.classperiod_id').val(classperiod_id);
		$('#fee_modal').find('.fee_status .label').text(fee_status);
		$('#fee_modal').find('.fee_remaining').val(0);
		
		
		window.addEvent('domready', function() {if($(".fee_date")) Calendar.setup({
			inputField: "fee_date",
			ifFormat: "%d/%m/%Y",	// Trigger for the calendar (button ID)
			button: "fee_date-btn",
			align: "B2",
			singleClick: true,
			firstDay: 0
		});});
		
		$('#fee_date').val(current_date);
		 
		/* $('.button-save').live( "click", function(e) {
			Joomla.submitbutton('student.save_fee');
		}) */
		
		$('#fee_modal').modal();
		
		
		
	})

});
})(jQuery);   
 </script> 