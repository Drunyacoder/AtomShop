<?php
/*---------------------------------------------\
|											   |
| @Author:       Andrey Brykin (Drunya)        |
| @Version:      1.0                           |
| @Project:      CMS                           |
| @Package       AtomX CMS                     |
| @subpackege    ShopProducts Model            |
| @copyright     ©Andrey Brykin 2010-2014      |
| @last mod      2014/05/15                    |
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
class ShopProductsModel extends FpsModel
{
	public $Table = 'shop_products';

    protected $RelatedEntities = array(
        'attributes_group' => array(
            'model' => 'shopAttributesGroups',
            'type' => 'has_one',
            'internalKey' => 'attributes_group_id',
      	),
        'vendor' => array(
            'model' => 'shopVendors',
            'type' => 'has_one',
            'internalKey' => 'vendor_id',
        ),
        'author' => array(
            'model' => 'Users',
            'type' => 'has_one',
            'internalKey' => 'user_id',
        ),
        'category' => array(
            'model' => 'shopCategories',
            'type' => 'has_one',
            'internalKey' => 'category_id',
        ),
        'comments' => array(
            'model' => 'Comments',
            'type' => 'has_many',
            'foreignKey' => 'entity_id',
            'additionCond' => array("module = 'shop'"),
        ),
    );

}