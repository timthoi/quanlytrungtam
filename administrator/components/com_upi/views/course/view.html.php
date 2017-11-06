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



/**
* HTML View class for the Upi component
*
* @package	Upi
* @subpackage	Course
*/
class UpiViewCourse extends UpiClassView
{
	/**
	* List of the reachables layouts. Fill this array in every view file.
	*
	* @var array
	*/
	protected $layouts = array('course','coursemodal');

	/**
	* Execute and display a template : Course
	*
	* @access	protected
	* @param	string	$tpl	The name of the template file to parse; automatically searches through the template paths.
	*
	*
	* @since	11.1
	*
	* @return	mixed	A string if successful, otherwise a JError object.
	*/
	protected function displayCourse($tpl = null)
	{
		// Initialiase variables.
		$this->model	= $model	= $this->getModel();
		$this->state	= $state	= $this->get('State');
		$this->params 	= $state->get('params');
		$state->set('context', 'course.course');
		$this->item		= $item		= $this->get('Item');

		$this->form		= $form		= $this->get('Form');
		$this->canDo	= $canDo	= UpiHelper::getActions($model->getId());
		$lists = array();
		$this->lists = &$lists;

		// Define the title
		$this->_prepareDocument(JText::_('UPI_LAYOUT_COURSE'), $this->item, 'title');

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
		JToolBarHelper::title(JText::_('UPI_LAYOUT_COURSE'), 'pencil-2');

		// Save & Close
		if (($isNew && $model->canCreate()) || (!$isNew && $item->params->get('access-edit')))
			JToolBarHelper::save('course.save', "UPI_JTOOLBAR_SAVE_CLOSE");
		// Save & New
		if (($isNew && $model->canCreate()) || (!$isNew && $item->params->get('access-edit')))
			JToolBarHelper::save2new('course.save2new', "UPI_JTOOLBAR_SAVE_NEW");
		// Save
		if (($isNew && $model->canCreate()) || (!$isNew && $item->params->get('access-edit')))
			JToolBarHelper::apply('course.apply', "UPI_JTOOLBAR_SAVE");
		// Cancel
		JToolBarHelper::cancel('course.cancel', "UPI_JTOOLBAR_CANCEL");
		
		//get list Class
		$modelClass_id = CkJModel::getInstance('Classes', 'UPIModel');
		$modelClass_id->set('context', $model->get('context'));
		$modelClass_id->addGroupOrder("a.ordering");
		$this->listClasses = $listClasses = $modelClass_id->getItems();
		$listCurrentClass = '';
		$i = 0;
		foreach ( $listClasses as $class){					
			$listClasses[$i]->start_date = '';
			$listClasses[$i]->end_date = '';
			$listClasses[$i]->subject_title = '';
			$listClasses[$i]->grade_title = '';
			$listClasses[$i]->class_note = $listClasses[$i]->note;
			$listClasses[$i]->classcourse_note = '';
			$listClasses[$i]->period_id = '';
			$listClasses[$i]->isChoose = 0;
			$i++;
		}
		
		if ( $this->item->id ){
			$listCurrentClass = UPIHelper::getListClass($this->item->id);
			if ( $listCurrentClass && $listClasses){
				$i = 0;
				foreach ( $listClasses as $class){		
					foreach ( $listCurrentClass as $c){	
						if ( $c->class_id == $class->id ){
							$listClasses[$i]->start_date = $c->start_date;
							$listClasses[$i]->end_date = $c->end_date;
							$listClasses[$i]->subject_title = $c->subject_title;
							$listClasses[$i]->grade_title = $c->grade_title;
							$listClasses[$i]->classcourse_note = $c->note;
							$listClasses[$i]->period_id = $c->period_id;
							$listClasses[$i]->isChoose = 1;
							break;
						}
					}
					
					$i++;
				}
			}
		}
		$this->listClasses = $listClasses;
		$this->listCurrentClass = $listCurrentClass;
	}
	
	protected function displayCourseModal($tpl = null)
	{
		// Initialiase variables.
		$this->model	= $model	= $this->getModel();
		$this->state	= $state	= $this->get('State');
		$this->params 	= $state->get('params');
		$state->set('context', 'course.course');
		$this->item		= $item		= $this->get('Item');

		$this->form		= $form		= $this->get('Form');
		$this->canDo	= $canDo	= UpiHelper::getActions($model->getId());
		$lists = array();
		$this->lists = &$lists;

		// Define the title
		$this->_prepareDocument(JText::_('UPI_LAYOUT_COURSE'), $this->item, 'title');

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
		
	}

}



