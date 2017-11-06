<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.0.10  |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		UPI
* @subpackage	UPI
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
* Enumerations Helper. Create the static lists.
*
* @package	Upi
*/
class UpiHelperEnum
{
	/**
	* Stores the lists in cache for optimization.
	*
	* @var array
	*/
	protected static $_cache = array();

	/**
	* Instanced name.
	*
	* @var string
	*/
	protected $enumName;

	/**
	* Instanced list.
	*
	* @var array
	*/
	public $list = array();

	/**
	* Instanced optional options.
	*
	* @var array
	*/
	protected $options = array();

	/**
	* Entry function to load a list.
	*
	* @access	public static
	* @param	string	$enumName	Name of the enumeration : [triad]_[field]
	* @param	array	$options	Optional config array for developer custom.
	*
	* @return	array	Associative array containing the list. Indexes are doubled (array index + value field).
	*/
	public static function _($enumName, $options = array())
	{
		$enumeration = self::getInstance($enumName);

		// Enumeration not found
		if (!$enumeration)
			return array();

		return $enumeration->getList($options);
	}

	/**
	* Construct the list : attendanceexcercies_present
	*
	* @access	protected
	* @param	array	$options	Optional config array for developer custom.
	*
	* @return	array	Associative array containing the list. Indexes are doubled (array index + value field).
	*/
	protected function ___attendanceexcercies_present($options = array())
	{
		return array(
			'A' => array(
				'value' => 'A',
				'text' => 'UPI_ENUM_ATTENDANCEEXCERCIES_PRESENT_1'
			),
			'B' => array(
				'value' => 'B',
				'text' => 'UPI_ENUM_ATTENDANCEEXCERCIES_PRESENT_2'
			),
			'C' => array(
				'value' => 'C',
				'text' => 'UPI_ENUM_ATTENDANCEEXCERCIES_PRESENT_3'
			),
			'D' => array(
				'value' => 'D',
				'text' => 'UPI_ENUM_ATTENDANCEEXCERCIES_PRESENT_4'
			),
			'E' => array(
				'value' => 'E',
				'text' => 'UPI_ENUM_ATTENDANCEEXCERCIES_PRESENT_5'
			),
			'F' => array(
				'value' => 'F',
				'text' => 'UPI_ENUM_ATTENDANCEEXCERCIES_PRESENT_6'
			)
		);
	}

	/**
	* Construct the list : periods_weekday
	*
	* @access	protected
	* @param	array	$options	Optional config array for developer custom.
	*
	* @return	array	Associative array containing the list. Indexes are doubled (array index + value field).
	*/
	protected function ___periods_weekday($options = array())
	{
		return array(
			'Chú nhật' => array(
				'value' => 'Chú nhật',
				'text' => 'UPI_ENUM_PERIODS_WEEKDAY_1'
			),
			'Thứ 2' => array(
				'value' => 'Thứ 2',
				'text' => 'UPI_ENUM_PERIODS_WEEKDAY_2'
			),
			'Thứ 3' => array(
				'value' => 'Thứ 3',
				'text' => 'UPI_ENUM_PERIODS_WEEKDAY_3'
			),
			'Thứ 4' => array(
				'value' => 'Thứ 4',
				'text' => 'UPI_ENUM_PERIODS_WEEKDAY_4'
			),
			'Thứ 5' => array(
				'value' => 'Thứ 5',
				'text' => 'UPI_ENUM_PERIODS_WEEKDAY_5'
			),
			'Thứ 6' => array(
				'value' => 'Thứ 6',
				'text' => 'UPI_ENUM_PERIODS_WEEKDAY_6'
			),
			'Thứ 7' => array(
				'value' => 'Thứ 7',
				'text' => 'UPI_ENUM_PERIODS_WEEKDAY_7'
			)
		);
	}

	/**
	* Construct the list : staves_gender_id
	*
	* @access	protected
	* @param	array	$options	Optional config array for developer custom.
	*
	* @return	array	Associative array containing the list. Indexes are doubled (array index + value field).
	*/
	protected function ___staves_gender_id($options = array())
	{
		return array(
			'Nam' => array(
				'value' => 'Nam',
				'text' => 'UPI_ENUM_STAVES_GENDER_ID_1'
			),
			'Nữ' => array(
				'value' => 'Nữ',
				'text' => 'UPI_ENUM_STAVES_GENDER_ID_2'
			)
		);
	}
	
	protected function ___factor_test($options = array())
	{
		return array(
			'1' => array(
				'value' => '1',
				'text' => 'UPI_ENUM_FACTOR_TEST_ID_1'
			),
			'2' => array(
				'value' => '2',
				'text' => 'UPI_ENUM_FACTOR_TEST_ID_2'
			)
		);
	}
	
	protected function ___student_fee_status($options = array())
	{
		return array(
			'1' => array(
				'value' => '1',
				'text' => 'UPI_ENUM_STUDENT_FEE_STATUS_ID_1'
			),
			'2' => array(
				'value' => '2',
				'text' => 'UPI_ENUM_STUDENT_FEE_STATUS_ID_2'
			)
		);
	}

	/**
	* Construct the list : students_gender_id
	*
	* @access	protected
	* @param	array	$options	Optional config array for developer custom.
	*
	* @return	array	Associative array containing the list. Indexes are doubled (array index + value field).
	*/
	protected function ___students_gender_id($options = array())
	{
		return array(
			'Nam' => array(
				'value' => 'Nam',
				'text' => 'UPI_ENUM_STUDENTS_GENDER_ID_1'
			),
			'Nữ' => array(
				'value' => 'Nữ',
				'text' => 'UPI_ENUM_STUDENTS_GENDER_ID_2'
			)
		);
	}

	/**
	* Enumeration constructor.
	*
	* @access	public
	* @param	string	$enumName	Name of the enumeration
	*
	* @return	void
	*/
	public function __construct($enumName)
	{
		$this->enumName = $enumName;
	}

	/**
	* Get an enumeration instance.
	*
	* @access	public static
	* @param	string	$enumName	Name of the enumeration
	*
	* @return	object	Enumeration instance (UpiHelperEnum)
	*/
	public static function getInstance($enumName)
	{
		if (empty($enumName))
			return null;

		if (isset(static::$_cache[$enumName]))
			return static::$_cache[$enumName];

		$enumeration = new UpiHelperEnum($enumName);

		static::$_cache[$enumName] = $enumeration;

		return $enumeration;
	}

	/**
	* Get an enumeration item (from enumeration instance).
	*
	* @access	public
	* @param	string	$value	Index value
	*
	* @return	array	Enumeration item
	*/
	public function getItem($value)
	{
		if (!isset($this->list[$value]))
			return null;

		return $this->list[$value];
	}

	/**
	* Load the list and return it.
	*
	* @access	protected
	* @param	array	$options	Optional configuration. (Advanced custom, not used in native)
	*
	* @return	array	Associative enumeration list.
	*/
	protected function getList($options = array())
	{
		$enumName = '___' . $this->enumName;

		if (!method_exists($this, $enumName))
			return null;

		$this->list = $this->$enumName($options);

		$this->translate();

		return $this->list;
	}

	/**
	* Get an item text (from enumeration instance).
	*
	* @access	public
	* @param	string	$value	Index value
	*
	* @return	string	Item text
	*/
	public function getText($value)
	{
		if (!$item = $this->getItem($value))
			return '';

		return $item['text'];
	}

	/**
	* Get the item of an enumeration.
	*
	* @access	public static
	* @param	string	$enumName	Name of the enumeration
	* @param	string	$value	Value index of the list.
	*
	* @return	array	Found item.
	*/
	public static function item($enumName, $value)
	{
		$enumeration = self::getInstance($enumName);

		// Enumeration not found
		if (!$enumeration)
			return null;

		// Load the enumeration
		$enumeration->getList();

		return $enumeration->getItem($value);
	}

	/**
	* Get the text value of an enumeration.
	*
	* @access	public static
	* @param	string	$enumName	Name of the enumeration
	* @param	string	$value	Value index of the list.
	*
	* @return	string	Translated text value of the found item.
	*/
	public static function text($enumName, $value)
	{
		$enumeration = self::getInstance($enumName);

		// Enumeration not found
		if (!$enumeration)
			return '';

		// Load the enumeration
		$enumeration->getList();

		return $enumeration->getText($value);
	}

	/**
	* Translate the list.
	*
	* @access	protected
	* @param	string	$source	Text field.
	* @param	string	$target	Translated Text field.
	*
	* @return	void
	*/
	protected function translate($source = 'text', $target = 'text')
	{
		if (empty($this->list))
			return;

		// Translate the texts
		foreach ($this->list as $value => $item)
			$this->list[$value][$target] = JText::_($item[$source]);
	}


}



