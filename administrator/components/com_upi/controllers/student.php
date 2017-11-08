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
* Upi Student Controller
*
* @package	Upi
* @subpackage	Student
*/
class UpiControllerStudent extends UpiClassControllerItem
{
	/**
	* The context for storing internal data, e.g. record.
	*
	* @var string
	*/
	protected $context = 'student';

	/**
	* The URL view item variable.
	*
	* @var string
	*/
	protected $view_item = 'student';

	/**
	* The URL view list variable.
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
		parent::__construct($config);
		$app = JFactory::getApplication();

	}

	/**
	* Method to add an element.
	*
	* @access	public
	*
	* @return	void
	*/
	public function add()
	{
		JSession::checkToken() or JSession::checkToken('get') or jexit(JText::_('JINVALID_TOKEN'));
		$this->_result = $result = parent::add();
		$model = $this->getModel();

		//Define the redirections
		switch($this->getLayout() .'.'. $this->getTask())
		{
			case 'default.add':
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.student.student'
				), array(
			
				));
				break;

			case 'modal.add':
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.student.student'
				), array(
			
				));
				break;

			default:
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.student.student'
				));
				break;
		}
	}

	/**
	* Override method when the author allowed to delete own.
	*
	* @access	protected
	* @param	array	$data	An array of input data.
	* @param	string	$key	The name of the key for the primary key; default is id..
	*
	* @return	boolean	True on success
	*/
	protected function allowDelete($data = array(), $key = id)
	{
		return parent::allowDelete($data, $key, array(
		'key_author' => 'created_by'
		));
	}

	/**
	* Override method when the author allowed to edit own.
	*
	* @access	protected
	* @param	array	$data	An array of input data.
	* @param	string	$key	The name of the key for the primary key; default is id..
	*
	* @return	boolean	True on success
	*/
	protected function allowEdit($data = array(), $key = id)
	{
		return parent::allowEdit($data, $key, array(
		'key_author' => 'created_by'
		));
	}

	/**
	* Method to cancel an element.
	*
	* @access	public
	* @param	string	$key	The name of the primary key of the URL variable.
	*
	* @return	void
	*/
	public function cancel($key = null)
	{
		$this->_result = $result = parent::cancel();
		$model = $this->getModel();

		//Define the redirections
		switch($this->getLayout() .'.'. $this->getTask())
		{
			case 'student.cancel':
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.students.default'
				), array(
					'cid[]' => null
				));
				break;

			default:
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.students.default'
				));
				break;
		}
	}

	/**
	* Method to delete an element.
	*
	* @access	public
	*
	* @return	void
	*/
	public function delete()
	{
		JSession::checkToken() or JSession::checkToken('get') or jexit(JText::_('JINVALID_TOKEN'));
		$this->_result = $result = parent::delete();
		$model = $this->getModel();

		//Define the redirections
		switch($this->getLayout() .'.'. $this->getTask())
		{
			case 'default.delete':
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.students.default'
				), array(
					'cid[]' => null
				));
				break;

			case 'modal.delete':
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.students.default'
				), array(
					'cid[]' => null
				));
				break;

			default:
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.students.default'
				));
				break;
		}
	}

	/**
	* Method to edit an element.
	*
	* @access	public
	* @param	string	$key	The name of the primary key of the URL variable.
	* @param	string	$urlVar	The name of the URL variable if different from the primary key (sometimes required to avoid router collisions).
	*
	* @return	void
	*/
	public function edit($key = null, $urlVar = null)
	{
		JSession::checkToken() or JSession::checkToken('get') or jexit(JText::_('JINVALID_TOKEN'));
		$this->_result = $result = parent::edit();
		$model = $this->getModel();

		//Define the redirections
		switch($this->getLayout() .'.'. $this->getTask())
		{
			case 'default.edit':
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.student.student'
				), array(
			
				));
				break;

			case 'modal.edit':
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.student.student'
				), array(
			
				));
				break;

			default:
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.student.student'
				));
				break;
		}
	}

	public function register_class($key = null, $urlVar = null)
	{
		JSession::checkToken() or JSession::checkToken('get') or jexit(JText::_('JINVALID_TOKEN'));
		$this->_result = $result = parent::edit();
		$model = $this->getModel();

		//Define the redirections
		switch($this->getLayout() .'.'. $this->getTask())
		{
			
			default:
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.student.student'
				), array(
					'register_class' => 1
				));

				
				break;
		}
	}

	/**
	* Return the current layout.
	*
	* @access	protected
	* @param	bool	$default	If true, return the default layout.
	*
	* @return	string	Requested layout or default layout
	*/
	protected function getLayout($default = null)
	{
		if ($default === 'edit')
			return 'student';

		if ($default)
			return 'student';

		$jinput = JFactory::getApplication()->input;
		return $jinput->get('layout', 'student', 'CMD');
	}

	
	public function save_fee(){
		
		
		JSession::checkToken() or JSession::checkToken('get') or jexit(JText::_('JINVALID_TOKEN'));
		$jinput = JFactory::getApplication()->input;
		$feeValues = $jinput->getArray(array('fee_paid' => '', 
					'fee_remaining' => '', 
					'fee_date' => '',
					'fee_note' => ''));
					
					
		$student_id = $jinput->get('student_id', null, null);
		$classperiod_id = $jinput->get('classperiod_id', null, null);
		
		$result = false;
		
		if ( $feeValues['fee_paid'] && $feeValues['fee_date'] && $student_id && $classperiod_id ){
			
			$fee = UpiHelper::getFee($student_id, $classperiod_id);
			
			$fee_current = json_decode($fee->fee_detail, true);
			if ( !$fee_current )  $fee_current = array();
			$fee_current[] = $feeValues;
			
			//join with json
			
			$fee_detail = json_encode($fee_current);
			$status = 0;
			if ( (int)$feeValues['fee_remaining'] === 0 ) $status = 1;
			
			
			$object = new stdClass();
			$object->id = $fee->id;
			$object->fee_detail = $fee_detail;
			$object->status = $status;
			
			$result = JFactory::getDbo()->updateObject('#__upi_student_classperiods', $object, 'id');
			if ($result) JFactory::getApplication()->enqueueMessage('Đóng Học Phí Thành Công');
			
		}else{
			JFactory::getApplication()->enqueueMessage('Điền Thông Tin Học Phí');
		}
		
		$this->applyRedirection($result, array(
			'stay',
			'com_upi.student.student'
		), array(
			'cid[]' => $student_id
		));
	}
	/**
	* Method to save an element.
	*
	* @access	public
	* @param	string	$key	The name of the primary key of the URL variable.
	* @param	string	$urlVar	The name of the URL variable if different from the primary key (sometimes required to avoid router collisions).
	*
	* @return	void
	*/
	
	public function save($key = null, $urlVar = null)
	{
		JSession::checkToken() or JSession::checkToken('get') or jexit(JText::_('JINVALID_TOKEN'));
		//Check the ACLs
		$model = $this->getModel();
		$item = $model->getItem();
		$result = false;
		
		/* $jinput = JFactory::getApplication()->input;
		$data = $jinput->post->getArray();
		var_dump($data);die; */
		
		if ($model->canEdit($item, true))
		{
			$result = parent::save();
			//Get the model through postSaveHook()
			if ($this->model)
			{
				$model = $this->model;
				$item = $model->getItem();


				//save upi_student_classperiods				
				
				//delete before save
				//1- check is exist in studen_classperiod
				$list_students = UpiHelper::getClassperiods($item->id);
				$classperiod_id = JRequest::getVar( 'classperiod_id', '', 'post', 'array' );
				$register_date = JRequest::getVar( 'register_date', '', 'post', 'array' );
				//insert second time
				if ( $list_students ){
					$arr_1 = array();
					foreach ($list_students as $s){
						$arr_1[] = $s->classperiod_id;
					}
					
					$arr_2 = $classperiod_id;
					//common
					$common_arr = array_intersect($arr_1, $arr_2);
					$diff_arr_1 = array_diff($arr_1, $arr_2);
					$diff_arr_2 = array_diff($arr_2, $arr_1);
					$join_arr = array_merge($common_arr,$diff_arr_2);
				
					
					if ( $diff_arr_1!=$diff_arr_2 ){
						//delete old
						if ( $diff_arr_1 ){
							foreach ( $diff_arr_1 as $t ){
								$db = JFactory::getDbo();
								$query = $db->getQuery(true);
								$conditions = array(
									$db->quoteName('student_id') . ' = '.$db->quote($item->id), 
									$db->quoteName('classperiod_id') . ' = ' . $db->quote($t)
								);
								$query->delete($db->quoteName('#__upi_student_classperiods'));
								$query->where($conditions);
								$db->setQuery($query);
								$result_delete = $db->execute();
							}
						}
						//insert new
						if ( $diff_arr_2 ){
							$obj = new stdClass();
							$obj->student_id = $item->id;
							$obj->created_by = $item->created_by;
							$obj->creation_date = $item->creation_date;
							$obj->published = 1;	
							//paid or not paid
							$obj->status = 0;
							foreach ( $diff_arr_2 as $t ){
								$obj->classperiod_id = $t;
								$obj->register_date	 = date("Y-m-d");
								$result_insert = JFactory::getDbo()->insertObject('#__upi_student_classperiods', $obj);
							}
						}
					}
					//update
					for ( $i=0;$i<count($join_arr);$i++ ){
						//if (!$register_date[$i] ) $register_date[$i] = date('d/m/Y');
						$date = DateTime::createFromFormat('d/m/Y', $register_date[$i]);
						
						$db = JFactory::getDbo();
						$query = $db->getQuery(true);
						// Fields to update.
						$fields = array(
							$db->qn('register_date') . ' = '.$db->quote( $date->format('Y-m-d')),
						);

						// Conditions for which records should be updated.
						$conditions = array(
							$db->quoteName('student_id') . ' = '.$db->quote($item->id), 
							$db->quoteName('classperiod_id') . ' = ' . $db->quote($join_arr[$i])
						);

						$query->update($db->quoteName('#__upi_student_classperiods'))->set($fields)->where($conditions);
						$db->setQuery($query);
						$result_update = $db->execute();
						
					}
				}
				//insert new
				else{
					
					$i=0;
					$obj = new stdClass();
					$obj->student_id = $item->id;
					$obj->created_by = $item->created_by;
					$obj->creation_date = $item->creation_date;
					$obj->published = 1;
					//paid or not paid
					$obj->status = 0;
					
					for ( $i=0;$i<count($classperiod_id);$i++ ){
						
						$obj->classperiod_id = $classperiod_id[$i];
						$date = DateTime::createFromFormat('d/m/Y', $register_date[$i]);
						$obj->register_date	 = $date->format('Y-m-d');
						
						$result_insert = JFactory::getDbo()->insertObject('#__upi_student_classperiods', $obj);
						
					}
				}
				
				
			}
		}
		else
			JError::raiseWarning( 403, JText::sprintf('ACL_UNAUTORIZED_TASK', JText::_('UPI_JTOOLBAR_SAVE')) );
		
		$this->_result = $result;

		//Define the redirections
		switch($this->getLayout() .'.'. $this->getTask())
		{
			case 'student.save':
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.students.default'
				), array(
					'cid[]' => null
				));
				break;

			case 'student.apply':
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.student.student'
				), array(
					'cid[]' => $model->getState('student.id')
				));
				break;

			default:
				$this->applyRedirection($result, array(
					'stay',
					'com_upi.students.default'
				));
				break;
		}
	}


}



