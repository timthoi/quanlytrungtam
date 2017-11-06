<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.0.10  |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		UPI
* @subpackage	AttendanceExcercies
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
class UpiModelAttendanceexcercies extends UpiClassModelList
{
	/**
	* The URL view item variable.
	*
	* @var string
	*/
	protected $view_item = 'attendanceexcercy';

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

			);
		}

		//Define the filterable fields
		$this->set('filter_vars', array(
			'published' => 'varchar',
			'sortTable' => 'cmd',
			'directionTable' => 'cmd',
			'limit' => 'cmd',
			'studen_id' => 'cmd',
			'class_id' => 'cmd',
			'start_date' => 'date:Y-m-d',
			'creation_date_from' => 'varchar',
			'creation_date_to' => 'varchar'
				));

		//Define the searchable fields
		$this->set('search_vars', array(
			'search' => 'string'
				));


		parent::__construct($config);

		$this->hasOne('studen_id', // name
			'students', // foreignModelClass
			'studen_id', // localKey
			'id', // foreignKey
			array() // selectFields
		);

		$this->hasOne('class_id', // name
			'classes', // foreignModelClass
			'class_id', // localKey
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
		$id	.= ':'.$this->getState('filter.studen_id');
		$id	.= ':'.$this->getState('filter.class_id');
		$id	.= ':'.$this->getState('filter.start_date');
		$id	.= ':'.$this->getState('filter.creation_date');
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
		$query->from('#__upi_attendanceexcercies AS a');



		//IMPORTANT REQUIRED FIELDS
		$this->addSelect(	'a.id,'
						.	'a.created_by,'
						.	'a.published');

		switch($this->getState('context', 'all'))
		{
			case 'attendanceexcercies.default':

				//BASE FIELDS
				$this->addSelect(	'a.absent,'
								.	'a.absent_reason,'
								.	'a.class_id,'
								.	'a.creation_date,'
								.	'a.exercise_correct,'
								.	'a.exercise_done,'
								.	'a.exercise_numer,'
								.	'a.exercise_reason,'
								.	'a.late,'
								.	'a.late_reason,'
								.	'a.late_time,'
								.	'a.modification_date,'
								.	'a.modified_by,'
								.	'a.ordering,'
								.	'a.present,'
								.	'a.studen_id');

				//SELECT
				$this->addSelect('_studen_id_.first_name AS `_studen_id_first_name`');
				$this->addSelect('_class_id_.title AS `_class_id_title`');
				$this->addSelect('_created_by_.name AS `_created_by_name`');
				$this->addSelect('_modified_by_.name AS `_modified_by_name`');

				//JOIN
				$this->addJoin('`#__upi_students` AS _studen_id_ ON _studen_id_.id = a.studen_id', 'LEFT');
				$this->addJoin('`#__upi_classes` AS _class_id_ ON _class_id_.id = a.class_id', 'LEFT');
				$this->addJoin('`#__users` AS _created_by_ ON _created_by_.id = a.created_by', 'LEFT');
				$this->addJoin('`#__users` AS _modified_by_ ON _modified_by_.id = a.modified_by', 'LEFT');

				break;

			case 'attendanceexcercies.modal':

				//BASE FIELDS
				$this->addSelect(	'a.absent');


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

		if($filter_studen_id = $this->getState('filter.studen_id'))
		{
		if ($filter_studen_id > 0){
				$this->addWhere("a.studen_id = " . (int)$filter_studen_id);
		}
		}

		if($filter_class_id = $this->getState('filter.class_id'))
		{
		if ($filter_class_id > 0){
				$this->addWhere("a.class_id = " . (int)$filter_class_id);
		}
		}

		if($filter_start_date = $this->getState('filter.start_date'))
		{
		if ($filter_start_date !== null){
				$this->addWhere("a.start_date = " . $this->_db->Quote($filter_start_date));
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

		//WHERE - SEARCH : search_search : search on Late Time + Studen ID > Phone + Studen ID > Last Name + Class ID > Alias + Class ID > Title
		$search_search = $this->getState('search.search');
		$this->addSearch('search', 'a.late_time', 'like');
		$this->addSearch('search', '_studen_id_.phone', 'like');
		$this->addSearch('search', '_studen_id_.last_name', 'like');
		$this->addSearch('search', '_class_id_.alias', 'like');
		$this->addSearch('search', '_class_id_.title', 'like');
		if (($search_search != '') && ($search_search_val = $this->buildSearch('search', $search_search)))
			$this->addWhere($search_search_val);

		// Apply all SQL directives to the query
		$this->applySqlStates($query);
	}


}


