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
class JFormFieldCkfile extends UpiClassFormField
{
	/**
	* The form field type.
	*
	* @var string
	*/
	public $type = 'ckfile';

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

		$this->input = JDom::_('html.form.input.file', array_merge(array(
				'dataKey' => $this->getOption('name'),
				'domClass' => $this->getOption('class'),
				'domId' => $this->id,
				'domName' => $this->name,
				'actions' => $this->getOption('actions'),
				'dataValue' => $this->value,
				'formControl' => $this->formControl,
				'height' => $this->getOption('height'),
				'indirect' => $this->getOption('indirect', null, 'bool'),
				'prefix' => $this->getOption('prefix'),
				'responsive' => $this->getOption('responsive'),
				'root' => $this->getOption('root'),
				'ruleInstance' => $this->getOption('ruleInstance'),
				'suffix' => $this->getOption('suffix'),
				'title' => $this->getOption('title'),
				'view' => $this->getOption('view'),
				'width' => $this->getOption('width')
			), $this->jdomOptions));

		return parent::getInput();
	}


}



