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
* Upi List Model
*
* @package	Upi
* @subpackage	Classes
*/
class UpiModelClasses extends UpiClassModelList
{
	/**
	* The URL view item variable.
	*
	* @var string
	*/
	protected $view_item = 'class';

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
				'alias', 'a.alias',
				'creation_date', 'a.creation_date',
			);
		}

		//Define the filterable fields
		$this->set('filter_vars', array(
			'published' => 'varchar',
			'sortTable' => 'cmd',
			'directionTable' => 'cmd',
			'limit' => 'cmd',
			'subject_id' => 'cmd',
			'grade_id' => 'cmd',
			'period_id' => 'cmd',
			'creation_date_from' => 'varchar',
			'creation_date_to' => 'varchar',
			'start_date' => 'date:Y-m-d',
			'end_date' => 'date:Y-m-d'
				));

		//Define the searchable fields
		$this->set('search_vars', array(
			'search' => 'string'
				));


		parent::__construct($config);

		$this->hasOne('subject_id', // name
			'subjects', // foreignModelClass
			'subject_id', // localKey
			'id', // foreignKey
			array() // selectFields
		);

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
		$id	.= ':'.$this->getState('filter.subject_id');
		$id	.= ':'.$this->getState('filter.grade_id');
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
		$query->from('#__upi_classes AS a');



		//IMPORTANT REQUIRED FIELDS
		$this->addSelect(	'a.id,'
						.	'a.created_by,'
						.	'a.published');

		switch($this->getState('context', 'all'))
		{
			case 'classes.default':

				//BASE FIELDS
				$this->addSelect(	'a.alias,'
								.	'a.creation_date,'
								.	'a.grade_id,'
								.	'a.modification_date,'
								.	'a.modified_by,'
								.	'a.note,'
								.	'a.ordering,'
								.	'a.subject_id,'
								.	'a.title');

				//SELECT
				$this->addSelect('_subject_id_.title AS `_subject_id_title`');
				$this->addSelect('_grade_id_.title AS `_grade_id_title`');
				
				$this->addSelect('_created_by_.name AS `_created_by_name`');

				//JOIN
				$this->addJoin('`#__upi_subjects` AS _subject_id_ ON _subject_id_.id = a.subject_id', 'LEFT');
				$this->addJoin('`#__upi_grades` AS _grade_id_ ON _grade_id_.id = a.grade_id', 'LEFT');
				
				$this->addJoin('`#__users` AS _created_by_ ON _created_by_.id = a.created_by', 'LEFT');
				

				break;

			case 'classes.modal':

				//BASE FIELDS
				$this->addSelect(	'a.title');


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

		if($filter_subject_id = $this->getState('filter.subject_id'))
		{
		if ($filter_subject_id > 0){
				$this->addWhere("a.subject_id = " . (int)$filter_subject_id);
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

		//WHERE - SEARCH : search_search : search on Title + Alias
		$search_search = $this->getState('search.search');
		$this->addSearch('search', 'a.title', 'like');
		$this->addSearch('search', 'a.alias', 'like');
		if (($search_search != '') && ($search_search_val = $this->buildSearch('search', $search_search)))
			$this->addWhere($search_search_val);

		// Apply all SQL directives to the query
		$this->applySqlStates($query);
	}


}



