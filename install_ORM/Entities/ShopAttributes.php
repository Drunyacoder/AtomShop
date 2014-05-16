<?php
/*---------------------------------------------\
|											   |
| @Author:       Andrey Brykin (Drunya)        |
| @Version:      1.1                           |
| @Project:      CMS                           |
| @Package       AtomX CMS                     |
| @subpackege    Forum Entity                  |
| @copyright     ©Andrey Brykin 2010-2013      |
| @last mod      2013/04/03                    |
|----------------------------------------------|
|											   |
| any partial or not partial extension         |
| CMS Fapos,without the consent of the         |
| author, is illegal                           |
|----------------------------------------------|
| Любое распространение                        |
| CMS Fapos или ее частей,                     |
| без согласия автора, является не законным    |
\---------------------------------------------*/



/**
 *
 */
class ShopAttributesEntity extends FpsEntity
{
	
	protected $id;
	protected $groups_id;
	protected $title;
	protected $label;
	protected $type;
	protected $is_filterable;

	
	public function save()
	{
		$params = array(
			'groups_id' => intval($this->groups_id),
			'title' => $this->title,
			'label' => $this->label,
			'type' => $this->type,
			'is_filterable' => intval($this->is_filterable),
		);
		if ($this->id) $params['id'] = $this->id;
		$Register = Register::getInstance();
		return $Register['DB']->save('shop_attributes', $params);
	}
	
	
	
	public function delete()
	{ 
		$Register = Register::getInstance();
		$Register['DB']->delete('shop_attributes', array('id' => $this->id));
	}

}