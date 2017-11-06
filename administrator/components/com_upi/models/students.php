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
* Upi List Model
*
* @package	Upi
* @subpackage	Classes
*/
class UpiModelStudents extends UpiClassModelList
{
	/**
	* The URL view item variable.
	*
	* @var string
	*/
	protected $view_item = 'student';

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
		//Define the sortables fields (in lists)
		if (empty($config['filter_fields'])) {
			$config['filter_fields'] = array(
				'ordering', 'a.ordering',
				'first_name', 'a.first_name',
				'joining_date', 'a.joining_date',
			);
		}

		//Define the filterable fields
		$this->set('filter_vars', array(
			'published' => 'varchar',
			'sortTable' => 'cmd',
			'directionTable' => 'cmd',
			'limit' => 'cmd',
			'joining_date' => 'date:Y-m-d',
			'grade_id' => 'cmd',
			'creation_date_from' => 'varchar',
			'creation_date_to' => 'varchar',
			'modification_date_from' => 'varchar',
			'modification_date_to' => 'varchar'
				));

		//Define the searchable fields
		$this->set('search_vars', array(
			'search' => 'string'
				));


		parent::__construct($config);

		$this->hasOne('grade_id', // name
			'grades', // foreignModelClass
			'grade_id', // localKey
			'id', // foreignKey
			array() // selectFields
		);
	}

	/**
	* Method to get a list of items.
	*
	* @access	public
	*
	*
	* @since	11.1
	*
	* @return	mixed	An array of data items on success, false on failure.
	*/
	public function getItems()
	{

		$items	= parent::getItems();
		$app	= JFactory::getApplication();


		$this->populateParams($items);

		//Create linked objects
		$this->populateObjects($items);

		return $items;
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
		return $jinput->get('layout', 'default', 'STRING');
	}

	/**
	* Method to get a store id based on model configuration state.
	* 
	* This is necessary because the model is used by the component and different
	* modules that might need different sets of data or differen ordering
	* requirements.
	*
	* @access	protected
	* @param	string	$id	A prefix for the store id.
	*
	*
	* @since	1.6
	*
	* @return	void
	*/
	protected function getStoreId($id = '')
	{
		// Compile the store id.

		$id	.= ':'.$this->getState('sortTable');
		$id	.= ':'.$this->getState('directionTable');
		$id	.= ':'.$this->getState('limit');
		$id	.= ':'.$this->getState('filter.joining_date');
		$id	.= ':'.$this->getState('filter.grade_id');
		$id	.= ':'.$this->getState('filter.creation_date');
		$id	.= ':'.$this->getState('filter.modification_date');
		$id	.= ':'.$this->getState('search.search');
		return parent::getStoreId($id);
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
	* @param	string	$ordering	
	* @param	string	$direction	
	*
	*
	* @since	11.1
	*
	* @return	void
	*/
	protected function populateState($ordering = null, $direction = null)
	{
		// Initialise variables.
		$app = JFactory::getApplication();
		$session = JFactory::getSession();
		$acl = UpiHelper::getActions();


		parent::populateState(
			($ordering?$ordering:'a.ordering'),
			($direction?$direction:'asc')
		);

		//Only show the published items
		if (!$acl->get('core.admin') && !$acl->get('core.edit.state'))
			$this->setState('filter.published', 1);
	}

	/**
	* Preparation of the list query.
	*
	* @access	protected
	* @param	object	&$query	returns a filled query object.
	*
	* @return	void
	*/
	protected function prepareQuery(&$query)
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
			case 'students.default':

				//BASE FIELDS
				$this->addSelect(	'a.address_1,'
								.	'a.birthday,'
								.	'a.school,'
								.	'a.creation_date,'
								.	'a.home_phone,'
								.	'a.emergency_position_1,'
								.	'a.emergency_name_1,'
								.	'a.emergency_work_phone_1,'
								.	'a.first_name,'
								.	'a.grade_id,'
								.	'a.joining_date,'
								.	'a.last_name,'
								.	'a.modification_date,'
								.	'a.note,'
								.	'a.ordering,'
								.	'a.phone');

				//SELECT
				$this->addSelect('_grade_id_.title AS `_grade_id_title`');

				//JOIN
				$this->addJoin('`#__upi_grades` AS _grade_id_ ON _grade_id_.id = a.grade_id', 'LEFT');

				break;

			case 'students.modal':

				//BASE FIELDS
				$this->addSelect(	'a.first_name');


				break;
			case 'all':
				//SELECT : raw complete query without joins
				$this->addSelect('a.*');

				// Disable the pagination
				$this->setState('list.limit', null);
				$this->setState('list.start', null);
				break;
		}

		//FILTER - Access for : Root table
		$wherePublished = $allowAuthor = true;
		$whereAccess = false;
		$this->prepareQueryAccess('a', $whereAccess, $wherePublished, $allowAuthor);
		$query->where("($allowAuthor OR $wherePublished)");

		if($filter_joining_date = $this->getState('filter.joining_date'))
		{
		if ($filter_joining_date !== null){
				$this->addWhere("a.joining_date = " . $this->_db->Quote($filter_joining_date));
		}
		}

		if($filter_grade_id = $this->getState('filter.grade_id'))
		{
		if ($filter_grade_id > 0){
				$this->addWhere("a.grade_id = " . (int)$filter_grade_id);
		}
		}

		if($filter_creation_date_from = $this->getState('filter.creation_date_from'))
		{
		if ($filter_creation_date_from !== null){
				$this->addWhere("a.creation_date >= " . $this->_db->Quote($filter_creation_date_from));
		}
		}

		if($filter_creation_date_to = $this->getState('filter.creation_date_to'))
		{
		if ($filter_creation_date_to !== null){
				$this->addWhere("a.creation_date <= " . $this->_db->Quote($filter_creation_date_to));
		}
		}

		if($filter_modification_date_from = $this->getState('filter.modification_date_from'))
		{
		if ($filter_modification_date_from !== null){
				$this->addWhere("a.modification_date >= " . $this->_db->Quote($filter_modification_date_from));
		}
		}

		if($filter_modification_date_to = $this->getState('filter.modification_date_to'))
		{
		if ($filter_modification_date_to !== null){
				$this->addWhere("a.modification_date <= " . $this->_db->Quote($filter_modification_date_to));
		}
		}

		//WHERE - SEARCH : search_search : search on First Name + Last Name + Email + School + Phone + Emergency Name 1 + Emergency Home Phone 1 + Emergency Work Phone 1 + Emergency Email 1 + Emergency Job 1 + Emergency Name 2 + Emergency Home Phone 2 + Emergency Work Phone 2 + Emergency Email 2 + Emergency Job 2 + Emergency Name 3 + Emergency Home Phone 3 + Emergency Work Phone 3 + Emergency Email 3 + Emergency Job 3
		$search_search = $this->getState('search.search');
		$this->addSearch('search', 'a.first_name', 'like');
		$this->addSearch('search', 'a.last_name', 'like');
		$this->addSearch('search', 'a.email', 'like');
		$this->addSearch('search', 'a.school', 'like');
		$this->addSearch('search', 'a.phone', 'like');
		$this->addSearch('search', 'a.emergency_name_1', 'like');
		$this->addSearch('search', 'a.emergency_home_phone_1', 'like');
		$this->addSearch('search', 'a.emergency_work_phone_1', 'like');
		$this->addSearch('search', 'a.emergency_email_1', 'like');
		$this->addSearch('search', 'a.emergency_job_1', 'like');
		$this->addSearch('search', 'a.emergency_name_2', 'like');
		$this->addSearch('search', 'a.emergency_home_phone_2', 'like');
		$this->addSearch('search', 'a.emergency_work_phone_2', 'like');
		$this->addSearch('search', 'a.emergency_email_2', 'like');
		$this->addSearch('search', 'a.emergency_job_2', 'like');
		$this->addSearch('search', 'a.emergency_name_3', 'like');
		$this->addSearch('search', 'a.emergency_home_phone_3', 'like');
		$this->addSearch('search', 'a.emergency_work_phone_3', 'like');
		$this->addSearch('search', 'a.emergency_email_3', 'like');
		$this->addSearch('search', 'a.emergency_job_3', 'like');
		if (($search_search != '') && ($search_search_val = $this->buildSearch('search', $search_search)))
			$this->addWhere($search_search_val);

		// Apply all SQL directives to the query
		$this->applySqlStates($query);
	}


}



