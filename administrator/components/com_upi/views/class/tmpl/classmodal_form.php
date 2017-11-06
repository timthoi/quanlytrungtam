<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.1     |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		Managementcom
* @subpackage	Costs
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
<h3><?php echo JText::_('UPI_LAYOUT_CLASS') ?></h3>
<table class="table table-striped">
<tbody>
	<tr>
		<th><?php echo JText::_('UPI_FIELD_SUBJECT_ID_ALIAS') ?></th>
		<td><?php echo $this->item->alias;?></td>
	</tr>
	<tr>
		<th><?php echo JText::_('UPI_FIELD_TITLE') ?></th>
		<td><?php echo $this->item->title;?></td>
	</tr>
	<tr>
		<th><?php echo JText::_('UPI_FIELD_SUBJECT_ID_TITLE') ?></th>
		<td>
			<?php echo ($this->item->_subject_id_title)?$this->item->_subject_id_title:"-"; ?>
		</td>
	</tr>
	<tr>
		<th><?php echo JText::_('UPI_FIELD_GRADE_ID_TITLE') ?></th>
		<td>
			<?php echo ($this->item->_grade_id_title)?$this->item->_grade_id_title:"-"; ?>
		</td>
	</tr>
	<tr>
		<th><?php echo JText::_('UPI_FIELD_NOTE') ?></th>
		<td><?php echo ($this->item->note)?$this->item->note:'-'; ?></td>
	</tr>
	<tr>
		<th><?php echo JText::_('UPI_FIELD_CREATED_BY_NAME') ?></th>
		<td><?php echo $this->item->_created_by_name;?></td>
	</tr>
	<tr>
		<th><?php echo JText::_('UPI_FIELD_CREATION_DATE') ?></th>
		<td><?php echo JDom::_('html.fly.datetime', array(
				'dataKey' => 'creation_date',
				'dataObject' => $this->item,
				'dateFormat' => 'd.m.Y H:i'
			));?>
		</td>
	</tr>
	<tr>
		<th><?php echo JText::_('UPI_FIELD_PUBLISHED') ?></th>
		<td><?php echo ($this->item->published)?"Active":"Inactive";?></td>
	</tr>
	
</tbody>
</table>