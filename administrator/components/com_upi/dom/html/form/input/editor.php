<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <     JDom Class - Cook Self Service library    |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		2.5
* @package		Cook Self Service
* @subpackage	JDom
* @license		GNU General Public License
* @author		Jocelyn HUARD
*
*             .oooO  Oooo.
*             (   )  (   )
* -------------\ (----) /----------------------------------------------------------- +
*               \_)  (_/
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


class JDomHtmlFormInputEditor extends JDomHtmlFormInput
{

	var $cols;
	var $rows;
	var $width;
	var $height;
	var $editor;

	/*
	 * Constuctor
	 * 	@namespace 	: requested class
	 *  @options	: Configuration
	 * 	@dataKey	: database field name
	 * 	@dataObject	: complete object row (stdClass or Array)
	 * 	@dataValue	: value  default = dataObject->dataKey
	 * 	@domID		: HTML id (DOM)  default=dataKey
	 *
	 *
	 * 	@cols		: Textarea width (in caracters)
	 * 	@rows		: Textarea height (in caracters)
	 * 	@width		: Textarea width (in px)
	 * 	@height		: Textarea height (in px)
	 * 	@editor		: Editor name (for example, 'tinymce'). If null then the current editor will be returned
	 * 	@domClass	: CSS class
	 * 	@selectors	: raw selectors (Array) ie: javascript events
	 */
	function __construct($args)
	{

		parent::__construct($args);

		$this->arg('cols'		, null, $args, '32');
		$this->arg('rows'		, null, $args, '4');
		$this->arg('width'		, null, $args, '100%');
		$this->arg('height'		, null, $args, $this->rows * 20);
		$this->arg('editor'		, null, $args);
		$this->arg('domClass'	, null, $args);
		$this->arg('selectors'	, null, $args);

	}

	function build()
	{
		$html = '';

		$editor = JFactory::getEditor($this->editor);
		$editor->set( 'toolbar', 'Default' );


		$html .= '<%PREFIX%><div class="form-widget">';
		$html .= $editor->display($this->getInputName(), $this->dataValue, $this->width, $this->height, $this->cols, $this->rows, false);
		$html .= '</div><%SUFFIX%>';

		return $html;
	}


}
