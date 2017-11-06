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

<script>
   
    jQuery(function($){
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
     });});
     
</script>