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



/**
* HTML View class for the Upi component
*
* @package	Upi
* @subpackage	Staves
*/
class UpiViewStaves extends UpiClassView
{
	/**
	* List of the reachables layouts. Fill this array in every view file.
	*
	* @var array
	*/
	protected $layouts = array('default', 'modal');

	/**
	* Execute and display a template : Staves
	*
	* @access	protected
	* @param	string	$tpl	The name of the template file to parse; automatically searches through the template paths.
	*
	*
	* @since	11.1
	*
	* @return	mixed	A string if successful, otherwise a JError object.
	*/
	protected function displayDefault($tpl = null)
	{
		$this->model		= $model	= $this->getModel();
		$this->state		= $state	= $this->get('State');
		$this->params 		= JComponentHelper::getParams('com_upi', true);
		$state->set('context', 'staves.default');
		$this->items		= $items	= $this->get('Items');
		$this->canDo		= $canDo	= UpiHelper::getActions();
		$this->pagination	= $this->get('Pagination');
		$this->filters = $filters = $model->getForm('default.filters');
		$this->menu = UpiHelper::addSubmenu('staves', 'default');
		$lists = array();
		$this->lists = &$lists;

		// Define the title
		$this->_prepareDocument(JText::_('UPI_LAYOUT_STAVES'));

		

		//Filters
		// Sort by
		$filters['sortTable']->jdomOptions = array(
			'list' => $this->getSortFields('default')
		);

		// Limit
		$filters['limit']->jdomOptions = array(
			'pagination' => $this->pagination
		);

		// Toolbar
		JToolBarHelper::title(JText::_('UPI_LAYOUT_STAVES'), 'list');

		// New
		if ($model->canCreate())
			JToolBarHelper::addNew('staff.add', "UPI_JTOOLBAR_NEW");

		// Edit
		if ($model->canEdit())
			JToolBarHelper::editList('staff.edit', "UPI_JTOOLBAR_EDIT");

		// Delete
		if ($model->canDelete())
			JToolBarHelper::deleteList(JText::_('UPI_JTOOLBAR_ARE_YOU_SURE_TO_DELETE'), 'staff.delete', "UPI_JTOOLBAR_DELETE");

		// Unpublish
		if ($model->canEditState())
			JToolBarHelper::unpublishList('staves.unpublish', "UPI_JTOOLBAR_UNPUBLISH");

		// Publish
		if ($model->canEditState())
			JToolBarHelper::publishList('staves.publish', "UPI_JTOOLBAR_PUBLISH");
	}

	/**
	* Execute and display a template : Staves
	*
	* @access	protected
	* @param	string	$tpl	The name of the template file to parse; automatically searches through the template paths.
	*
	*
	* @since	11.1
	*
	* @return	mixed	A string if successful, otherwise a JError object.
	*/
	protected function displayModal($tpl = null)
	{
		$this->model		= $model	= $this->getModel();
		$this->state		= $state	= $this->get('State');
		$this->params 		= JComponentHelper::getParams('com_upi', true);
		$state->set('context', 'staves.modal');
		$this->items		= $items	= $this->get('Items');
		$this->canDo		= $canDo	= UpiHelper::getActions();
		$this->pagination	= $this->get('Pagination');
		$this->filters = $filters = $model->getForm('modal.filters');
		$this->menu = UpiHelper::addSubmenu('staves', 'modal');
		$lists = array();
		$this->lists = &$lists;

		// Define the title
		$this->_prepareDocument(JText::_('UPI_LAYOUT_STAVES'));

		

		//Filters
		// Limit
		$filters['limit']->jdomOptions = array(
			'pagination' => $this->pagination
		);

		// Toolbar
		JToolBarHelper::title(JText::_('UPI_LAYOUT_STAVES'), 'list');


	}

	/**
	* Returns an array of fields the table can be sorted by.
	*
	* @access	protected
	* @param	string	$layout	The name of the called layout. Not used yet
	*
	*
	* @since	3.0
	*
	* @return	array	Array containing the field name to sort by as the key and display text as value.
	*/
	protected function getSortFields($layout = null)
	{
		return array(
			'a.ordering' => JText::_('UPI_FIELD_ORDERING'),
			'a.first_name' => JText::_('UPI_FIELD_FIRST_NAME'),
			'a.last_name' => JText::_('UPI_FIELD_LAST_NAME'),
			'a.joining_date' => JText::_('UPI_FIELD_JOINING_DATE'),
			'a.leaving_date' => JText::_('UPI_FIELD_LEAVING_DATE')
			
		);
	}


}



