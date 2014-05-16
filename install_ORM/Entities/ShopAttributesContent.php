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
class ShopAttributesContentEntity extends FpsEntity
{
	
	protected $id;
	protected $attribute_id;
	protected $product_id;
	protected $content;

	
	public function save()
	{
		$params = array(
			'attribute_id' => intval($this->attribute_id),
			'product_id' => intval($this->product_id),
			'content' => $this->content,
		);
		if ($this->id) $params['id'] = $this->id;
		$Register = Register::getInstance();
		return $Register['DB']->save('shop_attributes_content', $params);
	}
	
	
	
	public function delete()
	{ 
		$Register = Register::getInstance();
		$Register['DB']->delete('shop_attributes_content', array('id' => $this->id));
	}

}