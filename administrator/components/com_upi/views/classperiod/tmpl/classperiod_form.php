<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.0.10  |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		UPI
* @subpackage	Classes
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


if (!$this->form)
	return;

$fieldSets = $this->form->getFieldsets();

?>

<?php $fieldSet = $this->form->getFieldset('classperiod.form');?>
<fieldset class="fieldsform form-horizontal">

	<?php
	// course ID > Alias
	$field = $fieldSet['jform_course_id'];
	
	if ( $field->getValue() ){
		$field->jdomOptions = array(
			'list' => $this->lists['fk']['course_id'],
		);
	}
	else if ( isset($this->activeCourse->id) ) {
		$field->jdomOptions = array(
			'list' => $this->lists['fk']['course_id'],
			'dataValue' => $this->activeCourse->id
		);
	}
	
	?>
	<div class="control-group <?php echo 'field-' . $field->id . $field->responsive; ?>">
		<div class="control-label">
			<?php echo $field->label; ?>
		</div>

	    <div class="controls">
			<?php echo $field->input; ?>
		</div>
	</div>
	<?php echo(UpiHelperHtmlValidator::loadValidator($field)); ?>

	<?php
	// Class ID > Alias
	$field = $fieldSet['jform_class_id'];
	$field->jdomOptions = array(
		'list' => $this->lists['fk']['class_id']
			);
	?>
	<div class="control-group <?php echo 'field-' . $field->id . $field->responsive; ?>">
		<div class="control-label">
			<?php echo $field->label; ?>
		</div>

	    <div class="controls">
			<?php echo $field->input; ?>
		</div>
	</div>
	<?php echo(UpiHelperHtmlValidator::loadValidator($field)); ?>

	<?php
	// ClassPeriod
	
	?>
	<input class="btt-add" type="button" value="<?php echo JText::_('UPI_ADD_TIME')?>" id="add_period"/>
	
	<table style="width:100%" class='template_period'>
	  <tr class='template_period_head'>
		<th></th>
		<th style="text-align:left">Thời Gian</th>
		<th style="text-align:left">Giáo Viên</th> 
		<th style="text-align:left">Trợ Giảng</th>
	  </tr>
	 
	 
	 
	</table>
	
	<?php
	// register_date
	$field = $fieldSet['jform_register_date'];
	?>
	<div class="control-group <?php echo 'field-' . $field->id . $field->responsive; ?>">
		<div class="control-label">
			<?php echo $field->label; ?>
		</div>

	    <div class="controls">
			<?php echo $field->input; ?>
		</div>
	</div>
	<?php echo(UpiHelperHtmlValidator::loadValidator($field)); ?>
	
	<?php
	// Note
	$field = $fieldSet['jform_note'];
	?>
	<div class="control-group <?php echo 'field-' . $field->id . $field->responsive; ?>">
		<div class="control-label">
			<?php echo $field->label; ?>
		</div>

	    <div class="controls">
			<?php echo $field->input; ?>
		</div>
	</div>
	<?php echo(UpiHelperHtmlValidator::loadValidator($field)); ?>



	<?php
	// Published
	$field = $fieldSet['jform_published'];
	?>
		<?php if (!method_exists($field, 'canView') || $field->canView()): ?>
		<div class="control-group <?php echo 'field-' . $field->id . $field->responsive; ?>">
			<div class="control-label">
				<?php echo $field->label; ?>
			</div>

		    <div class="controls">
				<?php echo $field->input; ?>
			</div>
		</div>
		<?php echo(UpiHelperHtmlValidator::loadValidator($field)); ?>
		<?php endif; ?>
	
	<?php
	// period_id
	$field = $fieldSet['jform_period_id'];
	?>
		<?php if (!method_exists($field, 'canView') || $field->canView()): ?>
		<div class="control-group <?php echo 'field-' . $field->id . $field->responsive; ?>">
			<div class="control-label">
				<?php echo $field->label; ?>
			</div>

		    <div class="controls">
				<?php echo $field->input; ?>
			</div>
		</div>
		<?php echo(UpiHelperHtmlValidator::loadValidator($field)); ?>
		<?php endif; ?>
	
</fieldset>

<?php 
$select_1 = JHTML::_('select.genericlist',$this->lists['fk']['period_id'], 'period_id[]', '', 'id', 'alias');
$select_2 = JHTML::_('select.genericlist',$this->lists['fk']['staff_id'], 'teacher_id[]', '', 'id', 'full_name');
$select_3 = JHTML::_('select.genericlist',$this->lists['fk']['staff_id'], 'tutor_id[]', 'multiple', 'id', 'full_name');

$select_1 = preg_replace('/\s+/', ' ', trim($select_1));
$select_2 = preg_replace('/\s+/', ' ', trim($select_2));
$select_3 = preg_replace('/\s+/', ' ', trim($select_3));

?>

<script>
	(function($) {
		 $(document).ready(function(){
			//init
			var select_1 = '<?php echo $select_1?>';
			var select_2 = '<?php echo $select_2?>';
			var select_3 = '<?php echo $select_3?>';
			
			var html_template_period = '<tr class="template_period_tr">'
			+ '<td><a href="#" class="remove_field"><i class="icon-remove"></i></a></td>'
			+ '<td>' + select_1 +'</td>'
			+ '<td>' + select_2 +'</td>'
			+ '<td>' + select_3 +'</td>'
			+ '</tr>';
			
			 
			var list_period_id = '<?php echo isset($this->item->period_id)?$this->item->period_id:''?>';
			list_period_id = jQuery.parseJSON( list_period_id );
			
			if ( list_period_id )
			for(i=0;i<list_period_id.length;i++){
				 console.log(list_period_id[i]['period_id']);
				
				$('.template_period tbody').append(html_template_period);
				var period_element = $('.template_period tbody').find("tr.template_period_tr:last select[name*='period_id']");
				var teacher_element = $('.template_period tbody').find("tr.template_period_tr:last select[name*='teacher_id']");
				var tutor_element = $('.template_period tbody').find("tr.template_period_tr:last select[name*='tutor_id']");
				
				$('.template_period tbody').find("tr.template_period_tr:last select").removeAttr('id');		
				period_element.chosen({
					placeholder_text_single: '- Chọn Thời Gian -'
				});
				period_element.val(list_period_id[i]['period_id']);
				period_element.trigger("liszt:updated");
			
				teacher_element.chosen({
					placeholder_text_multiple: '- Chọn Giáo Viên -'
				});
				teacher_element.val(list_period_id[i]['teacher_id']);
				teacher_element.trigger("liszt:updated");
				
				
				tutor_element.chosen({
					placeholder_text_multiple: '- Chọn Trợ Giảng -'
				});
				tutor_element.val(list_period_id[i]['tutor_id']);
				tutor_element.trigger("liszt:updated");
			 }
			 
			
			 
			function call_ajax_getClassList(data,url){
				var list = '';
				jQuery.ajax({
					 type: "POST",
					 async: false,
					 url: url,
					 data: data,
					 success: function(data){
						 list = jQuery.parseJSON( data );
						 //console.log(JSON.stringify(data));
					}
				});
				return list;
			}    
		
			//change course
			 $("#jform_course_id").chosen().change(function(event){				
				var data = 'course_id=' + $(this).val();
				var url = window.location.protocol + "//" + window.location.host + window.location.pathname + '?option=com_upi&task=course.ajax_getClassList';
				
				//update value for class dropdown
				var list_class = call_ajax_getClassList(data,url);
				if ( list_class.length ) {
					console.log(list_class);
					$( "#jform_class_id" ).chosen('destroy');  
					$( "#jform_class_id" ).replaceWith( list_class );
					$( "#jform_class_id" ).chosen();
				}
				
			 });  
			
			 
			 $( "#add_period" ).on( "click", function(e) {
				$('.template_period tbody').append(html_template_period);
				$('.template_period tbody').find("tr.template_period_tr:last select").removeAttr('id');		
				$('.template_period tbody').find("tr.template_period_tr:last select[name*='period_id']").chosen({
					placeholder_text_single: '- Chọn Thời Gian -'
				});
				$('.template_period tbody').find("tr.template_period_tr:last select[name*='teacher_id']").chosen({
					placeholder_text_multiple: '- Chọn Giáo Viên -'
				});
				$('.template_period tbody').find("tr.template_period_tr:last select[name*='tutor_id']").chosen({
					placeholder_text_multiple: '- Chọn Trợ Giảng -'
				});
				e.preventDefault();
			 })
			
			 $( ".remove_field" ).live( "click", function(e) {
				 $(this).closest('tr').remove();
				 e.preventDefault();
			 })
			 
			 
		 });
	})(jQuery);   
 </script>   
 
 
 <script>
(function($) {
	$(document).ready(function(){
		Joomla.submitbutton = function(task){
			if ( task == 'classperiod.apply' || task == 'classperiod.save' || task == 'classperiod.save2new' || task == 'classperiod.save2copy') {
				$('#jform_period_id').val(""); 
			
				var jsonObj = [];
				var msg1 = {error: ["Chọn Lại Thời Gian"]};
				
				var nums = $(".template_period_tr").length;
				if ( nums ){
					$( ".template_period_tr" ).each(function() {
						var select_period_id = $( this ).find( "select[name='period_id[]']" ).val();
						var select_teacher_id = $( this ).find( "select[name='teacher_id[]']" ).val();
						var select_tutor_id = $( this ).find( "select[name='tutor_id[]']" ).val();
						//console.log(select_tutor_id);
					
						if ( select_period_id && select_teacher_id && select_tutor_id ){
							 jsonObj.push({
								 period_id: select_period_id,
								 teacher_id: select_teacher_id,
								 tutor_id: select_tutor_id
							 });   
						}
						else{
							Joomla.renderMessages( msg1 );
						}
					});
					$('#jform_period_id').val(JSON.stringify(jsonObj));	
					Joomla.submitform(task);
				}
				else{
					Joomla.renderMessages( msg1 );
				}
				
			}
			else{
				Joomla.submitform(task);
			}			
		}  
	});
})(jQuery);  
</script>