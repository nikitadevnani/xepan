<?php
namespace xShop;

class Model_Order_Draft extends Model_Order{
	public $actions=array(
			'can_view'=>array('caption'=>'Whose created Order you can see'),
			'allow_edit'=>array('caption'=>'Whose created Order you can edit'),
		);
	function init(){
		parent::init();

		$this->addCondition('status','draft');
	}
}