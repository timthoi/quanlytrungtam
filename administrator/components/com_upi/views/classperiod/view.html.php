<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.0.10  |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		UPI
* @subpackage	Classes
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
* @subpackage	Class
*/
class UpiViewClassPeriod extends UpiClassView
{
	/**
	* List of the reachables layouts. Fill this array in every view file.
	*
	* @var array
	*/
	protected $layouts = array('classperiod','classperiodmodal');

	/**
	* Execute and display a template : Class
	*
	* @access	protected
	* @param	string	$tpl	The name of the template file to parse; automatically searches through the template paths.
	*
	*
	* @since	11.1
	*
	* @return	mixed	A string if successful, otherwise a JError object.
	*/
	protected function displayClassPeriod($tpl = null)
	{
		// Initialiase variables.
		$this->model	= $model	= $this->getModel();
		$this->state	= $state	= $this->get('State');
		$this->params 	= $state->get('params');
		$state->set('context', 'classperiod.classperiod');
		$this->item		= $item		= $this->get('Item');

		$this->form		= $form		= $this->get('Form');
		$this->canDo	= $canDo	= UpiHelper::getActions($model->getId());
		$lists = array();
		$this->lists = &$lists;

		// Define the title
		$this->_prepareDocument(JText::_('UPI_FIELD_CLASSPERIOD'), $this->item, 'title');

		$user		= JFactory::getUser();
		$isNew		= ($model->getId() == 0);

		//Check ACL before opening the form (prevent from direct access)
		if (!$model->canEdit($item, true))
			$model->setError(JText::_('JERROR_ALERTNOAUTHOR'));

		// Check for errors.
		if (count($errors = $model->getErrors()))
		{
			JError::raiseError(500, implode(BR, array_unique($errors)));
			return false;
		}
		//Toolbar
		JToolBarHelper::title(JText::_('UPI_FIELD_CLASSPERIOD'), 'pencil-2');

		// Save & Close
		if (($isNew && $model->canCreate()) || (!$isNew && $item->params->get('access-edit')))
			JToolBarHelper::save('classperiod.save', "UPI_JTOOLBAR_SAVE_CLOSE");
		// Save & New
		if (($isNew && $model->canCreate()) || (!$isNew && $item->params->get('access-edit')))
			JToolBarHelper::save2new('classperiod.save2new', "UPI_JTOOLBAR_SAVE_NEW");
		// Save to Copy
		if (($isNew && $model->canCreate()) || (!$isNew && $item->params->get('access-edit')))
			JToolBarHelper::save2copy('classperiod.save2copy', "UPI_JTOOLBAR_SAVE_TO_COPY");
		// Save
		if (($isNew && $model->canCreate()) || (!$isNew && $item->params->get('access-edit')))
			JToolBarHelper::apply('classperiod.apply', "UPI_JTOOLBAR_SAVE");
		// Cancel
		JToolBarHelper::cancel('classperiod.cancel', "UPI_JTOOLBAR_CANCEL");
		// Publish
		if (!$isNew && $model->canEditState($item) && ($item->published != 1))
			JToolBarHelper::publish('classperiods.publish', "UPI_JTOOLBAR_PUBLISH");
		// Unpublish
		if (!$isNew && $model->canEditState($item) && ($item->published != 0))
			JToolBarHelper::unpublish('classperiods.unpublish', "UPI_JTOOLBAR_UNPUBLISH");

		$model_class_id = CkJModel::getInstance('Classes', 'UpiModel');
		$model_class_id->addGroupOrder("a.ordering");
		$lists['fk']['class_id'] = $model_class_id->getItems();

		$model_course_id = CkJModel::getInstance('Courses', 'UpiModel');
		$model_course_id->addGroupOrder("a.ordering");
		$lists['fk']['course_id'] = $model_course_id->getItems();
		
		$model_period_id = CkJModel::getInstance('Periods', 'UpiModel');
		$model_period_id->addGroupOrder("a.ordering");
		$lists['fk']['period_id'] = $model_period_id->getItems();
		
		
		$model_staff_id = CkJModel::getInstance('Staves', 'UpiModel');
		$model_staff_id->addGroupOrder("a.ordering");
		$lists['fk']['staff_id'] = $model_staff_id->getItems();
		
		$this->activeCourse = UpiHelper::getActiveCourse();	
		
	}
	
	
	protected function displayClassPeriodModal($tpl = null)
	{
		// Initialiase variables.
		$this->model	= $model	= $this->getModel();
		$this->state	= $state	= $this->get('State');
		$this->params 	= $state->get('params');
		$state->set('context', 'classperiod.classperiod');
		$this->item		= $item		= $this->get('Item');

		$this->form		= $form		= $this->get('Form');
		$this->canDo	= $canDo	= UpiHelper::getActions($model->getId());
		$lists = array();
		$this->lists = &$lists;

		// Define the title
		$this->_prepareDocument(JText::_('UPI_LAYOUT_CLASS'), $this->item, 'title');

		$user		= JFactory::getUser();
		$isNew		= ($model->getId() == 0);

		//Check ACL before opening the form (prevent from direct access)
		if (!$model->canEdit($item, true))
			$model->setError(JText::_('JERROR_ALERTNOAUTHOR'));

		// Check for errors.
		if (count($errors = $model->getErrors()))
		{
			JError::raiseError(500, implode(BR, array_unique($errors)));
			return false;
		}
		//Toolbar
		JToolBarHelper::title(JText::_('UPI_LAYOUT_CLASS'), 'pencil-2');

		
		/* $model_subject_id = CkJModel::getInstance('Subjects', 'UpiModel');
		$model_subject_id->addGroupOrder("a.title");
		$lists['fk']['subject_id'] = $model_subject_id->getItems();

		$model_grade_id = CkJModel::getInstance('Grades', 'UpiModel');
		$model_grade_id->addGroupOrder("a.title");
		$lists['fk']['grade_id'] = $model_grade_id->getItems(); */
	}

}



