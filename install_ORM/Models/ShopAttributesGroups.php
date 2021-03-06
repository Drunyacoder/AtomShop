<?php
/*---------------------------------------------\
|											   |
| @Author:       Andrey Brykin (Drunya)        |
| @Version:      1.0                           |
| @Project:      CMS                           |
| @Package       AtomX CMS                     |
| @subpackege    Forum Model                   |
| @copyright     ©Andrey Brykin 2010-2012      |
| @last mod      2012/05/21                    |
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
class ShopAttributesGroupsModel extends FpsModel
{
	public $Table = 'shop_attributes_groups';

    protected $RelatedEntities = array(
        'attributes' => array(
            'model' => 'shopAttributes',
            'type' => 'has_many',
            'foreignKey' => 'group_id',
      	),
    );
	

}