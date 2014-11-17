<?php
/*---------------------------------------------\
|											   |
| @Author:       Andrey Brykin (Drunya)        |
| @Version:      1.2                           |
| @Project:      CMS                           |
| @Package       AtomX CMS                     |
| @subpackege    ShopAttaches Entity           |
| @copyright     ©Andrey Brykin 2010-2013      |
| @last mod      2014/08/25                    |
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
class ShopAttachesEntity extends FpsEntity
{
	
	protected $id;
	protected $entity_id;
	protected $user_id;
	protected $filename ;
	protected $size;
	protected $date;
	protected $is_main;

	
	public function save()
	{
		$params = array(
			'entity_id' => intval($this->entity_id),
			'user_id' => intval($this->user_id),
			'filename' => $this->filename,
			'size' => intval($this->size),
			'date' => $this->date,
			'is_main' => (!empty($this->is_main)) ? '1' : new Expr("'0'"),
		);
		if($this->id) $params['id'] = $this->id;
		$Register = Register::getInstance();
		return $Register['DB']->save('shop_attaches', $params);
	}
	
	
	
	public function delete()
	{
		$path = ROOT . '/sys/files/shop/' . $this->filename;
		if (file_exists($path)) unlink($path);
		$Register = Register::getInstance();
		$Register['DB']->delete('shop_attaches', array('id' => $this->id));
	}
}