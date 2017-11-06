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


// Some usefull constants
if(!defined('DS')) define('DS',DIRECTORY_SEPARATOR);
if(!defined('BR')) define("BR", "<br />");
if(!defined('LN')) define("LN", "\n");

// Main component aliases
if (!defined('COM_UPI')) define('COM_UPI', 'com_upi');
if (!defined('UPI_CLASS')) define('UPI_CLASS', 'Upi');

// Component paths constants
if (!defined('JPATH_ADMIN_UPI')) define('JPATH_ADMIN_UPI', JPATH_ADMINISTRATOR . '/components/' . COM_UPI);
if (!defined('JPATH_SITE_UPI')) define('JPATH_SITE_UPI', JPATH_SITE . '/components/' . COM_UPI);

$app = JFactory::getApplication();

// This constant is used for replacing JPATH_COMPONENT, in order to share code between components.
if (!defined('JPATH_UPI')) define('JPATH_UPI', ($app->isSite()?JPATH_SITE_UPI:JPATH_ADMIN_UPI));

// Load the component Dependencies
require_once(dirname(__FILE__) . '/helper.php');


jimport('joomla.version');
$version = new JVersion();

if (version_compare($version->RELEASE, '3.0', '<'))
	throw new JException('Joomla! 3.x is required.');

// Proxy alias class : CONTROLLER
if (!class_exists('CkJController')){ 	jimport('legacy.controller.legacy'); 	class CkJController extends JControllerLegacy{}}

// Proxy alias class : MODEL
if (!class_exists('CkJModel')){			jimport('legacy.model.legacy');			class CkJModel extends JModelLegacy{}}

// Proxy alias class : VIEW
if (!class_exists('CkJView')){	if (!class_exists('JViewLegacy', false))	jimport('legacy.view.legacy'); class CkJView extends JViewLegacy{}}

require_once(dirname(__FILE__) . '/../classes/loader.php');

UpiClassLoader::setup(false, false);
UpiClassLoader::discover('Upi', JPATH_ADMIN_UPI, false, true);

// Some helpers
UpiClassLoader::register('JToolBarHelper', JPATH_ADMINISTRATOR ."/includes/toolbar.php", true);

CkJController::addModelPath(JPATH_UPI . '/models', 'UpiModel');
// Register JDom
JLoader::register('JDom', JPATH_ADMIN_UPI . '/dom/dom.php', true);
//remove namespace of Carbon
JLoader::register('Carbon', JPATH_ADMIN_UPI . '/Carbon/Carbon.php', true);

jimport('fpdf.tcpdf');

jimport('fpdi.fpdi');

jimport('joomla.filesystem.file');

jimport('joomla.filesystem.folder');

//Instance JDom
if (!isset($app->dom))
{
	if (!class_exists('JDom'))
		jexit('JDom is required');

	JDom::getInstance();	
}

