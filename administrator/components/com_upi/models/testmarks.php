<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.0.10  |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		UPI
* @subpackage	TestMarks
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
class UpiModelTestmarks extends UpiClassModelList
{
	/**
	* The URL view item variable.
	*
	* @var string
	*/
	protected $view_item = 'testmark';

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

			);
		}

		//Define the filterable fields
		$this->set('filter_vars', array(
			'limit' => 'cmd'
				));


		parent::__construct($config);

		$this->hasOne('student_id', // name
			'students', // foreignModelClass
			'student_id', // localKey
			'id', // foreignKey
			array() // selectFields
		);

		$this->hasOne('test_class_id', // name
			'testclasses', // foreignModelClass
			'test_class_id', // localKey
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
		return $jinput->get('layout', '', 'STRING');
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
		$id	.= ':'.$this->getState('limit');
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
			($ordering?$ordering:'a.total_score'),
			($direction?$direction:'asc')
		);
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
		$query->from('#__upi_testmarks AS a');



		//IMPORTANT REQUIRED FIELDS
		$this->addSelect(	'a.id');


		switch($this->getState('context', 'all'))
		{
			case 'testmarks.modal':

				//BASE FIELDS
				$this->addSelect(	'a.total_score');


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


		// Apply all SQL directives to the query
		$this->applySqlStates($query);
	}


}



