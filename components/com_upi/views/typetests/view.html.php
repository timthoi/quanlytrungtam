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



/**
* HTML View class for the Upi component
*
* @package	Upi
* @subpackage	Typetests
*/
class UpiViewTypetests extends UpiClassView
{
	/**
	* List of the reachables layouts. Fill this array in every view file.
	*
	* @var array
	*/
	protected $layouts = array('modal');

	/**
	* Execute and display a template : TypeTests
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
		$state->set('context', 'typetests.modal');
		$this->items		= $items	= $this->get('Items');
		$this->canDo		= $canDo	= UpiHelper::getActions();
		$this->pagination	= $this->get('Pagination');
		$this->filters = $filters = $model->getForm('modal.filters');
		$this->menu = UpiHelper::addSubmenu('typetests', 'modal');
		$lists = array();
		$this->lists = &$lists;

		// Define the title
		$this->_prepareDocument(JText::_('UPI_LAYOUT_TYPETESTS'));

		

		//Filters
		// Limit
		$filters['limit']->jdomOptions = array(
			'pagination' => $this->pagination
		);

		// Toolbar



		$this->toolbar = JToolbar::getInstance();
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
		return array();
	}


}



