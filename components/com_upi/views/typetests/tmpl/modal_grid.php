<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.0.10  |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		UPI
* @subpackage	TypeTests
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
	'domId' => 'grid-typetests',
	'listOrder' => $listOrder,
	'listDirn' => $listDirn,
	'formId' => 'adminForm',
	'ctrl' => 'typetests',
	'proceedSaveOrderButton' => true,
));
?>

<div class="grid_wrapper">
	<table  class='table' id='grid-typetests'>
		<thead>
			<tr>
				<th>
					<?php echo JText::_("UPI_FIELD_TITLE"); ?>
				</th>

				<th width="10px">

				</th>
			</tr>
		</thead>
	
		<tbody>
			<?php
		//Get the name of the field to populate on return
		$modalObject = JFactory::getApplication()->input->get('object', null, 'cmd');

		$k = 0;
		for ($i=0, $n=count( $this->items ); $i < $n; $i++):
			$row = $this->items[$i];
			?>


			<?php
			//Pickable rows
			//Receive the callback function
			$input = JFactory::getApplication()->input;
			$function	= $input->get('function', 'jSelectItem');
			//Prepare the params to send to the callback
			$pickValue = $row->id;
			$pickLabel = $this->escape(addslashes($row->title));
			$jsPick = "if (window.parent) window.parent.$function('$pickValue', '$pickLabel', '$modalObject');"


			?>

			<tr class="<?php echo "row$k"; ?> pickable-row"
				style="cursor:pointer"
				onclick="<?php echo $jsPick; ?>">

				<td>
					<?php echo JDom::_('html.fly', array(
						'dataKey' => 'title',
						'dataObject' => $row
					));?>
				</td>

				<td width="10px">
					<?php echo JDom::_('html.fly', array(
						'dataKey' => 'id',
						'dataObject' => $row
					));?>
				</td>

			</tr>
			<?php
			$k = 1 - $k;

		endfor;
		?>
		</tbody>
	</table>
</div>