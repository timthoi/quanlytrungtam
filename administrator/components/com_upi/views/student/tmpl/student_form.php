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


if (!$this->form)
	return;

$fieldSets = $this->form->getFieldsets();

if (isset($_GET['register_class'])) $register_class = 1;
else
	$register_class = 0;

?>

<?php $fieldSet = $this->form->getFieldset('student.form');?>
<fieldset class="fieldsform form-horizontal">


<div class="tab-content">
	
		<?php
		// Last Name
		$field = $fieldSet['jform_last_name'];
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
		// First Name
		$field = $fieldSet['jform_first_name'];
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
		// Grade ID > Title
		$field = $fieldSet['jform_grade_id'];
		$field->jdomOptions = array(
			'list' => $this->lists['fk']['grade_id']
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
		// School
		$field = $fieldSet['jform_school'];
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
		// Phone
		$field = $fieldSet['jform_phone'];
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
		// Home Phone
		$field = $fieldSet['jform_home_phone'];
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
		// Gender
		$field = $fieldSet['jform_gender_id'];
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
		// Birthday
		$field = $fieldSet['jform_birthday'];
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
		// Email
		$field = $fieldSet['jform_email'];
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
		// Address 1
		$field = $fieldSet['jform_address_1'];
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

	
		<div class="" style="overflow:hidden">
			<div class="span4">
				<h4>Thông Tin Cha</h4>
				<?php
				// Emergency Name 1
				$field = $fieldSet['jform_emergency_name_1'];
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
				// Emergency Work Phone 1
				$field = $fieldSet['jform_emergency_work_phone_1'];
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
				// Emergency Email 1
				$field = $fieldSet['jform_emergency_email_1'];
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
				// Emergency Job 1
				$field = $fieldSet['jform_emergency_job_1'];
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
				// Emergency Position 1
				$field = $fieldSet['jform_emergency_position_1'];
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
			</div>
			<div class="span4">
				<h4>Thông Tin Mẹ</h4>
				<?php
				// Emergency Name 2
				$field = $fieldSet['jform_emergency_name_2'];
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
				// Emergency Work Phone 2
				$field = $fieldSet['jform_emergency_work_phone_2'];
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
				// Emergency Email 2
				$field = $fieldSet['jform_emergency_email_2'];
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
				// Emergency Job 2
				$field = $fieldSet['jform_emergency_job_2'];
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
				// Emergency Position 2
				$field = $fieldSet['jform_emergency_position_2'];
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
				
			</div>
			<div class="span4">
				<h4>Thông Tin Người Thân Khác</h4>
				<?php
				// Emergency Name 3
				$field = $fieldSet['jform_emergency_name_3'];
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
				// Emergency Work Phone 3
				$field = $fieldSet['jform_emergency_work_phone_3'];
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
				// Emergency Email 3
				$field = $fieldSet['jform_emergency_email_3'];
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
				// Emergency Job 3
				$field = $fieldSet['jform_emergency_job_3'];
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
				// Emergency Position 3
				$field = $fieldSet['jform_emergency_position_3'];
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
			</div>
		</div>
		
		<?php
		// Address 2
		$field = $fieldSet['jform_address_2'];
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
		// Joining Date
		$field = $fieldSet['jform_joining_date'];
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
	</div>
	<!-- menu 4 -->

	<?php
	// register class - ClassPeriod
	
	?>
	<input class="btt-add" type="button" value="<?php echo JText::_('UPI_FIELD_ADD_CLASS')?>" id="add_class"/>
	<p class="guide">Nhập Lớp và Ngày Đăng Ký trước -> Save -> Đóng Học Phí</p>
	
	<table style="width:100%" class='template template_class table-hover table-no-border'>
		<tr class='template_class_head'>
			<th></th>
			<th style="text-align:left"><?php echo JText::_('UPI_FIELD_CLASS_ALIAS_TITLE')?></th>
			<th style="text-align:left"><?php echo JText::_('UPI_FIELD_FEE')?></th> 
			<th style="text-align:left"><?php echo JText::_('UPI_FIELD_REGISTER_DATE')?></th>
			<th style="text-align:left"></th>
		</tr>
	</table> 
	 
	 <!--
	</table>
	
		<table class="table table-hover table-no-border">
		
		<tbody>
		  <tr>
			<td><?php echo JText::_('UPI_FIELD_COURSE_ID_TITLE')?></td>
			<td><?php echo UpiHelper::getCurrentCourseTitle();?></td>
		  </tr>
		  <tr>
			<td><?php echo JText::_('UPI_FIELD_REGISTER_DATE')?></td>
			<td>
				<input type="text" id="jform_register_date" name="register_date" class="input-small" value="" size="32" placeholder="dd/mm/yyyy"><a id="jform_register_date-btn" class="btn" style="cursor:pointer;" type="button"><i class="icon-calendar icomoon "></i></a>
				
			</td>
		  </tr>
		  <tr>
			<td><?php echo JText::_('UPI_LAYOUT_CLASS')?></td>
			<td>
                <select name="">               
                    <option value="0"><?php echo JText::_('UPI_FILTER_NULL_CLASS_ID_TITLE')?></option>;
                    <?php 
                       
                       for($j=0; $j< count($this->list_class);$j++): 
                           
                    ?>		
                            <option value="<?php echo $this->list_class[$j]->alias;?>"><?php echo $this->list_class[$j]->alias;  ?></option>
                     <?php endfor;?>
                   
                </select> 
				
           
			</td>
		  </tr>
		</tbody>
	  </table>
	-->	
		

	
	

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

</fieldset>


<?php 
$select_1 = JHTML::_('select.genericlist',$this->lists['fk']['classperiod_id'], 'classperiod_id[]', '', 'id', 'alias');
$select_1 = preg_replace('/\s+/', ' ', trim($select_1));

?>

<script>
	(function($) {
		 $(document).ready(function(){
			//init
			var select_1 = '<?php echo $select_1?>';
			var current_date = '<?php echo date("d/m/Y")?>';
		
			
			var html_template_class = '<tr class="template template_class_tr">'
			+ '<td><a href="#" class="remove_field"><i class="icon-remove"></i></a></td>'
			+ '<td>'+ select_1 +'</td>'
			+ '<td>'+ '<span class="label">Chưa Đóng</span>' +'</td>'
			+ '<td><input type="text" name="register_date[]" class="input-small" placeholder="dd/mm/yyyy"></td>'
			+ '<td><a href="#" class="view_fee"><i class="icon-eye"></i>Xem Chi Tiết</a> | <a href="#" class="add_fee"><i class="icon-plus"></i>Đóng Học Phí</td>'
			+ '</tr>';

			 $( "#add_class" ).on( "click", function(e) {
				$('.template_class tbody').append(html_template_class);

				var classperiod_id = $('.template_class tbody').find("tr.template_class_tr:last select[name*='classperiod_id']");
				var register_date = $('.template_class tbody').find("tr.template_class_tr:last input[name*='register_date']");	


				$('.template_class tbody').find("tr.template_class_tr:last select").removeAttr('id');	

				classperiod_id.chosen({
					placeholder_text_single: '- Chọn Lớp -'
				});

				register_date.val(current_date);

				e.preventDefault();
			 })
			
			 $( ".remove_field" ).live( "click", function(e) {
				$(this).closest('tr').remove();
				e.preventDefault();
			 })
			
			 
			/*var list_period_id = '<?php echo isset($this->item->period_id)?$this->item->period_id:''?>';
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
			
			 $( ".remove_field" ).live( "click", function() {
				 $(this).closest('tr').remove();
			 })
			 */
			 
		 });
	})(jQuery);   
 </script>   

<script>
   
    /*jQuery(function($){
         //var str= "<input value='' name='email' id='email' placeholder='email@example.com' type='email'> ";
         //$(str).insertBefore( $( "#contents" ) );
         
         $(document).ready(function(){
            window.addEvent('domready', function() {if($("jform_register_date")) Calendar.setup({
    			inputField: "jform_register_date",
    			ifFormat: "%d/%m/%Y",	// Trigger for the calendar (button ID)
    			button: "jform_register_date-btn",
    			align: "B2",
				
    			singleClick: true,firstDay: 0
    			});});
     });});*/
     
</script>