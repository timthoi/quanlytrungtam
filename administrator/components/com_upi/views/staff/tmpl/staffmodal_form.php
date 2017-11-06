<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <    Generated with Cook Self Service  V3.1     |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		
* @package		Managementcom
* @subpackage	Costs
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


if (!$this->form)
	return;

$fieldSets = $this->form->getFieldsets();

?>
<style>
.profile_pic img{
	width: 100px;
}
</style>
<h3><?php echo JText::_('UPI_LAYOUT_STAFF') ?></h3>
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#menu1">Thông Tin Chung</a></li>
	<li><a data-toggle="tab" href="#menu2">Địa Chỉ & Số Liên Lạc Khác</a></li>
	<li><a data-toggle="tab" href="#menu3">Thông Tin Trường</a></li>
</ul>

<div class="tab-content">
	<div id="menu1" class="tab-pane fade in active">
		<table class="table table-striped">
		<tbody>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_PROFILE_PIC') ?></th>
				<td style="text-align:center;" class="profile_pic">
					<?php echo JDom::_('html.fly.file', array(
						'attrs' => array('format:png'),
						'dataKey' => 'profile_pic',
						'dataObject' => $this->item,
						'height' => 'auto',
						'indirect' => false,
						'root' => '[DIR_STAVES_PROFILE_PIC]',
						'width' => 'auto'
					));?>
				</td>
			</tr>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_FULL_NAME') ?></th>
				<td><?php echo $this->item->last_name.' '.$this->item->first_name;?></td>
			</tr>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_MOBILE_PHONE') ?></th>
				<td><?php echo ($this->item->mobile_phone)?$this->item->mobile_phone:'-'; ?></td>
			</tr>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_HOME_PHONE') ?></th>
				<td><?php echo ($this->item->home_phone)?$this->item->home_phone:'-'; ?></td>
			</tr>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_BIRTHDAY') ?></th>
				<td style="text-align:center">
					<?php echo JDom::_('html.fly.datetime', array(
						'dataKey' => 'birthday',
						'dataObject' =>  $this->item,
						'dateFormat' => 'd.m.Y'
					));?>
				</td>
			</tr>
			
			<tr>
				<th><?php echo JText::_('UPI_FIELD_EMAIL') ?></th>
				<td><?php echo ($this->item->email)?$this->item->email:'-'; ?></td>
			</tr>
			
			<tr>
				<th><?php echo JText::_('UPI_FIELD_ETHNICITY') ?></th>
				<td><?php echo ($this->item->ethnicity)?$this->item->ethnicity:'-'; ?></td>
			</tr>
			
			
			<tr>
				<th><?php echo JText::_('UPI_FIELD_NOTE') ?></th>
				<td><?php echo ($this->item->note)?$this->item->note:'-'; ?></td>
			</tr>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_CREATED_BY_NAME') ?></th>
				<td><?php echo $this->item->_created_by_name;?></td>
			</tr>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_CREATION_DATE') ?></th>
				<td><?php echo JDom::_('html.fly.datetime', array(
						'dataKey' => 'creation_date',
						'dataObject' => $this->item,
						'dateFormat' => 'd.m.Y H:i'
					));?>
				</td>
			</tr>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_PUBLISHED') ?></th>
				<td><?php echo ($this->item->published)?"Active":"Inactive";?></td>
			</tr>
			
		</tbody>
		</table>	
	</div>
	<div id="menu2" class="tab-pane fade">
		<table class="table table-striped">
		<tbody>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_EMERGENCY_NAME') ?></th>
				<td><?php echo ($this->item->emergency_name)?$this->item->emergency_name:'-'; ?></td>
			</tr>
			
			<tr>
				<th><?php echo JText::_('UPI_FIELD_RELATION') ?></th>
				<td><?php echo ($this->item->relation)?$this->item->relation:'-'; ?></td>
			</tr>
			
			<tr>
				<th><?php echo JText::_('UPI_FIELD_EMERGENCY_HOME_PHONE') ?></th>
				<td><?php echo ($this->item->emergency_home_phone)?$this->item->emergency_home_phone:'-'; ?></td>
			</tr>
			
			<tr>
				<th><?php echo JText::_('UPI_FIELD_EMERGENCY_MOBLE_PHONE') ?></th>
				<td><?php echo ($this->item->my_string)?$this->item->my_string:'-'; ?></td>
			</tr>
			
			<tr>
				<th><?php echo JText::_('UPI_FIELD_ADDRESS_2') ?></th>
				<td><?php echo ($this->item->my_text)?$this->item->my_text:'-'; ?></td>
			</tr>
				
			
			
			
		</tbody>
		</table>
	</div>
	<div id="menu3" class="tab-pane fade">
		<table class="table table-striped">
		<tbody>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_JOINING_DATE') ?></th>
				<td><?php echo JDom::_('html.fly.datetime', array(
						'dataKey' => 'joining_date',
						'dataObject' => $this->item,
						'dateFormat' => 'd.m.Y'
					));?>
				</td>
			</tr>
			
			<tr>
				<th><?php echo JText::_('UPI_FIELD_LEAVING_DATE') ?></th>
				<td><?php echo JDom::_('html.fly.datetime', array(
						'dataKey' => 'leaving_date',
						'dataObject' => $this->item,
						'dateFormat' => 'd.m.Y'
					));?>
				</td>
			</tr>
			
			<tr>
				<th><?php echo JText::_('UPI_FIELD_NOTE') ?></th>
				<td><?php echo ($this->item->note)?$this->item->note:'-'; ?></td>
			</tr>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_CREATED_BY_NAME') ?></th>
				<td><?php echo $this->item->_created_by_name;?></td>
			</tr>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_CREATION_DATE') ?></th>
				<td><?php echo JDom::_('html.fly.datetime', array(
						'dataKey' => 'creation_date',
						'dataObject' => $this->item,
						'dateFormat' => 'd.m.Y H:i'
					));?>
				</td>
			</tr>
			<tr>
				<th><?php echo JText::_('UPI_FIELD_PUBLISHED') ?></th>
				<td><?php echo ($this->item->published)?"Active":"Inactive";?></td>
			</tr>
			
		</tbody>
		</table>
	</div>
</div>	

