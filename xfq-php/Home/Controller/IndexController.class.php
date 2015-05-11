<?php
namespace Home\Controller;

use Think\Controller;
use Think\Model;
/**
 * This is a simple control
 * Access link:  http://localhost/xfq/
 * 
 * @author fans
 *
 */
class IndexController extends Controller {
    public function index(){
    	$store = new Model("Store");
    	$data = $store->select();
		$this->ajaxReturn($data,'Json');
    }
}