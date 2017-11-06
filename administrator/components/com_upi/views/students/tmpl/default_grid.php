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


JHtml::addIncludePath(JPATH_ADMIN_UPI.'/helpers/html');
JHtml::_('behavior.tooltip');
//JHtml::_('behavior.multiselect');

$model		= $this->model;
$user		= JFactory::getUser();
$userId		= $user->get('id');
$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
$saveOrder	= $listOrder == 'a.ordering' && $listDirn != 'desc';
JDom::_('framework.sortablelist', array(
	'domId' => 'grid-students',
	'listOrder' => $listOrder,
	'listDirn' => $listDirn,
	'formId' => 'adminForm',
	'ctrl' => 'students',
	'proceedSaveOrderButton' => true,
));
?>

<div class="clearfix"></div>
<div class="">
	<table class='table' id='grid-students'>
		<thead>
			<tr>
				<?php if ($model->canSelect()): ?>
				<th>
					<?php echo JDom::_('html.form.input.checkbox', array(
						'dataKey' => 'checkall-toggle',
						'title' => JText::_('JGLOBAL_CHECK_ALL'),
						'selectors' => array(
							'onclick' => 'Joomla.checkAll(this);'
						)
					)); ?>
				</th>
				<?php endif; ?>

				<?php if ($model->canEditState()): ?>
				<th style="text-align:center">
					<?php echo JHTML::_('grid.sort',  "UPI_HEADING_ORDERING", 'a.ordering', $listDirn, $listOrder ); ?>
				</th>
				<?php endif; ?>
				
				<th style="text-align:left">
					<?php echo JText::_("UPI_FIELD_LAST_NAME"); ?>
				</th>

				<th style="text-align:left">
					<?php echo JHTML::_('grid.sort',  "UPI_FIELD_FIRST_NAME", 'a.first_name', $listDirn, $listOrder ); ?>
				</th>
				
				<th style="text-align:left">
					<?php echo JText::_("UPI_FIELD_SCHOOL"); ?>
				</th>

				<th style="text-align:left">
					<?php echo JText::_("UPI_FIELD_PHONE"); ?>
				</th>
				
				<th style="text-align:left">
					<?php echo JText::_("UPI_FIELD_HOME_PHONE"); ?>
				</th>
				
				<th style="text-align:left">
					<?php echo JText::_("UPI_FIELD_GRADE_ID_TITLE"); ?>
				</th>

				<th style="text-align:left">
					<?php echo JHTML::_('grid.sort',  "UPI_FIELD_JOINING_DATE", 'a.joining_date', $listDirn, $listOrder ); ?>
				</th>

				<th style="text-align:left">
					<?php echo JText::_("UPI_LAYOUT_CLASS"); ?>
				</th>


				<th style="text-align:left">
					<?php echo JText::_("UPI_FIELD_NOTE"); ?>
				</th>

				<th style="text-align:left">
					<?php echo JText::_("UPI_FIELD_CREATION_DATE"); ?>
				</th>


				<?php if ($model->canEditState()): ?>
				<th style="text-align:center">
					<?php echo JText::_("UPI_FIELD_PUBLISHED"); ?>
				</th>
				<?php endif; ?>
			</tr>
		</thead>
		<tbody>
		<?php
		$k = 0;
		for ($i=0, $n=count( $this->items ); $i < $n; $i++):
			$row = $this->items[$i];

			?>

			<tr class="<?php echo "row$k"; ?>">
				<?php if ($model->canSelect()): ?>
				<td>
					<?php if ($row->params->get('access-edit') || $row->params->get('tag-checkedout')): ?>
						<?php echo JDom::_('html.grid.checkedout', array(
													'dataObject' => $row,
													'num' => $i
														));
						?>
					<?php endif; ?>
				</td>
				<?php endif; ?>

				<?php if ($model->canEditState()): ?>
				<td style="text-align:center">
					<?php echo JDom::_('html.grid.ordering', array(
						'aclAccess' => 'core.edit.state',
						'dataKey' => 'ordering',
						'dataObject' => $row,
						'enabled' => $saveOrder
					));?>
				</td>
				<?php endif; ?>

				<td style="text-align:left">
					<?php echo JDom::_('html.fly', array(
						'dataKey' => 'last_name',
						'dataObject' => $row
					));?>
				</td>
				
				<td style="text-align:left">
					<?php echo JDom::_('html.fly', array(
						'dataKey' => 'first_name',
						'dataObject' => $row
					));?>
				</td>
				
				<td style="text-align:left">
					<?php echo ($row->school)?$row->school:"-";?>
				</td>


				<td style="text-align:left">
					<?php echo ($row->phone)?$row->phone:"-";?>
				</td>
				
				<td style="text-align:left">
					<?php echo ($row->phone)?$row->home_phone:"-";?>
				</td>
				
				<td style="text-align:left">
					<?php echo JDom::_('html.fly', array(
						'dataKey' => '_grade_id_title',
						'dataObject' => $row
					));?>
				</td>



				<td style="text-align:left">
					<?php echo JDom::_('html.fly.datetime', array(
						'dataKey' => 'joining_date',
						'dataObject' => $row,
						'dateFormat' => 'd.m.Y'
					));?>
				</td>

				<td style="text-align:left">
					<?php echo ($row->note)?$row->note:"-";?>
				</td>
				

				<td style="text-align:left">
					<?php echo ($row->note)?$row->note:"-";?>
				</td>

				<td style="text-align:left">
					<?php echo JDom::_('html.fly.datetime', array(
						'dataKey' => 'creation_date',
						'dataObject' => $row,
						'dateFormat' => 'd-m-Y H:i'
					));?>
				</td>


				<?php if ($model->canEditState()): ?>
				<td style="text-align:center">
					<?php echo JDom::_('html.grid.publish', array(
						'ctrl' => 'students',
						'dataKey' => 'published',
						'dataObject' => $row,
						'num' => $i
					));?>
				</td>
				<?php endif; ?>
			</tr>
			<?php
			$k = 1 - $k;
		endfor;
		?>
		</tbody>
	</table>
</div>