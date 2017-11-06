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



/**
* HTML View class for the Upi component
*
* @package	Upi
* @subpackage	Students
*/
class UpiViewStudents extends UpiClassView
{
	/**
	* List of the reachables layouts. Fill this array in every view file.
	*
	* @var array
	*/
	protected $layouts = array('default', 'modal');

	/**
	* Execute and display a template : Students
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
		$state->set('context', 'students.default');
		$this->items		= $items	= $this->get('Items');
		$this->canDo		= $canDo	= UpiHelper::getActions();
		$this->pagination	= $this->get('Pagination');
		$this->filters = $filters = $model->getForm('default.filters');
		$this->menu = UpiHelper::addSubmenu('students', 'default');
		$lists = array();
		$this->lists = &$lists;

		// Define the title
		$this->_prepareDocument(JText::_('UPI_LAYOUT_STUDENTS'));

		

		//Filters
		// Grade ID > Title
		$modelGrade_id = CkJModel::getInstance('grades', 'UpiModel');
		$modelGrade_id->set('context', $model->get('context'));
		$filters['filter_grade_id']->jdomOptions = array(
			'list' => $modelGrade_id->getItems()
		);

		// Sort by
		$filters['sortTable']->jdomOptions = array(
			'list' => $this->getSortFields('default')
		);

		// Limit
		$filters['limit']->jdomOptions = array(
			'pagination' => $this->pagination
		);

		// Toolbar
		JToolBarHelper::title(JText::_('UPI_LAYOUT_STUDENTS'), 'list');

		// New
		if ($model->canCreate())
			JToolBarHelper::addNew('student.add', "UPI_JTOOLBAR_NEW");

		// Edit
		if ($model->canEdit())
			JToolBarHelper::editList('student.edit', "UPI_JTOOLBAR_EDIT");
		
		// Register Class
		if ($model->canEdit())
			JToolBarHelper::custom('student.register_class', 'plus', 'plus', 'UPI_JTOOLBAR_REGISTER_CLASS', true);
		
		// Print Schedule
		if ($model->canEdit())
			JToolBarHelper::custom('student.print_schedule', 'print', 'print', 'UPI_JTOOLBAR_PRINT_SCHEDULE', true);
		
		// Delete
		if ($model->canDelete())
			JToolBarHelper::deleteList(JText::_('UPI_JTOOLBAR_ARE_YOU_SURE_TO_DELETE'), 'student.delete', "UPI_JTOOLBAR_DELETE");

		// Publish
		if ($model->canEditState())
			JToolBarHelper::publishList('students.publish', "UPI_JTOOLBAR_PUBLISH");

		// Unpublish
		if ($model->canEditState())
			JToolBarHelper::unpublishList('students.unpublish', "UPI_JTOOLBAR_UNPUBLISH");
	}

	/**
	* Execute and display a template : Students
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
		$state->set('context', 'students.modal');
		$this->items		= $items	= $this->get('Items');
		$this->canDo		= $canDo	= UpiHelper::getActions();
		$this->pagination	= $this->get('Pagination');
		$this->filters = $filters = $model->getForm('modal.filters');
		$this->menu = UpiHelper::addSubmenu('students', 'modal');
		$lists = array();
		$this->lists = &$lists;

		// Define the title
		$this->_prepareDocument(JText::_('UPI_LAYOUT_STUDENTS'));

		

		//Filters
		// Limit
		$filters['limit']->jdomOptions = array(
			'pagination' => $this->pagination
		);

		// Toolbar
		JToolBarHelper::title(JText::_('UPI_LAYOUT_STUDENTS'), 'list');


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
			'a.alias' => JText::_('UPI_FIELD_ALIAS'),
			'a.first_name' => JText::_('UPI_FIELD_TITLE'),
			'a.joining_date' => JText::_('UPI_FIELD_JOINING_DATE'),
			
			
			
		);
	}


}



