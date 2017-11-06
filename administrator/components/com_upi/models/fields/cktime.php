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

if (!class_exists('UpiHelper'))
	require_once(JPATH_ADMINISTRATOR . '/components/com_upi/helpers/loader.php');


/**
* Form field for Upi.
*
* @package	Upi
* @subpackage	Form
*/
class JFormFieldCktime extends UpiClassFormField
{
	/**
	* The form field type.
	*
	* @var string
	*/
	public $type = 'cktime';

	/**
	* Method to get the field input markup.
	*
	* @access	public
	*
	*
	* @since	11.1
	*
	* @return	string	The field input markup.
	*/
	public function getInput()
	{

		$this->input = JDom::_('html.form.input.clock', array_merge(array(
				'dataKey' => $this->getOption('name'),
				'domClass' => $this->getOption('class'),
				'domId' => $this->id,
				'domName' => $this->name,
				'dataValue' => $this->value,
				'filter' => $this->getOption('filter'),
				'prefix' => $this->getOption('prefix'),
				'responsive' => $this->getOption('responsive'),
				'size' => 6,
				'suffix' => $this->getOption('suffix'),
				'timeFormat' => $this->getOption('format'),
				'timezone' => $this->getOption('filter')
			), $this->jdomOptions));

		return parent::getInput();
	}


}



