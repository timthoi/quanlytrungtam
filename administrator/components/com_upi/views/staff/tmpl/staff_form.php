<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.0.10  |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		UPI
* @subpackage	Staves
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

<?php $fieldSet = $this->form->getFieldset('staff.form');?>
<fieldset class="fieldsform form-horizontal">
	
		<h3>Thông Tin Chung</h3>
		<?php
		// Profile Pic
		$field = $fieldSet['jform_profile_pic'];
		$field->jdomOptions = array(
			'cid' => (isset($this->item->id)?$this->item->id:null)
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
		// Gender ID
		$field = $fieldSet['jform_gender_id'];
		$field->jdomOptions = array(
			'list' => UpiHelperEnum::_('staves_gender_id')
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
		// Mobile Phone
		$field = $fieldSet['jform_mobile_phone'];
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
		// Ethnicity
		$field = $fieldSet['jform_ethnicity'];
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
		
	 
			<h3>Địa Chỉ & Số Liên Lạc Khác</h3>
			
			<?php
			// Emergency Name
			$field = $fieldSet['jform_emergency_name'];
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
			// Relation
			$field = $fieldSet['jform_relation'];
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
			// Emergency Home Phone
			$field = $fieldSet['jform_emergency_home_phone'];
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
			// Emergency Moble Phone
			$field = $fieldSet['jform_my_string'];
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
			// Address 2
			$field = $fieldSet['jform_my_text'];
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
		
		<!--Thông Tin Trường -->
		
			<h3>Thông Tin Trường</h3>
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

			<?php
			// Leaving Date
			$field = $fieldSet['jform_leaving_date'];
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
	

</fieldset>