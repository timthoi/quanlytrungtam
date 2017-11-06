<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.0.10  |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		UPI
* @subpackage	Courses
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

<?php $fieldSet = $this->form->getFieldset('course.form');?>
<fieldset class="fieldsform form-horizontal">

	<?php
	// Title
	$field = $fieldSet['jform_title'];
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
	// Alias
	$field = $fieldSet['jform_alias'];
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
	// Start Date
	$field = $fieldSet['jform_start_date'];
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
	// End Date
	$field = $fieldSet['jform_end_date'];
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
	
	<!-- List Class -->
	
	<div class="clearfix"></div>
	<div class="">
		<table class='table' id='grid-classes'>
			<thead>
				<tr>
					
					<th>
						<?php echo JDom::_('html.form.input.checkbox', array(
							'dataKey' => 'checkall-toggle',
							'title' => JText::_('JGLOBAL_CHECK_ALL'),
							'selectors' => array(
								'onclick' => 'Joomla.checkAll(this);'
							)
						)); ?>
					</th>
					
					
					<th>
						<?php echo JText::_("UPI_FIELD_CLASS_ALIAS_TITLE"); ?>
					</th>

					<th >
						<i style="margin-right:5px;" class="icon-plus icomoon"></i>
						<?php echo JText::_("UPI_FIELD_SCHEDULE"); ?>
					</th>

					<th>
						<?php echo JText::_("UPI_FIELD_NOTE"); ?>
					</th>

					
				</tr>
			</thead>
			<tbody>
			<?php
			$k = 0;
			for ($i=0, $n=count( $this->listClasses ); $i < $n; $i++):
				$class = $this->listClasses[$i];

				?>

				<tr class="<?php echo "row$k"; ?>">
					
					<td>
						<?php if ($class->params->get('access-edit') || $class->params->get('tag-checkedout')): ?>
							<?php echo JDom::_('html.grid.checkedout', array(
														'dataObject' => $class,
														'num' => $i
															));
							?>
						<?php endif; ?>
					</td>
					


					<td>
						<?php echo ($class->alias)?$class->alias:"-";?>	
					</td>
						
					<td>
						<!-- Thứ 2-->
					</td>
					
					
					<td>
						<textarea id="jform_classcourse_note" name="jform[classcourse_note]" cols="32" rows="4"><?php echo ($class->classcourse_note)?$class->classcourse_note:"";?></textarea>
							
					</td>

				</tr>
				<?php
				$k = 1 - $k;
			endfor;
			?>
			</tbody>
		</table>
	</div>
	

	<?php
	// Active
	$field = $fieldSet['jform_active'];
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