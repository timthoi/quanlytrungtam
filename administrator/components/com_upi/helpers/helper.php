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
* Upi Helper functions.
*
* @package	Upi
* @subpackage	Helper
*/
class UpiHelper
{
	/**
	* Cache for ACL actions
	*
	* @var object
	*/
	protected static $acl = null;

	/**
	* Directories aliases.
	*
	* @var array
	*/
	protected static $directories;

	/**
	* Determines when requirements have been loaded.
	*
	* @var boolean
	*/
	protected static $loaded = null;

	/**
	* Call a JS file. Manage fork files.
	*
	* @access	protected static
	* @param	string	$base	Component base from site root.
	* @param	string	$file	Script file.
	* @param	boolean	$replace	Replace the file or override. (Default : Replace)
	*
	*
	* @since	Cook 2.0
	*
	* @return	void
	*/
	protected static function addScript($base, $file, $replace = true)
	{
		$doc = JFactory::getDocument();

		$url = JURI::root(true) . '/' . $base . '/' . $file;
		$url = str_replace(DS, '/', $url);

		$urlFork = null;
		if (file_exists(JPATH_SITE .DS. $base .DS. 'fork' .DS. $file))
		{
			$urlFork = JURI::root(true) . '/' . $base . '/fork/' . $file;
			$urlFork = str_replace(DS, '/', $urlFork);
		}

		if ($replace && $urlFork)
			$url = $urlFork;

		$doc->addScript($url);

		if (!$replace && $urlFork)
			$doc->addScript($urlFork);
	}

	/**
	* Call a CSS file. Manage fork files.
	*
	* @access	protected static
	* @param	string	$base	Component base from site root.
	* @param	string	$file	Stylesheet file.
	* @param	boolean	$replace	Replace the file or override. (Default : Override)
	*
	*
	* @since	Cook 2.0
	*
	* @return	void
	*/
	protected static function addStyleSheet($base, $file, $replace = false)
	{
		$doc = JFactory::getDocument();

		$url = JURI::root(true) . '/' . $base . '/' . $file;
		$url = str_replace(DS, '/', $url);

		$urlFork = null;
		if (file_exists(JPATH_SITE .'/'. $base . '/fork/' . $file))
		{
			$urlFork = JURI::root(true) . '/' . $base . '/fork/' . $file;
			$urlFork = str_replace(DS, '/', $urlFork);
		}

		if ($replace && $urlFork)
			$url = $urlFork;

		$doc->addStyleSheet($url);

		if (!$replace && $urlFork)
			$doc->addStyleSheet($urlFork);
	}

	/**
	* Configure the Linkbar
	*
	* @access	public static
	* @param	varchar	$view	The name of the active view.
	* @param	varchar	$layout	The name of the active layout.
	* @param	varchar	$alias	The name of the menu. Default : 'menu'
	*
	*
	* @since	1.6
	*
	* @return	void
	*/
	public static function addSubmenu($view, $layout, $alias = 'menu')
	{
		$items = static::getMenuItems();

		// Will be handled in XML in future (or/and with the Joomla native menus)
		// -> give your opinion on j-cook.pro/forum


		$client = 'admin';
		if (JFactory::getApplication()->isSite())
			$client = 'site';

		$links = array();
		switch($client)
		{
			case 'admin':
				switch($alias)
				{
					case 'cpanel':
					case 'menu':
					default:
						$links = array(
							'admin.rooms.default',
							'admin.grades.default',
							'admin.periods.default',
							'admin.subjects.default',
							'admin.typetests.default',
							'admin.courses.default',
							'admin.courseperiods.default',
							'admin.stafftypes.default',
							'admin.staves.default',
							'admin.classes.default',
							'admin.students.default',
							'admin.tests.default',
							'admin.attendanceexcercies.default'
						);

						if ($alias != 'cpanel')
							array_unshift($links, 'admin.cpanel');

						break;
				}
				break;

			case 'site':
				switch($alias)
				{
					case 'cpanel':
					case 'menu':
					default:
						$links = array(				);

						if ($alias != 'cpanel')
							array_unshift($links, 'site.cpanel');

						break;
				}
				break;
		}


		//Compile with selected items in the right order
		$menu = array();
		foreach($links as $link)
		{
			if (!isset($items[$link]))
				continue;	// Not found

			$item = $items[$link];

			// Menu link
			$extension = 'com_upi';
			if (isset($item['extension']))
				$extension = $item['extension'];

			$url = 'index.php?option=' . $extension;
			if (isset($item['view']))
				$url .= '&view=' . $item['view'];
			if (isset($item['layout']))
				$url .= '&layout=' . $item['layout'];

			// Is active
			$active = ($item['view'] == $view);
			if (isset($item['layout']))
				$active = $active && ($item['layout'] == $layout);

			// Reconstruct it the Joomla format
			$menu[] = array(JText::_($item['label']), $url, $active, $item['icon']);

		}

		return $menu;
	}

	/**
	* Method to a model from a namespace.
	*
	* @access	public static
	* @param	string	$model	The namespaced model.
	* @param	boolean	$item	Sibling model. true: return ITEM model. false: return LIST model.
	*
	*
	* @since	Cook 3.0.10
	*
	* @return	JModel	The model.
	*/
	public static function componentModel($model, $item = null)
	{
		$extension = 'upi';

		$parts = explode('.', $model);
		if (count($parts) > 1)
		{
			if ($parts[0] != $extension)
			{
				$extension = $parts[0];
				self::loadComponentModels($extension);
			}
			$model = $parts[1];
		}

		$model = CkJModel::getInstance($model, ucfirst($extension) . 'Model');

		// Return a sibling model
		if ($item === true && method_exists($model, 'getNameItem'))
			$model = JModelLegacy::getInstance($model->getNameItem(), ucfirst($extension) . 'Model');
		else if ($item === false && method_exists($model, 'getNameList'))
			$model = JModelLegacy::getInstance($model->getNameList(), ucfirst($extension) . 'Model');

		return $model;
	}

	/**
	* Deprecated function. Prepare the enumeration static lists.
	* Use Instead : XxxxHelperEnum::_('my_list')
	*
	* @access	public static
	* @param	string	$ctrl	The model in wich to find the list.
	* @param	string	$fieldName	The field reference for this list.
	*
	* @return	array	Prepared arrays to fill lists.
	*/
	public static function enumList($ctrl, $fieldName)
	{
		// Proxy to the enumeration helper
		return UpiHelperEnum::_($ctrl . '_' . $fieldName);
	}

	/**
	* Gets a list of the actions that can be performed.
	*
	* @access	public static
	*
	*
	* @deprecated	Cook 2.0
	*
	* @return	JObject	An ACL object containing authorizations
	*/
	public static function getAcl()
	{
		return self::getActions();
	}

	/**
	* Gets a list of the actions that can be performed.
	*
	* @access	public static
	* @param	integer	$itemId	The item ID.
	*
	*
	* @since	1.6
	*
	* @return	JObject	An ACL object containing authorizations
	*/
	public static function getActions($itemId = 0)
	{
		if (isset(self::$acl))
			return self::$acl;

		$user	= JFactory::getUser();
		$result	= new JObject;

		$actions = array(
			'core.enter',
			'core.admin',
			'core.manage',
			'core.create',
			'core.edit',
			'core.edit.state',
			'core.edit.own',
			'core.delete',
			'core.delete.own',
			'core.view.own',
		);

		foreach ($actions as $action)
			$result->set($action, $user->authorise($action, COM_UPI));

		self::$acl = $result;

		return $result;
	}

	/**
	* Return the directories aliases full paths
	*
	* @access	public static
	*
	*
	* @since	Cook 2.6.4
	*
	* @return	array	Arrays of aliases relative path from site root.
	*/
	public static function getDirectories()
	{
		if (!empty(self::$directories))
			return self::$directories;

		$comAlias = "com_upi";
		$configMedias = JComponentHelper::getParams('com_media');
		$config = JComponentHelper::getParams($comAlias);

		$directories = array(
			'DIR_STAVES_PROFILE_PIC' => $config->get("upload_dir_staves_profile_pic", "[COM_SITE]" .DS. "files" .DS. "staves_profile_pic"),
			'DIR_TESTS_DOCUMENT' => $config->get("upload_dir_tests_document", "[COM_SITE]" .DS. "files" .DS. "tests_document"),
			'DIR_FILES' => "[COM_SITE]" .DS. "files",
			'DIR_TRASH' => $config->get("trash_dir", 'images' . DS . "trash"),
			'IMAGES' => '[IMAGES]',
		);

		$bases = array(
			'COM_ADMIN' => "administrator" .DS. 'components' .DS. $comAlias,
			'ADMIN' => "administrator",
			'COM_SITE' => 'components' .DS. $comAlias,
			'IMAGES' => $config->get('image_path', 'images'),
			'MEDIAS' => $configMedias->get('file_path', 'images'),
			'ROOT' => '',

		);



		// Parse the directory aliases
		foreach($directories as $alias => $directory)
		{
			// Parse the component base folders
			foreach($bases as $aliasBase => $directoryBase)
				$directories[$alias] = preg_replace("/\[" . $aliasBase . "\]/", $directoryBase, $directories[$alias]);

			// Clean tags if remains
			$directories[$alias] = preg_replace("/\[.+\]/", "", $directories[$alias]);
		}

		self::$directories = $directories;
		return self::$directories;

	}

	/**
	* JDom helper. Get a file path or url depending of the method
	*
	* @access	public static
	* @param	string	$path	File path. Can contain directories aliases.
	* @param	string	$method	Method to access the file : [direct,indirect,physical]
	* @param	array	$attribs	Image thumb attributes. Can handle legacy array options.
	*
	*
	* @since	Cook 2.9
	*
	* @return	string	File path or url
	*/
	public static function getFile($path, $method = 'physical', $attribs = null)
	{
		if (is_array($attribs))
			$attribs = UpiHelperFile::getAttributesFromLegacy($attribs);

		return UpiHelperFile::getFileUrl($path, $method, $attribs);
	}

	/**
	* Load all menu items.
	*
	* @access	public static
	*
	*
	* @since	Cook 2.0
	*
	* @return	void
	*/
	public static function getMenuItems()
	{
		// Will be handled in XML in future (or/and with the Joomla native menus)
		// -> give your opinion on j-cook.pro/forum

		$items = array();

		$items['admin.rooms.default'] = array(
			'label' => 'UPI_LAYOUT_ROOMS',
			'view' => 'rooms',
			'layout' => 'default',
			'icon' => 'upi_rooms'
		);

		$items['admin.grades.default'] = array(
			'label' => 'UPI_LAYOUT_GRADES',
			'view' => 'grades',
			'layout' => 'default',
			'icon' => 'upi_grades'
		);

		$items['admin.periods.default'] = array(
			'label' => 'UPI_LAYOUT_PERIODS',
			'view' => 'periods',
			'layout' => 'default',
			'icon' => 'upi_periods'
		);

		$items['admin.subjects.default'] = array(
			'label' => 'UPI_LAYOUT_SUBJECTS',
			'view' => 'subjects',
			'layout' => 'default',
			'icon' => 'upi_subjects'
		);

		$items['admin.typetests.default'] = array(
			'label' => 'UPI_LAYOUT_TYPETESTS',
			'view' => 'typetests',
			'layout' => 'default',
			'icon' => 'upi_typetests'
		);

		$items['admin.courses.default'] = array(
			'label' => 'UPI_LAYOUT_COURSES',
			'view' => 'courses',
			'layout' => 'default',
			'icon' => 'upi_courses'
		);

		$items['admin.courseperiods.default'] = array(
			'label' => 'UPI_LAYOUT_COURSEPERIODS',
			'view' => 'courseperiods',
			'layout' => 'default',
			'icon' => 'upi_courseperiods'
		);

		$items['admin.stafftypes.default'] = array(
			'label' => 'UPI_LAYOUT_STAFFTYPES',
			'view' => 'stafftypes',
			'layout' => 'default',
			'icon' => 'upi_stafftypes'
		);

		$items['admin.staves.default'] = array(
			'label' => 'UPI_LAYOUT_STAVES',
			'view' => 'staves',
			'layout' => 'default',
			'icon' => 'upi_staves'
		);

		$items['admin.classes.default'] = array(
			'label' => 'UPI_LAYOUT_CLASSES',
			'view' => 'classes',
			'layout' => 'default',
			'icon' => 'upi_classes'
		);

		$items['admin.students.default'] = array(
			'label' => 'UPI_LAYOUT_STUDENTS',
			'view' => 'students',
			'layout' => 'default',
			'icon' => 'upi_students'
		);

		$items['admin.tests.default'] = array(
			'label' => 'UPI_LAYOUT_TESTS',
			'view' => 'tests',
			'layout' => 'default',
			'icon' => 'upi_tests'
		);

		$items['admin.attendanceexcercies.default'] = array(
			'label' => 'UPI_LAYOUT_ATTENDANCEEXCERCIES',
			'view' => 'attendanceexcercies',
			'layout' => 'default',
			'icon' => 'upi_attendanceexcercies'
		);

		$items['admin.cpanel.default'] = array(
			'label' => 'UPI_LAYOUT_CONTROL_PANEL',
			'view' => 'cpanel',
			'layout' => 'default',
			'icon' => 'upi_cpanel'
		);

		$items['site.cpanel.default'] = array(
			'label' => 'UPI_LAYOUT_CONTROL_PANEL',
			'view' => 'cpanel',
			'layout' => 'default',
			'icon' => 'upi_cpanel'
		);

		return $items;
	}

	/**
	* Defines the headers of your template.
	*
	* @access	public static
	*
	* @return	void
	*/
	public static function headerDeclarations()
	{
		if (self::$loaded)
			return;

		$app = JFactory::getApplication();
		$doc = JFactory::getDocument();

		$siteUrl = JURI::root(true);

		$baseSite = 'components/' . COM_UPI;
		$baseAdmin = 'administrator/components/' . COM_UPI;

		$componentUrl = $siteUrl . '/' . $baseSite;
		$componentUrlAdmin = $siteUrl . '/' . $baseAdmin;

		JHtml::_('jquery.framework');
		JHtml::_('formbehavior.chosen', 'select');

		//JDom::_('framework.hook');
		JDom::_('html.icon.glyphicon');



		//Load the jQuery-Validation-Engine (MIT License, Copyright(c) 2011 Cedric Dugas http://www.position-absolute.com)
		self::addScript($baseAdmin, 'js/jquery.validationEngine.js');
		self::addStyleSheet($baseAdmin, 'css/validationEngine.jquery.css');
		UpiHelperHtmlValidator::loadLanguageScript();
		UpiHelperHtmlValidator::attachForm();


		//CSS
		if ($app->isAdmin())
		{


			self::addStyleSheet($baseAdmin, 'css/upi.css');
			self::addStyleSheet($baseAdmin, 'css/toolbar.css');

		}
		else if ($app->isSite())
		{
			self::addStyleSheet($baseSite, 'css/upi.css');
			self::addStyleSheet($baseSite, 'css/toolbar.css');

		}



		self::$loaded = true;
	}

	/**
	* Method to include the model paths in the loader.
	*
	* @access	public static
	* @param	string	$extension	The component alias.
	*
	*
	* @since	Cook 3.0.10
	*
	* @return	void
	*/
	public static function loadComponentModels($extension)
	{
		$basePath = (JFactory::getApplication()->isSite()?JPATH_SITE:JPATH_ADMINISTRATOR);
		CkJModel::addIncludePath($basePath .'/components/com_' . $extension . '/models');
	}

	/**
	* Load the fork file. (Cook Self Service concept)
	*
	* @access	public static
	* @param	string	$file	Current file to fork.
	*
	*
	* @since	Cook 2.6.3
	*
	* @return	void
	*/
	public static function loadFork($file)
	{
		//Transform the file path to reach the fork directory
		$file = preg_replace("#com_upi#", 'com_upi/fork', $file);

		// Load the fork file.
		if (!empty($file) && file_exists($file))
			include_once($file);
	}

	/**
	* Method to parse a field value.
	*
	* @access	public static
	* @param	Object	$item	The item data object.
	* @param	string	$labelKey	The field key. For concat : {field1} {field2}.
	*
	*
	* @since	Cook 3.0.10
	*
	* @return	mixed	Parsed value.
	*/
	public static function parseValue($item, $labelKey)
	{
		preg_match_all('/{([a-zA-Z0-9_]+)}/', $labelKey, $matches);

		if (!count($matches[0]))
			return $item->$labelKey;

		$replaceFrom = array();
		$replaceTo = array();

		foreach($matches[1] as $key)
		{
			$replaceFrom[] = '{' . $key . '}';
			$replaceTo[] = $item->$key;
		}

		$text = str_replace($replaceFrom, $replaceTo, $labelKey);

		return $text;
	}

	/**
	* Recreate the URL with a redirect in order to : -> keep an good SEF ->
	* always kill the post -> precisely control the request
	*
	* @access	public static
	* @param	array	$vars	The array to override the current request.
	*
	* @return	string	Routed URL.
	*/
	public static function urlRequest($vars = array())
	{
		$parts = array();

		// Authorisated followers
		$authorizedInUrl = array(
					'option' => null,
					'view' => null,
					'layout' => null,
					'format' => null,
					'Itemid' => null,
					'tmpl' => null,
					'object' => null,
					'lang' => null,
					'field' => null,
		);

		$jinput = JFactory::getApplication()->input;

		$request = $jinput->getArray($authorizedInUrl);

		foreach($request as $key => $value)
			if (!empty($value))
				$parts[] = $key . '=' . $value;

		$cid = $jinput->get('cid', array(), 'ARRAY');
		if (!empty($cid))
		{
			$cidVals = implode(",", $cid);
			if ($cidVals != '0')
				$parts[] = 'cid[]=' . $cidVals;
		}

		if (count($vars))
		foreach($vars as $key => $value)
			$parts[] = $key . '=' . $value;

		return JRoute::_("index.php?" . implode("&", $parts), false);
	}
	
	//get list Class in course by course_id
	public static function getListClass($course_id){
		//check job exist and published
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select($db->quoteName('a.class_id'))
	        ->select($db->quoteName('a.start_date'))			
			->select($db->quoteName('a.end_date'))
			->select($db->quoteName('a.period_id'))
			->select($db->quoteName('a.note','note'))
			->select($db->quoteName('b.note','class_note'))
			->select($db->quoteName('b.title'))
			->select($db->quoteName('b.alias'))
			->select($db->quoteName('c.title','subject_title'))
			->select($db->quoteName('d.title','grade_title'))
	        ->from($db->quoteName('#__upi_courseclasses', 'a'))
			->join('INNER', $db->quoteName('#__upi_classes', 'b') . ' ON (' . $db->quoteName('a.class_id') . ' = ' . $db->quoteName('b.id') . ')')
			->join('INNER', $db->quoteName('#__upi_subjects', 'c') . ' ON (' . $db->quoteName('b.subject_id') . ' = ' . $db->quoteName('c.id') . ')')
			->join('LEFT', $db->quoteName('#__upi_grades', 'd') . ' ON (' . $db->quoteName('b.grade_id') . ' = ' . $db->quoteName('d.id') . ')')
	        ->where($db->quoteName('a.course_id') . ' = '. (int)$course_id)
	        ->where($db->quoteName('a.published') . ' = 1')
			->where($db->quoteName('b.published') . ' = 1')
			->order($db->quoteName('b.ordering') . ' ASC');
			

        $db->setQuery($query);
        
		$results = $db->loadObjectList();
		return $results;
	}
	
	public static function getCurrentCourseTitle(){
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select($db->quoteName('a.title'))
	        ->from($db->quoteName('#__upi_courses', 'a'))
	        ->where($db->quoteName('a.active') . ' = 1')
			->where($db->quoteName('a.published') . ' = 1');
			

        $db->setQuery($query);
        
		$results = $db->loadResult();
		return $results;
	}
	
	public static function getActiveCourse(){
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select($db->quoteName('a.title'))
			->select($db->quoteName('a.id'))
			->select($db->quoteName('a.alias'))
	        ->from($db->quoteName('#__upi_courses', 'a'))
	        ->where($db->quoteName('a.active') . ' = 1')
			->where($db->quoteName('a.published') . ' = 1');
			

        $db->setQuery($query);
      
		$results = $db->loadObjectList();
		if ( $results ) $results = $results[0];
		return $results;
	}

	public static function getDropdownClassList($course_id){
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select($db->quoteName('a.id'))
			->select($db->quoteName('a.alias'))
	        ->from($db->quoteName('#__upi_classes', 'a'))
			->join('INNER', $db->quoteName('#__upi_classperiods', 'b') . ' ON (' . $db->quoteName('a.id') . ' = ' . $db->quoteName('b.class_id') . ')')
			
	        ->where($db->quoteName('b.course_id') ." = ".$db->quote($course_id))
			->where($db->quoteName('a.published') . ' = 1')
			->group($db->quoteName('b.class_id'));
			

        $db->setQuery($query);
        
		$results = $db->loadObjectList();
		$html = '';
		//generate select
		if ( !$results ){
			$query = $db->getQuery(true);
			$query
				->select($db->quoteName('a.id'))
				->select($db->quoteName('a.alias'))
				->from($db->quoteName('#__upi_classes', 'a'))
				
				->where($db->quoteName('a.published') . ' = 1');

			$db->setQuery($query);
			$results = $db->loadObjectList();
		}
		
		if ( $results ){
			$html = '<select id="jform_class_id" name="jform[class_id]">';
			$html.= '<option value="" selected="selected">'.JText::_('UPI_JSEARCH_SELECT_CLASS_ID_TITLE').'</option>';
			foreach ($results as $a):
				$html.= '<option value="'.$a->id.'">'.$a->alias.'</option>';
			endforeach; 
			$html.= '</select>';
		}
		
		return $html;
	}
	
	public static function renderJsonPeriod($period){
		$periods = json_decode($period);
		
		$str = '';
		foreach ( $periods as $p){
			$model_period_id = CkJModel::getInstance('period', 'UpiModel');
			$model_period_id->setState('period.id', $p->period_id);
			$period = $model_period_id->getItem();
			$str .= $period->alias.' - '.$period->title;
			
			$model_teacher_id = CkJModel::getInstance('staff', 'UpiModel');
			$model_teacher_id->setState('staff.id', $p->teacher_id);
			$teacher = $model_teacher_id->getItem();
			$str .= ' - GV: '.$teacher->first_name;
			
			$str .= ' - TG: ';
			foreach ( $p->tutor_id as $t){
				$model_tutor_id = CkJModel::getInstance('staff', 'UpiModel');
				$model_tutor_id->setState('staff.id', $t);
				$tutor = $model_tutor_id->getItem();
				$str .= $tutor->first_name.', ';
			}		
			$str = rtrim($str,", ");			
			$str .= '<Br>';
		}
		
		
		return $str;
	
	}

	public static function getCurrentClasses(){
		$course = self::getActiveCourse();

		if ( $course ):

			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query
				->select($db->quoteName('b.id'))
				->select($db->quoteName('b.alias'))
		        ->from($db->quoteName('#__upi_classperiods', 'a'))
				->join('INNER', $db->quoteName('#__upi_classes', 'b') . ' ON (' . $db->quoteName('a.class_id') . ' = ' . $db->quoteName('b.id') . ')')
				
		        ->where($db->quoteName('a.course_id') ." = ".$db->quote($course->id))
				->where($db->quoteName('a.published') . ' = 1')
				->where($db->quoteName('b.published') . ' = 1')
				->order($db->quoteName('b.ordering'));
				
			$db->setQuery($query);		
	        $results = $db->loadObjectList();
	    else:
	    	$application = JFactory::getApplication();
	    	$application->enqueueMessage(JText::_('ERROR_COURSE_ACTIVE'), 'error');
			$url_redirect = JURI::current().'index.php?option=com_upi&view=courses&layout=default';
			JFactory::getApplication()->redirect($url_redirect);
        endif;

		
		return $results;
	}
	
	public static function getClassperiods($student_id){
		$course = self::getActiveCourse();

		if ( $course ):

			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query
				->select($db->quoteName('a.id'))
				->select($db->quoteName('a.classperiod_id'))
				->select($db->quoteName('a.register_date'))
				->select($db->quoteName('a.note'))
				->select($db->quoteName('a.fee_detail'))
				->select($db->quoteName('a.creation_date'))
				->select($db->quoteName('a.created_by'))
		        ->from($db->quoteName('#__upi_student_classperiods', 'a'))
				->where($db->quoteName('a.student_id') . ' = '.$db->q($student_id));
				
			$db->setQuery($query);		
			
	        $results = $db->loadObjectList();
			
			$i=0;
			foreach ( $results as $r ){
			
				$results[$i]->register_date = date("d/m/Y", strtotime($results[$i]->register_date)); 
				$i++;
			}
	    else:
	    	$application = JFactory::getApplication();
	    	$application->enqueueMessage(JText::_('ERROR_COURSE_ACTIVE'), 'error');
			$url_redirect = JURI::current().'index.php?option=com_upi&view=courses&layout=default';
			JFactory::getApplication()->redirect($url_redirect);
        endif;

	
		return $results;
	}
}




