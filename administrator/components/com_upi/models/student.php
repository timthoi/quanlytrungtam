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
* Upi Item Model
*
* @package	Upi
* @subpackage	Classes
*/
class UpiModelStudent extends UpiClassModelItem
{
	/**
	* View list alias
	*
	* @var string
	*/
	protected $view_item = 'student';

	/**
	* View list alias
	*
	* @var string
	*/
	protected $view_list = 'students';

	/**
	* Constructor
	*
	* @access	public
	* @param	array	$config	An optional associative array of configuration settings.
	*
	* @return	void
	*/
	public function __construct($config = array())
	{
		parent::__construct();
	}

	/**
	* Method to delete item(s).
	*
	* @access	public
	* @param	array	&$pks	Ids of the items to delete.
	*
	* @return	boolean	True on success.
	*/
	public function delete(&$pks)
	{
		if (!count( $pks ))
			return true;


		if (!parent::delete($pks))
			return false;



		return true;
	}

	/**
	* Method to get the layout (including default).
	*
	* @access	public
	*
	* @return	string	The layout alias.
	*/
	public function getLayout()
	{
		$jinput = JFactory::getApplication()->input;
		return $jinput->get('layout', 'student', 'STRING');
	}

	/**
	* Returns a Table object, always creating it.
	*
	* @access	public
	* @param	string	$type	The table type to instantiate.
	* @param	string	$prefix	A prefix for the table class name. Optional.
	* @param	array	$config	Configuration array for model. Optional.
	*
	*
	* @since	1.6
	*
	* @return	JTable	A database object
	*/
	public function getTable($type = 'student', $prefix = 'UpiTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	/**
	* Method to increment hits (check session and layout)
	*
	* @access	public
	* @param	array	$layouts	List of authorized layouts for hitting the object.
	*
	*
	* @since	11.1
	*
	* @return	boolean	Null if skipped. True when incremented. False if error.
	*/
	public function hit($layouts = null)
	{
		return parent::hit(array());
	}

	/**
	* Method to get the data that should be injected in the form.
	*
	* @access	protected
	*
	* @return	mixed	The data for the form.
	*/
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState('com_upi.edit.student.data', array());

		if (empty($data)) {
			//Default values shown in the form for new item creation
			$data = $this->getItem();

			// Prime some default values.
			if ($this->getState('student.id') == 0)
			{
				$jinput = JFactory::getApplication()->input;

				$data->id = 0;
				$data->first_name = null;
				$data->last_name = null;
				$data->email = null;
				$data->phone = null;
				$data->home_phone = null;
				$data->gender_id = $jinput->get('filter_gender_id', $this->getState('filter.gender_id'), 'STRING');
				$data->birthday = null;
				$data->joining_date = null;
				$data->grade_id = $jinput->get('filter_grade_id', $this->getState('filter.grade_id'), 'INT');
				$data->address_1 = null;
				$data->address_2 = null;
				$data->emergency_name_1 = null;
				$data->emergency_position_1 = null;
				$data->emergency_work_phone_1 = null;
				$data->emergency_email_1 = null;
				$data->emergency_job_1 = null;
				$data->emergency_name_2 = null;
				$data->emergency_position_2 = null;
				$data->emergency_work_phone_2 = null;
				$data->emergency_email_2 = null;
				$data->emergency_job_2 = null;
				$data->emergency_name_3 = null;
				$data->emergency_position_3 = null;
				$data->emergency_work_phone_3 = null;
				$data->emergency_email_3 = null;
				$data->emergency_job_3 = null;
				$data->note = null;
				$data->modified_by = $jinput->get('filter_modified_by', $this->getState('filter.modified_by'), 'INT');
				$data->created_by = $jinput->get('filter_created_by', $this->getState('filter.created_by'), 'INT');
				$data->creation_date = null;
				$data->modification_date = null;
				$data->ordering = null;
				$data->published = null;
				$data->school = null;

			}
		}
		return $data;
	}

	/**
	* Method to auto-populate the model state.
	* 
	* This method should only be called once per instantiation and is designed to
	* be called on the first call to the getState() method unless the model
	* configuration flag to ignore the request is set.
	* 
	* Note. Calling getState in this method will result in recursion.
	*
	* @access	protected
	*
	*
	* @since	11.1
	*
	* @return	void
	*/
	protected function populateState()
	{
		$app = JFactory::getApplication();
		$session = JFactory::getSession();
		$acl = UpiHelper::getActions();



		parent::populateState();

		//Only show the published items
		if (!$acl->get('core.admin') && !$acl->get('core.edit.state'))
			$this->setState('filter.published', 1);
	}

	/**
	* Preparation of the query.
	*
	* @access	protected
	* @param	object	&$query	returns a filled query object.
	* @param	integer	$pk	The primary id key of the student
	*
	* @return	void
	*/
	protected function prepareQuery(&$query, $pk)
	{

		$acl = UpiHelper::getActions();

		//FROM : Main table
		$query->from('#__upi_students AS a');



		//IMPORTANT REQUIRED FIELDS
		$this->addSelect(	'a.id,'
						.	'a.created_by,'
						.	'a.published');

		switch($this->getState('context', 'all'))
		{
			case 'student.student':

				//BASE FIELDS
				$this->addSelect(	'a.address_1,'
								.	'a.address_2,'
								.	'a.birthday,'
								.	'a.home_phone,'
								.	'a.email,'
								.	'a.emergency_email_1,'
								.	'a.emergency_email_2,'
								.	'a.emergency_email_3,'
								.	'a.emergency_position_1,'
								.	'a.emergency_position_2,'
								.	'a.emergency_position_3,'
								.	'a.emergency_job_1,'
								.	'a.emergency_job_2,'
								.	'a.emergency_job_3,'
								.	'a.emergency_name_1,'
								.	'a.emergency_name_2,'
								.	'a.emergency_name_3,'
								.	'a.emergency_work_phone_1,'
								.	'a.emergency_work_phone_2,'
								.	'a.emergency_work_phone_3,'
								.	'a.first_name,'
								.	'a.gender_id,'
								.	'a.grade_id,'
								.	'a.joining_date,'
								.	'a.last_name,'
								.	'a.note,'
								.	'a.phone,'
								.	'a.school');

				//SELECT
				$this->addSelect('_grade_id_.title AS `_grade_id_title`');

				//JOIN
				$this->addJoin('`#__upi_grades` AS _grade_id_ ON _grade_id_.id = a.grade_id', 'LEFT');
				

				break;
			case 'all':
				//SELECT : raw complete query without joins
				$query->select('a.*');
				break;
		}

		//WHERE : Item layout (based on $pk)
		$query->where('a.id = ' . (int) $pk);		//TABLE KEY

		//FILTER - Access for : Root table
		$wherePublished = $allowAuthor = true;
		$whereAccess = false;
		$this->prepareQueryAccess('a', $whereAccess, $wherePublished, $allowAuthor);
		$query->where("($allowAuthor OR $wherePublished)");

		// Apply all SQL directives to the query
		$this->applySqlStates($query);

	}

	/**
	* Prepare and sanitise the table prior to saving.
	*
	* @access	protected
	* @param	JTable	$table	A JTable object.
	*
	*
	* @since	1.6
	*
	* @return	void
	*/
	protected function prepareTable($table)
	{
		$date = JFactory::getDate();


		if (empty($table->id))
		{
			//Defines automatically the author of this element
			$table->created_by = JFactory::getUser()->get('id');

			//Creation date
			if (empty($table->creation_date))
				$table->creation_date =  JFactory::getDate()->toSql();

			// Set ordering to the last item if not set
			$conditions = $this->getReorderConditions($table);
			$conditions = (count($conditions)?implode(" AND ", $conditions):'');
			$table->ordering = $table->getNextOrder($conditions);
		}
		else
		{
			//Defines automatically the editor of this element
			$table->modified_by = JFactory::getUser()->get('id');

			//Modification date
			$table->modification_date = JFactory::getDate()->toSql();
		}

	}

	/**
	* Save an item.
	*
	* @access	public
	* @param	array	$data	The post values.
	*
	* @return	boolean	True on success.
	*/
	public function save($data)
	{
		//Convert from a non-SQL formated date (birthday)
	
		$data['birthday'] = UpiHelperDates::getSqlDate($data['birthday'], array('Y-m-d'), true, 'USER_UTC');

		//Convert from a non-SQL formated date (joining_date)
		$data['joining_date'] = UpiHelperDates::getSqlDate($data['joining_date'], array('Y-m-d'), true, 'USER_UTC');

		//Convert from a non-SQL formated date (creation_date)
		$data['creation_date'] = UpiHelperDates::getSqlDate($data['creation_date'], array('Y-m-d H:i'), true, 'USER_UTC');

		//Convert from a non-SQL formated date (modification_date)
		$data['modification_date'] = UpiHelperDates::getSqlDate($data['modification_date'], array('Y-m-d H:i'), true, 'USER_UTC');
		//Some security checks
		$acl = UpiHelper::getActions();

		//Secure the author key if not allowed to change
		if (isset($data['created_by']) && !$acl->get('core.edit'))
			unset($data['created_by']);

		//Secure the published tag if not allowed to change
		if (isset($data['published']) && !$acl->get('core.edit.state'))
			unset($data['published']);

		if (parent::save($data)) {
			return true;
		}
		return false;


	}


}



